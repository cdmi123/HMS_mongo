<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/doctor-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2024 07:43:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Preclinic</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" width="35" height="35" alt> <span>Pre Clinic</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><img src="assets/img/icons/bar-icon.svg" alt></a>
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="assets/img/icons/bar-icon.svg"
                    alt></a>
            <div class="top-nav-search mob-view">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <a class="btn"><img src="assets/img/icons/search-normal.svg" alt></a>
                </form>
            </div>
            <ul class="nav user-menu float-end">
                <li class="nav-item dropdown d-none d-md-block">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><img
                            src="assets/img/icons/note-icon-02.svg" alt><span class="pulse"></span> </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                    new task <span class="noti-title">Patient appointment booking</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name <span class="noti-title">Appointment booking
                                                        with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
                                            <span class="avatar">L</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                    added <span class="noti-title">Domenic Houston</span> and <span
                                                        class="noti-title">Claire Mapes</span> to project <span
                                                        class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
                                            <span class="avatar">G</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title">Patient and Doctor video
                                                        conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                    added new task <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.php">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-md-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img
                            src="assets/img/icons/note-icon-01.svg" alt><span class="pulse"></span> </a>
                </li>
                <li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                        <div class="user-names">
                            <h5><?php echo $_SESSION['user_name']; ?></h5>
                            <span>Admin</span>
                        </div>
                        <span class="user-img">
                            <img src="assets/img/user-06.jpg" alt="Admin">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="settings.php">Settings</a>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="settings.php" class="hasnotifications nav-link"><img
                            src="assets/img/icons/setting-icon-01.svg" alt> </a>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-end">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="">
                            <a href="dashboard.php"><span class="menu-side"><img src="assets/img/icons/menu-icon-01.svg" alt></span>
                                <span> Dashboard </span> </a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-02.svg" alt></span>
                                <span> Doctors </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="doctors.php">Doctor List</a></li>
                                <li><a href="add-doctor.php">Add Doctor</a></li>
                                <li><a href="edit-doctor.php">Edit Doctor</a></li>
                                <li><a href="doctor-profile.php">Doctor Profile</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-03.svg" alt></span>
                                <span>Patients </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="patients.php">Patients List</a></li>
                                <li><a href="add-patient.php">Add Patients</a></li>
                                <li><a href="edit-patient.php">Edit Patients</a></li>
                                <li><a href="patient-profile.php">Patients Profile</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-08.svg" alt></span>
                                <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="staff-list.php">Staff List</a></li>
                                <li><a href="add-staff.php">Add Staff</a></li>
                                <li><a href="staff-profile.php">Staff Profile</a></li>
                                <li><a href="staff-leave.php">Leaves</a></li>
                                <li><a href="staff-holiday.php">Holidays</a></li>
                                <li><a href="staff-attendance.php">Attendance</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-04.svg" alt></span>
                                <span> Appointments </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="appointments.php">Appointment List</a></li>
                                <li><a href="add-appointment.php">Book Appointment</a></li>
                                <li><a href="edit-appointment.php">Edit Appointment</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-05.svg" alt></span>
                                <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="schedule.php">Schedule List</a></li>
                                <li><a href="add-schedule.php">Add Schedule</a></li>
                                <li><a href="edit-schedule.php">Edit Schedule</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-06.svg" alt></span>
                                <span> Departments </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="departments.php">Department List</a></li>
                                <li><a href="add-department.php">Add Department</a></li>
                                <li><a href="edit-department.php">Edit Department</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-07.svg" alt></span>
                                <span> Accounts </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="invoices.php">Invoices</a></li>
                                <li><a href="payments.php">Payments</a></li>
                                <li><a href="expenses.php">Expenses</a></li>
                                <li><a href="taxes.php">Taxes</a></li>
                                <li><a href="provident-fund.php">Provident Fund</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-09.svg" alt></span>
                                <span> Payroll </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="salary.php"> Employee Salary </a></li>
                                <li><a href="salary-view.php"> Payslip </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="chat.php"><span class="menu-side"><img src="assets/img/icons/menu-icon-10.svg"
                                        alt></span> <span>Chat</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-11.svg" alt></span>
                                <span> Calls</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="voice-call.php">Voice Call</a></li>
                                <li><a href="video-call.php">Video Call</a></li>
                                <li><a href="incoming-call.php">Incoming Call</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-12.svg" alt></span>
                                <span> Email</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="compose.php">Compose Mail</a></li>
                                <li><a href="inbox.php">Inbox</a></li>
                                <li><a href="mail-view.php">Mail View</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-13.svg" alt></span>
                                <span> Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="blog-details.php">Blog View</a></li>
                                <li><a href="add-blog.php">Add Blog</a></li>
                                <li><a href="edit-blog.php">Edit Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="assets.php"><i class="fa fa-cube"></i> <span>Assets</span></a>
                        </li>
                        <li>
                            <a href="activities.php"><span class="menu-side"><img
                                        src="assets/img/icons/menu-icon-14.svg" alt></span> <span>Activities</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-flag"></i> <span> Reports </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="expense-reports.php"> Expense Report </a></li>
                                <li><a href="invoice-reports.php"> Invoice Report </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-15.svg" alt></span>
                                <span> Invoice </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="invoices-list.php"> Invoices List </a></li>
                                <li><a href="invoices-grid.php"> Invoices Grid</a></li>
                                <li><a href="add-invoice.php"> Add Invoices</a></li>
                                <li><a href="edit-invoices.php"> Edit Invoices</a></li>
                                <li><a href="view-invoice.php"> Invoices Details</a></li>
                                <li><a href="invoices-settings.php"> Invoices Settings</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.php"><span class="menu-side"><img src="assets/img/icons/menu-icon-16.svg"
                                        alt></span> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">UI Interface</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-laptop"></i> <span> Base UI</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="alerts.php">Alerts</a></li>
                                <li><a href="accordions.php">Accordions</a></li>
                                <li><a href="avatar.php">Avatar</a></li>
                                <li><a href="badges.php">Badges</a></li>
                                <li><a href="buttons.php">Buttons</a></li>
                                <li><a href="buttongroup.php">Button Group</a></li>
                                <li><a href="breadcrumbs.php">Breadcrumb</a></li>
                                <li><a href="cards.php">Cards</a></li>
                                <li><a href="carousel.php">Carousel</a></li>
                                <li><a href="dropdowns.php">Dropdowns</a></li>
                                <li><a href="grid.php">Grid</a></li>
                                <li><a href="images.php">Images</a></li>
                                <li><a href="lightbox.php">Lightbox</a></li>
                                <li><a href="media.php">Media</a></li>
                                <li><a href="modal.php">Modals</a></li>
                                <li><a href="offcanvas.php">Offcanvas</a></li>
                                <li><a href="pagination.php">Pagination</a></li>
                                <li><a href="popover.php">Popover</a></li>
                                <li><a href="progress.php">Progress Bars</a></li>
                                <li><a href="placeholders.php">Placeholders</a></li>
                                <li><a href="rangeslider.php">Range Slider</a></li>
                                <li><a href="spinners.php">Spinner</a></li>
                                <li><a href="sweetalerts.php">Sweet Alerts</a></li>
                                <li><a href="tab.php">Tabs</a></li>
                                <li><a href="toastr.php">Toasts</a></li>
                                <li><a href="tooltip.php">Tooltip</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="video.php">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-box"></i> <span> Elements</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="ribbon.php">Ribbon</a></li>
                                <li><a href="clipboard.php">Clipboard</a></li>
                                <li><a href="drag-drop.php">Drag & Drop</a></li>
                                <li><a href="rating.php">Rating</a></li>
                                <li><a href="text-editor.php">Text Editor</a></li>
                                <li><a href="counter.php">Counter</a></li>
                                <li><a href="scrollbar.php">Scrollbar</a></li>
                                <li><a href="notification.php">Notification</a></li>
                                <li><a href="stickynote.php">Sticky Note</a></li>
                                <li><a href="timeline.php">Timeline</a></li>
                                <li><a href="horizontal-timeline.php">Horizontal Timeline</a></li>
                                <li><a href="form-wizard.php">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-chart-simple"></i> <span>Charts</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="chart-apex.php">Apex Charts</a></li>
                                <li><a href="chart-js.php">Chart Js</a></li>
                                <li><a href="chart-morris.php">Morris Charts</a></li>
                                <li><a href="chart-flot.php">Flot Charts</a></li>
                                <li><a href="chart-peity.php">Peity Charts</a></li>
                                <li><a href="chart-c3.php">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-award"></i> <span>Icons</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.php">Feather Icons</a></li>
                                <li><a href="icon-ionic.php">Ionic Icons</a></li>
                                <li><a href="icon-material.php">Material Icons</a></li>
                                <li><a href="icon-pe7.php">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.php">Simpleline Icons</a></li>
                                <li><a href="icon-themify.php">Themify Icons</a></li>
                                <li><a href="icon-weather.php">Weather Icons</a></li>
                                <li><a href="icon-typicon.php">Typicon Icons</a></li>
                                <li><a href="icon-flag.php">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-edit"></i> <span> Forms</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="form-basic-inputs.php">Basic Inputs</a></li>
                                <li><a href="form-input-groups.php">Input Groups</a></li>
                                <li><a href="form-horizontal.php">Horizontal Form</a></li>
                                <li><a href="form-vertical.php">Vertical Form</a></li>
                                <li><a href="form-mask.php">Form Mask </a></li>
                                <li><a href="form-validation.php">Form Validation </a></li>
                                <li><a href="form-select2.php">Form Select2 </a></li>
                                <li><a href="form-fileupload.php">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-table"></i> <span> Tables</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="tables-basic.php">Basic Tables</a></li>
                                <li><a href="tables-datatables.php">Data Table</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.php"> Login </a></li>
                                <li><a href="register.php"> Register </a></li>
                                <li><a href="forgot-password.php"> Forgot Password </a></li>
                                <li><a href="change-password2.php"> Change Password </a></li>
                                <li><a href="lock-screen.php"> Lock Screen </a></li>
                                <li><a href="profile.php"> Profile </a></li>
                                <li><a href="gallery.php"> Gallery </a></li>
                                <li><a href="error-404.php">404 Error </a></li>
                                <li><a href="error-500.php">500 Error </a></li>
                                <li><a href="blank-page.php"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fa fa-share-alt"></i> <span>Multi Level</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="logout-btn">
                        <a href="login.php"><span class="menu-side"><img src="assets/img/icons/logout.svg" alt></span>
                            <span>Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
        