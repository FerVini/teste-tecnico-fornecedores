document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#register-form');

    if (!form) return;

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

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        clearErrors();
        let hasError = false;

       
        const requiredFields = [
            { id: 'cnpj', message: 'CNPJ é obrigatório' },
            { id: 'razao_social', message: 'Razão Social é obrigatória' },
            { id: 'nome_fantasia', message: 'Nome Fantasia é obrigatório' },
            { id: 'email', message: 'E-mail é obrigatório' },
            { id: 'register_password', message: 'Senha é obrigatória' },
            { id: 'register_password_verify', message: 'Confirme a senha' }
        ];

        requiredFields.forEach(field => {
            const input = document.getElementById(field.id);
            if (!input || input.value.trim() === '') {
                showError(input, field.message);
                hasError = true;
            }
        });

        const cnpjInput = document.getElementById('cnpj');
        if (!validarCNPJForm(cnpjInput)) {
            hasError = true;
        }

        const password = document.getElementById('register_password');
        const passwordVerify = document.getElementById('register_password_verify');

        if (password && passwordVerify && password.value !== passwordVerify.value) {
            showError(passwordVerify, 'As senhas não conferem');
            hasError = true;
        }

        if (hasError) return;

       
        const formData = new FormData(form);

        try {
            const response = await fetch('../backend/cadastrar_fornecedor.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (data.error) {
                alert(`Erro: ${data.error}`);
            } else if (data.success) {
                alert(data.success);
                form.reset();
            }
        } catch (err) {
            console.error('Erro ao enviar formulário', err);
            alert('Erro ao enviar formulário. Tente novamente.');
        }
    });

    function showError(input, message) {
        if (!input) return;
        input.classList.add('is-invalid');
        const feedback = input.nextElementSibling;
        if (feedback && feedback.classList.contains('invalid-feedback')) {
            feedback.textContent = message;
        }
    }

    function clearErrors() {
        const inputs = form.querySelectorAll('.is-invalid');
        inputs.forEach(input => {
            input.classList.remove('is-invalid');
            const feedback = input.nextElementSibling;
            if (feedback && feedback.classList.contains('invalid-feedback')) {
                feedback.textContent = '';
            }
        });
    }
});


const updateForm = document.querySelector('#update-form'); 

if (updateForm) {
    updateForm.addEventListener('submit', (event) => {
        event.preventDefault();
        clearErrors(); 

        const formData = new FormData(updateForm);

        fetch('../backend/atualizar_fornecedor.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);
                    
                    window.location.href = '../public/fornecedores.php';
                } else if (data.error) {
                    alert(data.error);
                }
            })
            .catch(err => {
                console.error('Erro na requisição:', err);
                alert('Erro ao atualizar fornecedor');
            });
    });
}