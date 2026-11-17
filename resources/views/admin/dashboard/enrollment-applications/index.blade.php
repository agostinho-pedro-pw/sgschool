@extends('layouts.admin')

@section('title', 'Candidaturas de Matrícula')

@section('language', 'pt-PT')

@section('head')
<meta name="description" content="sgSchool - Gestão de candidaturas de matrícula">
    <meta name="keywords" content="educação, candidaturas, matrícula, gestão">
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

        .applications-table {
            min-width: 980px
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
                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Candidaturas de Matrícula</li>
                    </ol>
                </nav>

                <div class="navbar-brand d-lg-none fw-bold me-auto">sgSchool</div>
                <div class="flex-grow-1 d-none d-lg-block"></div>

                <div class="d-flex align-items-center gap-2">
                    <div class="search-container">
                        <button type="button" class="btn btn-light btn-icon" id="searchToggle"
                            aria-label="Abrir pesquisa" aria-controls="searchForm">
                            <i class="bi bi-search"></i>
                        </button>
                        <div class="search-form" id="searchForm" role="search" aria-label="Pesquisa no site">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" class="form-control" id="searchInput" aria-label="Pesquisar páginas"
                                placeholder="Pesquisar..." data-bs-toggle="dropdown">
                            <button type="button" class="close-search" id="closeSearch" aria-label="Fechar pesquisa">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                    </div>

                    <button type="button" class="btn btn-light btn-icon position-relative" aria-label="Notificações">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            style="font-size: 0.6rem;">3</span>
                    </button>

                    <div class="dropdown">
                        <button type="button" class="btn btn-light d-flex align-items-center" data-bs-toggle="dropdown"
                            aria-label="Menu da conta de Sarah Johnson">
                            <span class="user-avatar me-2">SJ</span>
                            <span class="d-none d-md-inline">Sarah Johnson</span>
                            <i class="bi bi-chevron-down ms-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configurações</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Terminar
                                    Sessão</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main class="dashboard-content" id="main-content">
            <div class="container-fluid">
                <div class="mb-4">
                    <h1 class="h3 mb-1 text-gray-800">Candidaturas de Matrícula</h1>
                    <p class="text-muted mb-0">Consulte e acompanhe os pedidos de ingresso submetidos pelos estudantes.</p>
                </div>

                <section class="dashboard-row" aria-labelledby="applications-heading">
                    <h2 class="h5 fw-semibold text-gray-800 mb-4" id="applications-heading">Candidaturas submetidas</h2>
                    <div class="dashboard-card">
                        <div class="dashboard-card-header py-4 px-4">
                            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
                                <div>
                                    <h3 class="h6 mb-1">Lista de candidatos</h3>
                                    <p class="text-muted small mb-0">Dados de demonstração</p>
                                </div>
                                <span class="badge bg-primary-subtle text-primary align-self-start align-self-sm-center">
                                    4 candidaturas
                                </span>
                            </div>
                        </div>
                        <div class="dashboard-card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0 applications-table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-4 py-3">Nome completo</th>
                                            <th scope="col" class="py-3">NIF</th>
                                            <th scope="col" class="py-3">Curso pretendido</th>
                                            <th scope="col" class="py-3">Data da candidatura</th>
                                            <th scope="col" class="py-3">Estado</th>
                                            <th scope="col" class="py-3 pe-4">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-4">
                                                <div class="fw-semibold">Maria dos Santos</div>
                                            </td>
                                            <td class="text-nowrap">500 123 4567</td>
                                            <td>Engenharia Informática</td>
                                            <td class="text-nowrap">12/11/2026</td>
                                            <td><span class="badge bg-warning-subtle text-warning">Pendente</span></td>
                                            <td class="pe-4">
                                                <div class="d-flex gap-2 text-nowrap">
                                                    <button type="button" class="btn btn-sm btn-light">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-success">Aceitar</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4">
                                                <div class="fw-semibold">João Manuel Paulo</div>
                                            </td>
                                            <td class="text-nowrap">500 234 5678</td>
                                            <td>Gestão de Empresas</td>
                                            <td class="text-nowrap">10/11/2026</td>
                                            <td><span class="badge bg-info-subtle text-info">Em análise</span></td>
                                            <td class="pe-4">
                                                <div class="d-flex gap-2 text-nowrap">
                                                    <button type="button" class="btn btn-sm btn-light">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-success">Aceitar</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4">
                                                <div class="fw-semibold">Ana Isabel António</div>
                                            </td>
                                            <td class="text-nowrap">500 345 6789</td>
                                            <td>Enfermagem</td>
                                            <td class="text-nowrap">08/11/2026</td>
                                            <td><span class="badge bg-warning-subtle text-warning">Pendente</span></td>
                                            <td class="pe-4">
                                                <div class="d-flex gap-2 text-nowrap">
                                                    <button type="button" class="btn btn-sm btn-light">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-success">Aceitar</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4">
                                                <div class="fw-semibold">Pedro José Miguel</div>
                                            </td>
                                            <td class="text-nowrap">500 456 7890</td>
                                            <td>Direito</td>
                                            <td class="text-nowrap">05/11/2026</td>
                                            <td><span class="badge bg-success-subtle text-success">Aceite</span></td>
                                            <td class="pe-4">
                                                <div class="d-flex gap-2 text-nowrap">
                                                    <button type="button" class="btn btn-sm btn-light">Ver</button>
                                                    <button type="button" class="btn btn-sm btn-success">Aceitar</button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
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
