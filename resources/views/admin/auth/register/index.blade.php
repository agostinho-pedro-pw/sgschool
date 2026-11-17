@extends('layouts.admin')

@section('title', 'Inscrição - sgSchool')

@section('language', 'pt-PT')

@section('head')
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
@endsection

@section('content')

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

            <form id="registerForm" action="{{ route('enrollment-applications.store') }}" method="POST">
                @csrf
                <div class="dashboard-grid grid-cols-3">
                    <div class="grid-span-2">
                        <label for="fullName" class="form-label">Nome completo</label>
                        <input type="text" class="form-control @error('fullName') is-invalid @enderror" id="fullName"
                            name="fullName" value="{{ old('fullName') }}" placeholder="Nome completo" required>
                        @error('fullName')
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
                        <fieldset class="border-0 p-0 m-0">
                            <legend class="form-label">Género</legend>
                            @foreach (['Masculino', 'Feminino'] as $genderOption)
                            <div class="form-check">
                                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"
                                    id="gender-{{ $loop->index }}" name="gender" value="{{ $genderOption }}"
                                    @checked(old('gender')===$genderOption) required>
                                <label class="form-check-label" for="gender-{{ $loop->index }}">
                                    {{ $genderOption }}
                                </label>
                            </div>
                            @endforeach
                            @error('gender')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </fieldset>
                    </div>

                    <div class="grid-span-2">
                        <fieldset class="border-0 p-0 m-0">
                            <legend class="form-label">Curso</legend>
                            @foreach (\App\Models\Enrollment::COURSES as $courseValue => $courseLabel)
                            <div class="form-check">
                                <input class="form-check-input @error('course') is-invalid @enderror" type="radio"
                                    id="course-{{ $loop->index }}" name="course" value="{{ $courseValue }}"
                                    @checked(old('course')===$courseValue) required>
                                <label class="form-check-label" for="course-{{ $loop->index }}">
                                    {{ $courseLabel }}
                                </label>
                            </div>
                            @endforeach
                            @error('course')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </fieldset>
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

@endsection
