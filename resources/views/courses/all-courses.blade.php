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

    <title>All courses - Kiaalap Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/favicon-9EIT7vLh.ico">


    <!-- Load stylesheets -->




    <script type="module" crossorigin src="{{ asset('template/dist/assets/main-ZZRh_wak.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('template/dist/assets/main-BV-wpnXD.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('template/dist/assets/main-DVYj-QCH.css') }}">
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

        .loading {
            background: #e5e7eb;
            animation: 2s cubic-bezier(.4, 0, .6, 1) infinite pulse
        }

        .dashboard-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-shadow: 0 1px 3px #0000001a
        }

        .dashboard-card-header {
            border-bottom: 1px solid #e5e7eb;
            padding: 16px 20px
        }

        .dashboard-card-body {
            padding: 20px
        }

        .dashboard-card-title {
            color: #1f2937;
            margin: 0;
            font-size: 1.125rem;
            font-weight: 600
        }

        .dashboard-row {
            margin-bottom: 24px
        }

        .dashboard-grid {
            gap: 24px;
            display: grid
        }

        .grid-cols-1 {
            grid-template-columns: 1fr
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, 1fr)
        }

        .grid-cols-3 {
            grid-template-columns: repeat(3, 1fr)
        }

        .grid-cols-4 {
            grid-template-columns: repeat(4, 1fr)
        }

        .grid-cols-3-1 {
            grid-template-columns: 3fr 1fr
        }

        @media (width<=1200px) {

            .grid-cols-4,
            .grid-cols-3 {
                grid-template-columns: repeat(2, 1fr)
            }

            .grid-cols-3-1 {
                grid-template-columns: 1fr
            }
        }

        @media (width<=768px) {
            .dashboard-grid {
                gap: 16px
            }

            .grid-cols-4,
            .grid-cols-3,
            .grid-cols-2,
            .grid-cols-3-1 {
                grid-template-columns: 1fr
            }
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
    @include('partials.sidebar')
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
                        <li class="breadcrumb-item active">All courses</li>
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
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 font-bold mb-1">All Courses</h1>
                            <p class="text-muted">Manage your institution's course catalog</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary"
                                onclick="window.location.href='add-course.html'">
                                <i class="bi bi-plus-circle me-2"></i> Add New Course
                            </button>
                            <button type="button" class="btn btn-outline-secondary ms-2">
                                <i class="bi bi-download me-2"></i> Export
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Row -->
                <div class="dashboard-grid grid-cols-4 mb-3">
                    <div class="stats-card">
                        <div class="stats-card-label">Total Courses</div>
                        <div class="stats-card-value">156</div>
                        <span class="stats-card-change positive">+12% from last month</span>
                    </div>
                    <div class="stats-card">
                        <div class="stats-card-label">Active Courses</div>
                        <div class="stats-card-value">142</div>
                        <span class="stats-card-change positive">+8 new</span>
                    </div>
                    <div class="stats-card">
                        <div class="stats-card-label">Total Students</div>
                        <div class="stats-card-value">3,245</div>
                        <span class="stats-card-change positive">+18%</span>
                    </div>
                    <div class="stats-card">
                        <div class="stats-card-label">Avg. Enrollment</div>
                        <div class="stats-card-value">21</div>
                        <span class="stats-card-change negative">-2</span>
                    </div>
                </div>

                <!-- Filters Row -->
                <div class="dashboard-card mb-3">
                    <div class="dashboard-grid grid-cols-4 mb-3">
                        <div>
                            <label for="departmentFilter" class="form-label small">Department</label>
                            <select class="form-select" id="departmentFilter">
                                <option selected>All Departments</option>
                                <option value="1">Computer Science</option>
                                <option value="2">Mathematics</option>
                                <option value="3">Physics</option>
                                <option value="4">Chemistry</option>
                                <option value="5">Biology</option>
                            </select>
                        </div>
                        <div>
                            <label for="semesterFilter" class="form-label small">Semester</label>
                            <select class="form-select" id="semesterFilter">
                                <option selected>All Semesters</option>
                                <option value="1">Fall 2025</option>
                                <option value="2">Spring 2025</option>
                                <option value="3">Summer 2025</option>
                            </select>
                        </div>
                        <div>
                            <label for="statusFilter" class="form-label small">Status</label>
                            <select class="form-select" id="statusFilter">
                                <option selected>All Status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Completed</option>
                            </select>
                        </div>
                        <div>
                            <label for="searchFilter" class="form-label small">Search</label>
                            <input type="text" class="form-control" id="searchFilter" placeholder="Search courses...">
                        </div>
                    </div>
                </div>

                <!-- Courses Table -->
                <div class="dashboard-card">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <input class="form-check-input" type="checkbox" id="selectAll">
                                    </th>
                                    <th scope="col">Course Code</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Professor</th>
                                    <th scope="col">Credits</th>
                                    <th scope="col">Students</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td class="fw-semibold">CS101</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=50&h=50&fit=crop"
                                                alt="Course" class="rounded me-3" width="40" height="40" loading="lazy">
                                            <div>
                                                <div class="fw-semibold">Introduction to Computer Science</div>
                                                <small class="text-muted">Mon, Wed, Fri - 10:00 AM</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Computer Science</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=John+Smith&background=6366f1&color=fff"
                                                alt="Professor" class="rounded-circle me-2" width="30" height="30"
                                                loading="lazy">
                                            <span>Dr. John Smith</span>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>45</span>
                                            <div class="progress ms-2" style="width: 60px; height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                aria-label="More options">
                                                <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="course-info.html"><i
                                                            class="bi bi-eye me-2"></i> View</a></li>
                                                <li><a class="dropdown-item" href="edit-course.html"><i
                                                            class="bi bi-pencil me-2"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>
                                                        Students</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-trash me-2"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td class="fw-semibold">MATH201</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?w=50&h=50&fit=crop"
                                                alt="Course" class="rounded me-3" width="40" height="40" loading="lazy">
                                            <div>
                                                <div class="fw-semibold">Calculus II</div>
                                                <small class="text-muted">Tue, Thu - 2:00 PM</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Mathematics</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Emily+Chen&background=10b981&color=fff"
                                                alt="Professor" class="rounded-circle me-2" width="30" height="30"
                                                loading="lazy">
                                            <span>Dr. Emily Chen</span>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>32</span>
                                            <div class="progress ms-2" style="width: 60px; height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 64%" aria-valuenow="64" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                aria-label="More options">
                                                <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="course-info.html"><i
                                                            class="bi bi-eye me-2"></i> View</a></li>
                                                <li><a class="dropdown-item" href="edit-course.html"><i
                                                            class="bi bi-pencil me-2"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>
                                                        Students</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-trash me-2"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td class="fw-semibold">PHY301</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1636466497217-26a8cbeaf0aa?w=50&h=50&fit=crop"
                                                alt="Course" class="rounded me-3" width="40" height="40" loading="lazy">
                                            <div>
                                                <div class="fw-semibold">Quantum Mechanics</div>
                                                <small class="text-muted">Mon, Wed - 3:30 PM</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Physics</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Robert+Wilson&background=f59e0b&color=fff"
                                                alt="Professor" class="rounded-circle me-2" width="30" height="30"
                                                loading="lazy">
                                            <span>Dr. Robert Wilson</span>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>28</span>
                                            <div class="progress ms-2" style="width: 60px; height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                aria-label="More options">
                                                <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="course-info.html"><i
                                                            class="bi bi-eye me-2"></i> View</a></li>
                                                <li><a class="dropdown-item" href="edit-course.html"><i
                                                            class="bi bi-pencil me-2"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>
                                                        Students</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-trash me-2"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td class="fw-semibold">BIO102</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1530026405186-ed1f139313f8?w=50&h=50&fit=crop"
                                                alt="Course" class="rounded me-3" width="40" height="40" loading="lazy">
                                            <div>
                                                <div class="fw-semibold">Cell Biology</div>
                                                <small class="text-muted">Tue, Thu - 9:00 AM</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Biology</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Maria+Garcia&background=ec4899&color=fff"
                                                alt="Professor" class="rounded-circle me-2" width="30" height="30"
                                                loading="lazy">
                                            <span>Dr. Maria Garcia</span>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>50</span>
                                            <div class="progress ms-2" style="width: 60px; height: 6px;">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">Full</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                aria-label="More options">
                                                <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="course-info.html"><i
                                                            class="bi bi-eye me-2"></i> View</a></li>
                                                <li><a class="dropdown-item" href="edit-course.html"><i
                                                            class="bi bi-pencil me-2"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>
                                                        Students</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-trash me-2"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td class="fw-semibold">CHEM202</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=50&h=50&fit=crop"
                                                alt="Course" class="rounded me-3" width="40" height="40" loading="lazy">
                                            <div>
                                                <div class="fw-semibold">Organic Chemistry</div>
                                                <small class="text-muted">Mon, Wed, Fri - 1:00 PM</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Chemistry</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=David+Lee&background=8b5cf6&color=fff"
                                                alt="Professor" class="rounded-circle me-2" width="30" height="30"
                                                loading="lazy">
                                            <span>Dr. David Lee</span>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>38</span>
                                            <div class="progress ms-2" style="width: 60px; height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 76%" aria-valuenow="76" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                aria-label="More options">
                                                <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="course-info.html"><i
                                                            class="bi bi-eye me-2"></i> View</a></li>
                                                <li><a class="dropdown-item" href="edit-course.html"><i
                                                            class="bi bi-pencil me-2"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>
                                                        Students</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-trash me-2"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td class="fw-semibold">ENG101</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=50&h=50&fit=crop"
                                                alt="Course" class="rounded me-3" width="40" height="40" loading="lazy">
                                            <div>
                                                <div class="fw-semibold">English Literature</div>
                                                <small class="text-muted">Tue, Thu - 11:00 AM</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Susan+Brown&background=14b8a6&color=fff"
                                                alt="Professor" class="rounded-circle me-2" width="30" height="30"
                                                loading="lazy">
                                            <span>Prof. Susan Brown</span>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>25</span>
                                            <div class="progress ms-2" style="width: 60px; height: 6px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                aria-label="More options">
                                                <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="course-info.html"><i
                                                            class="bi bi-eye me-2"></i> View</a></li>
                                                <li><a class="dropdown-item" href="edit-course.html"><i
                                                            class="bi bi-pencil me-2"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>
                                                        Students</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-trash me-2"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td class="fw-semibold">HIST203</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1461360370896-922624d12aa1?w=50&h=50&fit=crop"
                                                alt="Course" class="rounded me-3" width="40" height="40" loading="lazy">
                                            <div>
                                                <div class="fw-semibold">World History</div>
                                                <small class="text-muted">Mon, Wed - 4:00 PM</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>History</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Michael+Jones&background=ef4444&color=fff"
                                                alt="Professor" class="rounded-circle me-2" width="30" height="30"
                                                loading="lazy">
                                            <span>Dr. Michael Jones</span>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>0</span>
                                            <div class="progress ms-2" style="width: 60px; height: 6px;">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-secondary">Inactive</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                aria-label="More options">
                                                <i aria-hidden="true" class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="course-info.html"><i
                                                            class="bi bi-eye me-2"></i> View</a></li>
                                                <li><a class="dropdown-item" href="edit-course.html"><i
                                                            class="bi bi-pencil me-2"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-check-circle me-2"></i> Activate</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-trash me-2"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            <p class="text-muted mb-0">Showing 1 to 7 of 156 entries</p>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
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

    <script>
        // Lazy load images that are not immediately visible
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img[src*="unsplash"], img[src*="ui-avatars"]');
            images.forEach(img => {
                if (!img.hasAttribute('loading')) {
                    img.setAttribute('loading', 'lazy');
                }
            });

            // Select all checkbox functionality
            const selectAll = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');

            selectAll?.addEventListener('change', function() {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
            });

            // Individual checkbox change
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const allChecked = Array.from(checkboxes).every(cb => cb.checked);
                    const someChecked = Array.from(checkboxes).some(cb => cb.checked);

                    if (selectAll) {
                        selectAll.checked = allChecked;
                        selectAll.indeterminate = !allChecked && someChecked;
                    }
                });
            });
        });

if ('PerformanceObserver' in window) {
            try {
                const observer = new PerformanceObserver((list) => {
                    for (const entry of list.getEntries()) {
                        console.log('LCP:', entry.startTime, 'ms');
                    }
                });
                observer.observe({type: 'largest-contentful-paint', buffered: true});
            } catch (e) {}
        }
    </script>

    <!-- Load JavaScript -->




</body>

</html>