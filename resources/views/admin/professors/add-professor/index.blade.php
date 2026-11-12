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

    <title>Adicionar Professor - Painel sgSchool</title>

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
                        <li class="breadcrumb-item active">Adicionar Professor</li>
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
                            <h1 class="h3 font-bold">Adicionar Novo Professor</h1>
                            <p class="text-muted text-sm">Registe um novo membro do corpo docente da sua instituição.</p>
                        </div>
                        <div>
                            <a href="all-professors.html" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Voltar aos Professores
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Add Professor Form -->
                <div class="dashboard-row">
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h5 class="dashboard-card-title mb-0">Registo de Professor</h5>
                        </div>
                        <div class="dashboard-card-body">
                            <form class="needs-validation" novalidate>
                                <!-- Personal Information Section -->
                                <div class="dashboard-grid grid-cols-1 mb-4">
                                    <div>
                                        <h6 class="text-primary fw-semibold mb-3">
                                            <i class="bi bi-person-circle me-2"></i>Informações Pessoais
                                        </h6>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-12 gap-3 mb-3">
                                    <div class="col-span-2">
                                        <label for="title" class="form-label">Título <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="title" required>
                                            <option selected disabled value="">Escolha...</option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Prof.">Prof.</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mrs.">Mrs.</option>
                                        </select>
                                        <div class="invalid-feedback">Selecione um título.</div>
                                    </div>
                                    <div class="col-span-5">
                                        <label for="firstName" class="form-label">Nome Próprio <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="firstName" required>
                                        <div class="invalid-feedback">Introduza um nome próprio válido.</div>
                                    </div>
                                    <div class="col-span-5">
                                        <label for="lastName" class="form-label">Apelido <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="lastName" required>
                                        <div class="invalid-feedback">Introduza um apelido válido.</div>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label for="email" class="form-label">Endereço de Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" required>
                                        <div class="invalid-feedback">Introduza um endereço de email válido.</div>
                                    </div>
                                    <div>
                                        <label for="phone" class="form-label">Número de Telefone <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phone" required>
                                        <div class="invalid-feedback">Introduza um número de telefone válido.</div>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label for="dateOfBirth" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="dateOfBirth">
                                    </div>
                                    <div>
                                        <label for="gender" class="form-label">Género</label>
                                        <select class="form-select" id="gender">
                                            <option selected disabled value="">Escolha...</option>
                                            <option value="Male">Masculino</option>
                                            <option value="Female">Feminino</option>
                                            <option value="Other">Outro</option>
                                            <option value="Prefer not to say">Prefiro não indicar</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-1 mb-4">
                                    <div>
                                        <label for="address" class="form-label">Morada</label>
                                        <textarea class="form-control" id="address" rows="2"
                                            placeholder="Introduza a morada completa"></textarea>
                                    </div>
                                </div>

                                <!-- Academic Information Section -->
                                <div class="dashboard-grid grid-cols-1 mb-4">
                                    <div>
                                        <h6 class="text-primary fw-semibold mb-3">
                                            <i class="bi bi-mortarboard me-2"></i>Informações Académicas
                                        </h6>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label for="employeeId" class="form-label">N.º de Funcionário <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="employeeId" required
                                            placeholder="e.g., EMP001">
                                        <div class="invalid-feedback">Introduza um número de funcionário.</div>
                                    </div>
                                    <div>
                                        <label for="department" class="form-label">Departamento <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="department" required>
                                            <option selected disabled value="">Escolha um Departamento...</option>
                                            <option value="Computer Science">Ciências da Computação</option>
                                            <option value="Mathematics">Matemática</option>
                                            <option value="Physics">Física</option>
                                            <option value="Chemistry">Química</option>
                                            <option value="Biology">Biologia</option>
                                            <option value="English Literature">Literatura Inglesa</option>
                                            <option value="History">História</option>
                                            <option value="Economics">Economia</option>
                                            <option value="Business Administration">Administração de Empresas</option>
                                            <option value="Engineering">Engenharia</option>
                                        </select>
                                        <div class="invalid-feedback">Selecione um departamento.</div>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label for="position" class="form-label">Cargo <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="position" required>
                                            <option selected disabled value="">Escolha um Cargo...</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Associate Professor">Professor Associado</option>
                                            <option value="Assistant Professor">Professor Auxiliar</option>
                                            <option value="Lecturer">Assistente</option>
                                            <option value="Senior Lecturer">Assistente Principal</option>
                                            <option value="Visiting Professor">Professor Convidado</option>
                                        </select>
                                        <div class="invalid-feedback">Selecione um cargo.</div>
                                    </div>
                                    <div>
                                        <label for="employmentType" class="form-label">Tipo de Vínculo <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="employmentType" required>
                                            <option selected disabled value="">Escolha um Tipo...</option>
                                            <option value="Full-Time">Tempo Inteiro</option>
                                            <option value="Part-Time">Tempo Parcial</option>
                                            <option value="Contract">Contrato</option>
                                            <option value="Adjunct">Colaborador Externo</option>
                                        </select>
                                        <div class="invalid-feedback">Selecione o tipo de vínculo.</div>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label for="joiningDate" class="form-label">Data de Início <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="joiningDate" required>
                                        <div class="invalid-feedback">Introduza a data de início.</div>
                                    </div>
                                    <div>
                                        <label for="salary" class="form-label">Salário Mensal</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="salary" placeholder="0.00"
                                                step="0.01">
                                        </div>
                                    </div>
                                </div>

                                <!-- Educational Background -->
                                <div class="dashboard-grid grid-cols-1 mb-4">
                                    <div>
                                        <h6 class="text-primary fw-semibold mb-3">
                                            <i class="bi bi-book me-2"></i>Formação Académica
                                        </h6>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label for="highestDegree" class="form-label">Grau Académico Mais Elevado <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="highestDegree" required>
                                            <option selected disabled value="">Escolha um Grau Académico...</option>
                                            <option value="PhD">Doutoramento</option>
                                            <option value="Master's">Mestrado</option>
                                            <option value="Bachelor's">Licenciatura</option>
                                            <option value="Other">Outro</option>
                                        </select>
                                        <div class="invalid-feedback">Selecione o grau académico mais elevado.</div>
                                    </div>
                                    <div>
                                        <label for="specialization" class="form-label">Especialização/Área</label>
                                        <input type="text" class="form-control" id="specialization"
                                            placeholder="por exemplo, Aprendizagem Automática">
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label for="university" class="form-label">Universidade/Instituição</label>
                                        <input type="text" class="form-control" id="university"
                                            placeholder="Nome da universidade">
                                    </div>
                                    <div>
                                        <label for="graduationYear" class="form-label">Ano de Conclusão</label>
                                        <input type="number" class="form-control" id="graduationYear" min="1950"
                                            max="2024" placeholder="YYYY">
                                    </div>
                                </div>

                                <!-- Additional Information -->
                                <div class="dashboard-grid grid-cols-1 mb-4">
                                    <div>
                                        <h6 class="text-primary fw-semibold mb-3">
                                            <i class="bi bi-info-circle me-2"></i>Informações Adicionais
                                        </h6>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label for="experience" class="form-label">Anos de Experiência</label>
                                        <input type="number" class="form-control" id="experience" min="0"
                                            placeholder="Years">
                                    </div>
                                    <div>
                                        <label for="office" class="form-label">Localização do Gabinete</label>
                                        <input type="text" class="form-control" id="office"
                                            placeholder="e.g., Room 301, Building A">
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div class="col-12">
                                        <label for="subjects" class="form-label">Disciplinas a Lecionar</label>
                                        <input type="text" class="form-control" id="subjects"
                                            placeholder="e.g., Data Structures, Algorithms, Machine Learning">
                                        <div class="form-text">Separe várias disciplinas com vírgulas</div>
                                    </div>
                                </div>

                                <div class="dashboard-grid grid-cols-2 gap-3 mb-3">
                                    <div class="col-12">
                                        <label for="bio" class="form-label">Biografia/Sobre</label>
                                        <textarea class="form-control" id="bio" rows="3"
                                            placeholder="Breve descrição da experiência e das áreas de especialização do professor"></textarea>
                                    </div>
                                </div>

                                <!-- Profile Photo -->
                                <div class="dashboard-grid grid-cols-1 mb-4">
                                    <div>
                                        <label for="profilePhoto" class="form-label">Fotografia de Perfil</label>
                                        <input type="file" class="form-control" id="profilePhoto" accept="image/*">
                                        <div class="form-text">Carregue uma fotografia profissional (JPG ou PNG, máx. 2 MB)</div>
                                    </div>
                                </div>

                                <!-- Form Actions -->
                                <div class="row">
                                    <div class="col-12">
                                        <hr class="my-4">
                                        <div class="d-flex gap-3">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-check-lg me-2"></i>Guardar Professor
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary">
                                                <i class="bi bi-x-lg me-2"></i>Cancel
                                            </button>
                                            <button type="reset" class="btn btn-outline-warning">
                                                <i class="bi bi-arrow-clockwise me-2"></i>Repor Formulário
                                            </button>
                                        </div>
                                    </div>
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
        // Bootstrap form validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- Load JavaScript -->




</body>

</html>