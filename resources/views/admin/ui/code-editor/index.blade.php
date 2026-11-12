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

    <title>Editor de código - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/code-editor-DAzJs9dc.js') }}"></script>
    <link rel="modulepreload" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/code-editor-BUa-UZ9p.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <style>
        .editor-demo-card {
            background: #fff;
            border-radius: 12px;
            margin-bottom: 24px;
            padding: 30px;
            box-shadow: 0 1px 3px #0000001a
        }

        .code-editor-container {
            background: #1e1e1e;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px #0003
        }

        .editor-toolbar {
            background: #2d2d2d;
            border-bottom: 1px solid #3e3e3e;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            display: flex
        }

        .editor-tabs {
            gap: 5px;
            display: flex
        }

        .editor-tab {
            color: #ccc;
            cursor: pointer;
            background: #1e1e1e;
            border: none;
            border-radius: 6px 6px 0 0;
            padding: 6px 15px;
            font-size: 13px;
            transition: all .2s
        }

        .editor-tab.active {
            color: #4361ee;
            background: #1e1e1e
        }

        .editor-actions {
            gap: 8px;
            display: flex
        }

        .editor-btn {
            color: #ccc;
            cursor: pointer;
            background: #3e3e3e;
            border: none;
            border-radius: 4px;
            padding: 5px 12px;
            font-size: 12px;
            transition: all .2s
        }

        .editor-btn:hover {
            color: #fff;
            background: #4e4e4e
        }

        .editor-wrapper {
            position: relative;
            overflow: hidden
        }

        .code-editor {
            color: #d4d4d4;
            resize: vertical;
            tab-size: 4;
            z-index: 1;
            background: 0 0;
            border: none;
            outline: none;
            width: 100%;
            min-height: 400px;
            padding: 20px;
            font-family: Consolas, Monaco, Courier New, monospace;
            font-size: 14px;
            line-height: 1.6;
            position: relative;
            overflow: auto
        }

        .code-highlight {
            color: #d4d4d4;
            pointer-events: none;
            white-space: pre-wrap;
            word-wrap: break-word;
            background: #1e1e1e;
            padding: 20px;
            font-family: Consolas, Monaco, Courier New, monospace;
            font-size: 14px;
            line-height: 1.6;
            position: absolute;
            inset: 0;
            overflow: hidden
        }

        .code-highlight code {
            display: block;
            background: 0 0 !important;
            margin: 0 !important;
            padding: 0 !important
        }

        .code-editor-container .editor-wrapper .code-editor {
            color: #0000;
            caret-color: #d4d4d4
        }

        .code-highlight pre {
            margin: 0;
            padding: 0;
            background: 0 0 !important
        }

        .code-output {
            color: #d4d4d4;
            background: #252525;
            border-top: 1px solid #3e3e3e;
            min-height: 150px;
            max-height: 300px;
            padding: 15px;
            font-family: Consolas, Monaco, Courier New, monospace;
            font-size: 13px;
            overflow: auto
        }

        .output-header {
            color: #999;
            background: #2d2d2d;
            border-bottom: 1px solid #3e3e3e;
            padding: 8px 15px;
            font-size: 12px
        }

        .line-numbers {
            color: #858585;
            text-align: right;
            -webkit-user-select: none;
            user-select: none;
            float: left;
            background: #252525;
            border-right: 1px solid #3e3e3e;
            padding: 20px 10px;
            font-family: Consolas, Monaco, Courier New, monospace;
            font-size: 14px;
            line-height: 1.6
        }

        .editor-with-numbers {
            display: flex
        }

        .language-selector {
            color: #ccc;
            cursor: pointer;
            background: #3e3e3e;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            font-size: 12px
        }

        .feature-list {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
            display: grid
        }

        .feature-item {
            background: #f8f9fa;
            border-left: 4px solid #4361ee;
            border-radius: 8px;
            padding: 15px
        }

        .feature-item h6 {
            color: #4361ee;
            margin-bottom: 8px
        }

        .feature-item p {
            color: #6b7280;
            margin: 0;
            font-size: 14px
        }
    </style>
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="visually-hidden-focusable">Saltar para o conteúdo principal</a>

    <!-- Required DOM elements for dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <!-- Prism.js for Syntax Highlighting -->



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
                        <a class="nav-link has-submenu active" href="javascript:void(0)" data-bs-toggle="collapse"
                            data-bs-target="#tablesSubmenu" aria-expanded="true">
                            <i class="bi bi-table"></i>
                            <span>Tabelas</span>
                        </a>
                        <ul id="tablesSubmenu" class="submenu collapse show list-unstyled">
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
                        <a class="nav-link active" href="code-editor.html">
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
                        <li class="breadcrumb-item active">Editor de código</li>
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
                    <h1 class="h3 mb-0 text-gray-800">Editor de código</h1>
                    <p class="text-muted">Editor de código interativo com realce de sintaxe (sem dependências de jQuery)</p>
                </div>

                <!-- Main Code Editor -->
                <div class="editor-demo-card">
                    <h5 class="mb-3">Editor JavaScript</h5>
                    <div class="code-editor-container">
                        <div class="editor-toolbar">
                            <div class="editor-tabs">
                                <button type="button" class="editor-tab active"
                                    data-lang="javascript">script.js</button>
                                <button type="button" class="editor-tab" data-lang="html">index.html</button>
                                <button type="button" class="editor-tab" data-lang="css">styles.css</button>
                            </div>
                            <div class="editor-actions">
                                <select class="language-selector" id="languageSelect">
                                    <option value="javascript">JavaScript</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="python">Python</option>
                                </select>
                                <button type="button" class="editor-btn" id="formatBtn">
                                    <i class="bi bi-code-square"></i> Formato
                                </button>
                                <button type="button" class="editor-btn" id="copyBtn">
                                    <i class="bi bi-clipboard"></i> Copiar
                                </button>
                                <button type="button" class="editor-btn" id="runBtn">
                                    <i class="bi bi-play-fill"></i> Executar
                                </button>
                            </div>
                        </div>
                        <div class="editor-wrapper">
                            <div class="code-highlight" id="codeHighlight">
                                <pre><code class="language-javascript" id="highlightedCode">// Bem-vindo ao editor de código!</code></pre>
                            </div>
                            <textarea class="code-editor" id="codeEditor" spellcheck="false">// Welcome to the Code Editor!
