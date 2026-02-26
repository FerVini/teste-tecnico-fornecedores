document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#register-form');

    if (!form) return;

    form.addEventListener('submit', (event) => {
        let hasError = false;

        // limpa erros anteriores
        clearErrors();

        // campos obrigatórios
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

        // validação de senha
        const password = document.getElementById('register_password');
        const passwordVerify = document.getElementById('register_password_verify');

        if (
            password &&
            passwordVerify &&
            password.value &&
            passwordVerify.value &&
            password.value !== passwordVerify.value
        ) {
            showError(passwordVerify, 'As senhas não conferem');
            hasError = true;
        }

        // se houver erro, bloqueia o submit
        if (hasError) {
            event.preventDefault();
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