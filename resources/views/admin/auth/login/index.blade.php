<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - sgSchool</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">

    <!-- Bibliotecas base (Bootstrap e ícones) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

        @media (max-width:480px) {
            .auth-card {
                padding: 28px 20px
            }
        }
    </style>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
</head>

<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <div class="brand-logo">
                    <i class="bi bi-mortarboard-fill" aria-hidden="true"></i>
                </div>
                <h1 class="h3 mb-2 fw-bold">Bem-vindo de volta!</h1>
                <p class="text-muted">Inicie sessão na sua conta</p>
            </div>

            <form action="{{ route('create-user') }}" novalidate method="POST">
                @csrf {{--token de segurança para proteger contra ataques CSRF--}}
                <div class="mb-3">
                    <label for="username" class="form-label">Endereço de email</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">
                            <i class="bi bi-envelope" aria-hidden="true"></i>
                        </span>
                        <input type="email" class="form-control" id="username" name="username" autocomplete="username"
                            placeholder="exemplo@infosi.gest" required aria-describedby="emailHelp">
                        <div class="invalid-feedback">
                            Introduza um endereço de email válido.
                        </div>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">
                        O seu email já registado na nossa plataforma
                    </small>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Palavra-passe</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">
                            <i class="bi bi-lock" aria-hidden="true"></i>
                        </span>
                        <input type="password" autocomplete="current-password" class="form-control" id="password"
                            name="password" placeholder="Introduza a sua palavra-passe" required
                            aria-describedby="passwordHelp">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword"
                            aria-label="Mostrar ou ocultar palavra-passe">
                            <i class="bi bi-eye" aria-hidden="true"></i>
                        </button>
                        <div class="invalid-feedback">
                            A palavra-passe é obrigatória.
                        </div>
                    </div>
                    <small id="passwordHelp" class="form-text text-muted">
                        A sua palavra-passe segura
                    </small>
                </div><br>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="bi bi-box-arrow-in-right me-2" aria-hidden="true"></i>
                        Entrar
                    </button>

                    <div class="text-center my-3">
                    </div>
                </div>

                <hr class="my-1">
                <div class="text-center">
                    <p class="mb-2">
                        <a href="password-recovery.html" class="text-decoration-none">
                            esqueceu-se da sua palavra-passe?
                        </a>
                    </p>
                    <p class="mb-0">
                        entre em contacto com o Eng. Agostinho
                        <a href="register.html" class="text-decoration-none fw-bold">
                            Contactar
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <div class="text-center mt-4">
            <p class="text-white-50 small">
                &copy; 2026 sgSchool. Todos os direitos reservados.
                <a href="#" class="text-white-50">Privacidade</a> ·
                <a href="#" class="text-white-50">Termos</a>
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Mostrar/ocultar palavra-passe
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        }

        // Validação do formulário
        const form = document.getElementById('loginForm');
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                if (form.checkValidity()) {
                    // Formulário válido - seria submetido aqui
                    console.log('Formulário submetido');
                    // window.location.href = 'index.html';
                }

                form.classList.add('was-validated');
            });
        }

        // Funcionalidade "Lembrar-me"
        const rememberMe = document.getElementById('rememberMe');
        const username = document.getElementById('username');

        // Carregar o utilizador guardado se "Lembrar-me" estava activo
        if (localStorage.getItem('rememberMe') === 'true') {
            username.value = localStorage.getItem('username') || '';
            rememberMe.checked = true;
        }

        // Guardar/limpar o utilizador conforme "Lembrar-me"
        if (rememberMe) {
            rememberMe.addEventListener('change', function() {
                if (this.checked) {
                    localStorage.setItem('rememberMe', 'true');
                    localStorage.setItem('username', username.value);
                } else {
                    localStorage.removeItem('rememberMe');
                    localStorage.removeItem('username');
                }
            });
        }

        // Actualizar o utilizador guardado quando for alterado
        if (username) {
            username.addEventListener('input', function() {
                if (rememberMe.checked) {
                    localStorage.setItem('username', this.value);
                }
            });
        }
    });
    </script>
</body>

</html>