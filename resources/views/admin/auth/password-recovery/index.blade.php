<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação da Palavra-passe - sgSchool</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif;
            display: flex
        }

        .auth-container {
            width: 100%;
            max-width: 420px;
            padding: 20px
        }

        .auth-card {
            background: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 40px #0000001a
        }

        .auth-header {
            text-align: center;
            margin-bottom: 30px
        }

        .brand-logo {
            background: #6366f1;
            border-radius: 12px;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            margin-bottom: 20px;
            display: inline-flex
        }

        .brand-logo i {
            color: #fff;
            font-size: 30px
        }

        .success-icon {
            background: #10b981;
            border-radius: 12px;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            margin-bottom: 20px;
            display: inline-flex
        }

        .success-icon i {
            color: #fff;
            font-size: 30px
        }
    </style>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
</head>

<body>
    <div class="auth-container">
        <!-- Initial Password Recovery Form -->
        <div class="auth-card" id="recoveryForm">
            <div class="auth-header">
                <div class="brand-logo">
                    <i class="bi bi-key"></i>
                </div>
                <h1 class="h3 mb-2 fw-bold">Esqueceu-se da palavra-passe?</h1>
                <p class="text-muted">Não se preocupe! Introduza o seu endereço de email e enviar-lhe-emos instruções para a reposição.</p>
            </div>

            <form id="passwordRecoveryForm" novalidate>
                <div class="mb-4">
                    <label for="email" class="form-label">Endereço de Email</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="exemplo@sgschool.edu" required autofocus aria-describedby="emailHelp">
                    </div>
                    <div class="invalid-feedback">
                        Introduza um endereço de email válido.
                    </div>
                    <small id="emailHelp" class="form-text text-muted">
                        Introduza o endereço de email associado à sua conta.
                    </small>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="bi bi-send me-2"></i>
                        Enviar Instruções de Reposição
                    </button>
                </div>

                <hr class="my-4">

                <div class="text-center">
                    <p class="mb-2">
                        <a href="login.html" class="text-decoration-none">
                            <i class="bi bi-arrow-left me-1"></i>
                            Voltar ao Início de Sessão
                        </a>
                    </p>
                    <p>
                        Ainda não tem uma conta?
                        <a href="register.html" class="text-decoration-none fw-bold">
                            Registar-se
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Success Message (Initially Hidden) -->
        <div class="auth-card d-none" id="successMessage">
            <div class="auth-header">
                <div class="success-icon">
                    <i class="bi bi-check-lg"></i>
                </div>
                <h1 class="h3 mb-2 fw-bold">Verifique o Seu Email</h1>
                <p class="text-muted">
                    Enviámos as instruções de reposição da palavra-passe para
                    <strong id="emailDisplay"></strong>
                </p>
            </div>

            <div class="alert alert-info" role="alert">
                <i class="bi bi-info-circle me-2"></i>
                Se não receber um email nos próximos 5 minutos, verifique a pasta de spam.
            </div>

            <div class="d-grid gap-2">
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='login.html'">
                    <i class="bi bi-arrow-left me-2"></i>
                    Voltar ao Início de Sessão
                </button>

                <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">
                    Não recebeu o email? Tente novamente
                </button>
            </div>
        </div>

        <!-- Reset Password Form (For use when user clicks link from email) -->
        <div class="auth-card d-none" id="resetPasswordForm">
            <div class="auth-header">
                <div class="brand-logo">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <h1 class="h3 mb-2 fw-bold">Repor Palavra-passe</h1>
                <p class="text-muted">Introduza abaixo a sua nova palavra-passe</p>
            </div>

            <form id="newPasswordForm" novalidate>
                <div class="mb-3">
                    <label for="newPassword" class="form-label">Nova Palavra-passe</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input type="password" autocomplete="new-password" class="form-control" id="newPassword"
                            name="newPassword" placeholder="Mínimo de 8 caracteres" required minlength="8"
                            aria-describedby="newPasswordHelp">
                        <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword"
                            aria-label="Alternar a visibilidade da palavra-passe">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                    <div class="invalid-feedback">
                        A palavra-passe deve ter pelo menos 8 caracteres.
                    </div>
                    <small id="newPasswordHelp" class="form-text text-muted">
                        Utilize uma palavra-passe forte, com letras, números e símbolos.
                    </small>
                </div>

                <div class="mb-4">
                    <label for="confirmNewPassword" class="form-label">Confirmar Nova Palavra-passe</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <input type="password" autocomplete="new-password" class="form-control" id="confirmNewPassword"
                            name="confirmNewPassword" placeholder="Repetir palavra-passe" required
                            aria-label="Confirmar Palavra-passe">
                        <button class="btn btn-outline-secondary" type="button" id="toggleConfirmNewPassword"
                            aria-label="Mostrar ou ocultar confirmação da palavra-passe">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                    <div class="invalid-feedback">
                        As palavras-passe não coincidem.
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="bi bi-check-lg me-2"></i>
                        Repor Palavra-passe
                    </button>
                </div>

                <hr class="my-4">

                <div class="text-center">
                    <p>
                        <a href="login.html" class="text-decoration-none">
                            <i class="bi bi-arrow-left me-1"></i>
                            Voltar ao Início de Sessão
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <div class="text-center mt-4">
            <p class="text-white-50 small">
                &copy; 2025 sgSchool. Todos os direitos reservados.
                <a href="#" class="text-white-50">Privacidade</a> ·
                <a href="#" class="text-white-50">Termos</a>
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Check if there's a reset token in the URL (would come from email link)
        const urlParams = new URLSearchParams(window.location.search);
        const resetToken = urlParams.get('token');

        if (resetToken) {
            // Show reset password form if token is present
            document.getElementById('recoveryForm').classList.add('d-none');
            document.getElementById('resetPasswordForm').classList.remove('d-none');
        }

        // Handle password recovery form submission
        const recoveryForm = document.getElementById('passwordRecoveryForm');
        if (recoveryForm) {
            recoveryForm.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                if (recoveryForm.checkValidity()) {
                    // Get email value
                    const email = document.getElementById('email').value;

                    // Show success message
                    document.getElementById('recoveryForm').classList.add('d-none');
                    document.getElementById('successMessage').classList.remove('d-none');
                    document.getElementById('emailDisplay').textContent = email;

                    // In a real app, would send API request here
                    console.log('Password recovery email sent to:', email);
                }

                recoveryForm.classList.add('was-validated');
            });
        }

        // Handle new password form submission
        const newPasswordForm = document.getElementById('newPasswordForm');
        if (newPasswordForm) {
            newPasswordForm.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                const newPassword = document.getElementById('newPassword');
                const confirmNewPassword = document.getElementById('confirmNewPassword');

                // Check password match
                if (newPassword.value !== confirmNewPassword.value) {
                    confirmNewPassword.setCustomValidity('Passwords do not match');
                } else {
                    confirmNewPassword.setCustomValidity('');
                }

                if (newPasswordForm.checkValidity()) {
                    // Password reset successful
                    console.log('Password reset successful');
                    // window.location.href = 'login.html';
                }

                newPasswordForm.classList.add('was-validated');
            });
        }

        // Toggle password visibility functions
        const toggleNewPassword = document.getElementById('toggleNewPassword');
        const newPassword = document.getElementById('newPassword');

        if (toggleNewPassword) {
            toggleNewPassword.addEventListener('click', function() {
                const type = newPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                newPassword.setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        }

        const toggleConfirmNewPassword = document.getElementById('toggleConfirmNewPassword');
        const confirmNewPassword = document.getElementById('confirmNewPassword');

        if (toggleConfirmNewPassword) {
            toggleConfirmNewPassword.addEventListener('click', function() {
                const type = confirmNewPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmNewPassword.setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        }

        // Password match validation
        if (confirmNewPassword && newPassword) {
            confirmNewPassword.addEventListener('input', function() {
                if (newPassword.value !== confirmNewPassword.value) {
                    confirmNewPassword.setCustomValidity('Passwords do not match');
                } else {
                    confirmNewPassword.setCustomValidity('');
                }
            });

            newPassword.addEventListener('input', function() {
                if (confirmNewPassword.value && newPassword.value !== confirmNewPassword.value) {
                    confirmNewPassword.setCustomValidity('Passwords do not match');
                } else {
                    confirmNewPassword.setCustomValidity('');
                }
            });
        }
    });

    // Reset form function
    function resetForm() {
        document.getElementById('successMessage').classList.add('d-none');
        document.getElementById('recoveryForm').classList.remove('d-none');
        document.getElementById('passwordRecoveryForm').classList.remove('was-validated');
        document.getElementById('email').value = '';
    }
    </script>
</body>

</html>