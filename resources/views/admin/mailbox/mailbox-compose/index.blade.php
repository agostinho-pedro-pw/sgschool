<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kiaalap - Modern Education Management Dashboard for Universities">
    <meta name="keywords" content="education, dashboard, university, management, admin">
    <meta name="author" content="Kiaalap">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="preconnect" href="https://ui-avatars.com" crossorigin>
    <link rel="dns-prefetch" href="https://flagcdn.com">

    <title>Compose Message - Kiaalap Dashboard</title>

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
    <a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>

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
                <button type="button" class="hamburger-menu" id="sidebarToggle" aria-label="Toggle sidebar"
                    aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Breadcrumb for desktop -->
                <nav aria-label="Header breadcrumb" class="d-none d-lg-block ms-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Communication</a></li>
                        <li class="breadcrumb-item"><a href="mailbox.html">Mailbox</a></li>
                        <li class="breadcrumb-item active">Compose</li>
                    </ol>
                </nav>

                <!-- Logo for mobile -->
                <div class="navbar-brand d-lg-none fw-bold me-auto">Kiaalap</div>

                <!-- Spacer for desktop -->
                <div class="flex-grow-1 d-none d-lg-block"></div>

                <!-- Right Actions -->
                <div class="d-flex align-items-center gap-2">
                    <!-- Search -->
                    <div class="search-container">
                        <button type="button" class="btn btn-light btn-icon" id="searchToggle" aria-label="Open search"
                            aria-controls="searchForm">
                            <i class="bi bi-search"></i>
                        </button>

                        <div class="search-form" id="searchForm" role="search" aria-label="Site search">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" class="form-control" id="searchInput" aria-label="Search pages"
                                placeholder="Search..." data-bs-toggle="dropdown">
                            <button type="button" class="close-search" id="closeSearch" aria-label="Close search">
                                <i class="bi bi-x-lg"></i>
                            </button>

                            <ul class="dropdown-menu w-100 mt-2">
                                <li><a class="dropdown-item" href="#">Student Registration</a></li>
                                <li><a class="dropdown-item" href="#">Course Management</a></li>
                                <li><a class="dropdown-item" href="#">Grade Submission</a></li>
                                <li><a class="dropdown-item" href="#">Faculty Directory</a></li>
                                <li><a class="dropdown-item" href="#">Library Resources</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Advanced Search</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light btn-icon position-relative" data-bs-toggle="dropdown"
                            id="notificationsToggle" aria-label="Notifications">
                            <i class="bi bi-bell"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                style="font-size: 0.6rem;">3</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="width: 320px;">
                            <li class="dropdown-header d-flex align-items-center justify-content-between">
                                <span>Notifications</span>
                                <small class="text-muted">3 new</small>
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
                                            <div class="fw-semibold">New Event</div>
                                            <div class="text-muted small">Science Fair on March 15</div>
                                            <div class="text-muted small">5 minutes ago</div>
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
                                            <div class="fw-semibold">Assignment Submitted</div>
                                            <div class="text-muted small">John submitted his project</div>
                                            <div class="text-muted small">2 hours ago</div>
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
                                            <div class="text-muted small">Database backup completed</div>
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
                                    <small>View all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Quick Actions -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                            aria-label="Quick actions">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="add-student.html"><i
                                        class="bi bi-person-plus me-2"></i>Add Student</a></li>
                            <li><a class="dropdown-item" href="add-course.html"><i class="bi bi-book me-2"></i>Add
                                    Course</a></li>
                            <li><a class="dropdown-item" href="add-professor.html"><i
                                        class="bi bi-person-badge me-2"></i>Add Professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-plus me-2"></i>Schedule
                                    Event</a></li>
                        </ul>
                    </div>

                    <!-- User Menu -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-light d-flex align-items-center" data-bs-toggle="dropdown"
                            aria-label="Sarah Johnson account menu">
                            <span class="user-avatar me-2">
                                SJ
                            </span>
                            <span class="d-none d-md-inline">Sarah Johnson</span>
                            <i class="bi bi-chevron-down ms-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i>Help
                                    Center</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
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
                        <i class="bi bi-arrow-left me-2"></i>Back to Inbox
                    </a>
                    <h1 class="h3 font-bold">Compose New Message</h1>
                </div>

                <!-- Compose View -->
                <div class="row g-3">
                    <!-- Sidebar -->
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <a href="mailbox-compose.html" class="btn btn-primary w-100 mb-3">
                                    <i class="bi bi-pencil-square me-2"></i>Compose
                                </a>

                                <div class="mailbox-sidebar">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="mailbox.html"
                                                class="d-flex align-items-center text-decoration-none text-dark">
                                                <i class="bi bi-inbox-fill me-2"></i>
                                                <span>Inbox</span>
                                                <span class="badge bg-primary ms-auto">12</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-send me-2"></i>
                                                <span>Sent</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-file-earmark-text me-2"></i>
                                                <span>Drafts</span>
                                                <span class="badge bg-secondary ms-auto">3</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-star me-2"></i>
                                                <span>Important</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <i class="bi bi-trash me-2"></i>
                                                <span>Trash</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <h6 class="text-muted text-uppercase small mb-3">Labels</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-success me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Academic</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-warning me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Administrative</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-info me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Students</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#"
                                                class="d-flex align-items-center text-decoration-none text-muted">
                                                <span class="badge rounded-circle bg-danger me-2"
                                                    style="width: 10px; height: 10px;"></span>
                                                <span>Urgent</span>
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
                                            <span class="input-group-text">To</span>
                                            <input type="text" class="form-control" id="toRecipients"
                                                placeholder="Enter recipients">
                                            <button class="btn btn-outline-secondary" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#ccBccSection">
                                                Cc/Bcc
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
                                                <span class="input-group-text">Bcc</span>
                                                <input type="text" class="form-control" id="bccRecipients"
                                                    placeholder="Blind carbon copy recipients">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Subject -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>

                                    <!-- Label Selection -->
                                    <div class="mb-3">
                                        <label class="form-label">Add Label</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="labelAcademic"
                                                    value="academic">
                                                <label class="form-check-label" for="labelAcademic">
                                                    <span class="badge rounded-circle bg-success me-1"
                                                        style="width: 10px; height: 10px;"></span>
                                                    Academic
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="labelAdmin"
                                                    value="administrative">
                                                <label class="form-check-label" for="labelAdmin">
                                                    <span class="badge rounded-circle bg-warning me-1"
                                                        style="width: 10px; height: 10px;"></span>
                                                    Administrative
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="labelStudents"
                                                    value="students">
                                                <label class="form-check-label" for="labelStudents">
                                                    <span class="badge rounded-circle bg-info me-1"
                                                        style="width: 10px; height: 10px;"></span>
                                                    Students
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="labelUrgent"
                                                    value="urgent">
                                                <label class="form-check-label" for="labelUrgent">
                                                    <span class="badge rounded-circle bg-danger me-1"
                                                        style="width: 10px; height: 10px;"></span>
                                                    Urgent
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
                                                        onclick="formatText('bold')" aria-label="Type bold">
                                                        <i aria-hidden="true" class="bi bi-type-bold"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('italic')" aria-label="Type italic">
                                                        <i aria-hidden="true" class="bi bi-type-italic"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('underline')" aria-label="Type underline">
                                                        <i aria-hidden="true" class="bi bi-type-underline"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group me-2" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('justifyLeft')" aria-label="Text left">
                                                        <i aria-hidden="true" class="bi bi-text-left"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('justifyCenter')" aria-label="Text center">
                                                        <i aria-hidden="true" class="bi bi-text-center"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('justifyRight')" aria-label="Text right">
                                                        <i aria-hidden="true" class="bi bi-text-right"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group me-2" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('insertOrderedList')" aria-label="List ol">
                                                        <i aria-hidden="true" class="bi bi-list-ol"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="formatText('insertUnorderedList')"
                                                        aria-label="List ul">
                                                        <i aria-hidden="true" class="bi bi-list-ul"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group me-2" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="insertLink()" aria-label="Link 45deg">
                                                        <i aria-hidden="true" class="bi bi-link-45deg"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        onclick="insertImage()" aria-label="Image">
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
                                        <label class="form-label">Attachments</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="attachments" multiple>
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="bi bi-paperclip"></i> Attach Files
                                            </button>
                                        </div>
                                        <div id="attachmentList" class="mt-2"></div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-secondary me-2"
                                                onclick="saveDraft()">
                                                <i class="bi bi-save"></i> Save Draft
                                            </button>
                                            <button type="button" class="btn btn-outline-danger"
                                                onclick="discardMessage()">
                                                <i class="bi bi-trash"></i> Discard
                                            </button>
                                        </div>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="requestReadReceipt">
                                                <label class="form-check-label" for="requestReadReceipt">
                                                    Request read receipt
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-send"></i> Send Message
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
                                                <span class="ms-2">Meeting Request</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="template-card border rounded p-2 cursor-pointer"
                                                onclick="useTemplate('announcement')">
                                                <i class="bi bi-megaphone text-info"></i>
                                                <span class="ms-2">Announcement</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="template-card border rounded p-2 cursor-pointer"
                                                onclick="useTemplate('assignment')">
                                                <i class="bi bi-clipboard-check text-success"></i>
                                                <span class="ms-2">Assignment Notice</span>
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
                        <p class="mb-0">&copy; 2026 Kiaalap. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-0">Built with <i class="bi bi-heart-fill text-danger"></i> for education</p>
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
    const url = prompt('Enter URL:');
    if (url) {
        document.execCommand('createLink', false, url);
        document.getElementById('messageBody').focus();
    }
}

