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

    <title>Editar departamento - Painel sgSchool</title>

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
                        <li class="breadcrumb-item active">Editar departamento</li>
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
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h1 class="h3 font-bold">Editar Departamento</h1>
                            <p class="text-muted text-sm">Atualizar department information and manage settings for
                                Computer
                                Science Departamento.</p>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="departments.html" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Voltar aos departamentos
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Department Status Alert -->
                <div class="alert alert-info d-flex align-items-center mb-4" role="alert">
                    <i class="bi bi-info-circle-fill me-2"></i>
                    <div>
                        <strong>Departamento Estado:</strong> This department is currently active with 1,542 inscritos
                        estudantes and 28 faculty members.
                        <a href="#" class="alert-link ms-2">Ver relatório detalhado</a>
                    </div>
                </div>

                <!-- Edit Form Row -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-12">
                        <!-- Main Form Column -->
                        <div class="col-span-8">
                            <div class="dashboard-card">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title mb-0">Informações do departamento</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <form id="editDepartmentForm">
                                        <div class="dashboard-grid grid-cols-2 gap-3">
                                            <div>
                                                <label for="deptName" class="form-label">Nome do departamento</label>
                                                <input type="text" class="form-control" id="deptName"
                                                    value="Ci?ncias Inform?ticas" required>
                                            </div>
                                            <div>
                                                <label for="deptCode" class="form-label">Código do departamento</label>
                                                <input type="text" class="form-control" id="deptCode" value="CS"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="dashboard-grid grid-cols-2 gap-3">
                                            <div>
                                                <label for="deptHead" class="form-label">Responsável pelo
                                                    departamento</label>
                                                <select class="form-select" id="deptHead" required>
                                                    <option value="">Selecionar responsável pelo departamento</option>
                                                    <option value="1" selected>Dr. John Smith</option>
                                                    <option value="2">Dr. Sarah Johnson</option>
                                                    <option value="3">Dr. Michael Brown</option>
                                                    <option value="4">Dr. Amanda Rodriguez</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="deptStatus" class="form-label">Estado</label>
                                                <select class="form-select" id="deptStatus" required>
                                                    <option value="active" selected>Ativo</option>
                                                    <option value="paused">Pausado</option>
                                                    <option value="disabled">Desativado</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="dashboard-grid grid-cols-2 gap-3">
                                            <div>
                                                <label for="deptEmail" class="form-label">E-mail do departamento</label>
                                                <input type="email" class="form-control" id="deptEmail"
                                                    value="cs@kiaalap.edu" required>
                                            </div>
                                            <div>
                                                <label for="deptPhone" class="form-label">Número de telefone</label>
                                                <input type="tel" class="form-control" id="deptPhone"
                                                    value="+1-555-0123">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="deptLocation" class="form-label">Edifício/Localização</label>
                                            <input type="text" class="form-control" id="deptLocation"
                                                value="Science Building, Floor 3">
                                        </div>

                                        <div class="mb-3">
                                            <label for="deptBudget" class="form-label">Orçamento anual ($)</label>
                                            <input type="number" class="form-control" id="deptBudget" value="2800000"
                                                min="0">
                                        </div>

                                        <div class="mb-3">
                                            <label for="deptDesc" class="form-label">Descrição</label>
                                            <textarea class="form-control" id="deptDesc"
                                                rows="4">O Departamento de Ciências Informáticas oferece cursos de licenciatura e pàs-gradua??o em ciências inform?ticas, engenharia de software e áreas afins. Com instalações de investiga??o de ponta e parcerias com a indàstria, preparamos os estudantes para carreiras de sucesso na área da tecnologia.</textarea>
                                        </div>

                                        <div class="d-flex justify-content-end gap-2">
                                            <button type="button" class="btn btn-outline-secondary"
                                                onclick="window.location.href='departments.html'">
                                                <i class="bi bi-x-circle me-1"></i> Cancelar
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-check-circle me-1"></i> Atualizar Departamento
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Statistics Column -->
                        <div class="col-span-4">
                            <div class="dashboard-card">
                                <div class="dashboard-card-header">
                                    <h5 class="dashboard-card-title mb-0">Departamento Statistics</h5>
                                </div>
                                <div class="dashboard-card-body">
                                    <!-- Statistics Grid -->
                                    <div class="dashboard-grid grid-cols-2 gap-3 text-center mb-4">
                                        <div>
                                            <div class="p-3 bg-light border rounded shadow-sm">
                                                <h4 class="text-primary mb-1">1,542</h4>
                                                <small class="text-muted">Estudantes</small>
                                                <div class="text-success small mt-1">
                                                    <i class="bi bi-arrow-up"></i> +5.2%
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="p-3 bg-light border rounded shadow-sm">
                                                <h4 class="text-success mb-1">28</h4>
                                                <small class="text-muted">Corpo docente</small>
                                                <div class="text-success small mt-1">
                                                    <i class="bi bi-arrow-up"></i> +2 new
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="p-3 bg-light border rounded shadow-sm">
                                                <h4 class="text-info mb-1">15</h4>
                                                <small class="text-muted">Programs</small>
                                                <div class="text-muted small mt-1">3 Graduate</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="p-3 bg-light border rounded shadow-sm">
                                                <h4 class="text-warning mb-1">89%</h4>
                                                <small class="text-muted">Capacidade</small>
                                                <div class="text-success small mt-1">Healthy</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Department Info -->
                                    <div class="row text-center mb-4">
                                        <div class="col-6">
                                            <div class="text-muted small">Founded</div>
                                            <div class="fw-semibold">1995</div>
                                        </div>
                                        <div>
                                            <div class="text-muted small">Ranking</div>
                                            <div class="fw-semibold">#12 National</div>
                                        </div>
                                    </div>

                                    <!-- Contact Information -->
                                    <div class="mb-4">
                                        <h6 class="text-muted mb-2">Informações de contacto</h6>
                                        <div class="small">
                                            <div class="mb-1"><i class="bi bi-geo-alt me-2"></i> Science Building, Floor
                                                3</div>
                                            <div class="mb-1"><i class="bi bi-telephone me-2"></i> +1 (555) 123-4567
                                            </div>
                                            <div class="mb-1"><i class="bi bi-envelope me-2"></i> cs@kiaalap.edu</div>
                                        </div>
                                    </div>

                                    <!-- Recognition Badges -->
                                    <div>
                                        <h6 class="text-muted mb-2">Recent Recognition</h6>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-primary">Excellence Award 2025</span>
                                            <span class="badge bg-success">Parap Research Dept</span>
                                        </div>
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
                        <p class="mb-0">Feito com <i class="bi bi-heart-fill text-danger"></i> para a educação</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form submission handling
            const form = document.getElementById('editDepartmentForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Show loading state
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="bi bi-arrow-clockwise spin me-1"></i> Updating...';
                    submitBtn.disabled = true;

                    // Simulate API call
                    setTimeout(() => {
                        // Show success toast
                        const toastHtml = `
                            <div class="toast position-fixed top-0 end-0 m-3" role="alert">
                                <div class="toast-header">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <strong class="me-auto">Sucesso</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                                </div>
                                <div class="toast-body">
                                    Departamento atualizado com sucesso! A redirecionar...
                                </div>
                            </div>
                        `;

                        document.body.insertAdjacentHTML('beforeend', toastHtml);
                        const toast = new bootstrap.Toast(document.querySelector('.toast:last-child'));
                        toast.show();

                        // Reset button and redirect
                        setTimeout(() => {
                            submitBtn.innerHTML = originalText;
                            submitBtn.disabled = false;
                            window.location.href = 'departments.html';
                        }, 2000);
                    }, 1500);
                });
            }
        });
    </script>


    <!-- Load JavaScript -->




</body>

</html>