// Type your JavaScript code here

function greet(name) {
    return `Hello, ${name}! Welcome to sgSchool Education Platform.`;
}

// Example usage
const message = greet('Student');
console.log(message);

// Array operations
const courses = ['Computer Science', 'Mathematics', 'Physics'];
courses.forEach(course =&gt; {
    console.log(`📚 Course: ${course}`);
});

// Object example
const student = {
    name: 'John Doe',
    id: 12345,
    grade: 'A',
    displayInfo() {
        console.log(`Student: ${this.name}, ID: ${this.id}, Grade: ${this.grade}`);
    }
};

student.displayInfo();</textarea>
                        </div>
                        <div class="output-header">
                            <i class="bi bi-terminal"></i> Saída da consola
                        </div>
                        <div class="code-output" id="codeOutput">
                            <div style="color: #999;">// Clique em "Executar" para executar o código...</div>
                        </div>
                    </div>
                </div>

                <!-- HTML Editor -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="editor-demo-card">
                            <h5 class="mb-3">Editor HTML</h5>
                            <div class="code-editor-container">
                                <div class="editor-toolbar">
                                    <div class="editor-tabs">
                                        <button type="button" class="editor-tab active">index.html</button>
                                    </div>
                                    <div class="editor-actions">
                                        <button type="button" class="editor-btn" id="copyHtml">
                                            <i class="bi bi-clipboard"></i> Copiar
                                        </button>
                                    </div>
                                </div>
                                <div class="editor-wrapper">
                                    <div class="code-highlight" id="htmlHighlight">
                                        <pre><code class="language-markup" id="htmlHighlightedCode">&lt;!DOCTYPE html&gt;</code></pre>
                                    </div>
                                    <textarea class="code-editor" id="htmlEditor" style="min-height: 250px;"
                                        spellcheck="false">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;My Webpage&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
    &lt;p&gt;This is a sample HTML document.&lt;/p&gt;
    &lt;button type="button" onclick="alert('Hello!')"&gt;Click Me&lt;/button&gt;
