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

    <title>Eventos - Painel sgSchool</title>

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

        .event-card {
            border: none;
            transition: all .3s
        }

        .event-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px #0000001a
        }

        .event-date {
            writing-mode: vertical-rl;
            text-orientation: mixed
        }

        .calendar-mini {
            cursor: pointer;
            max-width: 100px;
            transition: transform .2s
        }

        .calendar-mini:hover {
            transform: scale(1.05)
        }

        .calendar-mini-modal {
            min-width: 60px
        }

        .calendar-mini-small {
            min-width: 32px
        }

        .event-status.upcoming {
            background: linear-gradient(45deg, #3b82f6, #1d4ed8)
        }

        .event-status.ongoing {
            background: linear-gradient(45deg, #10b981, #047857)
        }

        .event-status.completed {
            background: linear-gradient(45deg, #6b7280, #374151)
        }

        .timeline {
            padding-left: 2rem;
            position: relative
        }

        .timeline:before {
            content: "";
            background: #e5e7eb;
            width: 2px;
            position: absolute;
            top: 0;
            bottom: 0;
            left: .5rem
        }

        .timeline-item {
            margin-bottom: 1.5rem;
            position: relative
        }

        .timeline-item:before {
            content: "";
            background: #6366f1;
            border-radius: 50%;
            width: 10px;
            height: 10px;
            position: absolute;
            top: .25rem;
            left: -2rem
        }

        .timeline-time {
            color: #6366f1;
            margin-bottom: .5rem;
            font-weight: 600
        }

        .timeline-content {
            margin-left: 1rem
        }

        .stats-icon {
            border-radius: 12px;
            justify-content: center;
            align-items: center;
            width: 48px;
            height: 48px;
            font-size: 1.5rem;
            display: flex
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>

    <!-- Required DOM elements for dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>


    <!-- Sidebar, painel lateral do site usando include -->
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
                        <li class="breadcrumb-item active">Eventos</li>
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
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 mb-0 text-gray-800">Gestão de Eventos</h1>
                            <p class="text-muted mb-0">Gira e acompanhe os eventos e atividades da instituição</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary" id="calendarViewBtn">
                                <i class="bi bi-calendar-month me-1"></i> Vista de Calendário
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addEventModal">
                                <i class="bi bi-calendar-plus me-1"></i> Adicionar Evento
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Stats -->
                <div class="dashboard-row">
                    <h2 class="h5 fw-semibold text-gray-800 mb-4">Resumo dos Eventos</h2>
                    <div class="dashboard-grid grid-cols-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="text-muted mb-1 small">Total de Eventos</p>
                                        <h4 class="mb-0">28</h4>
                                    </div>
                                    <div class="stats-icon bg-primary bg-opacity-10 text-primary">
                                        <i class="bi bi-calendar-event-fill"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success-subtle text-success me-2">
                                        <i class="bi bi-arrow-up"></i> 8%
                                    </span>
                                    <span class="text-muted small">face ao mês passado</span>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="text-muted mb-1 small">Próximos</p>
                                        <h4 class="mb-0">12</h4>
                                    </div>
                                    <div class="stats-icon bg-info bg-opacity-10 text-info">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-info-subtle text-info me-2">
                                        <i class="bi bi-calendar-check"></i> Este mês
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="text-muted mb-1 small">Em Curso</p>
                                        <h4 class="mb-0">3</h4>
                                    </div>
                                    <div class="stats-icon bg-success bg-opacity-10 text-success">
                                        <i class="bi bi-play-circle-fill"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success-subtle text-success me-2">
                                        <i class="bi bi-activity"></i> Ativos agora
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="text-muted mb-1 small">Participantes</p>
                                        <h4 class="mb-0">1,247</h4>
                                    </div>
                                    <div class="stats-icon bg-warning bg-opacity-10 text-warning">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-warning-subtle text-warning me-2">
                                        <i class="bi bi-arrow-up"></i> 23%
                                    </span>
                                    <span class="text-muted small">face ao mês passado</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Calendar View (FullCalendar; loaded on demand via #calendarViewBtn) -->
                <div class="dashboard-row" id="calendarView" hidden>
                    <div class="dashboard-card">
                        <div class="dashboard-card-header py-4 px-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Calendário de Eventos</h6>
                                <button type="button" class="btn btn-sm btn-light" id="closeCalendarView">
                                    <i aria-hidden="true" class="bi bi-list-ul me-1"></i> Voltar à lista
                                </button>
                            </div>
                        </div>
                        <div class="dashboard-card-body p-4">
                            <div id="eventCalendar" aria-busy="true">
                                <p class="text-muted mb-0" id="calendarLoading">A carregar o calendário…</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Events List and Calendar -->
                <div class="dashboard-row" id="eventsListView">
                    <div class="dashboard-grid" style="grid-template-columns: 2fr 1fr;">
                        <!-- Events List -->
                        <div class="dashboard-card">
                            <div class="dashboard-card-header py-4 px-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Eventos Recentes</h6>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                            aria-label="Mais opções">
                                            <i aria-hidden="true" class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Ver Todos</a></li>
                                            <li><a class="dropdown-item" href="#">Exportar Lista</a></li>
                                            <li><a class="dropdown-item" href="#">Filtrar Eventos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-card-body p-0">
                                <div class="event-list">
                                    <!-- Event Item 1 -->
                                    <div class="d-flex align-items-center p-4 border-bottom hover-bg-light">
                                        <div
                                            class="calendar-mini bg-primary text-white rounded text-center me-3 flex-shrink-0 p-3">
                                            <div class="small fw-bold">MAR</div>
                                            <div class="h4 mb-0">15</div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Feira Anual de Ciências</h6>
                                            <p class="text-muted small mb-2">Students showcase their innovative projects
                                                and experiments</p>
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="badge bg-primary-subtle text-primary">Académico</span>
                                                <small class="text-muted">
                                                    <i class="bi bi-clock me-1"></i> 9:00 AM - 5:00 PM
                                                </small>
                                                <small class="text-muted">
                                                    <i class="bi bi-geo-alt me-1"></i> Auditório Principal
                                                </small>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge bg-info event-status upcoming">Próximos</span>
                                            <div class="mt-2">
                                                <small class="text-muted">124 inscritos</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Event Item 2 -->
                                    <div class="d-flex align-items-center p-4 border-bottom hover-bg-light">
                                        <div
                                            class="calendar-mini bg-success text-white rounded text-center me-3 flex-shrink-0 p-3">
                                            <div class="small fw-bold">MAR</div>
                                            <div class="h4 mb-0">12</div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Workshop de Desenvolvimento Docente</h6>
                                            <p class="text-muted small mb-2">Professional development session on modern
                                                teaching methodologies</p>
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="badge bg-success-subtle text-success">Profissional</span>
                                                <small class="text-muted">
                                                    <i class="bi bi-clock me-1"></i> 2:00 PM - 4:00 PM
                                                </small>
                                                <small class="text-muted">
                                                    <i class="bi bi-geo-alt me-1"></i> Conference Room A
                                                </small>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge bg-success event-status ongoing">Em Curso</span>
                                            <div class="mt-2">
                                                <small class="text-muted">45 participantes</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Event Item 3 -->
                                    <div class="d-flex align-items-center p-4 border-bottom hover-bg-light">
                                        <div
                                            class="calendar-mini bg-warning text-white rounded text-center me-3 flex-shrink-0 p-3">
                                            <div class="small fw-bold">MAR</div>
                                            <div class="h4 mb-0">18</div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Eleições do Conselho de Estudantes</h6>
                                            <p class="text-muted small mb-2">Annual elections for student
                                                representatives</p>
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="badge bg-warning-subtle text-warning">Vida Estudantil</span>
                                                <small class="text-muted">
                                                    <i class="bi bi-clock me-1"></i> 8:00 AM - 6:00 PM
                                                </small>
                                                <small class="text-muted">
                                                    <i class="bi bi-geo-alt me-1"></i> Todo o Campus
                                                </small>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge bg-info event-status upcoming">Próximos</span>
                                            <div class="mt-2">
                                                <small class="text-muted">Todos os estudantes são elegíveis</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Event Item 4 -->
                                    <div class="d-flex align-items-center p-4 border-bottom hover-bg-light">
                                        <div
                                            class="calendar-mini bg-info text-white rounded text-center me-3 flex-shrink-0 p-3">
                                            <div class="small fw-bold">MAR</div>
                                            <div class="h4 mb-0">22</div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Encontro de Networking de Antigos Alunos</h6>
                                            <p class="text-muted small mb-2">Connect current students with successful
                                                alumni</p>
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="badge bg-info-subtle text-info">Networking</span>
                                                <small class="text-muted">
                                                    <i class="bi bi-clock me-1"></i> 6:00 PM - 9:00 PM
                                                </small>
                                                <small class="text-muted">
                                                    <i class="bi bi-geo-alt me-1"></i> Student Center
                                                </small>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge bg-info event-status upcoming">Próximos</span>
                                            <div class="mt-2">
                                                <small class="text-muted">67 inscritos</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Event Item 5 -->
                                    <div class="d-flex align-items-center p-4">
                                        <div
                                            class="calendar-mini bg-secondary text-white rounded text-center me-3 flex-shrink-0 p-3">
                                            <div class="small fw-bold">MAR</div>
                                            <div class="h4 mb-0">08</div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Celebração do Dia Internacional da Mulher</h6>
                                            <p class="text-muted small mb-2">Honoring achievements of women in academia
                                                and research</p>
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="badge bg-secondary-subtle text-secondary">Cultural</span>
                                                <small class="text-muted">
                                                    <i class="bi bi-clock me-1"></i> 1:00 PM - 4:00 PM
                                                </small>
                                                <small class="text-muted">
                                                    <i class="bi bi-geo-alt me-1"></i> Grand Hall
                                                </small>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge bg-secondary event-status completed">Concluído</span>
                                            <div class="mt-2">
                                                <small class="text-muted">89 participantes</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mini Calendar and Quick Actions -->
                        <div class="d-flex flex-column gap-4">
                            <!-- Mini Calendar -->
                            <div class="dashboard-card">
                                <div class="dashboard-card-header py-3 px-4">
                                    <h6 class="mb-0">Março de 2024</h6>
                                </div>
                                <div class="dashboard-card-body px-4 py-3">
                                    <div class="calendar-grid">
                                        <div class="d-grid gap-1" style="grid-template-columns: repeat(7, 1fr);">
                                            <div class="text-center small text-muted fw-bold">S</div>
                                            <div class="text-center small text-muted fw-bold">M</div>
                                            <div class="text-center small text-muted fw-bold">T</div>
                                            <div class="text-center small text-muted fw-bold">W</div>
                                            <div class="text-center small text-muted fw-bold">T</div>
                                            <div class="text-center small text-muted fw-bold">F</div>
                                            <div class="text-center small text-muted fw-bold">S</div>

                                            <div class="text-center small text-muted">26</div>
                                            <div class="text-center small text-muted">27</div>
                                            <div class="text-center small text-muted">28</div>
                                            <div class="text-center small text-muted">29</div>
                                            <div class="text-center small">1</div>
                                            <div class="text-center small">2</div>
                                            <div class="text-center small">3</div>

                                            <div class="text-center small">4</div>
                                            <div class="text-center small">5</div>
                                            <div class="text-center small">6</div>
                                            <div class="text-center small">7</div>
                                            <div class="text-center small bg-secondary text-white rounded">8</div>
                                            <div class="text-center small">9</div>
                                            <div class="text-center small">10</div>

                                            <div class="text-center small">11</div>
                                            <div class="text-center small bg-success text-white rounded">12</div>
                                            <div class="text-center small bg-primary text-white rounded fw-bold">13
                                            </div>
                                            <div class="text-center small">14</div>
                                            <div class="text-center small bg-primary text-white rounded">15</div>
                                            <div class="text-center small">16</div>
                                            <div class="text-center small">17</div>

                                            <div class="text-center small bg-warning text-white rounded">18</div>
                                            <div class="text-center small">19</div>
                                            <div class="text-center small">20</div>
                                            <div class="text-center small">21</div>
                                            <div class="text-center small bg-info text-white rounded">22</div>
                                            <div class="text-center small">23</div>
                                            <div class="text-center small">24</div>

                                            <div class="text-center small">25</div>
                                            <div class="text-center small">26</div>
                                            <div class="text-center small">27</div>
                                            <div class="text-center small">28</div>
                                            <div class="text-center small">29</div>
                                            <div class="text-center small">30</div>
                                            <div class="text-center small">31</div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-primary rounded me-2" style="width: 12px; height: 12px;">
                                            </div>
                                            <small>Eventos Académicos</small>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-success rounded me-2" style="width: 12px; height: 12px;">
                                            </div>
                                            <small>Desenvolvimento Profissional</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-warning rounded me-2" style="width: 12px; height: 12px;">
                                            </div>
                                            <small>Atividades Estudantis</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Actions -->
                            <div class="dashboard-card">
                                <div class="dashboard-card-header py-3 px-4">
                                    <h6 class="mb-0">Ações Rápidas</h6>
                                </div>
                                <div class="dashboard-card-body px-4 py-3">
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#addEventModal">
                                            <i class="bi bi-calendar-plus me-1"></i> Agendar Evento
                                        </button>
                                        <button type="button" class="btn btn-outline-success btn-sm">
                                            <i class="bi bi-people me-1"></i> Gerir Participantes
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-sm">
                                            <i class="bi bi-geo-alt me-1"></i> Reservar Espaços
                                        </button>
                                        <button type="button" class="btn btn-outline-warning btn-sm">
                                            <i class="bi bi-bell me-1"></i> Enviar Lembretes
                                        </button>
                                    </div>
                                </div>
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

    <!-- Event Details Modal -->
    <div class="modal fade" id="eventDetailsModal" tabindex="-1" aria-labelledby="eventDetailsModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <div class="d-flex align-items-center">
                        <div class="calendar-mini-modal bg-white text-primary rounded text-center me-3 p-2">
                            <div class="small fw-bold" id="modalEventMonth">MAR</div>
                            <div class="h5 mb-0" id="modalEventDay">15</div>
                        </div>
                        <div>
                            <h5 class="modal-title mb-0" id="eventDetailsModalLabel">Feira Anual de Ciências</h5>
                            <small class="opacity-75" id="modalEventTime">9:00 AM - 5:00 PM</small>
                        </div>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h6 class="text-muted mb-2">Descrição do Evento</h6>
                                <p id="modalEventDescription" class="mb-0">Students showcase their innovative projects
                                    and experiments in this annual celebration of scientific achievement and discovery.
                                </p>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h6 class="text-muted mb-2">Localização</h6>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-geo-alt text-primary me-2"></i>
                                        <span id="modalEventLocation">Auditório Principal</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="text-muted mb-2">Categoria</h6>
                                    <span class="badge bg-primary-subtle text-primary"
                                        id="modalEventCategory">Académico</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="text-muted mb-2">Programa do Evento</h6>
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="timeline-time">9:00 AM</div>
                                        <div class="timeline-content">
                                            <strong>Inscrição e Boas-vindas</strong>
                                            <p class="text-muted small mb-0">Receção e bebidas de boas-vindas</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-time">10:00 AM</div>
                                        <div class="timeline-content">
                                            <strong>Cerimónia de Abertura</strong>
                                            <p class="text-muted small mb-0">Discurso de boas-vindas do Diretor de Ciências</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-time">11:00 AM</div>
                                        <div class="timeline-content">
                                            <strong>Apresentações de Projetos</strong>
                                            <p class="text-muted small mb-0">Demonstrações e exposições dos projetos dos estudantes
                                            </p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-time">3:00 PM</div>
                                        <div class="timeline-content">
                                            <strong>Cerimónia de Entrega de Prémios</strong>
                                            <p class="text-muted small mb-0">Reconhecimento dos projetos de excelência</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <h6 class="text-muted mb-2">Organizadores do Evento</h6>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Dr+Sarah+Johnson&background=6366f1&color=fff&size=32"
                                            class="rounded-circle me-2" width="32" height="32" alt="Dr. Sarah Johnson"
                                            loading="lazy" decoding="async">
                                        <div>
                                            <div class="fw-semibold small">Dr. Sarah Johnson</div>
                                            <div class="text-muted small">Chefe do Departamento de Ciências</div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Prof+Michael+Chen&background=10b981&color=fff&size=32"
                                            class="rounded-circle me-2" width="32" height="32" alt="Prof. Michael Chen"
                                            loading="lazy" decoding="async">
                                        <div>
                                            <div class="fw-semibold small">Prof. Michael Chen</div>
                                            <div class="text-muted small">Coordenador do Evento</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-light border-0">
                                <div class="card-header bg-transparent border-0">
                                    <h6 class="mb-0">Estado do Evento</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Estado da Inscrição</span>
                                        <span class="badge bg-success" id="modalEventStatus">Próximos</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Inscrito</span>
                                        <span class="fw-bold" id="modalEventRegistered">124 / 200</span>
                                    </div>
                                    <div class="progress mb-3" style="height: 8px;">
                                        <div class="progress-bar bg-success" style="width: 62%" id="modalEventProgress">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="bi bi-calendar-plus me-1"></i> Adicionar ao Calendário
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm">
                                            <i class="bi bi-share me-1"></i> Partilhar Evento
                                        </button>
                                        <button type="button" class="btn btn-outline-info btn-sm">
                                            <i class="bi bi-people me-1"></i> Ver Participantes
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted mb-3">Eventos Relacionados</h6>
                                <div class="small">
                                    <div class="d-flex align-items-center mb-2 p-2 bg-light rounded">
                                        <div
                                            class="calendar-mini-small bg-info text-white rounded text-center me-2 p-1">
                                            <div style="font-size: 0.6rem;">MAR</div>
                                            <div style="font-size: 0.8rem;">22</div>
                                        </div>
                                        <div>
                                            <div class="fw-semibold">Encontro de Antigos Alunos</div>
                                            <div class="text-muted" style="font-size: 0.75rem;">6:00 PM</div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-2 bg-light rounded">
                                        <div
                                            class="calendar-mini-small bg-warning text-white rounded text-center me-2 p-1">
                                            <div style="font-size: 0.6rem;">MAR</div>
                                            <div style="font-size: 0.8rem;">18</div>
                                        </div>
                                        <div>
                                            <div class="fw-semibold">Eleições de Estudantes</div>
                                            <div class="text-muted" style="font-size: 0.75rem;">8:00 AM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-warning">
                        <i class="bi bi-pencil me-1"></i> Editar Evento
                    </button>
                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-person-plus me-1"></i> Inscrever-se no Evento
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Event Modal -->
    <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventModalLabel">Criar Novo Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <form id="addEventForm">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="eventTitle" class="form-label">Título do Evento</label>
                                    <input type="text" class="form-control" id="eventTitle" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="eventCategory" class="form-label">Categoria</label>
                                    <select class="form-select" id="eventCategory" required>
                                        <option value="">Selecionar Categoria</option>
                                        <option value="academic">Académico</option>
                                        <option value="professional">Profissional</option>
                                        <option value="student-life">Vida Estudantil</option>
                                        <option value="networking">Networking</option>
                                        <option value="cultural">Cultural</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="eventDescription" class="form-label">Descrição</label>
                            <textarea class="form-control" id="eventDescription" rows="3"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="eventDate" class="form-label">Data</label>
                                    <input type="date" class="form-control" id="eventDate" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="eventStartTime" class="form-label">Hora de Início</label>
                                    <input type="time" class="form-control" id="eventStartTime" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="eventEndTime" class="form-label">Hora de Fim</label>
                                    <input type="time" class="form-control" id="eventEndTime" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="eventLocation" class="form-label">Localização</label>
                                    <input type="text" class="form-control" id="eventLocation" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="eventCapacity" class="form-label">Capacidade</label>
                                    <input type="number" class="form-control" id="eventCapacity" min="1">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="registrationRequired">
                                <label class="form-check-label" for="registrationRequired">
                                    Inscrição Obrigatória
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" form="addEventForm" class="btn btn-primary">Criar Evento</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Event data for demonstration
    const eventData = {
        '15': {
            title: 'Annual Science Fair',
            month: 'MAR',
            day: '15',
            time: '9:00 AM - 5:00 PM',
            description: 'Students showcase their innovative projects and experiments in this annual celebration of scientific achievement and discovery.',
            location: 'Main Auditorium',
            category: 'Academic',
            categoryClass: 'bg-primary-subtle text-primary',
            status: 'Upcoming',
            statusClass: 'bg-info',
            registered: '124 / 200',
            progress: '62%',
            headerClass: 'bg-primary'
        },
        '12': {
            title: 'Faculty Development Workshop',
            month: 'MAR',
            day: '12',
            time: '2:00 PM - 4:00 PM',
            description: 'Professional development session on modern teaching methodologies and innovative educational technologies.',
            location: 'Conference Room A',
            category: 'Professional',
            categoryClass: 'bg-success-subtle text-success',
            status: 'Ongoing',
            statusClass: 'bg-success',
            registered: '45 / 50',
            progress: '90%',
            headerClass: 'bg-success'
        },
        '18': {
            title: 'Student Council Elections',
            month: 'MAR',
            day: '18',
            time: '8:00 AM - 6:00 PM',
            description: 'Annual elections for student representatives across all departments and academic levels.',
            location: 'Campus Wide',
            category: 'Student Life',
            categoryClass: 'bg-warning-subtle text-warning',
            status: 'Upcoming',
            statusClass: 'bg-info',
            registered: 'All students eligible',
            progress: '0%',
            headerClass: 'bg-warning'
        },
        '22': {
            title: 'Alumni Networking Event',
            month: 'MAR',
            day: '22',
            time: '6:00 PM - 9:00 PM',
            description: 'Connect current students with successful alumni from various industries and career paths.',
            location: 'Student Center',
            category: 'Networking',
            categoryClass: 'bg-info-subtle text-info',
            status: 'Upcoming',
            statusClass: 'bg-info',
            registered: '67 / 100',
            progress: '67%',
            headerClass: 'bg-info'
        },
        '08': {
            title: 'International Women\'s Day Celebration',
            month: 'MAR',
            day: '08',
            time: '1:00 PM - 4:00 PM',
            description: 'Honoring achievements of women in academia and research with inspiring talks and panel discussions.',
            location: 'Grand Hall',
            category: 'Cultural',
            categoryClass: 'bg-secondary-subtle text-secondary',
            status: 'Completed',
            statusClass: 'bg-secondary',
            registered: '89 attended',
            progress: '100%',
            headerClass: 'bg-secondary'
        }
    };

    // Event management functionality
    const addEventForm = document.getElementById('addEventForm');
    const calendarViewBtn = document.getElementById('calendarViewBtn');
    const eventDetailsModal = new bootstrap.Modal(document.getElementById('eventDetailsModal'));

    // Single place that fills the details modal — previously duplicated between
    // the mini-calendar tiles and the month-grid dates, and now also reused by
    // the FullCalendar view.
    function showEventDetails(day) {
        const event = eventData[day];
        if (!event) return;

        document.getElementById('modalEventMonth').textContent = event.month;
        document.getElementById('modalEventDay').textContent = event.day;
        document.getElementById('eventDetailsModalLabel').textContent = event.title;
        document.getElementById('modalEventTime').textContent = event.time;
        document.getElementById('modalEventDescription').textContent = event.description;
        document.getElementById('modalEventLocation').textContent = event.location;
        document.getElementById('modalEventCategory').textContent = event.category;
        document.getElementById('modalEventCategory').className = `badge ${event.categoryClass}`;
        document.getElementById('modalEventStatus').textContent = event.status;
        document.getElementById('modalEventStatus').className = `badge ${event.statusClass}`;
        document.getElementById('modalEventRegistered').textContent = event.registered;
        document.getElementById('modalEventProgress').style.width = event.progress;

        const modalHeader = document.querySelector('#eventDetailsModal .modal-header');
        modalHeader.className = `modal-header ${event.headerClass} text-white`;

        eventDetailsModal.show();
    }


    // Handle clicking on calendar mini elements
    const calendarMinis = document.querySelectorAll('.calendar-mini');
    calendarMinis.forEach(mini => {
        mini.addEventListener('click', function() {
            // Extract day from the calendar mini element
            const dayElement = this.querySelector('.h4');
            const day = dayElement.textContent.trim();

            // Get event data for this day
            const event = eventData[day];
            if (event) {
                showEventDetails(day);
            }
        });
    });

    // Handle event form submission
    if (addEventForm) {
        const createEventBtn = document.querySelector('#addEventModal .btn-primary');
        createEventBtn.addEventListener('click', function() {
            const formData = new FormData(addEventForm);

            // Basic validation
            const title = document.getElementById('eventTitle').value;
            const category = document.getElementById('eventCategory').value;
            const date = document.getElementById('eventDate').value;
            const startTime = document.getElementById('eventStartTime').value;
            const location = document.getElementById('eventLocation').value;

            if (!title || !category || !date || !startTime || !location) {
                alert('Preencha todos os campos obrigatórios.');
                return;
            }

            // Here you would typically send the data to your backend
            console.log('Creating event:', {
                title,
                category,
                date,
                startTime,
                location
            });

            // Close modal and reset form
            const modal = bootstrap.Modal.getInstance(document.getElementById('addEventModal'));
            modal.hide();
            addEventForm.reset();

            // Show success message
            alert('Evento criado com sucesso!');
        });
    }

    // Calendar view toggle — FullCalendar is fetched the first time the user
    // asks for it, so the ~40 kB gz chunk never loads for visitors who stay on
    // the list view.
    const calendarView = document.getElementById('calendarView');
    const eventsListView = document.getElementById('eventsListView');
    const closeCalendarView = document.getElementById('closeCalendarView');
    let calendar = null;

    // The month is hardcoded across this demo's fixtures.
    const EVENT_MONTH = '2024-03';

    const CATEGORY_COLOURS = {
        Academic: '#0d6efd',
        Professional: '#198754',
        Cultural: '#ffc107',
        Networking: '#0dcaf0'
    };

    function eventsForCalendar() {
        return Object.entries(eventData).map(([day, e]) => ({
            id: day,
            title: e.title,
            start: `${EVENT_MONTH}-${day}`,
            allDay: true,
            backgroundColor: CATEGORY_COLOURS[e.category] || '#6c757d',
            borderColor: CATEGORY_COLOURS[e.category] || '#6c757d'
        }));
    }

    async function showCalendar() {
        eventsListView.hidden = true;
        calendarView.hidden = false;

        if (calendar) return;

        const host = document.getElementById('eventCalendar');
        try {
            const { Calendar, plugins } = await window.Kiaalap.load('fullcalendar');

            host.innerHTML = '';
            calendar = new Calendar(host, {
                plugins,
                initialView: 'dayGridMonth',
                initialDate: `${EVENT_MONTH}-01`,
                height: 640,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,listMonth'
                },
                events: eventsForCalendar(),
                eventClick(info) {
                    info.jsEvent.preventDefault();
                    showEventDetails(info.event.id);
                }
            });
            calendar.render();
            host.setAttribute('aria-busy', 'false');
        } catch (err) {
            console.error('Failed to load the calendar:', err);
            host.innerHTML =
                '<div class="alert alert-warning mb-0">Não foi possível carregar o calendário. Tente novamente.</div>';
            host.setAttribute('aria-busy', 'false');
        }
    }

    function showList() {
        calendarView.hidden = true;
        eventsListView.hidden = false;
    }

    if (calendarViewBtn) {
        calendarViewBtn.addEventListener('click', showCalendar);
    }
    if (closeCalendarView) {
        closeCalendarView.addEventListener('click', showList);
    }

    // Event card hover effects
    const eventItems = document.querySelectorAll('.event-list > div');
    eventItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#f8f9fa';
        });

        item.addEventListener('mouseleave', function() {
            this.style.backgroundColor = '';
        });
    });

    // Mini calendar date clicks in the calendar widget
    const calendarDates = document.querySelectorAll('.calendar-grid .text-center:not(.text-muted)');
    calendarDates.forEach(date => {
        if (date.classList.contains('bg-primary') || date.classList.contains('bg-success') ||
            date.classList.contains('bg-warning') || date.classList.contains('bg-info') ||
            date.classList.contains('bg-secondary')) {
            date.style.cursor = 'pointer';
            date.addEventListener('click', function() {
                const day = this.textContent.trim();
                const event = eventData[day];
                if (event) {
                showEventDetails(day);
            } else {
                    alert(`Não há eventos agendados para março ${day}`);
                }
            });
        }
    });
});
    </script>

    <!-- Load JavaScript -->




</body>

</html>