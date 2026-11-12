<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo - sgSchool</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        .dashboard-row {
            margin-bottom: 24px
        }

        .dashboard-grid {
            gap: 16px;
            display: grid
        }

        .grid-cols-1 {
            grid-template-columns: 1fr
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, 1fr)
        }

        @media (width<=768px) {
            .dashboard-grid {
                gap: 12px
            }

            .grid-cols-2 {
                grid-template-columns: 1fr
            }
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px 0;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif;
            display: flex
        }

        .auth-container {
            width: 100%;
            max-width: 520px;
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
    </style>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
</head>

<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <div class="brand-logo">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>
                <h1 class="h3 mb-2 fw-bold">Criar Conta</h1>
                <p class="text-muted">Junte-se hoje à comunidade sgSchool</p>
            </div>

            <form id="registerForm" novalidate>
                <div class="dashboard-grid grid-cols-2">
                    <div>
                        <label for="firstName" class="form-label">Nome Próprio</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John"
                            required>
                        <div class="invalid-feedback">
                            Introduza o seu nome próprio.
                        </div>
                    </div>

                    <div>
                        <label for="lastName" class="form-label">Apelido</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe"
                            required>
                        <div class="invalid-feedback">
                            Introduza o seu apelido.
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Endereço de Email</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="exemplo@sgschool.edu" required aria-describedby="emailHelp">
                    </div>
                    <div class="invalid-feedback">
                        Introduza um endereço de email válido.
                    </div>
                    <small id="emailHelp" class="form-text text-muted">
                        Nunca partilharemos o seu endereço de email com terceiros.
                    </small>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Nome de Utilizador</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="johndoe"
                            required pattern="[a-zA-Z0-9_]{3,20}" aria-describedby="usernameHelp">
                    </div>
                    <div class="invalid-feedback">
                        O nome de utilizador deve ter entre 3 e 20 caracteres e conter apenas letras, números e sublinhados.
                    </div>
                    <small id="usernameHelp" class="form-text text-muted">
                        Escolha um nome de utilizador único para a sua conta.
                    </small>
                </div>

                <div class="dashboard-grid grid-cols-2">
                    <div>
                        <label for="password" class="form-label">Palavra-passe</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" autocomplete="new-password" class="form-control" id="password"
                                name="password" placeholder="Mínimo de 8 caracteres" required minlength="8"
                                aria-describedby="passwordHelp">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword"
                                aria-label="Mostrar palavra-passe">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                        <div class="invalid-feedback">
                            A palavra-passe deve ter pelo menos 8 caracteres.
                        </div>
                        <small id="passwordHelp" class="form-text text-muted">
                            Utilize uma palavra-passe forte.
                        </small>
                    </div>

                    <div>
                        <label for="confirmPassword" class="form-label">Confirmar Palavra-passe</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" autocomplete="new-password" class="form-control" id="confirmPassword"
                                name="confirmPassword" placeholder="Repetir palavra-passe" required>
                            <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword"
                                aria-label="Mostrar palavra-passe">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                        <div class="invalid-feedback">
                            As palavras-passe não coincidem.
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="role" class="form-label">Sou</label>
                    <select class="form-select" id="role" name="role" required aria-label="Selecionar função">
                        <option value="">Escolha a sua função...</option>
                        <option value="student">Estudante</option>
                        <option value="professor">Professor</option>
                        <option value="staff">Funcionário</option>
                        <option value="admin">Administrador</option>
                    </select>
                    <div class="invalid-feedback">
                        Selecione a sua função.
                    </div>
                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="newsletter">
                        <label class="form-check-label" for="newsletter">
                            Subscrever a nossa newsletter
                        </label>
                    </div>

                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="terms" required>
                        <label class="form-check-label" for="terms">
                            Concordo com os <a href="#" class="text-decoration-none">Termos de Serviço</a> e
                            <a href="#" class="text-decoration-none">Política de Privacidade</a>
                        </label>
                        <div class="invalid-feedback">
                            Tem de aceitar os termos e condições.
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="bi bi-person-plus me-2"></i>
                        Criar Conta
                    </button>

                    <div class="text-center my-3">
                        <span class="text-muted">ou registe-se com</span>
                    </div>

                    <div class="dashboard-grid grid-cols-2">
                        <div>
                            <button class="btn btn-outline-secondary w-100" type="button">
                                <i class="bi bi-google"></i>
                                Google
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-outline-secondary w-100" type="button">
                                <i class="bi bi-microsoft"></i>
                                Microsoft
                            </button>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <div class="text-center">
                    <p>
                        Já tem uma conta?
                        <a href="login.html" class="text-decoration-none fw-bold">
                            Iniciar sessão
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
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const confirmPassword = document.getElementById('confirmPassword');

        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        }

        if (toggleConfirmPassword) {
            toggleConfirmPassword.addEventListener('click', function() {
                const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        }

        // Password match validation
        confirmPassword.addEventListener('input', function() {
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity('Passwords do not match');
            } else {
                confirmPassword.setCustomValidity('');
            }
        });

        password.addEventListener('input', function() {
            if (confirmPassword.value && password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity('Passwords do not match');
            } else {
                confirmPassword.setCustomValidity('');
            }
        });

        // Form validation
        const form = document.getElementById('registerForm');
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                // Check password match
                if (password.value !== confirmPassword.value) {
                    confirmPassword.setCustomValidity('Passwords do not match');
                } else {
                    confirmPassword.setCustomValidity('');
                }

                if (form.checkValidity()) {
                    // Form is valid - would submit here
                    console.log('Form submitted');
                    // window.location.href = 'login.html';
                }

                form.classList.add('was-validated');
            });
        }

        // Real-time username validation
        const username = document.getElementById('username');
        if (username) {
            username.addEventListener('input', function() {
                const pattern = /^[a-zA-Z0-9_]{3,20}$/;
                if (!pattern.test(this.value)) {
                    this.setCustomValidity('Username must be 3-20 characters, letters, numbers, and underscores only.');
                } else {
                    this.setCustomValidity('');
                }
            });
        }
    });
    </script>
</body>

</html>