&lt;/body&gt;
&lt;/html&gt;</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="editor-demo-card">
                            <h5 class="mb-3">Editor CSS</h5>
                            <div class="code-editor-container">
                                <div class="editor-toolbar">
                                    <div class="editor-tabs">
                                        <button type="button" class="editor-tab active">styles.css</button>
                                    </div>
                                    <div class="editor-actions">
                                        <button type="button" class="editor-btn" id="copyCss">
                                            <i class="bi bi-clipboard"></i> Copiar
                                        </button>
                                    </div>
                                </div>
                                <div class="editor-wrapper">
                                    <div class="code-highlight" id="cssHighlight">
                                        <pre><code class="language-css" id="cssHighlightedCode">/* Modern CSS Styles */</code></pre>
                                    </div>
                                    <textarea class="code-editor" id="cssEditor" style="min-height: 250px;"
                                        spellcheck="false">/* Modern CSS Styles */

body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    margin: 0;
    padding: 20px;
}

h1 {
    color: #ffffff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

button {
    background: #4361ee;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #3451d1;
}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Editor Features -->
                <div class="editor-demo-card">
                    <h5 class="mb-3">Funcionalidades do editor</h5>
                    <div class="feature-list">
                        <div class="feature-item">
                            <h6><i class="bi bi-code-slash me-2"></i>Suporte de sintaxe</h6>
                            <p>Suporte para JavaScript, HTML, CSS e muito mais</p>
                        </div>
                        <div class="feature-item">
                            <h6><i class="bi bi-play-circle me-2"></i>Code Execution</h6>
                            <p>Execute código JavaScript diretamente no navegador</p>
                        </div>
                        <div class="feature-item">
                            <h6><i class="bi bi-clipboard-check me-2"></i>Copiar para a área de transferência</h6>
                            <p>Copie código facilmente com um clique</p>
                        </div>
                        <div class="feature-item">
                            <h6><i class="bi bi-terminal me-2"></i>Saída da consola</h6>
                            <p>Consulte registos e erros da consola em tempo real</p>
                        </div>
                        <div class="feature-item">
                            <h6><i class="bi bi-file-code me-2"></i>Vários ficheiros</h6>
                            <p>Trabalhe com vários ficheiros através de separadores</p>
                        </div>
                        <div class="feature-item">
                            <h6><i class="bi bi-keyboard me-2"></i>Keyboard Shortcuts</h6>
                            <p>Edição eficiente com suporte para teclado</p>
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

    <!-- Prism.js for Syntax Highlighting -->
    <!-- Prism from the local npm package; module import so Vite bundles it. -->


    <script>
        // Code Editor functionality with Syntax Highlighting (Vanilla JavaScript)
document.addEventListener('DOMContentLoaded', function() {
    const codeEditor = document.getElementById('codeEditor');
    const codeOutput = document.getElementById('codeOutput');
    const highlightedCode = document.getElementById('highlightedCode');
    const codeHighlight = document.getElementById('codeHighlight');
    const runBtn = document.getElementById('runBtn');
    const copyBtn = document.getElementById('copyBtn');
    const formatBtn = document.getElementById('formatBtn');
    const copyHtml = document.getElementById('copyHtml');
    const copyCss = document.getElementById('copyCss');
    const languageSelect = document.getElementById('languageSelect');

    let currentLanguage = 'javascript';

    // Update syntax highlighting
    function updateHighlighting() {
        const code = codeEditor.value;
        highlightedCode.textContent = code;
        highlightedCode.className = `language-${currentLanguage}`;
        Prism.highlightElement(highlightedCode);
    }

    // Sync scroll between textarea and highlight
    codeEditor.addEventListener('scroll', function() {
        codeHighlight.scrollTop = this.scrollTop;
        codeHighlight.scrollLeft = this.scrollLeft;
    });

    // Update highlighting on input
    codeEditor.addEventListener('input', updateHighlighting);
    codeEditor.addEventListener('keyup', updateHighlighting);

    // Initial highlighting
    updateHighlighting();

    // Run code button
    runBtn.addEventListener('click', function() {
        const code = codeEditor.value;
        codeOutput.innerHTML = '';

        // Override console.log to capture output
        const logs = [];
        const originalLog = console.log;
        console.log = function(...args) {
            logs.push(args.map(arg => {
                if (typeof arg === 'object') {
                    return JSON.stringify(arg, null, 2);
                }
                return String(arg);
            }).join(' '));
            originalLog.apply(console, args);
        };

        try {
            // Execute the code
            eval(code);

            // Display output
            if (logs.length > 0) {
                codeOutput.innerHTML = logs.map(log =>
                    `<div style="color: #98c379; margin-bottom: 5px;">${escapeHtml(log)}</div>`
                ).join('');
            } else {
                codeOutput.innerHTML = '<div style="color: #999;">// Sem saída</div>';
            }
        } catch (error) {
            codeOutput.innerHTML = `<div style="color: #e06c75;">❌ Erro: ${escapeHtml(error.message)}</div>`;
        }

        // Restore console.log
        console.log = originalLog;
    });

    // Copy button
    copyBtn.addEventListener('click', function() {
        copyToClipboard(codeEditor.value);
        showNotification('Código copiado para a área de transferência!');
    });

    // HTML Editor highlighting
    const htmlEditor = document.getElementById('htmlEditor');
    const htmlHighlightedCode = document.getElementById('htmlHighlightedCode');
    const htmlHighlight = document.getElementById('htmlHighlight');

    function updateHtmlHighlighting() {
        const code = htmlEditor.value;
        htmlHighlightedCode.textContent = code;
        Prism.highlightElement(htmlHighlightedCode);
    }

    htmlEditor.addEventListener('scroll', function() {
        htmlHighlight.scrollTop = this.scrollTop;
        htmlHighlight.scrollLeft = this.scrollLeft;
    });

    htmlEditor.addEventListener('input', updateHtmlHighlighting);
    htmlEditor.addEventListener('keyup', updateHtmlHighlighting);
    updateHtmlHighlighting();

    // CSS Editor highlighting
    const cssEditor = document.getElementById('cssEditor');
    const cssHighlightedCode = document.getElementById('cssHighlightedCode');
    const cssHighlight = document.getElementById('cssHighlight');

    function updateCssHighlighting() {
        const code = cssEditor.value;
        cssHighlightedCode.textContent = code;
        Prism.highlightElement(cssHighlightedCode);
    }

    cssEditor.addEventListener('scroll', function() {
        cssHighlight.scrollTop = this.scrollTop;
        cssHighlight.scrollLeft = this.scrollLeft;
    });

    cssEditor.addEventListener('input', updateCssHighlighting);
    cssEditor.addEventListener('keyup', updateCssHighlighting);
    updateCssHighlighting();

    // Copy HTML button
    copyHtml.addEventListener('click', function() {
        copyToClipboard(htmlEditor.value);
        showNotification('HTML copiado para a área de transferência!');
    });

    // Copy CSS button
    copyCss.addEventListener('click', function() {
        copyToClipboard(cssEditor.value);
        showNotification('CSS copiado para a área de transferência!');
    });

    // Format button (basic indentation)
    formatBtn.addEventListener('click', function() {
        try {
            const code = codeEditor.value;
            // Basic formatting - just add indentation after braces
            let formatted = code
                .split('\n')
                .map(line => line.trim())
                .join('\n');
            codeEditor.value = formatted;
            showNotification('Código formatado!');
        } catch (error) {
            showNotification('Não foi possível formatar o código', 'error');
        }
    });

    // Tab key support
    codeEditor.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
            e.preventDefault();
            const start = this.selectionStart;
            const end = this.selectionEnd;
            const value = this.value;

            // Insert tab character
            this.value = value.substring(0, start) + '    ' + value.substring(end);
            this.selectionStart = this.selectionEnd = start + 4;
        }
    });

    // Helper functions
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).catch(err => {
            console.error('Falha ao copiar:', err);
        });
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = 'alert alert-' + type;
        notification.style.position = 'fixed';
        notification.style.top = '20px';
        notification.style.right = '20px';
        notification.style.zIndex = '9999';
        notification.style.minWidth = '250px';
        notification.innerHTML = `
            <i class="bi bi-${type === 'success' ? 'check-circle' : 'x-circle'} me-2"></i>
            ${message}
        `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transition = 'opacity 0.3s';
            setTimeout(() => notification.remove(), 300);
        }, 2000);
    }

    // Store code for each file
    const codeFiles = {
        javascript: `// Bem-vindo ao editor de código!
// Escreva aqui o seu código JavaScript.

function greet(name) {
    return \`Olá, \${name}! Bem-vindo à plataforma educativa sgSchool.\`;
}

// Exemplo de utilização
const message = greet('Estudante');
console.log(message);

// Operações com arrays
const courses = ['Computer Science', 'Mathematics', 'Physics'];
courses.forEach(course => {
    console.log(\`📚 Curso: \${course}\`);
});

// Exemplo de objeto
const student = {
    name: 'John Doe',
    id: 12345,
    grade: 'A',
    displayInfo() {
        console.log(\`Estudante: \${this.name}, ID: \${this.id}, Nota: \${this.grade}\`);
    }
};

student.displayInfo();`,
        html: `<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do estudante - sgSchool</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>🎓 Plataforma educativa sgSchool</h1>
        <nav>
            <a href="#courses">Cursos</a>
            <a href="#grades">Notas</a>
            <a href="#schedule">Horário</a>
        </nav>
    </header>

    <main>
        <section id="welcome">
            <h2>Bem-vindo de volta, estudante!</h2>
            <p>Tem 3 trabalhos para entregar esta semana.</p>
            <button type="button" onclick="alert('Funcionalidade brevemente disponível!')">Ver trabalhos</button>
        </section>

        <section id="courses">
            <h2>Os seus cursos</h2>
            <div class="course-grid">
                <div class="course-card">
                    <h3>Computer Science 101</h3>
                    <p>Prof. Johnson</p>
                </div>
                <div class="course-card">
                    <h3>Mathematics 201</h3>
                    <p>Prof. Smith</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Plataforma educativa sgSchool</p>
    </footer>
</body>
</html>`,
        css: `/* Modern Education Platform Styles */

:root {
    --primary-color: #4361ee;
    --secondary-color: #3a0ca3;
    --success-color: #06d6a0;
    --background: #f8f9fa;
    --text-color: #1f2937;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: var(--background);
    color: var(--text-color);
    line-height: 1.6;
}

header {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    padding: 2rem;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

header h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 1rem;
    padding: 0.5rem 1rem;
    border-radius: 6px;
    transition: background 0.3s;
}

nav a:hover {
    background: rgba(255,255,255,0.2);
}

main {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 2rem;
}

section {
    background: white;
    padding: 2rem;
    margin-bottom: 2rem;
    border-radius: 12px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.course-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}

.course-card {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 1.5rem;
    border-radius: 8px;
    transition: transform 0.3s;
}

.course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

button {
    background: var(--success-color);
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #05b589;
    transform: scale(1.05);
}

footer {
    text-align: center;
    padding: 2rem;
    background: #1f2937;
    color: white;
    margin-top: 3rem;
}`
    };

    let currentFile = 'javascript';

    // Tab switching with content update
    document.querySelectorAll('.editor-tab[data-lang]').forEach(tab => {
        tab.addEventListener('click', function() {
            // Save current content before switching
            codeFiles[currentFile] = codeEditor.value;

            // Get the language from data-lang attribute
            const lang = this.getAttribute('data-lang');

            // Update active state
            document.querySelectorAll('.editor-tab[data-lang]').forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            // Update editor content
            currentFile = lang;
            currentLanguage = lang === 'html' ? 'markup' : lang;
            codeEditor.value = codeFiles[lang];

            // Update language selector
            languageSelect.value = lang;

            // Update syntax highlighting
            updateHighlighting();

            // Clear output when switching files
            codeOutput.innerHTML = '<div style="color: #999;">// Clique em "Executar" para executar o código...</div>';

            // Show notification
            const fileNames = {
                javascript: 'script.js',
                html: 'index.html',
                css: 'styles.css'
            };
            showNotification(`Ficheiro alterado para ${fileNames[lang]}`, 'success');
        });
    });

    // Sync language selector with tabs
    languageSelect.addEventListener('change', function() {
        const lang = this.value;
        const tab = document.querySelector(`.editor-tab[data-lang="${lang}"]`);
        if (tab) {
            tab.click();
        }
    });
});
    </script>

    <!-- Load JavaScript -->




</body>

</html>