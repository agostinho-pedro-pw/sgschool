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

    <title>Adicionar departamento - Painel sgSchool</title>

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
                        <li class="breadcrumb-item active">Adicionar departamento</li>
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
                            <h1 class="h3 font-bold">Adicionar novo departamento</h1>
                            <p class="text-muted text-sm">Criar a new academic department with comprehensive
                                information and settings.</p>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="departments.html" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Voltar aos departamentos
                            </a>
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                data-bs-target="#templateModal">
                                <i class="bi bi-file-earmark-text me-2"></i>Use Template
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Form Progress -->
                <div class="dashboard-row">
                    <div class="dashboard-card mb-4">
                        <div class="dashboard-card-body py-3">
                            <div class="progress-header d-flex justify-content-between align-items-center mb-3">
                                <h6 class="mb-0">Progresso do formulário</h6>
                                <span class="badge bg-primary progress-badge">Step 1 of 3</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                    role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Department Form -->
                <form id="addDepartmentForm" class="needs-validation" novalidate>
                    <!-- Department Information -->
                    <div class="dashboard-row">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <div class="d-flex align-items-center">
                                    <div class="form-step-icon bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-building text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Informações do departamento</h5>
                                        <p class="text-muted small mb-0">Dados bàsicos e identifica??o do departamento
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-grid grid-cols-2 gap-3">
                                    <div>
                                        <label for="departmentName" class="form-label">Nome do departamento *</label>
                                        <input type="text" class="form-control" id="departmentName"
                                            name="departmentName" placeholder="ex.: Ci?ncias Inform?ticas" required>
                                        <div class="invalid-feedback">
                                            Introduza um nome de departamento válido.
                                        </div>
                                    </div>
                                    <div>
                                        <label for="departmentCode" class="form-label">Departamento Code *</label>
                                        <input type="text" class="form-control" id="departmentCode"
                                            name="departmentCode" placeholder="ex.: CS" pattern="[A-Z]{2,5}"
                                            maxlength="5" style="text-transform: uppercase;" required>
                                        <div class="form-text">2-5 uppercase letters (ex.: CS, MECH, BBA)</div>
                                        <div class="invalid-feedback">
                                            Introduza um código de departamento válido (2 a 5 letras maiúsculas).
                                        </div>
                                    </div>
                                    <div>
                                        <label for="establishedYear" class="form-label">Established Ano</label>
                                        <input type="number" class="form-control" id="establishedYear"
                                            name="establishedYear" min="1900" max="2025" placeholder="ex.: 1995">
                                        <div class="invalid-feedback">
                                            Introduza um ano válido entre 1900 e 2025.
                                        </div>
                                    </div>
                                    <div>
                                        <label for="departmentStatus" class="form-label">Estado *</label>
                                        <select class="form-select" id="departmentStatus" name="departmentStatus"
                                            required>
                                            <option value="">Escolha o estado...</option>
                                            <option value="active">Ativo</option>
                                            <option value="planning">Em planeamento</option>
                                                <option value="paused">Temporariamente suspenso</option>
                                            <option value="disabled">Desativado</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Selecione o estado do departamento.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="description" class="form-label">Departamento Descrição</label>
                                        <textarea class="form-control" id="description" name="description" rows="4"
                                            placeholder="Descreva em detalhe o departamento, a sua missão e os seus objetivos..."></textarea>
                                        <div class="form-text">Opcional: descreva a missão, a visão e os principais
                                            objetivos do departamento.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Department Head Information -->
                    <div class="dashboard-row">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <div class="d-flex align-items-center">
                                    <div class="form-step-icon bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-person-badge text-success"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Informações do respons?vel pelo departamento</h5>
                                        <p class="text-muted small mb-0">Dados de contacto e de lideran?a</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-grid grid-cols-2 gap-3">
                                    <div>
                                        <label for="headName" class="form-label">Nome do respons?vel pelo departamento
                                            *</label>
                                        <input type="text" class="form-control" id="headName" name="headName"
                                            placeholder="ex.: Dr. John Smith" required>
                                        <div class="invalid-feedback">
                                            Introduza o nome do responsável pelo departamento.
                                        </div>
                                    </div>
                                    <div>
                                        <label for="headTitle" class="form-label">Cargo/Função</label>
                                        <input type="text" class="form-control" id="headTitle" name="headTitle"
                                            placeholder="ex.: professor, professor associado" value="Professor">
                                    </div>
                                    <div>
                                        <label for="headEmail" class="form-label">Endereço de e-mail *</label>
                                        <input type="email" class="form-control" id="headEmail" name="headEmail"
                                            placeholder="john.smith@kiaalap.edu" required>
                                        <div class="invalid-feedback">
                                            Introduza um endereço de e-mail válido.
                                        </div>
                                    </div>
                                    <div>
                                        <label for="headPhone" class="form-label">Número de telefone</label>
                                        <input type="tel" class="form-control" id="headPhone" name="headPhone"
                                            placeholder="+1-555-0123" pattern="[\+]?[0-9\-\s\(\)]+" maxlength="20">
                                        <div class="invalid-feedback">
                                            Introduza um número de telefone válido.
                                        </div>
                                    </div>
                                    <div>
                                        <label for="officeLocation" class="form-label">Localização do gabinete</label>
                                        <input type="text" class="form-control" id="officeLocation"
                                            name="officeLocation" placeholder="ex.: edifício A, sala 301">
                                    </div>
                                    <div>
                                        <label for="appointmentDate" class="form-label">Data de nomeação</label>
                                        <input type="date" class="form-control" id="appointmentDate"
                                            name="appointmentDate">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Department Metrics & Budget -->
                    <div class="dashboard-row">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <div class="d-flex align-items-center">
                                    <div class="form-step-icon bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-graph-up text-info"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Indicadores e orçamento do departamento</h5>
                                        <p class="text-muted small mb-0">Informações financeiras e de matrículas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-grid grid-cols-3 gap-3">
                                    <div>
                                        <label for="currentStudents" class="form-label">Estudantes inscritos</label>
                                        <input type="number" class="form-control" id="currentStudents"
                                            name="currentStudents" min="0" placeholder="0" value="0">
                                    </div>
                                    <div>
                                        <label for="maxCapacity" class="form-label">Capacidade máxima</label>
                                        <input type="number" class="form-control" id="maxCapacity" name="maxCapacity"
                                            min="1" placeholder="ex.: 2000">
                                    </div>
                                    <div>
                                        <label for="facultyCount" class="form-label">Número de docentes</label>
                                        <input type="number" class="form-control" id="facultyCount" name="facultyCount"
                                            min="0" placeholder="0" value="0">
                                    </div>
                                    <div>
                                        <label for="annualBudget" class="form-label">Orçamento anual (USD)</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="annualBudget"
                                                name="annualBudget" min="0" step="1000" placeholder="0">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="budgetYear" class="form-label">Ano do orçamento</label>
                                        <select class="form-select" id="budgetYear" name="budgetYear">
                                            <option value="">Selecionar ano...</option>
                                            <option value="2024">2024</option>
                                            <option value="2025" selected>2025</option>
                                            <option value="2026">2026</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Settings -->
                    <div class="dashboard-row">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <div class="d-flex align-items-center">
                                    <div class="form-step-icon bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 40px; height: 40px;">
                                        <i class="bi bi-gear text-warning"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Definições adicionais</h5>
                                        <p class="text-muted small mb-0">Configurações e funcionalidades opcionais</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-grid grid-cols-2 gap-3">
                                    <div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="allowOnlineApplication"
                                                name="allowOnlineApplication" checked>
                                            <label class="form-check-label" for="allowOnlineApplication">
                                                Permitir candidaturas online
                                            </label>
                                            <div class="form-text">Os estudantes podem candidatar-se a este departamento
                                                através do portal online.</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="enableNotifications"
                                                name="enableNotifications" checked>
                                            <label class="form-check-label" for="enableNotifications">
                                                Ativar notificações por e-mail
                                            </label>
                                            <div class="form-text">O responsável pelo departamento receberá notificações
                                                por e-mail sobre atualizações importantes.</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="publiclyVisible"
                                                name="publiclyVisible" checked>
                                            <label class="form-check-label" for="publiclyVisible">
                                                Visível publicamente
                                            </label>
                                            <div class="form-text">As informações do departamento estarão visíveis no
                                                sítio Web público.</div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="departmentWebsite" class="form-label">Sítio Web do departamento</label>
                                        <input type="url" class="form-control" id="departmentWebsite"
                                            name="departmentWebsite" placeholder="https://cs.kiaalap.edu">
                                        <div class="form-text">Opcional: endereço do sítio Web do departamento.</div>
                                    </div>
                                    <div>
                                        <label for="socialMedia" class="form-label">Redes sociais</label>
                                        <input type="url" class="form-control" id="socialMedia" name="socialMedia"
                                            placeholder="https://linkedin.com/company/kiaalap-cs">
                                        <div class="form-text">Opcional: página do LinkedIn, X (Twitter) ou Facebook
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="dashboard-row">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-text">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Os campos assinalados com * são obrigatórios. Pode editar todas as informações
                                        mais tarde.
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-outline-secondary" id="saveDraft">
                                            <i class="bi bi-file-earmark me-2"></i>Guardar como rascunho
                                        </button>
                                        <button type="button" class="btn btn-outline-info" id="previewDepartment">
                                            <i class="bi bi-eye me-2"></i>Pré-visualizar
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-check-circle me-2"></i>Criar Departamento
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

    <div class="modal fade" id="templateModal" tabindex="-1" aria-labelledby="templateModalTitle">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="templateModalTitle">Escolha um modelo de departamento</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="d-grid gap-2">
                        <button type="button" class="template-card btn btn-outline-primary text-start"
                            data-template="engineering">Engenharia</button>
                        <button type="button" class="template-card btn btn-outline-primary text-start"
                            data-template="business">Gestão de Empresas</button>
                        <button type="button" class="template-card btn btn-outline-primary text-start"
                            data-template="science">Science</button>
                        <button type="button" class="template-card btn btn-outline-primary text-start"
                            data-template="liberal-arts">Humanidades</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="applyTemplate" disabled>Aplicar modelo</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalTitle">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="previewModalTitle">Pré-visualização do departamento</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div id="previewContent"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalTitle">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="successModalTitle">Departamento criado</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Este exemplo preencheu o formulário. Ligue o backend para guardar o departamento.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <a href="departments.html" class="btn btn-primary">Ver departments</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            const form = document.getElementById('addDepartmentForm');
            const progressBar = document.querySelector('.progress-bar');
            const progressBadge = document.querySelector('.progress-badge');

            // Auto-uppercase department code
            const deptCodeInput = document.getElementById('departmentCode');
            deptCodeInput.addEventListener('input', function() {
                this.value = this.value.toUpperCase().replace(/[^A-Z]/g, '');
            });

            // Template selection
            const templateCards = document.querySelectorAll('.template-card');
            const applyTemplateBtn = document.getElementById('applyTemplate');
            let selectedTemplate = null;

            templateCards.forEach(card => {
                card.addEventListener('click', function() {
                    templateCards.forEach(c => c.classList.remove('border-primary'));
                    this.classList.add('border-primary');
                    selectedTemplate = this.dataset.template;
                    applyTemplateBtn.disabled = false;
                });
            });

            // Apply template
            applyTemplateBtn.addEventListener('click', function() {
                const templates = {
                    engineering: {
                        name: 'Ci?ncias Inform?ticas',
                        code: 'CS',
                        head: 'Dr. John Smith',
                        email: 'john.smith@kiaalap.edu',
                        maxCapacity: 2000,
                        description: 'The Computer Science department focuses on software engineering, artificial intelligence, cybersecurity, and computer systems.'
                    },
                    business: {
                        name: 'Gest?o de Empresas',
                        code: 'BBA',
                        head: 'Dr. Sarah Johnson',
                        email: 'sarah.johnson@kiaalap.edu',
                        maxCapacity: 1500,
                        description: 'The Business Administration department offers comprehensive programs in management, finance, marketing, and entrepreneurship.'
                    },
                    science: {
                        name: 'Biologia',
                        code: 'BIO',
                        head: 'Dr. Michael Brown',
                        email: 'michael.brown@kiaalap.edu',
                        maxCapacity: 800,
                        description: 'The Biology department provides cutting-edge education in life sciences, biotechnology, and medical research.'
                    },
                    'liberal-arts': {
                        name: 'Literatura Inglesa',
                        code: 'ENG',
                        head: 'Dr. Emma Davis',
                        email: 'emma.davis@kiaalap.edu',
                        maxCapacity: 600,
                        description: 'The English Literature department offers comprehensive studies in literature, creative writing, and linguistic analysis.'
                    }
                };

                const template = templates[selectedTemplate];
                if (template) {
                    document.getElementById('departmentName').value = template.name;
                    document.getElementById('departmentCode').value = template.code;
                    document.getElementById('headName').value = template.head;
                    document.getElementById('headEmail').value = template.email;
                    document.getElementById('maxCapacity').value = template.maxCapacity;
                    document.getElementById('description').value = template.description;
                    document.getElementById('departmentStatus').value = 'active';

                    // Close modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('templateModal'));
                    modal.hide();

                    // Update progress
                    updateProgress();
                }
            });

            // Preview functionality
            document.getElementById('previewDepartment').addEventListener('click', function() {
                generatePreview();
            });

            // Form values are user input; escape before interpolating into markup.
            function esc(value, fallback) {
                const text = value == null || value === '' ? fallback : String(value);
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }

            function generatePreview() {
                const formData = new FormData(form);
                const previewContent = document.getElementById('previewContent');

                previewContent.innerHTML = `
                    <div class="row">
                        <div>
                            <h6>Informações do departamento</h6>
                            <table class="table table-sm">
                                <tr><th>Nome:</th><td>${esc(formData.get('departmentName'), 'Por especificar')}</td></tr>
                                <tr><th>Código:</th><td>${esc(formData.get('departmentCode'), 'Por especificar')}</td></tr>
                                <tr><th>Estado:</th><td><span class="badge bg-${formData.get('departmentStatus') === 'active' ? 'success' : 'warning'}">${esc(formData.get('departmentStatus'), 'Por especificar')}</span></td></tr>
                                <tr><th>Ano de fundação:</th><td>${esc(formData.get('establishedYear'), 'Por especificar')}</td></tr>
                            </table>
                        </div>
                        <div>
                            <h6>Responsável pelo departamento</h6>
                            <table class="table table-sm">
                                <tr><th>Nome:</th><td>${esc(formData.get('headName'), 'Por especificar')}</td></tr>
                                <tr><th>E-mail:</th><td>${esc(formData.get('headEmail'), 'Por especificar')}</td></tr>
                                <tr><th>Telefone:</th><td>${esc(formData.get('headPhone'), 'Por especificar')}</td></tr>
                                <tr><th>Gabinete:</th><td>${esc(formData.get('officeLocation'), 'Por especificar')}</td></tr>
                            </table>
                        </div>
                        <div class="col-12 mt-3">
                            <h6>Descrição</h6>
                            <p class="text-muted">${esc(formData.get('description'), 'Não foi fornecida uma descrição.')}</p>
                        </div>
                    </div>
                `;

                const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
                previewModal.show();
            }

            // Form submission
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                if (form.checkValidity()) {
                    // Simulate form submission
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;

                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>A criar...';

                    setTimeout(() => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;

                        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();
                    }, 2000);
                } else {
                    // Show validation errors
                    const firstInvalid = form.querySelector(':invalid');
                    if (firstInvalid) {
                        firstInvalid.focus();
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }

                form.classList.add('was-validated');
            });

            // Progress tracking
            function updateProgress() {
                const requiredFields = form.querySelectorAll('[required]');
                let filledFields = 0;

                requiredFields.forEach(field => {
                    if (field.value.trim()) filledFields++;
                });

                const progress = Math.round((filledFields / requiredFields.length) * 100);
                progressBar.style.width = progress + '%';
                progressBar.setAttribute('aria-valuenow', progress);

                if (progress < 34) {
                    progressBadge.textContent = 'Step 1 of 3';
                } else if (progress < 67) {
                    progressBadge.textContent = 'Step 2 of 3';
                } else {
                    progressBadge.textContent = 'Step 3 of 3';
                }
            }

            // Update progress on input changes
            form.addEventListener('input', updateProgress);
            form.addEventListener('change', updateProgress);

            // Save draft functionality
            document.getElementById('saveDraft').addEventListener('click', function() {
                const formData = new FormData(form);
                const draftData = {};
                for (let [key, value] of formData.entries()) {
                    draftData[key] = value;
                }

                localStorage.setItem('departmentDraft', JSON.stringify(draftData));

                // Show confirmation
                const toast = document.createElement('div');
                toast.className = 'toast position-fixed top-0 end-0 m-3';
                toast.innerHTML = `
                    <div class="toast-body">
                        <i class="bi bi-check-circle text-success me-2"></i>
                        Draft saved successfully!
                    </div>
                `;
                document.body.appendChild(toast);

                const bsToast = new bootstrap.Toast(toast);
                bsToast.show();

                toast.addEventListener('hidden.bs.toast', () => {
                    document.body.removeChild(toast);
                });
            });

            // Load draft on page load
            const savedDraft = localStorage.getItem('departmentDraft');
            if (savedDraft) {
                const draftData = JSON.parse(savedDraft);
                Object.keys(draftData).forEach(key => {
                    const field = form.querySelector(`[name="${key}"]`);
                    if (field) {
                        if (field.type === 'checkbox') {
                            field.checked = draftData[key] === 'on';
                        } else {
                            field.value = draftData[key];
                        }
                    }
                });
                updateProgress();
            }

            // Initial progress update
            updateProgress();
        });
    </script>


    <!-- Load JavaScript -->




</body>

</html>