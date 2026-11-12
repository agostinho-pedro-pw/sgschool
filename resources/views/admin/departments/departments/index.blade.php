<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sgSchool - Plataforma moderna de gestão escolar para universidades">
    <meta name="keywords" content="education, dashboard, university, management, admin">
    <meta name="author" content="Agostinho Pedro">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    <title>Departamentos - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




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

        @keyframes pulse {

            0%,
            to {
                opacity: 1
            }

            50% {
                opacity: .5
            }
        }

        .loading {
            background: #e5e7eb;
            animation: 2s cubic-bezier(.4, 0, .6, 1) infinite pulse
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>

    <!-- Required DOM elements for dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    @include('layouts._include.dashboard.sidebar')
    <!-- Main Content Wrapper -->
    <div class="main-wrapper" id="mainWrapper">
        <!-- Header -->
        <header class="navbar top-navbar">
            <div class="container-fluid d-flex align-items-center h-100">
                <!-- Hamburger Menu -->
                <button type="button" class="hamburger-menu" id="sidebarToggle"
                    aria-label="Mostrar/ocultar menu lateral" aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Trilho de navegação" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                        <li class="breadcrumb-item active">Departamentos</li>
                    </ol>
                </nav>

                <!-- Logo for mobile -->
                <div class="navbar-brand d-lg-none fw-bold me-auto">sgSchool</div>

                <!-- Spacer for desktop -->
                <div class="flex-grow-1 d-none d-lg-block"></div>

                <!-- Right Actions -->
                <div class="d-flex align-items-center gap-2">
                    <!-- Search -->
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

                            <ul class="dropdown-menu w-100 mt-2">
                                <li><a class="dropdown-item" href="#">Registo de estudantes</a></li>
                                <li><a class="dropdown-item" href="#">Gestão de cursos</a></li>
                                <li><a class="dropdown-item" href="#">Submissão de notas</a></li>
                                <li><a class="dropdown-item" href="#">Diretório de professores</a></li>
                                <li><a class="dropdown-item" href="#">Recursos da biblioteca</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Pesquisa avançada</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light btn-icon position-relative" data-bs-toggle="dropdown"
                            id="notificationsToggle" aria-label="Notificações">
                            <i class="bi bi-bell"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                style="font-size: 0.6rem;">3</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="width: 320px;">
                            <li class="dropdown-header d-flex align-items-center justify-content-between">
                                <span>Notificações</span>
                                <small class="text-muted">3 novas</small>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-calendar-check text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">Novo evento</div>
                                            <div class="text-muted small">Feira de ciências a 15 de março</div>
                                            <div class="text-muted small">Há 5 minutos</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-check-circle text-success"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">Trabalho submetido</div>
                                            <div class="text-muted small">John entregou o seu trabalho</div>
                                            <div class="text-muted small">Há 2 horas</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-warning bg-opacity-10 p-2 me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-exclamation-triangle text-warning"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">System Alert</div>
                                            <div class="text-muted small">Cópia de segurança da base de dados concluída
                                            </div>
                                            <div class="text-muted small">Yesterday</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item text-center" href="notifications.html">
                                    <small>Ver todas as notificações</small>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Quick Actions -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                            aria-label="Ações rápidas">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="add-student.html"><i
                                        class="bi bi-person-plus me-2"></i>Adicionar Estudante</a></li>
                            <li><a class="dropdown-item" href="add-course.html"><i class="bi bi-book me-2"></i>Adicionar
                                    Curso</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Adicionar professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Agendar evento</a></li>
                        </ul>
                    </div>

                    <!-- User Menu -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light d-flex align-items-center" data-bs-toggle="dropdown"
                            aria-label="Menu da conta de Sarah Johnson">
                            <span class="user-avatar me-2">
                                SJ
                            </span>
                            <span class="d-none d-md-inline">Sarah Johnson</span>
                            <i class="bi bi-chevron-down ms-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Configurações</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Centro de ajuda</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Terminar
                                    sessão</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="dashboard-content" id="main-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 font-bold">Gest?o de departamentos</h1>
                            <p class="text-muted text-sm">Manage academic departments, staff, and estudante enrollment
                                across your institution.</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-download me-2"></i>Exportarar dados
                            </button>
                            <a href="add-department.html" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-2"></i>Adicionar Departamento
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Department Statistics -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-4 gap-3">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <div class="mb-3">
                                    <div class="stat-icon-large bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                        style="width: 60px; height: 60px;">
                                        <i class="bi bi-building" style="font-size: 24px; color: #0d6efd;"></i>
                                    </div>
                                </div>
                                <div class="stat-value text-primary fw-bold mb-1" style="font-size: 2rem;">8</div>
                                <div class="stat-label text-muted mb-2">Paratal Departamentos</div>
                                <div class="stat-change text-success small fw-semibold">
                                    <i class="bi bi-arrow-up" style="font-size: 12px;"></i> +2 este ano
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <div class="mb-3">
                                    <div class="stat-icon-large bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                        style="width: 60px; height: 60px;">
                                        <i class="bi bi-check-circle" style="font-size: 24px; color: #198754;"></i>
                                    </div>
                                </div>
                                <div class="stat-value text-success fw-bold mb-1" style="font-size: 2rem;">6</div>
                                <div class="stat-label text-muted mb-2">Ativo Departamentos</div>
                                <div class="stat-change text-success small fw-semibold">
                                    <i class="bi bi-arrow-up" style="font-size: 12px;"></i> 100% operational
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <div class="mb-3">
                                    <div class="stat-icon-large bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                        style="width: 60px; height: 60px;">
                                        <i class="bi bi-people" style="font-size: 24px; color: #0dcaf0;"></i>
                                    </div>
                                </div>
                                <div class="stat-value text-info fw-bold mb-1" style="font-size: 2rem;">8,247</div>
                                <div class="stat-label text-muted mb-2">Paratal Estudantes</div>
                                <div class="stat-change text-success small fw-semibold">
                                    <i class="bi bi-arrow-up" style="font-size: 12px;"></i> +12,5% este semestre
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <div class="mb-3">
                                    <div class="stat-icon-large bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                        style="width: 60px; height: 60px;">
                                        <i class="bi bi-person-badge" style="font-size: 24px; color: #ffc107;"></i>
                                    </div>
                                </div>
                                <div class="stat-value text-warning fw-bold mb-1" style="font-size: 2rem;">156</div>
                                <div class="stat-label text-muted mb-2">N?mero de docentes</div>
                                <div class="stat-change text-success small fw-semibold">
                                    <i class="bi bi-arrow-up" style="font-size: 12px;"></i> +8 new hires
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Departments Table -->
                <div class="dashboard-row">
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Todos Departamentos</h5>
                                <div class="d-flex gap-2">
                                    <div class="input-group" style="width: 300px;">
                                        <span class="input-group-text">
                                            <i class="bi bi-search"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Pesquisar departamentos..."
                                            id="departmentSearch">
                                    </div>
                                    <select class="form-select" style="width: auto;" id="statusFilter">
                                        <option value="">Todos os estados</option>
                                        <option value="active">Ativo</option>
                                        <option value="paused">Pausado</option>
                                        <option value="disabled">Desativado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Departamento</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Responsável pelo departamento</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Estudantes</th>
                                            <th scope="col">Corpo docente</th>
                                            <th scope="col">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">1</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="department-icon bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                                        style="width: 40px; height: 40px;">
                                                        <i class="bi bi-laptop text-primary"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold">Ci?ncias Inform?ticas</div>
                                                        <div class="text-muted small">Established 1995</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-success-subtle text-success border border-success-subtle">
                                                    <i class="bi bi-check-circle me-1"></i>Ativo
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr+John+Smith&background=0d6efd&color=fff"
                                                        class="rounded-circle me-2" width="32" height="32"
                                                        alt="Dr. John Smith" loading="lazy" decoding="async">
                                                    <div>
                                                        <div class="fw-semibold small">Dr. John Smith</div>
                                                        <div class="text-muted" style="font-size: 0.75rem;">
                                                            john.smith@kiaalap.edu</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small">
                                                    <div><i class="bi bi-envelope me-1"></i>cs@kiaalap.edu</div>
                                                    <div class="text-muted"><i class="bi bi-phone me-1"></i>+1-555-0123
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-primary">1,542</div>
                                                    <div class="text-muted small">inscritos</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-info">28</div>
                                                    <div class="text-muted small">docentes</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-light btn-sm"
                                                        data-bs-toggle="dropdown" aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-eye me-2"></i>Ver Detalhes</a></li>
                                                        <li><a class="dropdown-item" href="edit-department.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar
                                                                Departamento</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-people me-2"></i>Manage Corpo
                                                                docente</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Excluir</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">2</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="department-icon bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                                        style="width: 40px; height: 40px;">
                                                        <i class="bi bi-gear text-warning"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold">Mechanical Engenharia</div>
                                                        <div class="text-muted small">Established 1988</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-warning-subtle text-warning border border-warning-subtle">
                                                    <i class="bi bi-pause-circle me-1"></i>Pausado
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr+Lisa+Chen&background=ffc107&color=000"
                                                        class="rounded-circle me-2" width="32" height="32"
                                                        alt="Dr. Lisa Chen" loading="lazy" decoding="async">
                                                    <div>
                                                        <div class="fw-semibold small">Dr. Lisa Chen</div>
                                                        <div class="text-muted" style="font-size: 0.75rem;">
                                                            lisa.chen@kiaalap.edu</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small">
                                                    <div><i class="bi bi-envelope me-1"></i>mech@kiaalap.edu</div>
                                                    <div class="text-muted"><i class="bi bi-phone me-1"></i>+1-555-0124
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-primary">1,285</div>
                                                    <div class="text-muted small">inscritos</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-info">22</div>
                                                    <div class="text-muted small">docentes</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-light btn-sm"
                                                        data-bs-toggle="dropdown" aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-eye me-2"></i>Ver Detalhes</a></li>
                                                        <li><a class="dropdown-item" href="edit-department.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar
                                                                Departamento</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-people me-2"></i>Manage Corpo
                                                                docente</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Excluir</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">3</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="department-icon bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                                        style="width: 40px; height: 40px;">
                                                        <i class="bi bi-briefcase text-success"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold">Gest?o de Empresas</div>
                                                        <div class="text-muted small">Fundado em 1992</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-success-subtle text-success border border-success-subtle">
                                                    <i class="bi bi-check-circle me-1"></i>Ativo
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr+Michael+Brown&background=198754&color=fff"
                                                        class="rounded-circle me-2" width="32" height="32"
                                                        alt="Dr. Michael Brown" loading="lazy" decoding="async">
                                                    <div>
                                                        <div class="fw-semibold small">Dr. Michael Brown</div>
                                                        <div class="text-muted" style="font-size: 0.75rem;">
                                                            michael.brown@kiaalap.edu</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small">
                                                    <div><i class="bi bi-envelope me-1"></i>business@kiaalap.edu</div>
                                                    <div class="text-muted"><i class="bi bi-phone me-1"></i>+1-555-0125
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-primary">2,156</div>
                                                    <div class="text-muted small">inscritos</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-info">35</div>
                                                    <div class="text-muted small">docentes</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-light btn-sm"
                                                        data-bs-toggle="dropdown" aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-eye me-2"></i>Ver Detalhes</a></li>
                                                        <li><a class="dropdown-item" href="edit-department.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar
                                                                Departamento</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-people me-2"></i>Manage Corpo
                                                                docente</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Excluir</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">4</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="department-icon bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                                        style="width: 40px; height: 40px;">
                                                        <i class="bi bi-heart-pulse text-info"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold">Medicina</div>
                                                        <div class="text-muted small">Fundado em 1985</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-success-subtle text-success border border-success-subtle">
                                                    <i class="bi bi-check-circle me-1"></i>Ativo
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr+Sarah+Wilson&background=0dcaf0&color=000"
                                                        class="rounded-circle me-2" width="32" height="32"
                                                        alt="Dr. Sarah Wilson" loading="lazy" decoding="async">
                                                    <div>
                                                        <div class="fw-semibold small">Dr. Sarah Wilson</div>
                                                        <div class="text-muted" style="font-size: 0.75rem;">
                                                            sarah.wilson@kiaalap.edu</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small">
                                                    <div><i class="bi bi-envelope me-1"></i>medicine@kiaalap.edu</div>
                                                    <div class="text-muted"><i class="bi bi-phone me-1"></i>+1-555-0126
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-primary">875</div>
                                                    <div class="text-muted small">inscritos</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-info">45</div>
                                                    <div class="text-muted small">docentes</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-light btn-sm"
                                                        data-bs-toggle="dropdown" aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-eye me-2"></i>Ver Detalhes</a></li>
                                                        <li><a class="dropdown-item" href="edit-department.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar
                                                                Departamento</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-people me-2"></i>Manage Corpo
                                                                docente</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Excluir</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">5</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="department-icon bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                                        style="width: 40px; height: 40px;">
                                                        <i class="bi bi-palette text-secondary"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold">Belas-Artes</div>
                                                        <div class="text-muted small">Established 1998</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-danger-subtle text-danger border border-danger-subtle">
                                                    <i class="bi bi-x-circle me-1"></i>Desativado
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr+Emma+Davis&background=6c757d&color=fff"
                                                        class="rounded-circle me-2" width="32" height="32"
                                                        alt="Dr. Emma Davis" loading="lazy" decoding="async">
                                                    <div>
                                                        <div class="fw-semibold small">Dr. Emma Davis</div>
                                                        <div class="text-muted" style="font-size: 0.75rem;">
                                                            emma.davis@kiaalap.edu</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small">
                                                    <div><i class="bi bi-envelope me-1"></i>arts@kiaalap.edu</div>
                                                    <div class="text-muted"><i class="bi bi-phone me-1"></i>+1-555-0127
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-primary">423</div>
                                                    <div class="text-muted small">inscritos</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="fw-bold text-info">18</div>
                                                    <div class="text-muted small">docentes</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-light btn-sm"
                                                        data-bs-toggle="dropdown" aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-eye me-2"></i>Ver Detalhes</a></li>
                                                        <li><a class="dropdown-item" href="edit-department.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar
                                                                Departamento</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-people me-2"></i>Manage Corpo
                                                                docente</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Excluir</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <nav aria-label="Departamentos pagination" class="mt-4">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Seguinte</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Department search functionality
            const searchInput = document.getElementById('departmentSearch');
            const statusFilter = document.getElementById('statusFilter');
            const tableRows = document.querySelectorAll('tbody tr');

            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                const statusFilter = statusFilter.value.toLowerCase();

                tableRows.forEach(row => {
                    const departmentName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    const status = row.querySelector('.badge').textContent.toLowerCase();

                    const matchesSearch = departmentName.includes(searchTerm);
                    const matchesStatus = statusFilter === '' || status.includes(statusFilter);

                    row.style.display = matchesSearch && matchesStatus ? '' : 'none';
                });
            }

            searchInput.addEventListener('input', filterTable);
            statusFilter.addEventListener('change', filterTable);
        });
    </script>


    <!-- Load JavaScript -->




</body>

</html>