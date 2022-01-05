<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="/demo7/images/favicon.png">
    <title>Dashboard - Hospital Manegment | DashLite Admin Template</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/app.css"); ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link id="skin-default" rel="stylesheet" href="/demo7/assets/css/theme.css?ver=2.9.0">
   
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4')
    
    </script>
  
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-sidebar" data-content="sidebarMenu">
            
            <div class="nk-sidebar-main is-light">
                <div class="nk-sidebar-inner" data-simplebar>
                    <div class="nk-menu-content menu-active" data-content="navHospital">
                        <h5 class="title">Hospital Manegment</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item"><a href="<?php echo site_url("welcome/index") ?>" class="nk-menu-link"><span class="nk-menu-icon"><em class="fab fa-windows"></em></span><span class="nk-menu-text">Dashboard</span></a></li>
                            <li class="nk-menu-item"><a href="<?php echo site_url("welcome/appointment")?>" class="nk-menu-link"><span class="nk-menu-icon"><em class="far fa-clipboard"></em></span><span class="nk-menu-text">Appointment List</span></a></li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="fas fa-user-friends"></em></span><span class="nk-menu-text">Patient</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/add_patient") ?>" class="nk-menu-link"><span class="nk-menu-text">Add Patient</span></a></li>
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/patient_list")?>" class="nk-menu-link"><span class="nk-menu-text">IPD / OPD Patients</span></a></li>
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/patient_profile")?>" class="nk-menu-link"><span class="nk-menu-text">Patient Profile</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="fas fa-plus"></em></span><span class="nk-menu-text">Doctors / Nurses</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/add_doctor") ?>" class="nk-menu-link"><span class="nk-menu-text">Add Doctor / Nurses</span></a></li>
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/doctor_nurse") ?>" class="nk-menu-link"><span class="nk-menu-text">Doctors / Nurses</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="fas fa-coins"></em></span><span class="nk-menu-text">Finance</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/income") ?>" class="nk-menu-link"><span class="nk-menu-text">Income</span></a></li>
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/expense") ?>" class="nk-menu-link"><span class="nk-menu-text">Expense</span></a></li>
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/invoice_list") ?>" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a></li>
                                    <li class="nk-menu-item"><a href="<?php echo site_url("welcome/invoice_details")?>" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span><span class="nk-menu-text">Monitor Hospital</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/hospital/birth-report.html" class="nk-menu-link"><span class="nk-menu-text">Birth Report</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/hospital/blood-bank.html" class="nk-menu-link"><span class="nk-menu-text">Blood Bank</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/hospital/inventory-items.html" class="nk-menu-link"><span class="nk-menu-text">Inventory Items Reports</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="fas fa-solar-panel"></em></span><span class="nk-menu-text">Misc Pages</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/hospital/bed-group.html" class="nk-menu-link"><span class="nk-menu-text">Bed Group</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/hospital/bed-allotment.html" class="nk-menu-link"><span class="nk-menu-text">Bed Allotment</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/hospital/department.html" class="nk-menu-link"><span class="nk-menu-text">Department</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/hospital/death-report.html" class="nk-menu-link"><span class="nk-menu-text">Death Report</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item"><a href="<?php echo site_url("welcome/user_profile")?>" class="nk-menu-link"><span class="nk-menu-icon"><em class="fas fa-user-circle"></em></span><span class="nk-menu-text">User Profile</span></a></li>
                            <li class="nk-menu-item"><a href="<?php echo site_url("welcome/setting")?>" class="nk-menu-link"><span class="nk-menu-icon"><em class="fas fa-cog"></em></span><span class="nk-menu-text">Setting</span></a></li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navDashboards">
                        <h5 class="title">Dashboards</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item"><a href="/demo7/index.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span><span class="nk-menu-text">Default Dashboard</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/index-ecommerce.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span><span class="nk-menu-text">Ecommerce Dashboard</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/index-sales.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span><span class="nk-menu-text">Sales Dashboard</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/index-analytics.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span><span class="nk-menu-text">Analytics Dashboard</span></a></li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navApps">
                        <h5 class="title">Apps</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item"><a href="/demo7/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-inbox-fill"></em></span><span class="nk-menu-text">Mailbox</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/apps-messages.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span><span class="nk-menu-text">Messages</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/apps-file-manager.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-folder-fill"></em></span><span class="nk-menu-text">File Manager</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/apps-chats.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span><span class="nk-menu-text">Chats</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/apps-calendar.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span><span class="nk-menu-text">Calendar</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/apps-kanban.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span><span class="nk-menu-text">Kanban Board</span><span class="nk-menu-badge badge-warning">New</span></a></li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navPages">
                        <h5 class="title">Pages</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span><span class="nk-menu-text">Projects</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/project-card.html" class="nk-menu-link"><span class="nk-menu-text">Project Cards</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Project List</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span><span class="nk-menu-text">User Manage</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span> <span class="nk-menu-badge badge-warning">New</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-cart-fill"></em></span><span class="nk-menu-text">Ecommerce Pages</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/products.html" class="nk-menu-link"><span class="nk-menu-text">Product List</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/orders-regular.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Regular</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/orders-sales.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Sales</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoices List</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item"><a href="/demo7/_blank.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span><span class="nk-menu-text">Blank / Startup</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span><span class="nk-menu-text">Faqs / Help</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/terms-policy.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span><span class="nk-menu-text">Terms / Policy</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/regular-v1.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span><span class="nk-menu-text">Regular Page - v1</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/regular-v2.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span><span class="nk-menu-text">Regular Page - v2</span></a></li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navMisc">
                        <h5 class="title">Misc Pages</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-login.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-register.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-success.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a></li>
                            <li class="nk-menu-item no-icon"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Classic Version - v2</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item no-icon"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">No Slider Version - v3</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navError">
                        <h5 class="title">Error Pages</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item"><a href="/demo7/pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Classic</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Classic</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Modern</span></a></li>
                            <li class="nk-menu-item"><a href="/demo7/pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Modern</span></a></li>
                        </ul>
                    </div>
                    <div class="nk-menu-content" data-content="navComponents">
                        <h5 class="title">Components</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span><span class="nk-menu-text">Ui Elements</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/components.html" class="nk-menu-link"><span class="nk-menu-text">Component List</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/alerts.html" class="nk-menu-link"><span class="nk-menu-text">Alerts</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/accordions.html" class="nk-menu-link"><span class="nk-menu-text">Accordions</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/avatar.html" class="nk-menu-link"><span class="nk-menu-text">Avatar</span><span class="nk-menu-badge badge-warning">New</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/badges.html" class="nk-menu-link"><span class="nk-menu-text">Badges</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/buttons.html" class="nk-menu-link"><span class="nk-menu-text">Buttons</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/buttons-group.html" class="nk-menu-link"><span class="nk-menu-text">Button Group</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/breadcrumb.html" class="nk-menu-link"><span class="nk-menu-text">Breadcrumb</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/cards.html" class="nk-menu-link"><span class="nk-menu-text">Cards</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/carousel.html" class="nk-menu-link"><span class="nk-menu-text">Carousel</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/list-dropdown.html" class="nk-menu-link"><span class="nk-menu-text">List Dropdown</span><span class="nk-menu-badge badge-warning">New</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/modals.html" class="nk-menu-link"><span class="nk-menu-text">Modals</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/pagination.html" class="nk-menu-link"><span class="nk-menu-text">Pagination</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/popover.html" class="nk-menu-link"><span class="nk-menu-text">Popovers</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/progress.html" class="nk-menu-link"><span class="nk-menu-text">Progress</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/spinner.html" class="nk-menu-link"><span class="nk-menu-text">Spinner</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/tabs.html" class="nk-menu-link"><span class="nk-menu-text">Tabs</span> <span class="nk-menu-badge badge-warning">Updated</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/toast.html" class="nk-menu-link"><span class="nk-menu-text">Toasts</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/tooltip.html" class="nk-menu-link"><span class="nk-menu-text">Tooltip</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/elements/typography.html" class="nk-menu-link"><span class="nk-menu-text">Typography</span></a></li>
                                    <li class="nk-menu-item"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Utilities</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-colors.html" class="nk-menu-link"><span class="nk-menu-text">Colors</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-display.html" class="nk-menu-link"><span class="nk-menu-text">Display</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-embeded.html" class="nk-menu-link"><span class="nk-menu-text">Embeded</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-flex.html" class="nk-menu-link"><span class="nk-menu-text">Flex</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-text.html" class="nk-menu-link"><span class="nk-menu-text">Text</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-sizing.html" class="nk-menu-link"><span class="nk-menu-text">Sizing</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-spacing.html" class="nk-menu-link"><span class="nk-menu-text">Spacing</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/elements/util-others.html" class="nk-menu-link"><span class="nk-menu-text">Others</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-dot-box-fill"></em></span><span class="nk-menu-text">Crafted Icons</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/components/misc/svg-icons.html" class="nk-menu-link"><span class="nk-menu-text">SVG Icon - Exclusive</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/misc/nioicon.html" class="nk-menu-link"><span class="nk-menu-text">Nioicon - HandCrafted</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item"><a href="/demo7/components/misc/icons.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span><span class="nk-menu-text">Icon Libraries</span><span class="nk-menu-badge badge-warning">New</span></a></li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-table-view-fill"></em></span><span class="nk-menu-text">Tables</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/components/tables/table-basic.html" class="nk-menu-link"><span class="nk-menu-text">Basic Tables</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/tables/table-special.html" class="nk-menu-link"><span class="nk-menu-text">Special Tables</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/tables/table-datatable.html" class="nk-menu-link"><span class="nk-menu-text">DataTables</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span><span class="nk-menu-text">Forms</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/components/forms/form-elements.html" class="nk-menu-link"><span class="nk-menu-text">Form Elements</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/forms/form-upload.html" class="nk-menu-link"><span class="nk-menu-text">Form Upload</span> <span class="nk-menu-badge badge-warning">New</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/forms/datetime-picker.html" class="nk-menu-link"><span class="nk-menu-text">Date &amp; Time Picker</span> <span class="nk-menu-badge badge-warning">New</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/forms/number-spinner.html" class="nk-menu-link"><span class="nk-menu-text">Number Spinner</span> <span class="nk-menu-badge badge-warning">New</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/forms/form-layouts.html" class="nk-menu-link"><span class="nk-menu-text">Form Layouts</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/forms/form-validation.html" class="nk-menu-link"><span class="nk-menu-text">Form Validation</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/forms/form-wizard.html" class="nk-menu-link"><span class="nk-menu-text">Wizard Basic</span></a></li>
                                    <li class="nk-menu-item"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich Editor</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item"><a href="/demo7/components/forms/form-summernote.html" class="nk-menu-link"><span class="nk-menu-text">Summernote</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">Quill</span></a></li>
                                            <li class="nk-menu-item"><a href="/demo7/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">Tinymce</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-pie-fill"></em></span><span class="nk-menu-text">Charts</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/components/charts/chartjs.html" class="nk-menu-link"><span class="nk-menu-text">Chart JS</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/charts/knob.html" class="nk-menu-link"><span class="nk-menu-text">Knob JS</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span><span class="nk-menu-text">Miscellaneous</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo7/components/misc/toastr.html" class="nk-menu-link"><span class="nk-menu-text">Toastr</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/misc/sweet-alert.html" class="nk-menu-link"><span class="nk-menu-text">Sweet Alert</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/misc/js-tree.html" class="nk-menu-link"><span class="nk-menu-text">jsTree</span><span class="nk-menu-badge badge-warning">New</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo7/components/misc/dual-listbox.html" class="nk-menu-link"><span class="nk-menu-text">Dual Listbox</span><span class="nk-menu-badge badge-warning">New</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item"><a href="/demo7/email-templates.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span><span class="nk-menu-text">Email Template</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-main ">
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed nk-header-fluid">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1"><a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
                            <div class="nk-header-brand d-xl-none"><a href="/demo7/index.html" class="logo-link"><img class="logo-light logo-img" src="/demo7/images/logo.png" srcset="/demo7/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img" src="/demo7/images/logo-dark.png" srcset="/demo7/images/logo-dark2x.png 2x" alt="logo-dark"></a></div>
                            <div class="nk-header-search ml-3 ml-xl-0"><em class="icon ni ni-search"></em><input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything"></div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown chats-dropdown hide-mb-xs"><a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="far fa-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Recent Chats</span><a href="#">Setting</a></div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item"><a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar"><span>IH</span><span class="status dot dot-lg dot-gray"></span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div><span class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                                    <div class="status delivered"><em class="icon ni ni-check-circle-fill"></em></div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item is-unread"><a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar bg-pink"><span>AB</span><span class="status dot dot-lg dot-success"></span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Abu Bin Ishtiyak</div><span class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                                    <div class="status unread"><em class="icon ni ni-bullet-fill"></em></div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar"><img src="/demo7/images/avatar/b-sm.jpg" alt=""></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div><span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar"><img src="/demo7/images/avatar/c-sm.jpg" alt=""></div>
                                                                <div class="user-avatar"><span>AB</span></div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div><span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent"><em class="icon ni ni-check-circle"></em></div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar"><img src="/demo7/images/avatar/a-sm.jpg" alt=""><span class="status dot dot-lg dot-success"></span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div><span class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar bg-purple"><span>TW</span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div><span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent"><em class="icon ni ni-check-circle"></em></div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-foot center"><a href="#">View All</a></div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown"><a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="far fa-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Notifications</span><a href="#">Mark All as Read</a></div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em></div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em></div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em></div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em></div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em></div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em></div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-foot center"><a href="#">View All</a></div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="fas fa-user-alt"></em></div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner user-card-wrap bg-lighter">
                                                <div class="user-card">
                                                    <div class="user-avatar"><span>AB</span></div>
                                                    <div class="user-info"><span class="lead-text">Abu Bin Ishtiyak</span><span class="sub-text">info@softnio.com</span></div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?php echo site_url("welcome/my_profile");?>"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="/demo7/hospital/settings.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="/demo7/hospital/settings-account-log.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>