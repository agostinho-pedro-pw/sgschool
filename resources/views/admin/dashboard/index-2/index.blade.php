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

    <title>Dashboard Variant 2 - Kiaalap Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/dist/assets/favicon-9EIT7vLh.ico') }}">


    <!-- Load stylesheets -->



    <!-- Page-specific stylesheets (set via additionalCSS in vite.config.js) -->

    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/main-ZZRh_wak.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('dashboard/assets/dist/assets/chart-runtime-BMJJQUfu.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/main-DVYj-QCH.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dashboard/assets/dist/assets/charts-layout-C732DjRu.css') }}">
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
                        <li class="breadcrumb-item active">Dashboard</li>
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
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 font-bold">Academic Management Dashboard</h1>
                            <p class="text-muted text-sm">Comprehensive overview of courses, student progress, and
                                academic performance metrics.</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-calendar-week me-2"></i>Academic Calendar
                            </button>
                            <button type="button" class="btn btn-success">
                                <i class="bi bi-plus-circle me-2"></i>New Semester
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Academic Overview Cards -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-4">
                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <div class="mb-3">
                                    <div class="stat-icon-large bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                        style="width: 60px; height: 60px;">
                                        <i class="bi bi-book-half" style="font-size: 24px; color: #198754;"></i>
                                    </div>
                                </div>
                                <div class="stat-value text-success fw-bold mb-1" style="font-size: 2rem;">142</div>
                                <div class="stat-label text-muted mb-2">Active Courses</div>
                                <div class="stat-change text-success small fw-semibold">
                                    <i class="bi bi-arrow-up" style="font-size: 12px;"></i> +8
                                </div>
                                <div class="text-muted" style="font-size: 0.75rem;">new this semester</div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <div class="mb-3">
                                    <div class="stat-icon-large bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                        style="width: 60px; height: 60px;">
                                        <i class="bi bi-people-fill" style="font-size: 24px; color: #0d6efd;"></i>
                                    </div>
                                </div>
                                <div class="stat-value text-primary fw-bold mb-1" style="font-size: 2rem;">9,284</div>
                                <div class="stat-label text-muted mb-2">Enrolled Students</div>
                                <div class="stat-change text-success small fw-semibold">
                                    <i class="bi bi-arrow-up" style="font-size: 12px;"></i> +412
                                </div>
                                <div class="text-muted" style="font-size: 0.75rem;">since last month</div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <div class="mb-3">
                                    <div class="stat-icon-large bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                        style="width: 60px; height: 60px;">
                                        <i class="bi bi-person-badge" style="font-size: 24px; color: #ffc107;"></i>
                                    </div>
                                </div>
                                <div class="stat-value text-warning fw-bold mb-1" style="font-size: 2rem;">68</div>
                                <div class="stat-label text-muted mb-2">Faculty Members</div>
                                <div class="stat-change text-success small fw-semibold">
                                    <i class="bi bi-arrow-up" style="font-size: 12px;"></i> +3
                                </div>
                                <div class="text-muted" style="font-size: 0.75rem;">new hires</div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-body text-center">
                                <div class="mb-3">
                                    <div class="stat-icon-large bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                        style="width: 60px; height: 60px;">
                                        <i class="bi bi-award" style="font-size: 24px; color: #0dcaf0;"></i>
                                    </div>
                                </div>
                                <div class="stat-value text-info fw-bold mb-1" style="font-size: 2rem;">4.7</div>
                                <div class="stat-label text-muted mb-2">Course Rating</div>
                                <div class="stat-change text-success small fw-semibold">
                                    <i class="bi bi-arrow-up" style="font-size: 12px;"></i> +0.3
                                </div>
                                <div class="text-muted" style="font-size: 0.75rem;">average improvement</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Performance and Student Progress -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-2">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                                <h5 class="dashboard-card-title mb-0">Course Performance</h5>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        Current Semester
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Current Semester</a></li>
                                        <li><a class="dropdown-item" href="#">Last Semester</a></li>
                                        <li><a class="dropdown-item" href="#">Academic Year</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="chart-container">
                                    <canvas id="coursePerformanceChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                                <h5 class="dashboard-card-title mb-0">Student Progress</h5>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        All Departments
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">All Departments</a></li>
                                        <li><a class="dropdown-item" href="#">Computer Science</a></li>
                                        <li><a class="dropdown-item" href="#">Mathematics</a></li>
                                        <li><a class="dropdown-item" href="#">Biology</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="chart-container">
                                    <canvas id="studentProgressChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academic Insights -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-3">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h6 class="dashboard-card-title">Department Overview</h6>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 rounded me-2"
                                                style="width: 8px; height: 8px;"></div>
                                            <span class="small">Computer Science</span>
                                        </div>
                                        <strong>34 courses</strong>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary" style="width: 45%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-success bg-opacity-10 rounded me-2"
                                                style="width: 8px; height: 8px;"></div>
                                            <span class="small">Mathematics</span>
                                        </div>
                                        <strong>28 courses</strong>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" style="width: 37%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info bg-opacity-10 rounded me-2"
                                                style="width: 8px; height: 8px;"></div>
                                            <span class="small">Biology</span>
                                        </div>
                                        <strong>22 courses</strong>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" style="width: 29%"></div>
                                    </div>
                                </div>
                                <div class="small text-muted">
                                    <strong>Total:</strong> 84 courses across 12 departments
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h6 class="dashboard-card-title">Academic Calendar</h6>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 32px; height: 32px; flex-shrink: 0;">
                                            <i class="bi bi-calendar-event" style="font-size: 14px;"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Spring Registration</h6>
                                            <small class="text-muted">Opens February 1st</small>
                                            <div class="small text-warning fw-semibold">In 2 weeks</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 32px; height: 32px; flex-shrink: 0;">
                                            <i class="bi bi-mortarboard" style="font-size: 14px;"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Midterm Exams</h6>
                                            <small class="text-muted">March 15-22, 2025</small>
                                            <div class="small text-primary fw-semibold">In 8 weeks</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 32px; height: 32px; flex-shrink: 0;">
                                            <i class="bi bi-trophy" style="font-size: 14px;"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Graduation Ceremony</h6>
                                            <small class="text-muted">May 18, 2025</small>
                                            <div class="small text-success fw-semibold">In 16 weeks</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-header">
                                <h6 class="dashboard-card-title">Quick Actions</h6>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-plus-circle me-2"></i>Create Course
                                    </button>
                                    <button type="button" class="btn btn-outline-success btn-sm">
                                        <i class="bi bi-person-plus me-2"></i>Enroll Student
                                    </button>
                                    <button type="button" class="btn btn-outline-info btn-sm">
                                        <i class="bi bi-calendar-plus me-2"></i>Schedule Class
                                    </button>
                                    <button type="button" class="btn btn-outline-warning btn-sm">
                                        <i class="bi bi-file-earmark-text me-2"></i>Grade Report
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm">
                                        <i class="bi bi-gear me-2"></i>Settings
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Course Activity and Top Students -->
                <div class="dashboard-row">
                    <div class="dashboard-grid grid-cols-2">
                        <div class="dashboard-card">
                            <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                                <h5 class="dashboard-card-title mb-0">Recent Course Activity</h5>
                                <a href="all-courses.html" class="btn btn-outline-primary btn-sm">View All</a>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center px-0 py-3">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-plus-circle" style="color: #0d6efd; font-size: 16px;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New Course Created</h6>
                                            <small class="text-muted">Advanced Machine Learning</small>
                                            <div class="small text-muted">Prof. Sarah Johnson - 2 hours ago</div>
                                        </div>
                                        <span class="badge bg-primary">New</span>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center px-0 py-3">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-person-check" style="color: #198754; font-size: 16px;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Student Enrollment</h6>
                                            <small class="text-muted">15 new students in Data Structures</small>
                                            <div class="small text-muted">Prof. Michael Chen - 4 hours ago</div>
                                        </div>
                                        <span class="badge bg-success">+15</span>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center px-0 py-3">
                                        <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-file-earmark-check"
                                                style="color: #ffc107; font-size: 16px;"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Assignment Graded</h6>
                                            <small class="text-muted">Programming Assignment #3</small>
                                            <div class="small text-muted">Prof. Lisa Wang - 6 hours ago</div>
                                        </div>
                                        <span class="badge bg-warning text-dark">85% avg</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <div class="dashboard-card-header d-flex justify-content-between align-items-center">
                                <h5 class="dashboard-card-title mb-0">Top Performing Courses</h5>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Report</a>
                            </div>
                            <div class="dashboard-card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center px-0 py-3">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <strong
                                                style="color: #198754; font-size: 16px; font-weight: bold;">1</strong>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Advanced Programming</h6>
                                            <small class="text-muted">Prof. Sarah Johnson</small>
                                            <div class="small text-success">4.9/5.0 rating • 98% completion</div>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-bold text-success">45</div>
                                            <small class="text-muted">enrolled</small>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center px-0 py-3">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <strong
                                                style="color: #0d6efd; font-size: 16px; font-weight: bold;">2</strong>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Data Structures</h6>
                                            <small class="text-muted">Prof. Michael Chen</small>
                                            <div class="small text-success">4.8/5.0 rating • 96% completion</div>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-bold text-primary">38</div>
                                            <small class="text-muted">enrolled</small>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center px-0 py-3">
                                        <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <strong
                                                style="color: #ffc107; font-size: 16px; font-weight: bold;">3</strong>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Machine Learning</h6>
                                            <small class="text-muted">Prof. David Kim</small>
                                            <div class="small text-success">4.7/5.0 rating • 94% completion</div>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-bold text-warning">32</div>
                                            <small class="text-muted">enrolled</small>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Course Performance Chart
            const coursePerformanceCtx = document.getElementById('coursePerformanceChart');
            if (coursePerformanceCtx) {
                new Chart(coursePerformanceCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Excellent (4.5+)', 'Good (4.0-4.4)', 'Average (3.5-3.9)', 'Below Average (<3.5)'],
                        datasets: [{
                            data: [45, 32, 18, 5],
                            backgroundColor: [
                                '#198754',
                                '#0d6efd',
                                '#ffc107',
                                '#dc3545'
                            ],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    padding: 20,
                                    usePointStyle: true
                                }
                            }
                        }
                    }
                });
            }

            // Student Progress Chart
            const studentProgressCtx = document.getElementById('studentProgressChart');
            if (studentProgressCtx) {
                new Chart(studentProgressCtx, {
                    type: 'line',
                    data: {
                        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6'],
                        datasets: [{
                            label: 'Completed Assignments (%)',
                            data: [85, 88, 92, 87, 94, 91],
                            borderColor: '#198754',
                            backgroundColor: 'rgba(25, 135, 84, 0.1)',
                            tension: 0.4,
                            fill: true,
                            pointRadius: 5,
                            pointHoverRadius: 7
                        }, {
                            label: 'Class Attendance (%)',
                            data: [92, 90, 94, 96, 93, 95],
                            borderColor: '#0d6efd',
                            backgroundColor: 'rgba(13, 110, 253, 0.1)',
                            tension: 0.4,
                            fill: true,
                            pointRadius: 5,
                            pointHoverRadius: 7
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                                align: 'end'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: false,
                                min: 80,
                                max: 100,
                                ticks: {
                                    callback: function(value) {
                                        return value + '%';
                                    }
                                }
                            }
                        }
                    }
                });
            }
        });
    </script>

    <!-- Load JavaScript -->





</body>

</html>