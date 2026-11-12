<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sgSchool - Plataforma moderna de gestão escolar para instituições de ensino">
    <meta name="keywords" content="educação, painel, ensino, gestão, administração">
    <meta name="author" content="Agostinho Pedro">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    <title>Elementos avançados de formulário - Painel sgSchool</title>

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
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <h5>
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
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#dashboardSubmenu" aria-expanded="false">
                            <i class="bi bi-speedometer2"></i>
                            <span>Painel</span>
                        </a>
                        <ul id="dashboardSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="index.html">Painel v.1</a></li>
                            <li><a class="nav-link " href="index-1.html">Painel v.2</a></li>
                            <li><a class="nav-link " href="index-2.html">Painel v.3</a></li>
                            <li><a class="nav-link " href="analytics.html">Análise de dados</a></li>
                            <li><a class="nav-link " href="widgets.html">Elementos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="events.html">
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
                            <li><a class="nav-link " href="all-professors.html">Todos os professores</a></li>
                            <li><a class="nav-link " href="add-professor.html">Adicionar professor</a></li>
                            <li><a class="nav-link " href="edit-professor.html">Editar professor</a></li>
                            <li><a class="nav-link " href="professor-profile.html">Perfil do professor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#studentsSubmenu" aria-expanded="false">
                            <i class="bi bi-people"></i>
                            <span>Estudantes</span>
                        </a>
                        <ul id="studentsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="all-students.html">Todos os estudantes</a></li>
                            <li><a class="nav-link " href="add-student.html">Adicionar estudante</a></li>
                            <li><a class="nav-link " href="edit-student.html">Editar estudante</a></li>
                            <li><a class="nav-link " href="student-profile.html">Perfil do estudante</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#coursesSubmenu" aria-expanded="false">
                            <i class="bi bi-book"></i>
                            <span>Cursos</span>
                        </a>
                        <ul id="coursesSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="all-courses.html">Todos os cursos</a></li>
                            <li><a class="nav-link " href="add-course.html">Adicionar curso</a></li>
                            <li><a class="nav-link " href="edit-course.html">Editar curso</a></li>
                            <li><a class="nav-link " href="course-info.html">Informações do curso</a></li>
                            <li><a class="nav-link " href="course-payment.html">Pagamento do curso</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#librarySubmenu" aria-expanded="false">
                            <i class="bi bi-journal-bookmark"></i>
                            <span>Biblioteca</span>
                        </a>
                        <ul id="librarySubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="library-assets.html">Recursos da biblioteca</a></li>
                            <li><a class="nav-link " href="add-library-assets.html">Adicionar recurso da biblioteca</a></li>
                            <li><a class="nav-link " href="edit-library-assets.html">Editar recurso da biblioteca</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#departmentsSubmenu" aria-expanded="false">
                            <i class="bi bi-building"></i>
                            <span>Departamentos</span>
                        </a>
                        <ul id="departmentsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="departments.html">Lista de departamentos</a></li>
                            <li><a class="nav-link " href="add-department.html">Adicionar departamento</a></li>
                            <li><a class="nav-link " href="edit-department.html">Editar departamento</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Comunicação</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#mailboxSubmenu" aria-expanded="false">
                            <i class="bi bi-envelope"></i>
                            <span>Correio</span>
                        </a>
                        <ul id="mailboxSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="mailbox.html">Caixa de entrada</a></li>
                            <li><a class="nav-link " href="mailbox-compose.html">Redigir</a></li>
                            <li><a class="nav-link " href="mailbox-view.html">Ver mensagem</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Interface</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#componentsSubmenu" aria-expanded="false">
                            <i class="bi bi-layout-wtf"></i>
                            <span>Componentes</span>
                        </a>
                        <ul id="componentsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="buttons.html">Botões</a></li>
                            <li><a class="nav-link " href="alerts.html">Alertas</a></li>
                            <li><a class="nav-link " href="modals.html">Modais</a></li>
                            <li><a class="nav-link " href="tabs.html">Separadores</a></li>
                            <li><a class="nav-link " href="accordion.html">Acordeão</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#formsSubmenu" aria-expanded="true">
                            <i class="bi bi-card-list"></i>
                            <span>Formulários</span>
                        </a>
                        <ul id="formsSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link " href="basic-form-element.html">Formulários básicos</a></li>
                            <li><a class="nav-link active" href="advance-form-element.html">Formulários avançados</a></li>
                            <li><a class="nav-link " href="password-meter.html">Indicador de segurança da palavra-passe</a></li>
                            <li><a class="nav-link " href="multi-upload.html">Carregamento de ficheiros</a></li>
                            <li><a class="nav-link " href="images-cropper.html">Recortador de imagens</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#chartsSubmenu" aria-expanded="false">
                            <i class="bi bi-bar-chart"></i>
                            <span>Gráficos</span>
                        </a>
                        <ul id="chartsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="line-charts.html">Gráficos de linhas</a></li>
                            <li><a class="nav-link " href="area-charts.html">Gráficos de área</a></li>
                            <li><a class="nav-link " href="bar-charts.html">Gráficos de barras</a></li>
                            <li><a class="nav-link " href="c3.html">Gráficos C3</a></li>
                            <li><a class="nav-link " href="peity.html">Gráficos Peity</a></li>
                            <li><a class="nav-link " href="rounded-chart.html">Gráficos arredondados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#tablesSubmenu" aria-expanded="false">
                            <i class="bi bi-table"></i>
                            <span>Tabelas</span>
                        </a>
                        <ul id="tablesSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="static-table.html">Tabelas estáticas</a></li>
                            <li><a class="nav-link " href="data-table.html">Tabelas de dados</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Ferramentas de desenvolvimento</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="code-editor.html">
                            <i class="bi bi-code-slash"></i>
                            <span>Editor de código</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#uiToolsSubmenu" aria-expanded="false">
                            <i class="bi bi-tools"></i>
                            <span>Componentes da interface</span>
                        </a>
                        <ul id="uiToolsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="preloader.html">Indicadores de carregamento</a></li>
                            <li><a class="nav-link " href="notifications.html">Notificações</a></li>
                            <li><a class="nav-link " href="tree-view.html">Vista em árvore</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#viewersSubmenu" aria-expanded="false">
                            <i class="bi bi-eye"></i>
                            <span>Visualizadores</span>
                        </a>
                        <ul id="viewersSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="pdf-viewer.html">Visualizador de PDF</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#mapsSubmenu" aria-expanded="false">
                            <i class="bi bi-map"></i>
                            <span>Mapas</span>
                        </a>
                        <ul id="mapsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="google-map.html">Mapas interativos</a></li>
                            <li><a class="nav-link " href="data-maps.html">Mapas de dados</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-section-title">Páginas</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#authSubmenu" aria-expanded="false">
                            <i class="bi bi-shield-lock"></i>
                            <span>Autenticação</span>
                        </a>
                        <ul id="authSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="login.html">Iniciar sessão</a></li>
                            <li><a class="nav-link " href="register.html">Registar</a></li>
                            <li><a class="nav-link " href="lock.html">Lock Screen</a></li>
                            <li><a class="nav-link " href="password-recovery.html">Recuperar palavra-passe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#errorsSubmenu" aria-expanded="false">
                            <i class="bi bi-exclamation-triangle"></i>
                            <span>Páginas de erro</span>
                        </a>
                        <ul id="errorsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="404.html">Erro 404</a></li>
                            <li><a class="nav-link " href="500.html">Erro 500</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
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
                <nav aria-label="Migalhas de pão do cabeçalho" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Página inicial</a></li>
                        <li class="breadcrumb-item active">Elementos avançados de formulário</li>
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
                                <li><a class="dropdown-item" href="#">Registo de estudantes</a></li>
                                <li><a class="dropdown-item" href="#">Gestão de cursos</a></li>
                                <li><a class="dropdown-item" href="#">Grade Submission</a></li>
                                <li><a class="dropdown-item" href="#">Diretório do corpo docente</a></li>
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
                                            <div class="text-muted small">Feira de ciência a 15 de março</div>
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
                                            <div class="text-muted small">O John submeteu o trabalho</div>
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
                                            <div class="fw-semibold">Alerta do sistema</div>
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
                                        class="bi bi-person-plus me-2"></i>Adicionar estudante</a></li>
                            <li><a class="dropdown-item" href="add-course.html"><i class="bi bi-book me-2"></i>Adicionar
                                    curso</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Adicionar professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Agendar
                                    evento</a></li>
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Centro de
                                    ajuda</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Terminar sessão</a>
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
                    <h1 class="h3 font-bold">Elementos avançados de formulário</h1>
                    <p class="text-muted text-sm">Create sophisticated forms with advanced input controls and
                        validation.</p>
                </div>

                <!-- Advanced Form Content -->
                <div class="dashboard-row">
                    <!-- Date and Time Pickers -->
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title">Seletores de data e hora</h5>
                            <p class="text-muted small mb-0">Vários controlos de data e hora</p>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="dashboard-grid grid-cols-2">
                                <div class="form-group">
                                    <label for="datePicker" class="form-label">Seletor de data</label>
                                    <input type="date" class="form-control" id="datePicker" value="2025-01-15">
                                    <div class="form-text">Selecione uma data específica</div>
                                </div>
                                <div class="form-group">
                                    <label for="timePicker" class="form-label">Seletor de hora</label>
                                    <input type="time" class="form-control" id="timePicker" value="14:30">
                                    <div class="form-text">Selecione uma hora específica</div>
                                </div>
                                <div class="form-group">
                                    <label for="datetimePicker" class="form-label">Data e hora locais</label>
                                    <input type="datetime-local" class="form-control" id="datetimePicker"
                                        value="2025-01-15T14:30">
                                    <div class="form-text">Selecione data e hora em conjunto</div>
                                </div>
                                <div class="form-group">
                                    <label for="monthPicker" class="form-label">Seletor de mês</label>
                                    <input type="month" class="form-control" id="monthPicker" value="2025-01">
                                    <div class="form-text">Selecione um mês e um ano</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-row">
                    <!-- Color and Range Inputs -->
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title">Controlos de cor e intervalo</h5>
                            <p class="text-muted small mb-0">Controlos visuais para cores e intervalos</p>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="dashboard-grid grid-cols-2">
                                <div class="form-group">
                                    <label for="colorPicker" class="form-label">Seletor de cor</label>
                                    <div class="d-flex gap-2 align-items-center">
                                        <input type="color" class="form-control form-control-color" id="colorPicker"
                                            value="#0d6efd">
                                        <input type="text" class="form-control flex-grow-1" id="colorHex"
                                            value="#0d6efd" readonly>
                                    </div>
                                    <div class="form-text">Escolha uma cor para o tema</div>
                                </div>
                                <div class="form-group">
                                    <label for="rangeSlider" class="form-label">Controlo deslizante</label>
                                    <input type="range" class="form-range" id="rangeSlider" min="0" max="100"
                                        value="50">
                                    <div class="d-flex justify-content-between small text-muted">
                                        <span>0</span>
                                        <span id="rangeValue">50</span>
                                        <span>100</span>
                                    </div>
                                    <div class="form-text">Ajuste o valor com o controlo deslizante</div>
                                </div>
                                <div class="form-group">
                                    <label for="volumeRange" class="form-label">Controlo do volume</label>
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="bi bi-volume-mute"></i>
                                        <input type="range" class="form-range flex-grow-1" id="volumeRange" min="0"
                                            max="100" value="75">
                                        <i class="bi bi-volume-up"></i>
                                    </div>
                                    <div class="form-text">Controlar o volume do áudio</div>
                                </div>
                                <div class="form-group">
                                    <label for="progressRange" class="form-label">Indicador de progresso</label>
                                    <input type="range" class="form-range" id="progressRange" min="0" max="100"
                                        value="25">
                                    <div class="progress mt-2" style="height: 8px;">
                                        <div class="progress-bar" id="progressBar" role="progressbar"
                                            style="width: 25%"></div>
                                    </div>
                                    <div class="form-text">Representação visual do progresso</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-row">
                    <!-- Advanced Select Elements -->
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title">Elementos avançados de seleção</h5>
                            <p class="text-muted small mb-0">Controlos melhorados de listas pendentes e seleção múltipla</p>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="dashboard-grid grid-cols-2">
                                <div class="form-group">
                                    <label for="multiSelect" class="form-label">Seleção múltipla</label>
                                    <select class="form-select" id="multiSelect" multiple size="4">
                                        <option value="cs">Ciência Informática</option>
                                        <option value="math">Matemática</option>
                                        <option value="physics">Física</option>
                                        <option value="chemistry">Química</option>
                                        <option value="biology">Biologia</option>
                                        <option value="engineering">Engenharia</option>
                                    </select>
                                    <div class="form-text">Mantenha Ctrl/Cmd premido para selecionar várias opções</div>
                                </div>
                                <div class="form-group">
                                    <label for="searchableSelect" class="form-label">Lista de seleção pesquisável</label>
                                    <select class="form-select" id="searchableSelect">
                                        <option value="">Escolha um país...</option>
                                        <option value="us">Estados Unidos</option>
                                        <option value="uk">Reino Unido</option>
                                        <option value="ca">Canadá</option>
                                        <option value="au">Austrália</option>
                                        <option value="de">Alemanha</option>
                                        <option value="fr">França</option>
                                        <option value="jp">Japão</option>
                                        <option value="kr">Coreia do Sul</option>
                                    </select>
                                    <div class="form-text">Lista pendente pesquisável com filtros</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Etiquetas de departamento</label>
                                    <div class="form-control" style="min-height: 50px;">
                                        <div class="d-flex flex-wrap gap-1">
                                            <span class="badge bg-primary">Ciência Informática</span>
                                            <span class="badge bg-success">Matemática</span>
                                            <span class="badge bg-info">Física</span>
                                            <input type="text" class="border-0 outline-0 flex-grow-1"
                                                placeholder="Adicionar etiqueta..." style="min-width: 100px;">
                                        </div>
                                    </div>
                                    <div class="form-text">Escreva e prima Enter para adicionar etiquetas</div>
                                </div>
                                <div class="form-group">
                                    <label for="groupedSelect" class="form-label">Opções agrupadas</label>
                                    <select class="form-select" id="groupedSelect">
                                        <option value="">Escolha um curso...</option>
                                        <optgroup label="Ciência Informática">
                                            <option value="cs101">Introdução à programação</option>
                                            <option value="cs201">Estruturas de Dados</option>
                                            <option value="cs301">Algoritmos</option>
                                        </optgroup>
                                        <optgroup label="Matemática">
                                            <option value="math101">Cálculo I</option>
                                            <option value="math201">Álgebra Linear</option>
                                            <option value="math301">Equações Diferenciais</option>
                                        </optgroup>
                                    </select>
                                    <div class="form-text">Opções organizadas por grupos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-row">
                    <!-- File Upload and Media -->
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title">Carregamento de ficheiros e multimédia</h5>
                            <p class="text-muted small mb-0">Gestão avançada de ficheiros e campos multimédia</p>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="dashboard-grid grid-cols-2">
                                <div class="form-group">
                                    <label for="fileUpload" class="form-label">Carregamento de ficheiros</label>
                                    <input type="file" class="form-control" id="fileUpload" multiple
                                        accept=".pdf,.doc,.docx,.txt">
                                    <div class="form-text">Carregue documentos (PDF, DOC, DOCX, TXT)</div>
                                </div>
                                <div class="form-group">
                                    <label for="imageUpload" class="form-label">Carregamento de imagem</label>
                                    <input type="file" class="form-control" id="imageUpload" accept="image/*">
                                    <div class="form-text">Carregue uma fotografia de perfil ou imagem do curso</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Zona para arrastar e largar</label>
                                    <div class="border border-2 border-dashed rounded p-4 text-center"
                                        style="border-color: #dee2e6 !important;">
                                        <i class="bi bi-cloud-upload fs-1 text-muted"></i>
                                        <div class="mt-2">
                                            <strong>Largue os ficheiros aqui</strong> ou <a href="#"
                                                class="text-primary">procurar</a>
                                        </div>
                                        <small class="text-muted">Tamanho máximo do ficheiro: 10 MB</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ficheiros carregados</label>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-light rounded">
                                            <i class="bi bi-file-earmark-pdf text-danger"></i>
                                            <span class="flex-grow-1">syllabus.pdf</span>
                                            <small class="text-muted">2.4 MB</small>
                                            <button type="button" class="btn btn-sm btn-outline-danger"
                                                aria-label="Excluir">
                                                <i aria-hidden="true" class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 p-2 bg-light rounded">
                                            <i class="bi bi-file-earmark-image text-primary"></i>
                                            <span class="flex-grow-1">course-banner.jpg</span>
                                            <small class="text-muted">1.8 MB</small>
                                            <button type="button" class="btn btn-sm btn-outline-danger"
                                                aria-label="Excluir">
                                                <i aria-hidden="true" class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-row">
                    <!-- Advanced Input Controls -->
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title">Controlos avançados de entrada</h5>
                            <p class="text-muted small mb-0">Tipos e controlos de entrada especializados</p>
                        </div>
                        <div class="dashboard-card-body">
                            <div class="dashboard-grid grid-cols-2">
                                <div class="form-group">
                                    <label for="numberSpinner" class="form-label">Controlo numérico</label>
                                    <input type="number" class="form-control" id="numberSpinner" min="0" max="100"
                                        step="5" value="25">
                                    <div class="form-text">Utilize as setas ou introduza um número (intervalo: 5)</div>
                                </div>
                                <div class="form-group">
                                    <label for="urlInput" class="form-label">Campo de URL</label>
                                    <input type="url" class="form-control" id="urlInput"
                                        placeholder="https://example.com">
                                    <div class="form-text">Introduza um URL válido</div>
                                </div>
                                <div class="form-group">
                                    <label for="emailInput" class="form-label">Campo de e-mail</label>
                                    <input type="email" class="form-control" id="emailInput"
                                        placeholder="utilizador@sgschool.edu">
                                    <div class="form-text">Introduza o seu e-mail institucional</div>
                                </div>
                                <div class="form-group">
                                    <label for="telInput" class="form-label">Número de telefone</label>
                                    <input type="tel" class="form-control" id="telInput"
                                        placeholder="+1 (555) 123-4567">
                                    <div class="form-text">Introduza o número de telefone com o indicativo do país</div>
                                </div>
                                <div class="form-group">
                                    <label for="patternInput" class="form-label">Número de estudante (formato)</label>
                                    <input type="text" class="form-control" id="patternInput" pattern="[A-Z]{2}[0-9]{6}"
                                        placeholder="CS123456">
                                    <div class="form-text">Formato: 2 letras + 6 algarismos (por exemplo, CS123456)</div>
                                </div>
                                <div class="form-group">
                                    <label for="formSearchInput" class="form-label">Campo de pesquisa</label>
                                    <input type="search" class="form-control" id="formSearchInput"
                                        placeholder="Pesquisar cursos...">
                                    <div class="form-text">Pesquisar com sugestões automáticas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-row">
                    <!-- Form Validation Example -->
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title">Exemplo de validação de formulário</h5>
                            <p class="text-muted small mb-0">Formulário interativo com validação em tempo real</p>
                        </div>
                        <div class="dashboard-card-body">
                            <form class="needs-validation" novalidate>
                                <div class="dashboard-grid grid-cols-2">
                                    <div class="form-group">
                                        <label for="validationCustom01" class="form-label">Nome próprio *</label>
                                        <input type="text" class="form-control" id="validationCustom01" required>
                                        <div class="valid-feedback">Parece seguro!</div>
                                        <div class="invalid-feedback">Introduza um nome próprio válido.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="form-label">Apelido *</label>
                                        <input type="text" class="form-control" id="validationCustom02" required>
                                        <div class="valid-feedback">Parece seguro!</div>
                                        <div class="invalid-feedback">Introduza um apelido válido.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustomEmail" class="form-label">Endereço de e-mail *</label>
                                        <input type="email" class="form-control" id="validationCustomEmail" required>
                                        <div class="valid-feedback">Endereço de e-mail válido!</div>
                                        <div class="invalid-feedback">Introduza um endereço de e-mail válido.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom04" class="form-label">Departamento *</label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Escolha um departamento...</option>
                                            <option>Ciência Informática</option>
                                            <option>Matemática</option>
                                            <option>Física</option>
                                            <option>Química</option>
                                        </select>
                                        <div class="invalid-feedback">Selecione um departamento válido.</div>
                                    </div>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="validationCustom05" required>
                                    <label class="form-check-label" for="validationCustom05">
                                        Aceito os termos e condições *
                                    </label>
                                    <div class="invalid-feedback">Tem de aceitar antes de submeter.</div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary" type="submit">Submeter formulário</button>
                                    <button class="btn btn-outline-secondary ms-2" type="reset">Repor</button>
                                </div>
                            </form>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Color picker sync
            const colorPicker = document.getElementById('colorPicker');
            const colorHex = document.getElementById('colorHex');
            if (colorPicker && colorHex) {
                colorPicker.addEventListener('input', function() {
                    colorHex.value = this.value;
                });
            }

            // Range sliders with live updates
            const rangeSlider = document.getElementById('rangeSlider');
            const rangeValue = document.getElementById('rangeValue');
            if (rangeSlider && rangeValue) {
                rangeSlider.addEventListener('input', function() {
                    rangeValue.textContent = this.value;
                });
            }

            // Progress range with progress bar
            const progressRange = document.getElementById('progressRange');
            const progressBar = document.getElementById('progressBar');
            if (progressRange && progressBar) {
                progressRange.addEventListener('input', function() {
                    const value = this.value;
                    progressBar.style.width = value + '%';
                    progressBar.setAttribute('aria-valuenow', value);
                });
            }

            // Form validation
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });

            // Tag input functionality
            const tagInput = document.querySelector('input[placeholder="Adicionar etiqueta..."]');
            if (tagInput) {
                tagInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        const value = this.value.trim();
                        if (value) {
                            const tag = document.createElement('span');
                            tag.className = 'badge bg-secondary';
                            // textContent, not innerHTML: the value is raw user
                            // input and would otherwise execute as markup.
                            tag.textContent = value;

                            const remove = document.createElement('i');
                            remove.className = 'bi bi-x-lg ms-1';
                            remove.style.cursor = 'pointer';
                            remove.setAttribute('role', 'button');
                            remove.setAttribute('aria-label', 'Remover etiqueta ' + value);
                            remove.addEventListener('click', function () {
                                tag.remove();
                            });
                            tag.append(' ', remove);

                            this.parentElement.insertBefore(tag, this);
                            this.value = '';
                        }
                    }
                });
            }

            // File upload preview
            const imageUpload = document.getElementById('imageUpload');
            if (imageUpload) {
                imageUpload.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        console.log('Ficheiro selecionado:', file.name, 'Tamanho:', Math.round(file.size / 1024) + 'KB');
                    }
                });
            }

            // Drag and drop functionality
            const dropZone = document.querySelector('.border-dashed');
            if (dropZone) {
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                    dropZone.addEventListener(eventName, preventDefaults, false);
                });

                function preventDefaults(e) {
                    e.preventDefault();
                    e.stopPropagation();
                }

                ['dragenter', 'dragover'].forEach(eventName => {
                    dropZone.addEventListener(eventName, highlight, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                    dropZone.addEventListener(eventName, unhighlight, false);
                });

                function highlight() {
                    dropZone.classList.add('border-primary');
                }

                function unhighlight() {
                    dropZone.classList.remove('border-primary');
                }

                dropZone.addEventListener('drop', handleDrop, false);

                function handleDrop(e) {
                    const dt = e.dataTransfer;
                    const files = dt.files;
                    console.log('Ficheiros largados:', files.length);
                }
            }
        });
    </script>

    <!-- Load JavaScript -->




</body>

</html>