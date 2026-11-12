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

    <title>Visualizador de PDF - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <style>
        .pdf-demo-card {
            background: #fff;
            border-radius: 12px;
            margin-bottom: 24px;
            padding: 30px;
            box-shadow: 0 1px 3px #0000001a
        }

        .pdf-viewer-container {
            background: #f8f9fa;
            border-radius: 8px;
            margin-top: 20px;
            padding: 20px
        }

        .pdf-iframe {
            background: #fff;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            width: 100%;
            height: 600px
        }

        .pdf-toolbar {
            background: #fff;
            border-radius: 8px;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
            padding: 15px;
            display: flex;
            box-shadow: 0 1px 3px #0000001a
        }

        .pdf-placeholder {
            text-align: center;
            background: #f8f9fa;
            border: 2px dashed #d1d5db;
            border-radius: 8px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 500px;
            padding: 40px;
            display: flex
        }

        .pdf-placeholder i {
            color: #9ca3af;
            margin-bottom: 20px;
            font-size: 64px
        }

        .file-list {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .file-item {
            cursor: pointer;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            align-items: center;
            margin-bottom: 10px;
            padding: 15px;
            transition: all .2s;
            display: flex
        }

        .file-item:hover {
            background: #f8f9fa;
            border-color: #4361ee
        }

        .file-icon {
            color: #4361ee;
            background: #e0e7ff;
            border-radius: 8px;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            margin-right: 15px;
            font-size: 20px;
            display: flex
        }

        .file-info {
            flex: 1
        }

        .file-name {
            margin-bottom: 2px;
            font-weight: 500
        }

        .file-meta {
            color: #6b7280;
            font-size: 12px
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
                            <li><a class="nav-link " href="widgets.html">Elementos</a></li>
                            <li><a class="nav-link " href="analytics.html">Análise de dados</a></li>
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
                        <a class="nav-link has-submenu " href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#formsSubmenu" aria-expanded="false">
                            <i class="bi bi-card-list"></i>
                            <span>Formulários</span>
                        </a>
                        <ul id="formsSubmenu" class="submenu collapse  list-unstyled">
                            <li><a class="nav-link " href="basic-form-element.html">Formulários básicos</a></li>
                            <li><a class="nav-link " href="advance-form-element.html">Formulários avançados</a></li>
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
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#viewersSubmenu" aria-expanded="true">
                            <i class="bi bi-eye"></i>
                            <span>Visualizadores</span>
                        </a>
                        <ul id="viewersSubmenu" class="submenu collapse show list-unstyled">
                            <li><a class="nav-link active" href="pdf-viewer.html">Visualizador de PDF</a></li>
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
                        <li class="breadcrumb-item active">Visualizador de PDF</li>
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
                <div class="mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Visualizador de PDF</h1>
                    <p class="text-muted">Visualizador de documentos PDF e gestão de ficheiros (sem dependências de jQuery)</p>
                </div>

                <!-- PDF Viewer Section -->
                <div class="pdf-demo-card">
                    <h5 class="mb-3">Visualizador de documentos PDF</h5>
                    <div class="pdf-toolbar">
                        <button type="button" class="btn btn-primary" id="uploadBtn">
                            <i class="bi bi-cloud-upload me-2"></i>Carregar PDF
                        </button>
                        <button type="button" class="btn btn-secondary" id="downloadBtn" disabled>
                            <i class="bi bi-download me-2"></i>Transferir
                        </button>
                        <button type="button" class="btn btn-secondary" id="printBtn" disabled>
                            <i class="bi bi-printer me-2"></i>Imprimir
                        </button>
                        <button type="button" class="btn btn-secondary" id="zoomInBtn" disabled>
                            <i class="bi bi-zoom-in me-2"></i>Ampliar
                        </button>
                        <button type="button" class="btn btn-secondary" id="zoomOutBtn" disabled>
                            <i class="bi bi-zoom-out me-2"></i>Reduzir
                        </button>
                        <input type="file" id="fileInput" accept=".pdf" style="display: none;">
                    </div>

                    <div class="pdf-viewer-container">
                        <div class="pdf-placeholder" id="pdfPlaceholder">
                            <i class="bi bi-file-pdf"></i>
                            <h5>Nenhum PDF carregado</h5>
                            <p class="text-muted">Click "Upload PDF" to load a document or select from the examples
                                below</p>
                        </div>
                        <iframe title="Pré-visualização do documento PDF" id="pdfViewer" class="pdf-iframe"
                            style="display: none;"></iframe>
                    </div>
                </div>

                <!-- Sample PDF Files -->
                <div class="pdf-demo-card">
                    <h5 class="mb-3">Documentos PDF de exemplo</h5>
                    <p class="text-muted">Clique num documento abaixo para o visualizar</p>
                    <ul class="file-list">
                        <li class="file-item" data-pdf="sample1">
                            <div class="file-icon">
                                <i class="bi bi-file-pdf-fill"></i>
                            </div>
                            <div class="file-info">
                                <div class="file-name">Programa do curso - Introdução à informática</div>
                                <div class="file-meta">PDF Document • 2.3 MB • Last modified: Jan 15, 2025</div>
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" aria-label="Ver">
                                <i aria-hidden="true" class="bi bi-eye"></i>
                            </button>
                        </li>
                        <li class="file-item" data-pdf="sample2">
                            <div class="file-icon">
                                <i class="bi bi-file-pdf-fill"></i>
                            </div>
                            <div class="file-info">
                                <div class="file-name">Student Handbook 2025</div>
                                <div class="file-meta">PDF Document • 5.7 MB • Last modified: Jan 10, 2025</div>
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" aria-label="Ver">
                                <i aria-hidden="true" class="bi bi-eye"></i>
                            </button>
                        </li>
                        <li class="file-item" data-pdf="sample3">
                            <div class="file-icon">
                                <i class="bi bi-file-pdf-fill"></i>
                            </div>
                            <div class="file-info">
                                <div class="file-name">Artigo de investigação - Aplicações de aprendizagem automática</div>
                                <div class="file-meta">PDF Document • 1.8 MB • Last modified: Jan 8, 2025</div>
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" aria-label="Ver">
                                <i aria-hidden="true" class="bi bi-eye"></i>
                            </button>
                        </li>
                        <li class="file-item" data-pdf="sample4">
                            <div class="file-icon">
                                <i class="bi bi-file-pdf-fill"></i>
                            </div>
                            <div class="file-info">
                                <div class="file-name">Guia de recursos da biblioteca</div>
                                <div class="file-meta">PDF Document • 3.2 MB • Last modified: Jan 5, 2025</div>
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" aria-label="Ver">
                                <i aria-hidden="true" class="bi bi-eye"></i>
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- PDF Viewer Info -->
                <div class="pdf-demo-card">
                    <h5 class="mb-3">Sobre a visualização de PDF</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6><i class="bi bi-info-circle text-primary me-2"></i>Funcionalidades</h6>
                            <ul class="text-muted">
                                <li>Carregue e consulte documentos PDF</li>
                                <li>Renderização de PDF nativa do navegador</li>
                                <li>Controlos de zoom</li>
                                <li>Funcionalidades de transferência e impressão</li>
                                <li>Design adaptável</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6><i class="bi bi-code-square text-primary me-2"></i>Implementation</h6>
                            <ul class="text-muted">
                                <li>100% JavaScript puro</li>
                                <li>Sem dependências de jQuery</li>
                                <li>Estilo do Bootstrap 5</li>
                                <li>API de ficheiros para carregamentos</li>
                                <li>URL do objeto para renderização</li>
                            </ul>
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
        // PDF Viewer functionality (Vanilla JavaScript)
document.addEventListener('DOMContentLoaded', function() {
    const uploadBtn = document.getElementById('uploadBtn');
    const fileInput = document.getElementById('fileInput');
    const pdfViewer = document.getElementById('pdfViewer');
    const pdfPlaceholder = document.getElementById('pdfPlaceholder');
    const downloadBtn = document.getElementById('downloadBtn');
    const printBtn = document.getElementById('printBtn');
    const zoomInBtn = document.getElementById('zoomInBtn');
    const zoomOutBtn = document.getElementById('zoomOutBtn');
    const fileItems = document.querySelectorAll('.file-item');

    let currentPdfUrl = null;
    let currentZoom = 100;

    // Upload button click
    uploadBtn.addEventListener('click', function() {
        fileInput.click();
    });

    // File input change
    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file && file.type === 'application/pdf') {
            loadPDF(file);
        } else {
            alert('Selecione um ficheiro PDF válido');
        }
    });

    // Function to load PDF
    function loadPDF(file) {
        // Revoke previous object URL if exists
        if (currentPdfUrl) {
            URL.revokeObjectURL(currentPdfUrl);
        }

        // Create new object URL
        currentPdfUrl = URL.createObjectURL(file);

        // Show PDF viewer, hide placeholder
        pdfPlaceholder.style.display = 'none';
        pdfViewer.style.display = 'block';
        pdfViewer.src = currentPdfUrl;

        // Enable toolbar buttons
        downloadBtn.disabled = false;
        printBtn.disabled = false;
        zoomInBtn.disabled = false;
        zoomOutBtn.disabled = false;
    }

    // Function to load demo PDF
    function loadDemoPDF() {
        pdfPlaceholder.style.display = 'none';
        pdfViewer.style.display = 'block';

        // Show a sample PDF message
        pdfViewer.srcdoc = `
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        margin: 0;
                        background: #f8f9fa;
                    }
                    .content {
                        text-align: center;
                        padding: 40px;
                        background: white;
                        border-radius: 8px;
                        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                    }
                    h2 { color: #4361ee; margin-bottom: 15px; }
                    p { color: #6b7280; line-height: 1.6; }
                    .icon { font-size: 48px; margin-bottom: 20px; }
                </style>
            </head>
            <body>
                <div class="content">
                    <div class="icon">📄</div>
                    <h2>Exemplo de documento PDF</h2>
                    <p>Esta é uma representação de demonstração de um documento PDF.</p>
                    <p>Num ambiente de produção, o ficheiro PDF seria carregado aqui.</p>
                    <p style="margin-top: 20px; font-size: 14px; color: #9ca3af;">
                        Para visualizar ficheiros PDF reais, carregue um ficheiro através do botão «Carregar PDF» acima.
                    </p>
                </div>
            </body>
            </html>
        `;

        downloadBtn.disabled = false;
        printBtn.disabled = false;
        zoomInBtn.disabled = false;
        zoomOutBtn.disabled = false;
    }

    // Sample file items click
    fileItems.forEach(item => {
        item.addEventListener('click', function() {
            loadDemoPDF();
        });
    });

    // Download button
    downloadBtn.addEventListener('click', function() {
        if (currentPdfUrl) {
            const a = document.createElement('a');
            a.href = currentPdfUrl;
            a.download = 'document.pdf';
            a.click();
        }
    });

    // Print button
    printBtn.addEventListener('click', function() {
        if (pdfViewer.style.display !== 'none') {
            pdfViewer.contentWindow.print();
        }
    });

    // Zoom buttons (note: iframe zoom is limited without PDF.js)
    zoomInBtn.addEventListener('click', function() {
        currentZoom += 10;
        pdfViewer.style.transform = `scale(${currentZoom / 100})`;
        pdfViewer.style.transformOrigin = 'top left';
    });

    zoomOutBtn.addEventListener('click', function() {
        if (currentZoom > 50) {
            currentZoom -= 10;
            pdfViewer.style.transform = `scale(${currentZoom / 100})`;
            pdfViewer.style.transformOrigin = 'top left';
        }
    });
});
    </script>

    <!-- Load JavaScript -->




</body>

</html>