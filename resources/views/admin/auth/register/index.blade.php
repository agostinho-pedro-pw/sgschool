<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição - sgSchool</title>
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

        .grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr))
        }

        .grid-span-2 {
            grid-column: span 2
        }

        @media (width<=992px) {
            .grid-cols-3 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (width<=768px) {
            .dashboard-grid {
                gap: 12px
            }

            .grid-cols-2 {
                grid-template-columns: 1fr
            }

            .grid-cols-3 {
                grid-template-columns: 1fr
            }

            .grid-span-2 {
                grid-column: auto
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
            max-width: 1080px;
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
                <h1 class="h3 mb-2 fw-bold">Inscrição de Estudante</h1>
                <p class="text-muted">Submeta os seus dados para se inscrever na sgSchool</p>
            </div>

            @if (session('success'))
                <div class="alert alert-success" role="status">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <p class="fw-semibold mb-2">Não foi possível submeter a candidatura:</p>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="registerForm" action="{{ route('enrollment-applications.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="dashboard-grid grid-cols-3">
                    <div>
                        <label for="firstName" class="form-label">Primeiro nome</label>
                        <input type="text" class="form-control @error('firstName') is-invalid @enderror"
                            id="firstName" name="firstName" value="{{ old('firstName') }}" placeholder="Nome próprio"
                            required>
                        @error('firstName')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="middleName" class="form-label">Nome do meio (opcional)</label>
                        <input type="text" class="form-control @error('middleName') is-invalid @enderror"
                            id="middleName" name="middleName" value="{{ old('middleName') }}"
                            placeholder="Nome do meio">
                        @error('middleName')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="lastName" class="form-label">Apelido</label>
                        <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName"
                            name="lastName" value="{{ old('lastName') }}" placeholder="Apelido" required>
                        @error('lastName')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="nif" class="form-label">NIF</label>
                        <input type="text" class="form-control @error('nif') is-invalid @enderror" id="nif"
                            name="nif" value="{{ old('nif') }}" placeholder="NIF" required>
                        @error('nif')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="dateOfBirth" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control @error('dateOfBirth') is-invalid @enderror"
                            id="dateOfBirth" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required>
                        @error('dateOfBirth')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="form-label">Número de telefone</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            name="phone" value="{{ old('phone') }}" placeholder="Telefone" required>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="grid-span-2">
                        <label for="email" class="form-label">Endereço de Email</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" placeholder="exemplo@sgschool.edu" required
                                aria-describedby="emailHelp">
                        </div>
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted">
                            Nunca partilharemos o seu endereço de email com terceiros.
                        </small>
                    </div>

                    <div>
                        <label for="course" class="form-label">Curso</label>
                        <select class="form-select @error('course') is-invalid @enderror" id="course" name="course"
                            required>
                            <option value="" disabled @selected(old('course') === null)>Selecione um curso...</option>
                            <option value="informatica-gestao" @selected(old('course') === 'informatica-gestao')>
                                Informática de Gestão
                            </option>
                            <option value="informatica-sistemas-multimedia"
                                @selected(old('course') === 'informatica-sistemas-multimedia')>
                                Informática e Sistemas Multimédia
                            </option>
                            <option value="eletronica-telecomunicacoes"
                                @selected(old('course') === 'eletronica-telecomunicacoes')>
                                Eletrónica e Telecomunicações
                            </option>
                        </select>
                        @error('course')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="identity_card" class="form-label">Bilhete de Identidade (BI)</label>
                        <input type="file" class="form-control @error('identity_card') is-invalid @enderror"
                            id="identity_card" name="identity_card"
                            accept=".pdf,.jpg,.jpeg,.png">
                        @error('identity_card')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="secondary_certificate" class="form-label">Certificado de conclusão do ensino
                            secundário</label>
                        <input type="file" class="form-control @error('secondary_certificate') is-invalid @enderror"
                            id="secondary_certificate" name="secondary_certificate" accept=".pdf,.jpg,.jpeg,.png">
                        @error('secondary_certificate')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="mb-4">
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="bi bi-person-plus me-2"></i>
                        Enviar a inscrição
                    </button>
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

</body>

</html>