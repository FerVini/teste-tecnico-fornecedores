document.addEventListener('DOMContentLoaded', () => {
    // ✅ Mostrar erro
    function showError(input, message) {
        if (!input) return;
        input.classList.add('is-invalid');
        const feedback = input.nextElementSibling;
        if (feedback && feedback.classList.contains('invalid-feedback')) {
            feedback.textContent = message;
        }
    }

    // ✅ Limpar erros
    function clearErrors(form) {
        const inputs = form.querySelectorAll('.is-invalid');
        inputs.forEach(input => {
            input.classList.remove('is-invalid');
            const feedback = input.nextElementSibling;
            if (feedback && feedback.classList.contains('invalid-feedback')) {
                feedback.textContent = '';
            }
        });
    }

    // ✅ Função de validação de CNPJ
    function validarCNPJ(cnpj) {
        const numeros = cnpj.replace(/\D/g, '');
        return /^\d{14}$/.test(numeros); // 14 dígitos
    }

    function validarCNPJForm(cnpjInput) {
        if (!cnpjInput) return false;
        const cnpj = cnpjInput.value.trim().replace(/\D/g, '');
        if (cnpj === '') return false;
        if (!validarCNPJ(cnpj)) {
            showError(cnpjInput, 'CNPJ inválido');
            return false;
        }
        return true;
    }

    // ✅ Validação de campos obrigatórios
    function validateRequiredFields(form, fields) {
        let hasError = false;
        fields.forEach(f => {
            const input = form.querySelector(`#${f.id}`);
            if (!input || input.value.trim() === '') {
                showError(input, f.message);
                hasError = true;
            }
        });
        return hasError;
    }

    // ✅ Envio via fetch
    function handleFormSubmit(form, redirectUrl) {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            clearErrors(form);
            let hasError = false;

            const requiredFields = [
                { id: 'cnpj', message: 'CNPJ é obrigatório' },
                { id: 'razao_social', message: 'Razão Social é obrigatória' },
                { id: 'nome_fantasia', message: 'Nome Fantasia é obrigatório' },
                { id: 'email', message: 'E-mail é obrigatório' },
            ];

            if (form.id === 'register-form') {
                requiredFields.push(
                    { id: 'register_password', message: 'Senha é obrigatória' },
                    { id: 'register_password_verify', message: 'Confirme a senha' }
                );
            }

            if (validateRequiredFields(form, requiredFields)) hasError = true;

            const cnpjInput = form.querySelector('#cnpj');
            if (!validarCNPJForm(cnpjInput)) hasError = true;

            if (form.id === 'register-form') {
                const password = form.querySelector('#register_password');
                const passwordVerify = form.querySelector('#register_password_verify');
                if (password && passwordVerify && password.value !== passwordVerify.value) {
                    showError(passwordVerify, 'As senhas não conferem');
                    hasError = true;
                }
            }

            if (hasError) return;

            const formData = new FormData(form);
            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.error) {
                    alert(`Erro: ${data.error}`);
                } else if (data.success) {
                    alert(data.success);

                    if (form.id === 'register-form') {
                        form.reset();
                    } else if (form.id === 'update-form') {
                        // ✅ Redireciona corretamente após atualização
                        window.location.href = redirectUrl;
                    }
                }
            } catch (err) {
                console.error('Erro na requisição:', err);
                alert('Erro ao enviar formulário. Tente novamente.');
            }
        });
    }

    // ✅ Aplicar aos formulários
    const registerForm = document.querySelector('#register-form');
    if (registerForm) handleFormSubmit(registerForm, null);

    const updateForm = document.querySelector('#update-form');
    if (updateForm) handleFormSubmit(updateForm, 'fornecedores.php'); // caminho relativo correto
});