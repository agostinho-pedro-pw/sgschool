@extends('layouts.admin')

@section('title', 'Candidaturas de Matrícula')

@section('language', 'pt-PT')

@section('head')
<meta name="description" content="sgSchool - Candidaturas de matrícula">
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

    @media (max-width: 575.98px) {
        .dashboard-content {
            padding: 16px
        }
    }
</style>
@endsection

@section('content')

<a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>
<div class="search-backdrop" id="searchBackdrop"></div>
<div class="sidebar-overlay" id="sidebarOverlay"></div>

@include('layouts._include.dashboard.sidebar')

<div class="main-wrapper" id="mainWrapper">
    <header class="navbar top-navbar">
        <div class="container-fluid d-flex align-items-center h-100">
            <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Alternar barra lateral"
                aria-controls="sidebar">
                <i class="bi bi-list"></i>
            </button>
            <nav aria-label="Navegação estrutural do cabeçalho" class="d-none d-lg-block ms-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Início</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Enrollments</li>
                </ol>
            </nav>
            <div class="navbar-brand d-lg-none fw-bold me-auto">sgSchool</div>
        </div>
    </header>

    <main class="dashboard-content" id="main-content">
        <div class="container-fluid">

            <!--Usado para notificar, ou mandar um Later Boostrap 5 no usuario!-->
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="dashboard-row">
                <h2 class="h5 fw-semibold text-gray-800 mb-4">Candidaturas de Matrícula</h2>
                <a href="{{ route('register') }}" class="btn btn-primary mb-3">Nova Candidatura</a>
                <div class="dashboard-card">
                    <div class="dashboard-card-header py-4 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Candidaturas submetidas</h6>
                            <span class="badge bg-primary-subtle text-primary">
                                {{ $enrollments->count() }}</span>
                        </div>
                    </div>
                    <div class="dashboard-card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-4 py-3">Nome completo</th>
                                        <th scope="col" class="py-3">Telefone</th>
                                        <th scope="col" class="py-3">Curso pretendido</th>
                                        <th scope="col" class="py-3">Data da candidatura</th>
                                        <th scope="col" class="py-3 pe-4">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($enrollments as $enrollment)
                                    <tr>
                                        <td class="px-4">
                                            <div class="fw-semibold">
                                                {{ $enrollment->fullName }}
                                            </div>
                                        </td>
                                        <td class="text-nowrap">{{ $enrollment->phone }}</td>
                                        <td>{{ \App\Models\Enrollment::COURSES[$enrollment->course] ??
                                            $enrollment->course }}</td>
                                        <td class="text-nowrap">{{ $enrollment->applicationDate->format('d/m/Y') }}</td>
                                        <td class="pe-4">
                                            <div class="d-flex gap-2 text-nowrap">
                                                <a href="{{ route('enrollment-applications.show', $enrollment) }}"
                                                    class="btn btn-sm btn-primary">Ver</a>
                                                <form
                                                    action="{{ route('enrollment-applications.accept', $enrollment) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-sm btn-success">Aceitar</button>
                                                </form>
                                                <form
                                                    action="{{ route('enrollment-applications.destroy', $enrollment) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Tem a certeza de que pretende eliminar esta candidatura?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-5 text-center">
                                            <div class="text-muted">
                                                <i class="bi bi-inbox fs-2 d-block mb-2" aria-hidden="true"></i>
                                                <p class="fw-semibold mb-1">Ainda não existem candidaturas.</p>
                                                <p class="small mb-0">As candidaturas submetidas aparecerão aqui.</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
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
                    <p class="mb-0">Criado com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection