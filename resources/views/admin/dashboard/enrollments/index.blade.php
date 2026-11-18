@extends('layouts.admin')

@section('title', 'Inscrição - sgSchool')

@section('language', 'pt-PT')

@section('head')
<meta name="description" content="sgSchool - Inscrição de estudante">
<meta name="keywords" content="educação, candidatura, matrícula, estudante">
<meta name="author" content="Agostinho Pedro">

<link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">
<script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
<link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
<link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    body {
        background: #f5f7fa;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif
    }

    .sidebar {
        z-index: 1040;
        background: #1f2937;
        width: 260px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0
    }

    .main-wrapper {
        min-height: 100vh;
        margin-left: 260px;
        transition: margin-left .3s
    }

    .top-navbar {
        background: #fff;
        height: 60px;
        padding: 0 1rem;
        box-shadow: 0 1px 3px #0000001a
    }

    .dashboard-content {
        padding: 24px
    }
</style>
@endsection

@section('content')
{{-- Formulário para submeter uma candidatura --}}
<a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>
<div class="search-backdrop" id="searchBackdrop"></div>
<div class="sidebar-overlay" id="sidebarOverlay"></div>

@include('layouts._include.dashboard.sidebar')

<div class="main-wrapper" id="mainWrapper">
    <header class="navbar top-navbar">
        <div class="container-fluid d-flex align-items-center h-100">
            <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Mostrar/ocultar menu lateral"
                aria-controls="sidebar">
                <i class="bi bi-list"></i>
            </button>
            <nav aria-label="Trilho de navegação" class="d-none d-lg-block ms-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Início</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Inscrição de estudante</li>
                </ol>
            </nav>
            <div class="navbar-brand d-lg-none fw-bold me-auto">sgSchool</div>
        </div>
    </header>

    <main class="dashboard-content" id="main-content">
        <div class="container-fluid">
            <div class="dashboard-row">
                <div class="dashboard-grid grid-cols-1">
                    <h4 class="page-title">Inscrição de estudante</h4>
                    <p class="text-muted">Preencha os campos abaixo para submeter a sua candidatura.</p>
                </div>
            </div>

            <div class="dashboard-row">
                <div class="dashboard-grid grid-cols-1">
                    <div class="dashboard-card">
                        <div class="dashboard-card-body">
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

                            <ul class="nav nav-tabs mb-4" id="enrollmentFormTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="basic-tab" data-bs-toggle="tab"
                                        data-bs-target="#basic" type="button" role="tab" aria-controls="basic"
                                        aria-selected="true">
                                        <i class="bi bi-person-circle me-2"></i>Informações básicas
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="enrollmentFormTabContent">
                                <div class="tab-pane fade show active" id="basic" role="tabpanel"
                                    aria-labelledby="basic-tab">
                                    <form id="registerForm" action="{{ route('enrollment-applications.store') }}"
                                        method="POST">
                                        @csrf
                                        <div class="row gx-4 gy-3">
                                            <div class="col-md-6 px-2">
                                                <div class="mb-4">
                                                    <label for="fullName" class="form-label">Nome <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control @error('fullName') is-invalid @enderror"
                                                        id="fullName" name="fullName" value="{{ old('fullName') }}"
                                                        placeholder="Introduza o nome completo" required>
                                                    @error('fullName')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 px-2">
                                                <div class="mb-4">
                                                    <label for="dateOfBirth" class="form-label">Data de nascimento
                                                        <span class="text-danger">*</span></label>
                                                    <input type="date"
                                                        class="form-control @error('dateOfBirth') is-invalid @enderror"
                                                        id="dateOfBirth" name="dateOfBirth"
                                                        value="{{ old('dateOfBirth') }}" required>
                                                    @error('dateOfBirth')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 px-2">
                                                <div class="mb-4">
                                                    <label for="phone" class="form-label">Número de telefone <span
                                                            class="text-danger">*</span></label>
                                                    <input type="tel"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        id="phone" name="phone" value="{{ old('phone') }}"
                                                        placeholder="Introduza o número de telefone" required>
                                                    @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 px-2">
                                                <div class="mb-4">
                                                    <label for="email" class="form-label">Endereço de email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" name="email" value="{{ old('email') }}"
                                                        placeholder="exemplo@sgschool.edu">
                                                    @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 px-2">
                                                <fieldset class="mb-4 border-0 p-0">
                                                    <legend class="form-label">Género <span class="text-danger">*</span>
                                                    </legend>
                                                    @foreach (['Masculino', 'Feminino'] as $genderOption)
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input @error('gender') is-invalid @enderror"
                                                            type="radio" id="gender-{{ $loop->index }}" name="gender"
                                                            value="{{ $genderOption }}"
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

                                            <div class="col-md-6 px-2">
                                                <fieldset class="mb-4 border-0 p-0">
                                                    <legend class="form-label">Curso <span class="text-danger">*</span>
                                                    </legend>
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input @error('course') is-invalid @enderror"
                                                            type="radio" id="course-0" name="course"
                                                            value="informatica-gestao"
                                                            @checked(old('course')==='informatica-gestao') required>
                                                        <label class="form-check-label" for="course-0">
                                                            Informática de Gestão
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input @error('course') is-invalid @enderror"
                                                            type="radio" id="course-1" name="course"
                                                            value="informatica-sistemas-multimedia"
                                                            @checked(old('course')==='informatica-sistemas-multimedia')
                                                            required>
                                                        <label class="form-check-label" for="course-1">
                                                            Informática e Sistemas Multimédia
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input @error('course') is-invalid @enderror"
                                                            type="radio" id="course-2" name="course"
                                                            value="eletronica-telecomunicacoes"
                                                            @checked(old('course')==='eletronica-telecomunicacoes')
                                                            required>
                                                        <label class="form-check-label" for="course-2">
                                                            Eletrónica e Telecomunicações
                                                        </label>
                                                    </div>
                                                    @error('course')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 px-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bi bi-check-circle me-2"></i>Enviar a inscrição
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="dashboard-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2026 sgSchool. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Feito com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection