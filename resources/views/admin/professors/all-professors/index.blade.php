<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sgSchool - Painel moderno de gestão escolar para universidades">
    <meta name="keywords" content="educação, painel, universidade, gestão, administração">
    <meta name="author" content="Agostinho Pedro">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    <title>Todos os Professores - Painel sgSchool</title>

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

        .professor-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 1.25rem;
            transition: all .3s
        }

        .professor-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px #0000001a
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
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Alternar barra lateral"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Navegação estrutural do cabeçalho" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                        <li class="breadcrumb-item active">Todos os Professores</li>
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
                        <button type="button" class="btn btn-light btn-icon" id="searchToggle" aria-label="Abrir pesquisa"
                            aria-controls="searchForm">
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
                                <li><a class="dropdown-item" href="#">Matrícula de Estudantes</a></li>
                                <li><a class="dropdown-item" href="#">Gestão de Cursos</a></li>
                                <li><a class="dropdown-item" href="#">Lançamento de Notas</a></li>
                                <li><a class="dropdown-item" href="#">Diretório de Professores</a></li>
                                <li><a class="dropdown-item" href="#">Recursos da Biblioteca</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Pesquisa Avançada</a></li>
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
                                            <div class="fw-semibold">Novo Evento</div>
                                            <div class="text-muted small">Feira de Ciências a 15 de março</div>
                                            <div class="text-muted small">há 5 minutos</div>
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
                                            <div class="fw-semibold">Trabalho Submetido</div>
                                            <div class="text-muted small">O João submeteu o seu trabalho</div>
                                            <div class="text-muted small">há 2 horas</div>
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
                                            <div class="fw-semibold">Alerta do Sistema</div>
                                            <div class="text-muted small">Cópia de segurança da base de dados concluída</div>
                                            <div class="text-muted small">Ontem</div>
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
                            <li><a class="dropdown-item" href="add-course.html"><i class="bi bi-book me-2"></i>Adicionar Curso</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Adicionar Professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Agendar Evento</a></li>
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Help
                                    Center</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Terminar Sessão</a>
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
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 font-bold">Todos os Professores</h1>
                            <p class="text-muted text-sm">Gira e consulte todos os membros do corpo docente da sua instituição.</p>
                        </div>
                        <div>
                            <a href="add-professor.html" class="btn btn-primary">
                                <i class="bi bi-plus-lg me-2"></i>Adicionar Professor
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards Row -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-4">
                        <div class="stats-card">
                            <div class="stats-card-label">Total de Professores</div>
                            <div class="stats-card-value">156</div>
                            <span class="stats-card-change positive">+12 este mês</span>
                            <div class="progress-custom">
                                <div class="progress-bar-custom bg-primary" style="width: 80%"></div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card-label">Tempo Inteiro</div>
                            <div class="stats-card-value">89</div>
                            <span class="stats-card-change positive">+5 este mês</span>
                            <div class="progress-custom">
                                <div class="progress-bar-custom bg-success" style="width: 60%"></div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card-label">Tempo Parcial</div>
                            <div class="stats-card-value">67</div>
                            <span class="stats-card-change positive">+7 este mês</span>
                            <div class="progress-custom">
                                <div class="progress-bar-custom bg-warning" style="width: 40%"></div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card-label">Departments</div>
                            <div class="stats-card-value">24</div>
                            <span class="stats-card-change neutral">Sem alterações</span>
                            <div class="progress-custom">
                                <div class="progress-bar-custom bg-info" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Professors Cards -->
                <div class="dashboard-row">
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title mb-0">Professores em Destaque</h5>
                            <a href="#" class="text-primary text-sm">Ver Todos</a>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="dashboard-grid grid-cols-4 gap-4">
                                <!-- Professor Card 1 -->
                                <div class="professor-card">
                                    <div class="text-center mb-3">
                                        <img src="https://ui-avatars.com/api/?name=Dr.+Sarah+Johnson&background=0d6efd&color=fff"
                                            alt="Dr. Sarah Johnson" class="rounded-circle"
                                            style="width: 80px; height: 80px;" loading="lazy" decoding="async">
                                    </div>
                                    <div class="text-center">
                                        <h6 class="mb-1">Dr. Sarah Johnson</h6>
                                        <p class="text-muted text-sm mb-2">Ciências da Computação</p>
                                        <div class="mb-2">
                                            <span class="badge bg-success">Tempo Inteiro</span>
                                        </div>
                                        <div class="text-warning mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                            <span class="text-muted text-sm">(4.7)</span>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="professor-profile.html"
                                                class="btn btn-sm btn-outline-primary">Ver</a>
                                            <a href="edit-professor.html"
                                                class="btn btn-sm btn-outline-secondary">Editar</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Professor Card 2 -->
                                <div class="professor-card">
                                    <div class="text-center mb-3">
                                        <img src="https://ui-avatars.com/api/?name=Dr.+Emily+Rodriguez&background=dc3545&color=fff"
                                            alt="Dr. Emily Rodriguez" class="rounded-circle"
                                            style="width: 80px; height: 80px;" loading="lazy" decoding="async">
                                    </div>
                                    <div class="text-center">
                                        <h6 class="mb-1">Dr. Emily Rodriguez</h6>
                                        <p class="text-muted text-sm mb-2">Literatura Inglesa</p>
                                        <div class="mb-2">
                                            <span class="badge bg-warning">Tempo Parcial</span>
                                        </div>
                                        <div class="text-warning mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span class="text-muted text-sm">(4.9)</span>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="professor-profile.html"
                                                class="btn btn-sm btn-outline-primary">Ver</a>
                                            <a href="edit-professor.html"
                                                class="btn btn-sm btn-outline-secondary">Editar</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Professor Card 3 -->
                                <div class="professor-card">
                                    <div class="text-center mb-3">
                                        <img src="https://ui-avatars.com/api/?name=Dr.+James+Wilson&background=6f42c1&color=fff"
                                            alt="Dr. James Wilson" class="rounded-circle"
                                            style="width: 80px; height: 80px;" loading="lazy" decoding="async">
                                    </div>
                                    <div class="text-center">
                                        <h6 class="mb-1">Dr. James Wilson</h6>
                                        <p class="text-muted text-sm mb-2">Física</p>
                                        <div class="mb-2">
                                            <span class="badge bg-success">Tempo Inteiro</span>
                                        </div>
                                        <div class="text-warning mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                            <span class="text-muted text-sm">(4.4)</span>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="professor-profile.html"
                                                class="btn btn-sm btn-outline-primary">Ver</a>
                                            <a href="edit-professor.html"
                                                class="btn btn-sm btn-outline-secondary">Editar</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Professor Card 4 -->
                                <div class="professor-card">
                                    <div class="text-center mb-3">
                                        <img src="https://ui-avatars.com/api/?name=Dr.+Maria+Chen&background=28a745&color=fff"
                                            alt="Dr. Maria Chen" class="rounded-circle"
                                            style="width: 80px; height: 80px;" loading="lazy" decoding="async">
                                    </div>
                                    <div class="text-center">
                                        <h6 class="mb-1">Dr. Maria Chen</h6>
                                        <p class="text-muted text-sm mb-2">Matemática</p>
                                        <div class="mb-2">
                                            <span class="badge bg-success">Tempo Inteiro</span>
                                        </div>
                                        <div class="text-warning mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span class="text-muted text-sm">(4.8)</span>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="professor-profile.html"
                                                class="btn btn-sm btn-outline-primary">Ver</a>
                                            <a href="edit-professor.html"
                                                class="btn btn-sm btn-outline-secondary">Editar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professors Table -->
                <div class="dashboard-row">
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dashboard-card-title mb-0">Diretório de Professores</h5>
                                <div class="d-flex gap-2">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-funnel me-1"></i>Filtrar
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" data-filter="all">Todos os Professores</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#" data-filter="full-time">Tempo Inteiro</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#" data-filter="part-time">Tempo Parcial</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#" data-filter="senior">Nível Sénior</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#" data-filter="associate">Associate
                                                    Level</a></li>
                                            <li><a class="dropdown-item" href="#" data-filter="assistant">Assistant
                                                    Level</a></li>
                                        </ul>
                                    </div>
                                    <div class="input-group" style="width: 250px;">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Pesquisar professores...">
                                        <button class="btn btn-outline-secondary btn-sm" type="button"
                                            aria-label="Pesquisar">
                                            <i aria-hidden="true" class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="selectAll"
                                                        aria-label="Selecionar todos os professores">
                                                </div>
                                            </th>
                                            <th scope="col" class="border-0">Professor</th>
                                            <th scope="col" class="border-0">Departamento</th>
                                            <th scope="col" class="border-0">Cargo</th>
                                            <th scope="col" class="border-0">Tipo de Vínculo</th>
                                            <th scope="col" class="border-0">Cursos</th>
                                            <th scope="col" class="border-0">Classificação</th>
                                            <th scope="col" class="border-0">Estado</th>
                                            <th scope="col" class="border-0">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        aria-label="Selecionar professor">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr.+Sarah+Johnson&background=0d6efd&color=fff"
                                                        alt="Dr. Sarah Johnson" class="rounded-circle me-3"
                                                        style="width: 40px; height: 40px;" loading="lazy">
                                                    <div>
                                                        <div class="fw-medium">Dr. Sarah Johnson</div>
                                                        <small class="text-muted">s.johnson@sgschool.edu</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Ciências da Computação</td>
                                            <td>Professor</td>
                                            <td><span class="badge bg-success">Tempo Inteiro</span></td>
                                            <td>5 courses</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="me-1">4.8</span>
                                                    <div class="text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Ativo</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link text-decoration-none p-1" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="professor-profile.html"><i
                                                                    class="bi bi-eye me-2"></i>Ver Perfil</a></li>
                                                        <li><a class="dropdown-item" href="edit-professor.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar</a></li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-envelope me-2"></i>Enviar Mensagem</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Remover</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        aria-label="Selecionar professor">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr.+Michael+Chen&background=198754&color=fff"
                                                        alt="Dr. Michael Chen" class="rounded-circle me-3"
                                                        style="width: 40px; height: 40px;" loading="lazy">
                                                    <div>
                                                        <div class="fw-medium">Dr. Michael Chen</div>
                                                        <small class="text-muted">m.chen@sgschool.edu</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Matemática</td>
                                            <td>Professor Associado</td>
                                            <td><span class="badge bg-success">Tempo Inteiro</span></td>
                                            <td>4 courses</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="me-1">4.6</span>
                                                    <div class="text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-half"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Ativo</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link text-decoration-none p-1" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="professor-profile.html"><i
                                                                    class="bi bi-eye me-2"></i>Ver Perfil</a></li>
                                                        <li><a class="dropdown-item" href="edit-professor.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar</a></li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-envelope me-2"></i>Enviar Mensagem</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Remover</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        aria-label="Selecionar professor">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr.+Emily+Rodriguez&background=dc3545&color=fff"
                                                        alt="Dr. Emily Rodriguez" class="rounded-circle me-3"
                                                        style="width: 40px; height: 40px;" loading="lazy">
                                                    <div>
                                                        <div class="fw-medium">Dr. Emily Rodriguez</div>
                                                        <small class="text-muted">e.rodriguez@sgschool.edu</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Literatura Inglesa</td>
                                            <td>Professor Auxiliar</td>
                                            <td><span class="badge bg-warning">Tempo Parcial</span></td>
                                            <td>3 courses</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="me-1">4.9</span>
                                                    <div class="text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Ativo</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link text-decoration-none p-1" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="professor-profile.html"><i
                                                                    class="bi bi-eye me-2"></i>Ver Perfil</a></li>
                                                        <li><a class="dropdown-item" href="edit-professor.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar</a></li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-envelope me-2"></i>Enviar Mensagem</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Remover</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        aria-label="Selecionar professor">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr.+James+Wilson&background=6f42c1&color=fff"
                                                        alt="Dr. James Wilson" class="rounded-circle me-3"
                                                        style="width: 40px; height: 40px;" loading="lazy">
                                                    <div>
                                                        <div class="fw-medium">Dr. James Wilson</div>
                                                        <small class="text-muted">j.wilson@sgschool.edu</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Física</td>
                                            <td>Professor</td>
                                            <td><span class="badge bg-success">Tempo Inteiro</span></td>
                                            <td>4 courses</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="me-1">4.4</span>
                                                    <div class="text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-warning">De Licença</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link text-decoration-none p-1" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="professor-profile.html"><i
                                                                    class="bi bi-eye me-2"></i>Ver Perfil</a></li>
                                                        <li><a class="dropdown-item" href="edit-professor.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar</a></li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-envelope me-2"></i>Enviar Mensagem</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Remover</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        aria-label="Selecionar professor">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://ui-avatars.com/api/?name=Dr.+Lisa+Thompson&background=fd7e14&color=fff"
                                                        alt="Dr. Lisa Thompson" class="rounded-circle me-3"
                                                        style="width: 40px; height: 40px;" loading="lazy">
                                                    <div>
                                                        <div class="fw-medium">Dr. Lisa Thompson</div>
                                                        <small class="text-muted">l.thompson@sgschool.edu</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Biologia</td>
                                            <td>Professor Associado</td>
                                            <td><span class="badge bg-success">Tempo Inteiro</span></td>
                                            <td>6 courses</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="me-1">4.7</span>
                                                    <div class="text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-half"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Ativo</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link text-decoration-none p-1" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        aria-label="Mais opções">
                                                        <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="professor-profile.html"><i
                                                                    class="bi bi-eye me-2"></i>Ver Perfil</a></li>
                                                        <li><a class="dropdown-item" href="edit-professor.html"><i
                                                                    class="bi bi-pencil me-2"></i>Editar</a></li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-envelope me-2"></i>Enviar Mensagem</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i
                                                                    class="bi bi-trash me-2"></i>Remover</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="dashboard-card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted">A mostrar 1–5 de 156 professores</small>
                                </div>
                                <nav aria-label="Paginação dos professores">
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item disabled">
                                            <span class="page-link">Anterior</span>
                                        </li>
                                        <li class="page-item active">
                                            <span class="page-link">1</span>
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
                        <p class="mb-0">Criado com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Load JavaScript -->




</body>

</html>