function insertImage() {
    const url = prompt('Enter image URL:');
    if (url) {
        document.execCommand('insertImage', false, url);
        document.getElementById('messageBody').focus();
    }
}

// Template functions
function useTemplate(type) {
    const templates = {
        meeting: {
            subject: 'Meeting Request - [Date]',
            body: `<p>Dear [Recipient],</p>
                   <p>I would like to schedule a meeting to discuss [topic].</p>
                   <p>Proposed times:</p>
                   <ul>
                       <li>Option 1: [Date and Time]</li>
                       <li>Option 2: [Date and Time]</li>
                   </ul>
                   <p>Please let me know which time works best for you.</p>
                   <p>Best regards,<br>[Your Name]</p>`
        },
        announcement: {
            subject: 'Important Announcement - [Title]',
            body: `<p>Dear Students/Faculty,</p>
                   <p>This is to inform you about [announcement details].</p>
                   <p>Key points:</p>
                   <ul>
                       <li>[Point 1]</li>
                       <li>[Point 2]</li>
                       <li>[Point 3]</li>
                   </ul>
                   <p>If you have any questions, please feel free to contact me.</p>
                   <p>Thank you,<br>[Your Name]</p>`
        },
        assignment: {
            subject: 'New Assignment - [Course Name]',
            body: `<p>Dear Students,</p>
                   <p>A new assignment has been posted for [Course Name].</p>
                   <p><strong>Assignment Details:</strong></p>
                   <ul>
                       <li>Title: [Assignment Title]</li>
                       <li>Due Date: [Date]</li>
                       <li>Submission Format: [Format]</li>
                   </ul>
                   <p>Please review the attached materials and let me know if you have any questions.</p>
                   <p>Best regards,<br>[Your Name]</p>`
        }
    };

    if (templates[type]) {
        document.getElementById('subject').value = templates[type].subject;
        document.getElementById('messageBody').innerHTML = templates[type].body;
    }
}

// Form functions
function saveDraft() {
    alert('Draft saved successfully!');
}

function discardMessage() {
    if (confirm('Are you sure you want to discard this message?')) {
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
    alert('Message sent successfully!');
    window.location.href = 'mailbox.html';
});
    </script>


    <!-- Load JavaScript -->




</body>

</html>