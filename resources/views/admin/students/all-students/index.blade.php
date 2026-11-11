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

    <title>All students - Kiaalap Dashboard</title>

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
    <a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>

    <!-- Required DOM elements for dashboard.js -->
    <div class="search-backdrop" id="searchBackdrop"></div>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar dentro do layouts admin -->
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
                        <li class="breadcrumb-item active">All students</li>
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
                <!-- Page Header -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-1">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                                <h4 class="dashboard-card-title mb-0">All Students</h4>
                                <a href="add-student.html" class="btn btn-primary">
                                    <i class="bi bi-plus-circle me-2"></i>Add New Student
                                </a>
                            </div>
                            <div class="dashboard-card-body">
                                <!-- Search and Filter -->
                                <div class="row gx-3 gy-2 mb-3">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                                            <input type="text" class="form-control" placeholder="Search students...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select">
                                            <option selected>All Departments</option>
                                            <option>Computer Science</option>
                                            <option>Engineering</option>
                                            <option>Business</option>
                                            <option>Medicine</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select">
                                            <option selected>All Years</option>
                                            <option>First Year</option>
                                            <option>Second Year</option>
                                            <option>Third Year</option>
                                            <option>Fourth Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Students Grid -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-4">
                        <!-- Student Card 1 -->
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=Alex+Johnson&background=6366f1&color=fff"
                                    alt="Alex Johnson" class="rounded-circle mb-3" width="100" height="100"
                                    loading="lazy">
                                <h5 class="mb-1">Alex Johnson</h5>
                                <p class="text-muted mb-2">Computer Science</p>
                                <p class="text-muted small mb-3"><strong>Age:</strong> 20 Years</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="student-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="edit-student.html" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Student Card 2 -->
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Miller&background=ec4899&color=fff"
                                    alt="Sarah Miller" class="rounded-circle mb-3" width="100" height="100"
                                    loading="lazy">
                                <h5 class="mb-1">Sarah Miller</h5>
                                <p class="text-muted mb-2">Business Administration</p>
                                <p class="text-muted small mb-3"><strong>Age:</strong> 21 Years</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="student-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="edit-student.html" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Student Card 3 -->
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=Mike+Chen&background=10b981&color=fff"
                                    alt="Mike Chen" class="rounded-circle mb-3" width="100" height="100" loading="lazy">
                                <h5 class="mb-1">Mike Chen</h5>
                                <p class="text-muted mb-2">Engineering</p>
                                <p class="text-muted small mb-3"><strong>Age:</strong> 19 Years</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="student-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="edit-student.html" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Student Card 4 -->
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=Emma+Wilson&background=f59e0b&color=fff"
                                    alt="Emma Wilson" class="rounded-circle mb-3" width="100" height="100"
                                    loading="lazy">
                                <h5 class="mb-1">Emma Wilson</h5>
                                <p class="text-muted mb-2">Medicine</p>
                                <p class="text-muted small mb-3"><strong>Age:</strong> 22 Years</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="student-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="edit-student.html" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Student Card 5 -->
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=James+Brown&background=8b5cf6&color=fff"
                                    alt="James Brown" class="rounded-circle mb-3" width="100" height="100"
                                    loading="lazy">
                                <h5 class="mb-1">James Brown</h5>
                                <p class="text-muted mb-2">Psychology</p>
                                <p class="text-muted small mb-3"><strong>Age:</strong> 20 Years</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="student-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="edit-student.html" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Student Card 6 -->
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=Lisa+Anderson&background=ef4444&color=fff"
                                    alt="Lisa Anderson" class="rounded-circle mb-3" width="100" height="100"
                                    loading="lazy">
                                <h5 class="mb-1">Lisa Anderson</h5>
                                <p class="text-muted mb-2">Mathematics</p>
                                <p class="text-muted small mb-3"><strong>Age:</strong> 21 Years</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="student-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="edit-student.html" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Student Card 7 -->
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=David+Lee&background=14b8a6&color=fff"
                                    alt="David Lee" class="rounded-circle mb-3" width="100" height="100" loading="lazy">
                                <h5 class="mb-1">David Lee</h5>
                                <p class="text-muted mb-2">Physics</p>
                                <p class="text-muted small mb-3"><strong>Age:</strong> 19 Years</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="student-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="edit-student.html" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Student Card 8 -->
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-body text-center">
                                <img src="https://ui-avatars.com/api/?name=Amy+Garcia&background=f97316&color=fff"
                                    alt="Amy Garcia" class="rounded-circle mb-3" width="100" height="100"
                                    loading="lazy">
                                <h5 class="mb-1">Amy Garcia</h5>
                                <p class="text-muted mb-2">Chemistry</p>
                                <p class="text-muted small mb-3"><strong>Age:</strong> 20 Years</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="student-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="edit-student.html" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="row mt-4">
                    <div class="col-12">
                        <nav aria-label="Student pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
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

    <!-- Load JavaScript -->




</body>

</html>