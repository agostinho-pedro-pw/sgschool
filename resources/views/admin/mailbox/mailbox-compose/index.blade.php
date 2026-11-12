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

    <title>Escrever mensagem - Painel sgSchool</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <style>
        .mailbox-sidebar a.active {
            font-weight: 500;
            color: var(--bs-primary) !important
        }

        .mailbox-sidebar a:hover {
            color: var(--bs-primary) !important
        }

        .message-editor {
            border: 1px solid #dee2e6;
            border-radius: .375rem;
            padding: 12px;
            font-size: 14px;
            line-height: 1.6
        }

        .message-editor:focus {
            border-color: #86b7fe;
            outline: none;
            box-shadow: 0 0 0 .25rem #0d6efd40
        }

        .template-card {
            cursor: pointer;
            transition: all .3s
        }

        .template-card:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px)
        }

        .cursor-pointer {
            cursor: pointer
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
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Mostrar/ocultar menu lateral"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Trilho de navegação" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                        <li class="breadcrumb-item"><a href="#">Comunicação</a></li>
                        <li class="breadcrumb-item"><a href="mailbox.html">Correio</a></li>
                        <li class="breadcrumb-item active">Compor</li>
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
                                            <div class="text-muted small">Cópia de segurança da base de dados concluída</div>
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
                <!-- Back Button and Page Header -->
                <div class="mb-4">
                    <a href="mailbox.html" class="btn btn-outline-secondary btn-sm mb-3">
                        <i class="bi bi-arrow-left me-2"></i>Voltar à caixa de entrada
                    </a>
                    <h1 class="h3 font-bold">Compor nova mensagem</h1>
                </div>

                <!-- Compose View -->
                <div class="row g-3">
                    <!-- Sidebar -->
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <a href="mailbox-compose.html" class="btn btn-primary w-100 mb-3">
                                    <i class="bi bi-pencil-square me-2"></i>Compor
                                </a>

                                <div class="mailbox-sidebar">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="mailbox.html"
                                                class="d-flex align-items-center text-decoration-none text-dark">
                                                <i class="bi bi-inbox-fill me-2"></i>
                                                <span>Caixa de entrada</span>
                                                <span class="badge bg-primary ms-auto">12</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-send me-2"></i>
                                                <span>Enviados</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-file-earmark-text me-2"></i>
                                                <span>Rascunhos</span>
                                                <span class="badge bg-secondary ms-auto">3</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-star me-2"></i>
                                                <span>Importante</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-trash me-2"></i>
                                                <span>Lixo</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <h6 class="text-muted text-uppercase small mb-3">Etiquetas</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-success me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Académico</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-warning me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Administrativo</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-info me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Estudantes</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-danger me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Urgente</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Compose Form -->
                    <div class="col-lg-9">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <form id="composeForm">
                                    <!-- Recipients -->
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text">Para</span>
                                            <input type="text" class="form-control" id="toRecipients"
                                                placeholder="Introduza os destinatários">
                                            <button class="btn btn-outline-secondary" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#ccBccSection">
                                                Cc/Cco
                                            </button>
                                        </div>
                                    </div>

                                    <!-- CC/BCC Section (Collapsible) -->
                                    <div class="collapse" id="ccBccSection">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">Cc</span>
                                                <input type="text" class="form-control" id="ccRecipients"
                                                    placeholder="Carbon copy recipients">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">Cco</span>
                                                <input type="text" class="form-control" id="bccRecipients"
                                                    placeholder="Blind carbon copy recipients">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Subject -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="subject" placeholder="Assunto">
                                    </div>

                                    <!-- Label Selection -->
                                    <div class="mb-3">
                                        <label class="form-label">Adicionar Label</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="labelAcademic"
                                                    value="academic">
                                                <label class="form-check-label" for="labelAcademic">
                                                    <span class="badge rounded-circle bg-success me-1"
                                                        style="width: 10px; height: 10px;"></span>
                                                    Académico
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="labelAdmin"
                                                    value="administrative">
                                                <label class="form-check-label" for="labelAdmin">
                                                    <span class="badge rounded-circle bg-warning me-1"
                                                        style="width: 10px; height: 10px;"></span>
                                                    Administrativo
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="labelStudents"
                                                    value="students">
                                                <label class="form-check-label" for="labelStudents">
                                                    <span class="badge rounded-circle bg-info me-1"
                                                        style="width: 10px; height: 10px;"></span>
                                                    Estudantes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="labelUrgent"
                                                    value="urgent">
                                                <label class="form-check-label" for="labelUrgent">
                                                    <span class="badge rounded-circle bg-danger me-1"
                                                        style="width: 10px; height: 10px;"></span>
                                                    Urgente
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message Body -->
                                    <div class="mb-3">
                                        <div id="messageToolbar" class="border-bottom pb-2 mb-2">
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="btn-group me-2" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('bold')" aria-label="Negrito">
                                                        <i aria-hidden="true" class="bi bi-type-bold"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('italic')" aria-label="Itálico">
                                                        <i aria-hidden="true" class="bi bi-type-italic"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('underline')" aria-label="Sublinhar">
                                                        <i aria-hidden="true" class="bi bi-type-underline"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group me-2" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('justifyLeft')" aria-label="Alinhar texto à esquerda">
                                                        <i aria-hidden="true" class="bi bi-text-left"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('justifyCenter')" aria-label="Centrar texto">
                                                        <i aria-hidden="true" class="bi bi-text-center"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('justifyRight')" aria-label="Alinhar texto à direita">
                                                        <i aria-hidden="true" class="bi bi-text-right"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group me-2" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('insertOrderedList')" aria-label="Lista numerada">
                                                        <i aria-hidden="true" class="bi bi-list-ol"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('insertUnorderedList')"
                                                        aria-label="Lista com marcas">
                                                        <i aria-hidden="true" class="bi bi-list-ul"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group me-2" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="insertLink()" aria-label="Inserir ligação">
                                                        <i aria-hidden="true" class="bi bi-link-45deg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="insertImage()" aria-label="Imagemm">
                                                        <i aria-hidden="true" class="bi bi-image"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div contenteditable="true" id="messageBody" class="form-control message-editor"
                                            style="min-height: 300px;">

                                        </div>
                                    </div>

                                    <!-- Attachments -->
                                    <div class="mb-3">
                                        <label class="form-label">Anexos</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="attachments" multiple>
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="bi bi-paperclip"></i> Anexar ficheiros
                                            </button>
                                        </div>
                                        <div id="attachmentList" class="mt-2"></div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-secondary me-2"
                                                onclick="saveDraft()">
                                                <i class="bi bi-save"></i> Guardar rascunho
                                            </button>
                                            <button type="button" class="btn btn-outline-danger"
                                                onclick="discardMessage()">
                                                <i class="bi bi-trash"></i> Descartar
                                            </button>
                                        </div>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="requestReadReceipt">
                                                <label class="form-check-label" for="requestReadReceipt">
                                                    Solicitar confirmação de leitura
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-send"></i> Enviar mensagem
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <!-- Template Suggestions -->
                                <div class="mt-4">
                                    <h6 class="text-muted mb-3">Quick Templates</h6>
                                    <div class="row g-2">
                                        <div class="col-md-4">
                                            <div class="template-card border rounded p-2 cursor-pointer"
                                                onclick="useTemplate('meeting')">
                                                <i class="bi bi-calendar-event text-primary"></i>
                                                <span class="ms-2">Pedido de reuni?o</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="template-card border rounded p-2 cursor-pointer"
                                                onclick="useTemplate('announcement')">
                                                <i class="bi bi-megaphone text-info"></i>
                                                <span class="ms-2">An?ncio</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="template-card border rounded p-2 cursor-pointer"
                                                onclick="useTemplate('assignment')">
                                                <i class="bi bi-clipboard-check text-success"></i>
                                                <span class="ms-2">Aviso de trabalho</span>
                                            </div>
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
        // Rich text editor functions
function formatText(command) {
    document.execCommand(command, false, null);
    document.getElementById('messageBody').focus();
}

function insertLink() {
    const url = prompt('Introduza o URL:');
    if (url) {
        document.execCommand('createLink', false, url);
        document.getElementById('messageBody').focus();
    }
}

function insertImage() {
    const url = prompt('Introduza o URL da imagem:');
    if (url) {
        document.execCommand('insertImage', false, url);
        document.getElementById('messageBody').focus();
    }
}

// Template functions
function useTemplate(type) {
    const templates = {
        meeting: {
            subject: 'Pedido de reuni?o - [Data]',
            body: `<p>Caro(a) [destinat?rio(a)],</p>
                   <p>Gostaria de marcar uma reuni?o para falar sobre [assunto].</p>
                   <p>Hor?rios propostos:</p>
                   <ul>
                       <li>Op??o 1: [data e hora]</li>
                       <li>Op??o 2: [data e hora]</li>
                   </ul>
                   <p>Indique-me, por favor, qual dos hor?rios lhe ? mais conveniente.</p>
                   <p>Com os melhores cumprimentos,<br>[O seu nome]</p>`
        },
        announcement: {
            subject: 'An?ncio importante - [Título]',
            body: `<p>Caros estudantes e membros do corpo docente,</p>
                   <p>Informamos que [detalhes do an?ncio].</p>
                   <p>Pontos principais:</p>
                   <ul>
                       <li>[Ponto 1]</li>
                       <li>[Ponto 2]</li>
                       <li>[Ponto 3]</li>
                   </ul>
                   <p>Se tiver alguma quest?o, n?o hesite em contactar-me.</p>
                   <p>Obrigado(a),<br>[O seu nome]</p>`
        },
        assignment: {
            subject: 'Novo trabalho - [Nome do curso]',
            body: `<p>Caros estudantes,</p>
                   <p>Foi publicado um novo trabalho para [Nome do curso].</p>
                   <p><strong>Detalhes do trabalho:</strong></p>
                   <ul>
                       <li>T?tulo: [t?tulo do trabalho]</li>
                       <li>Data de entrega: [data]</li>
                       <li>Formato de entrega: [formato]</li>
                   </ul>
                   <p>Consulte os materiais em anexo e informe-me se tiver alguma quest?o.</p>
                   <p>Com os melhores cumprimentos,<br>[O seu nome]</p>`
        }
    };

    if (templates[type]) {
        document.getElementById('subject').value = templates[type].subject;
        document.getElementById('messageBody').innerHTML = templates[type].body;
    }
}

// Form functions
function saveDraft() {
    alert('Rascunho guardado com sucesso!');
}

function discardMessage() {
    if (confirm('Tem a certeza de que pretende descartar esta mensagem?')) {
        window.location.href = 'mailbox.html';
    }
}

// Handle file attachments
document.getElementById('attachments')?.addEventListener('change', function(e) {
    const files = Array.from(e.target.files);
    const attachmentList = document.getElementById('attachmentList');

    attachmentList.innerHTML = '';

    files.forEach(file => {
        const fileItem = document.createElement('div');
        fileItem.className = 'badge bg-secondary me-2 mb-2';
        fileItem.innerHTML = `
            <i class="bi bi-paperclip"></i> ${file.name}
            <span class="ms-1" style="cursor: pointer;" onclick="this.parentElement.remove()">×</span>
        `;
        attachmentList.appendChild(fileItem);
    });
});

// Form submission
document.getElementById('composeForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Mensagem enviada com sucesso!');
    window.location.href = 'mailbox.html';
});
    </script>


    <!-- Load JavaScript -->




</body>

</html>