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

    <title>Edit course - Kiaalap Dashboard</title>

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


    <!-- Sidebar, painel lateral do site usando include -->
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
                        <li class="breadcrumb-item active">Edit course</li>
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
                            <h1 class="h3 fw-bold mb-2">Edit Course</h1>
                            <p class="text-muted mb-0">Modify course details for CS101 - Introduction to Computer
                                Science</p>
                        </div>
                        <div class="d-none d-md-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bi bi-eye me-2"></i>Preview
                            </button>
                            <button type="button" class="btn btn-light"
                                onclick="window.location.href='course-info.html'">
                                <i class="bi bi-info-circle me-2"></i>View Course Info
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Edit Course Form -->
                <div class="dashboard-row">
                    <!-- Form -->
                    <form class="needs-validation" novalidate>
                        <div class="dashboard-grid" style="grid-template-columns: 2fr 1fr; gap: 20px;">
                            <div>
                                <!-- Basic Information -->
                                <div class="dashboard-card mb-3">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">Basic Information</h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="dashboard-grid grid-cols-2 mb-3">
                                            <div>
                                                <label for="courseCode" class="form-label">Course Code <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="courseCode" value="CS101"
                                                    required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid course code.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="courseName" class="form-label">Course Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="courseName"
                                                    value="Introduction to Computer Science" required>
                                                <div class="invalid-feedback">
                                                    Please provide a course name.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dashboard-grid grid-cols-2 mb-3">
                                            <div>
                                                <label for="department" class="form-label">Department <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="department" required>
                                                    <option value="">Select Department</option>
                                                    <option value="cs" selected>Computer Science</option>
                                                    <option value="math">Mathematics</option>
                                                    <option value="physics">Physics</option>
                                                    <option value="chemistry">Chemistry</option>
                                                    <option value="biology">Biology</option>
                                                    <option value="business">Business Administration</option>
                                                    <option value="engineering">Engineering</option>
                                                    <option value="english">English Literature</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a department.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="professor" class="form-label">Professor <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="professor" required>
                                                    <option value="">Select Professor</option>
                                                    <option value="1" selected>Dr. Robert Smith</option>
                                                    <option value="2">Dr. Emily Johnson</option>
                                                    <option value="3">Prof. Michael Chen</option>
                                                    <option value="4">Dr. Sarah Williams</option>
                                                    <option value="5">Prof. David Brown</option>
                                                    <option value="6">Dr. Jennifer Garcia</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a professor.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="courseDescription" class="form-label">Course Description</label>
                                            <textarea class="form-control" id="courseDescription"
                                                rows="4">This course provides a comprehensive introduction to computer science principles, programming fundamentals, and computational thinking. Students will learn basic programming concepts, data structures, and problem-solving techniques using modern programming languages.</textarea>
                                        </div>

                                        <div class="dashboard-grid grid-cols-3 mb-3">
                                            <div>
                                                <label for="credits" class="form-label">Credits <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="credits" min="1" max="6"
                                                    value="3" required>
                                                <div class="invalid-feedback">
                                                    Credits must be between 1 and 6.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="duration" class="form-label">Duration (weeks) <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="duration" min="1" max="52"
                                                    value="16" required>
                                                <div class="invalid-feedback">
                                                    Duration must be between 1 and 52 weeks.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="maxStudents" class="form-label">Max Students</label>
                                                <input type="number" class="form-control" id="maxStudents" min="1"
                                                    max="500" value="45">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="prerequisites" class="form-label">Prerequisites</label>
                                            <input type="text" class="form-control" id="prerequisites" value="MATH101">
                                            <small class="text-muted">Enter prerequisite course codes separated by
                                                commas</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Schedule Information -->
                                <div class="dashboard-card mb-3">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">Schedule Information</h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="dashboard-grid grid-cols-2 mb-3">
                                            <div>
                                                <label for="semester" class="form-label">Semester <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="semester" required>
                                                    <option value="">Select Semester</option>
                                                    <option value="fall2025" selected>Fall 2025</option>
                                                    <option value="spring2025">Spring 2025</option>
                                                    <option value="summer2025">Summer 2025</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a semester.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="courseType" class="form-label">Course Type <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="courseType" required>
                                                    <option value="">Select Type</option>
                                                    <option value="core" selected>Core Course</option>
                                                    <option value="elective">Elective</option>
                                                    <option value="lab">Laboratory</option>
                                                    <option value="seminar">Seminar</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a course type.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Class Days <span
                                                    class="text-danger">*</span></label>
                                            <div class="d-flex flex-wrap gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="monday"
                                                        name="days" checked>
                                                    <label class="form-check-label" for="monday">Monday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tuesday"
                                                        name="days">
                                                    <label class="form-check-label" for="tuesday">Tuesday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="wednesday"
                                                        name="days" checked>
                                                    <label class="form-check-label" for="wednesday">Wednesday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="thursday"
                                                        name="days">
                                                    <label class="form-check-label" for="thursday">Thursday</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="friday"
                                                        name="days" checked>
                                                    <label class="form-check-label" for="friday">Friday</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dashboard-grid grid-cols-2 mb-3">
                                            <div>
                                                <label for="startTime" class="form-label">Start Time <span
                                                        class="text-danger">*</span></label>
                                                <input type="time" class="form-control" id="startTime" value="10:00"
                                                    required>
                                                <div class="invalid-feedback">
                                                    Please select a start time.
                                                </div>
                                            </div>
                                            <div>
                                                <label for="endTime" class="form-label">End Time <span
                                                        class="text-danger">*</span></label>
                                                <input type="time" class="form-control" id="endTime" value="11:30"
                                                    required>
                                                <div class="invalid-feedback">
                                                    Please select an end time.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="classroom" class="form-label">Classroom/Location</label>
                                            <input type="text" class="form-control" id="classroom"
                                                value="Building A, Room 101">
                                        </div>
                                    </div>
                                </div>

                                <!-- Student Enrollment -->
                                <div class="dashboard-card mb-3">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">Current Enrollment</h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="dashboard-grid grid-cols-2 mb-3">
                                            <div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span>Enrolled Students</span>
                                                    <strong>42 / 45</strong>
                                                </div>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 93%" aria-valuenow="93" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span>Average Attendance</span>
                                                    <strong>89%</strong>
                                                </div>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 89%" aria-valuenow="89" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="alert alert-info" role="alert">
                                            <i class="bi bi-info-circle me-2"></i>
                                            <strong>Note:</strong> There are 3 pending enrollment requests for this
                                            course. <a href="#">Review requests</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <!-- Course Image -->
                                <div class="dashboard-card mb-3">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">Course Image</h5>
                                    </div>
                                    <div class="dashboard-card-body text-center">
                                        <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=400&h=250&fit=crop"
                                            alt="Course Thumbnail" class="img-fluid rounded mb-3"
                                            id="courseImagePreview" loading="lazy" decoding="async">
                                        <div class="mb-3">
                                            <label for="courseImage" class="form-label">Change Image</label>
                                            <input class="form-control" type="file" id="courseImage" accept="image/*">
                                            <small class="text-muted">Recommended size: 800x500px</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Course Settings -->
                                <div class="dashboard-card mb-3">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">Course Settings</h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="mb-3">
                                            <label for="courseStatus" class="form-label">Status</label>
                                            <select class="form-select" id="courseStatus">
                                                <option value="active" selected>Active</option>
                                                <option value="draft">Draft</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="enrollmentType" class="form-label">Enrollment Type</label>
                                            <select class="form-select" id="enrollmentType">
                                                <option value="open" selected>Open Enrollment</option>
                                                <option value="approval">Requires Approval</option>
                                                <option value="closed">Closed</option>
                                            </select>
                                        </div>

                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="onlineAvailable"
                                                checked>
                                            <label class="form-check-label" for="onlineAvailable">
                                                Available Online
                                            </label>
                                        </div>

                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="certificateOffered"
                                                checked>
                                            <label class="form-check-label" for="certificateOffered">
                                                Certificate Offered
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="recordedLectures">
                                            <label class="form-check-label" for="recordedLectures">
                                                Recorded Lectures Available
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fee Structure -->
                                <div class="dashboard-card mb-3">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">Fee Structure</h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="mb-3">
                                            <label for="courseFee" class="form-label">Course Fee ($)</label>
                                            <input type="number" class="form-control" id="courseFee" min="0" step="0.01"
                                                value="1200.00">
                                        </div>

                                        <div class="mb-3">
                                            <label for="labFee" class="form-label">Lab Fee ($)</label>
                                            <input type="number" class="form-control" id="labFee" min="0" step="0.01"
                                                value="150.00">
                                        </div>

                                        <div class="mb-3">
                                            <label for="materialFee" class="form-label">Material Fee ($)</label>
                                            <input type="number" class="form-control" id="materialFee" min="0"
                                                step="0.01" value="50.00">
                                        </div>

                                        <hr>

                                        <div class="d-flex justify-content-between">
                                            <strong>Total Fee:</strong>
                                            <strong id="totalFee">$1,400.00</strong>
                                        </div>
                                    </div>
                                </div>

                                <!-- Course History -->
                                <div class="dashboard-card">
                                    <div class="dashboard-card-header">
                                        <h5 class="dashboard-card-title">Course History</h5>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="small text-muted mb-2">
                                            <i class="bi bi-clock-history me-1"></i> Last modified: 3 days ago
                                        </div>
                                        <div class="small text-muted mb-2">
                                            <i class="bi bi-person me-1"></i> Modified by: Dr. Robert Smith
                                        </div>
                                        <div class="small text-muted mb-2">
                                            <i class="bi bi-calendar me-1"></i> Created: Sept 15, 2025
                                        </div>
                                        <div class="small text-muted">
                                            <i class="bi bi-hash me-1"></i> Course ID: #12345
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="row">
                            <div class="col-12">
                                <hr class="my-4">
                                <div class="d-flex gap-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-lg me-2"></i>Save Changes
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="window.location.href='all-courses.html'">
                                        <i class="bi bi-x-lg me-2"></i>Cancel
                                    </button>
                                    <button type="reset" class="btn btn-outline-warning">
                                        <i class="bi bi-arrow-clockwise me-2"></i>Reset Form
                                    </button>
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="bi bi-trash me-2"></i>Delete Course
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <!-- Footer -->
        @include('layouts._include.dashboard.footer')
    </div>

    <script>
        // Form validation
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

        // Fee calculator
        function calculateTotalFee() {
            const courseFee = parseFloat(document.getElementById('courseFee').value) || 0;
            const labFee = parseFloat(document.getElementById('labFee').value) || 0;
            const materialFee = parseFloat(document.getElementById('materialFee').value) || 0;
            const total = courseFee + labFee + materialFee;
            document.getElementById('totalFee').textContent = '$' + total.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        }

        document.getElementById('courseFee').addEventListener('input', calculateTotalFee);
        document.getElementById('labFee').addEventListener('input', calculateTotalFee);
        document.getElementById('materialFee').addEventListener('input', calculateTotalFee);

        // Image preview
        document.getElementById('courseImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('courseImagePreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Calculate initial total
        calculateTotalFee();
    </script>

    <!-- Load JavaScript -->




</body>

</html>