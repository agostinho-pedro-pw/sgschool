<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sgSchool - Painel moderno de gestão educacional para universidades">
    <meta name="keywords" content="educação, painel, universidade, gestão, administração">
    <meta name="author" content="Agostinho">

    <!-- Pré-conexão a domínios externos -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">
    {{--Usei o include, para dinamizar a nomeação de nomes nas páginas--}}
    @include('layouts._include.dashboard.header', ['title' => 'Dashboard Principal'])

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">

    <!-- Bibliotecas base (Bootstrap e ícones) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Estilos específicos da página -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/dashboard.css') }}">
</head>

<body>
    <!-- Saltar para o conteúdo principal (acessibilidade) -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>

    <!-- Elementos necessários para o dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Barra lateral -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <h5 class="d-flex align-items-center gap-2 mb-0">
                    <i class="bi bi-mortarboard-fill"></i>
                    sgSchool
                </h5>
                <button type="button" class="sidebar-close" id="sidebarClose" aria-label="Fechar barra lateral">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>

        <nav class="sidebar-nav" aria-label="Navegação principal">
            <div class="menu-section">
                <div class="menu-section-title">Principal</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#dashboardSubmenu" aria-expanded="true">
                            <i class="bi bi-speedometer2"></i>
                            <span>Painel</span>
                        </a>
                        <ul id="dashboardSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link active" href="index.html">Painel v.1</a></li>
                            <li><a class="nav-link " href="#">Painel v.2</a></li>
                            <li><a class="nav-link " href="#">Painel v.3</a></li>
                            <li><a class="nav-link " href="#">Análises</a></li>
                            <li><a class="nav-link " href="#">Widgets</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('eventos') }}">
                            <i class="bi bi-calendar-event"></i>
                            <span>Eventos</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Académico</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#professorsSubmenu" aria-expanded="false">
                            <i class="bi bi-person-badge"></i>
                            <span>Professores</span>
                        </a>
                        <ul id="professorsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="{{ route('all-professors') }}">Todos os Professores</a></li>
                            <li><a class="nav-link " href="{{ route('add-professors') }}">Adicionar Professor</a></li>
                            <li><a class="nav-link " href="{{ route('edit-professors') }}">Editar Professor</a></li>
                            <li><a class="nav-link " href="{{ route('profile-professors') }}">Perfil do Professor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#studentsSubmenu" aria-expanded="false">
                            <i class="bi bi-people"></i>
                            <span>Estudantes</span>
                        </a>
                        <ul id="studentsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="{{ route('all-students') }}">Todos os Estudantes</a></li>
                            <li><a class="nav-link " href="{{ route('add-students') }}">Adicionar Estudante</a></li>
                            <li><a class="nav-link " href="{{ route('edit-students') }}">Editar Estudante</a></li>
                            <li><a class="nav-link " href="{{ route('profile-students') }}">Perfil do Estudante</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#coursesSubmenu" aria-expanded="false">
                            <i class="bi bi-book"></i>
                            <span>Cursos</span>
                        </a>
                        <ul id="coursesSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="{{ route('all-course') }}">Todos os Cursos</a></li>
                            <li><a class="nav-link " href="{{ route('add-courses') }}">Adicionar Curso</a></li>
                            <li><a class="nav-link " href="{{ route('edit-course') }}">Editar Curso</a></li>
                            <li><a class="nav-link " href="{{ route('course-info') }}">Informações do Curso</a></li>
                            <li><a class="nav-link " href="{{ route('course-payment')}} ">Pagamento do Curso</a></li>
                        </ul>
                    </li>
                    {{--De momento não quero lybary
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#librarySubmenu" aria-expanded="false">
                            <i class="bi bi-journal-bookmark"></i>
                            <span>Biblioteca</span>
                        </a>
                        <ul id="librarySubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="library-assets.html">Acervo da Biblioteca</a></li>
                            <li><a class="nav-link " href="add-library-assets.html">Adicionar Item ao Acervo</a></li>
                            <li><a class="nav-link " href="edit-library-assets.html">Editar Item do Acervo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#departmentsSubmenu" aria-expanded="false">
                            <i class="bi bi-building"></i>
                            <span>Departamentos</span>
                        </a>
                        <ul id="departmentsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="departments.html">Lista de Departamentos</a></li>
                            <li><a class="nav-link " href="add-department.html">Adicionar Departamento</a></li>
                            <li><a class="nav-link " href="edit-department.html">Editar Departamento</a></li>
                        </ul>
                    </li>
                </ul>
            </div>--}}
            <div class="menu-section">
                <div class="menu-section-title">Comunicação</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#mailboxSubmenu" aria-expanded="false">
                            <i class="bi bi-envelope"></i>
                            <span>Caixa de Correio</span>
                        </a>
                        <ul id="mailboxSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="{{ route('mailbox') }}">Caixa de Entrada</a></li>
                            <li><a class="nav-link " href="{{ route('mailbox-compose') }}">Escrever</a></li>
                            <li><a class="nav-link " href="{{ route('mailbox-view') }}">Ver Mensagem</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <!-- Contentor principal -->
    <div class="main-wrapper" id="mainWrapper">
        <!-- Cabeçalho -->
        <header class="navbar top-navbar">
            <div class="container-fluid d-flex align-items-center h-100">
                <!-- Menu hambúrguer -->
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Alternar barra lateral"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Navegação estrutural (desktop) -->
                <nav aria-label="Navegação estrutural do cabeçalho" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                        <li class="breadcrumb-item active">Painel</li>
                    </ol>
                </nav>

                <!-- Logótipo (mobile) -->
                <div class="navbar-brand d-lg-none fw-bold me-auto">Kiaalap</div>

                <!-- Espaçador (desktop) -->
                <div class="flex-grow-1 d-none d-lg-block"></div>

                <!-- Ações à direita -->
                <div class="d-flex align-items-center gap-2">
                    <!-- Pesquisa -->
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
                                <li><a class="dropdown-item" href="#">Matrícula de Estudantes</a></li>
                                <li><a class="dropdown-item" href="#">Gestão de Cursos</a></li>
                                <li><a class="dropdown-item" href="#">Lançamento de Notas</a></li>
                                <li><a class="dropdown-item" href="#">Diretório de Docentes</a></li>
                                <li><a class="dropdown-item" href="#">Recursos da Biblioteca</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Pesquisa Avançada</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Notificações -->
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
                                        <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-calendar-check text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">Novo Evento</div>
                                            <div class="text-muted small">Feira de Ciências a 15 de Março</div>
                                            <div class="text-muted small">há 5 minutos</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-check-circle text-success"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">Trabalho Submetido</div>
                                            <div class="text-muted small">O João submeteu o seu projeto</div>
                                            <div class="text-muted small">há 2 horas</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-warning bg-opacity-10 p-2 me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-exclamation-triangle text-warning"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="fw-semibold">Alerta do Sistema</div>
                                            <div class="text-muted small">Cópia de segurança da base de dados concluída
                                            </div>
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

                    <!-- Ações rápidas -->
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
                                        class="bi bi-person-badge me-2"></i>Adicionar Professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Agendar
                                    Evento</a></li>
                        </ul>
                    </div>

                    <!-- Menu do utilizador -->
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Definições</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Centro de
                                    Ajuda</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Terminar
                                    Sessão</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- Conteúdo principal -->
        <main class="dashboard-content" id="main-content">
            <div class="container-fluid">
                <!-- Cabeçalho da página -->
                <div class="mb-3">
                    <h1 class="h3 fw-bold">Visão Geral do Painel</h1>
                    <p class="text-muted small">Bem-vindo de volta! Veja o que está a acontecer na sua instituição hoje.
                    </p>
                </div>

                <!-- Linha de cartões de estatísticas -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-4">
                        <div class="stats-card">
                            <div class="stats-card-label">Tecnologias de Computação</div>
                            <div class="stats-card-value">$5,000</div>
                            <span class="stats-card-change positive">+20%</span>
                            <div class="progress-custom">
                                <div class="progress-bar-custom bg-success" style="width: 20%"></div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card-label">Contabilidade</div>
                            <div class="stats-card-value">$3,000</div>
                            <span class="stats-card-change positive">+30%</span>
                            <div class="progress-custom">
                                <div class="progress-bar-custom bg-danger" style="width: 30%"></div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card-label">Engenharia Eléctrica</div>
                            <div class="stats-card-value">$2,000</div>
                            <span class="stats-card-change positive">+60%</span>
                            <div class="progress-custom">
                                <div class="progress-bar-custom bg-info" style="width: 60%"></div>
                            </div>
                        </div>

                        <div class="stats-card">
                            <div class="stats-card-label">Engenharia Química</div>
                            <div class="stats-card-value">$3,500</div>
                            <span class="stats-card-change positive">+80%</span>
                            <div class="progress-custom">
                                <div class="progress-bar-custom bg-warning" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Linha de gráficos -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-3" style="grid-template-columns: 2fr 1fr;">
                        <!-- Gráfico principal -->
                        <div class="chart-wrapper">
                            <div class="dashboard-card-header">
                                <h5 class="dashboard-card-title">Receitas da Universidade</h5>
                            </div>
                            <div class="chart-container-main">
                                <canvas id="earningsChart"></canvas>
                            </div>
                        </div>

                        <!-- Estatísticas laterais -->
                        <div style="display: flex; flex-direction: column; gap: 24px;">
                            <div class="stats-card">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <div class="stats-card-label">Total de Visitas</div>
                                        <div class="stats-card-value">1,500</div>
                                    </div>
                                    <i class="bi bi-eye text-info" style="font-size: 24px;"></i>
                                </div>
                                <div class="chart-container-small">
                                    <canvas id="visitsSparkline"></canvas>
                                </div>
                            </div>

                            <div class="stats-card">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <div class="stats-card-label">Visualizações de Página</div>
                                        <div class="stats-card-value">3,000</div>
                                    </div>
                                    <i class="bi bi-file-text text-success" style="font-size: 24px;"></i>
                                </div>
                                <div class="chart-container-small">
                                    <canvas id="pageViewsSparkline"></canvas>
                                </div>
                            </div>

                            <div class="stats-card">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <div class="stats-card-label">Taxa de Rejeição</div>
                                        <div class="stats-card-value">42%</div>
                                    </div>
                                    <i class="bi bi-arrow-up-circle text-warning" style="font-size: 24px;"></i>
                                </div>
                                <div class="chart-container-small">
                                    <canvas id="bounceRateSparkline"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Atividade recente -->
                <div class="dashboard-grid grid-cols-2">
                    <!-- Estudantes recentes -->
                    <div class="dashboard-card">
                        <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                            <h5 class="dashboard-card-title mb-0">Estudantes Recentes</h5>
                            <a href="all-students.html" class="btn btn-outline-primary btn-sm">Ver Todos</a>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex align-items-center px-0 py-3">
                                    <img src="https://ui-avatars.com/api/?name=John+Smith&background=0d6efd&color=fff"
                                        alt="John Smith" class="rounded-circle me-3" width="40" height="40"
                                        loading="lazy">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">John Smith</h6>
                                        <small class="text-muted">Ciências da Computação - 1.º Ano</small>
                                        <div class="small text-muted">Matriculado há 2 horas</div>
                                    </div>
                                    <span class="badge bg-success">Activo</span>
                                </div>
                                <div class="list-group-item d-flex align-items-center px-0 py-3">
                                    <img src="https://ui-avatars.com/api/?name=Emily+Davis&background=198754&color=fff"
                                        alt="Emily Davis" class="rounded-circle me-3" width="40" height="40"
                                        loading="lazy">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Emily Davis</h6>
                                        <small class="text-muted">Biologia - 2.º Ano</small>
                                        <div class="small text-muted">Matriculada há 1 dia</div>
                                    </div>
                                    <span class="badge bg-success">Activo</span>
                                </div>
                                <div class="list-group-item d-flex align-items-center px-0 py-3">
                                    <img src="https://ui-avatars.com/api/?name=Michael+Brown&background=dc3545&color=fff"
                                        alt="Michael Brown" class="rounded-circle me-3" width="40" height="40"
                                        loading="lazy">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Michael Brown</h6>
                                        <small class="text-muted">Matemática - 3.º Ano</small>
                                        <div class="small text-muted">Matriculado há 3 dias</div>
                                    </div>
                                    <span class="badge bg-warning text-dark">Pendente</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cursos populares -->
                    <div class="dashboard-card">
                        <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                            <h5 class="dashboard-card-title mb-0">Cursos Populares</h5>
                            <a href="all-courses.html" class="btn btn-outline-primary btn-sm">Ver Todos</a>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex align-items-center px-0 py-3">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-code-slash" style="color: #0d6efd;"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Programação Avançada</h6>
                                        <small class="text-muted">Prof.ª Sarah Johnson</small>
                                        <div class="small text-muted">45 estudantes inscritos</div>
                                    </div>
                                    <span class="badge bg-success">85% Ocupado</span>
                                </div>
                                <div class="list-group-item d-flex align-items-center px-0 py-3">
                                    <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-calculator" style="color: #198754;"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Cálculo II</h6>
                                        <small class="text-muted">Prof. Michael Chen</small>
                                        <div class="small text-muted">38 estudantes inscritos</div>
                                    </div>
                                    <span class="badge bg-success">76% Ocupado</span>
                                </div>
                                <div class="list-group-item d-flex align-items-center px-0 py-3">
                                    <div class="bg-info bg-opacity-10 text-info rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-microscope" style="color: #0dcaf0;"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Laboratório de Biologia</h6>
                                        <small class="text-muted">Prof.ª Lisa Thompson</small>
                                        <div class="small text-muted">28 estudantes inscritos</div>
                                    </div>
                                    <span class="badge bg-warning text-dark">56% Ocupado</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Rodapé -->
        <footer class="dashboard-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2026 sgSCHOOL. Todos os direitos reservados.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-0">Feito com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts (Bootstrap, Chart.js e script do painel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
    <script src="{{ asset('dashboard/assets/js/main.js') }}"></script>

</body>

</html>