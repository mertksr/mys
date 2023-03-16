<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'partials/header.php' ?>
    <link href="../public/layouts/horizontal-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../public/layouts/horizontal-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../public/layouts/horizontal-light-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../public/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../public/layouts/horizontal-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../public/layouts/horizontal-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="../public/src/plugins/src/stepper/bsStepper.min.css">

    <link rel="stylesheet" type="text/css" href="../public/src/assets/css/light/scrollspyNav.css"/>
    <link rel="stylesheet" type="text/css" href="../public/src/plugins/css/light/stepper/custom-bsStepper.css">

    <link rel="stylesheet" type="text/css" href="../public/src/assets/css/dark/scrollspyNav.css"/>
    <link rel="stylesheet" type="text/css" href="../public/src/plugins/css/dark/stepper/custom-bsStepper.css">
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="layout-boxed" data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100">
    
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
            
            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="../public/src/assets/img/logo2.svg" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="index.html" class="nav-link"> CORK </a>
                </li>
            </ul>

            <div class="search-animated toggle-search">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                </form>
                <span class="badge badge-secondary">Ctrl + /</span>
            </div>

            <ul class="navbar-item flex-row ms-lg-auto ms-0 action-area">

                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../public/src/assets/img/1x1/us.svg" class="flag-width" alt="flag">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../public/src/assets/img/1x1/us.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../public/src/assets/img/1x1/tr.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Turkish</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../public/src/assets/img/1x1/br.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Portuguese</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../public/src/assets/img/1x1/in.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Hindi</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../public/src/assets/img/1x1/de.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                    </div>
                </li>

                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </a>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="drodpown-title message">
                            <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span class="badge badge-primary">9 Unread</span></h6>
                        </div>
                        <div class="notification-scroll">
                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <img src="../public/src/assets/img/profile-16.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kara Young</h6>
                                            <p class="">1 hr ago</p>
                                        </div>
                                        
                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown-item">
                                <div class="media ">
                                    <img src="../public/src/assets/img/profile-15.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Daisy Anderson</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <img src="../public/src/assets/img/profile-21.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Oscar Garner</h6>
                                            <p class="">14 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="drodpown-title notification mt-2">
                                <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span class="badge badge-secondary">16 New</span></h6>
                            </div>

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                <img alt="avatar" src="../public/src/assets/img/profile-30.png" class="rounded-circle">
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5>Shaun Park</h5>
                                    <p>Project Leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user-profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="app-mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth-boxed-lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth-boxed-signin.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        
<?php include 'partials/navbar.php' ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <!--  BEGIN BREADCRUMBS  -->
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="Analytics">
                            <header class="header navbar navbar-expand-sm">
                                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                </a>
                                <div class="d-flex breadcrumb-content">
                                    <div class="page-header">

                                        <div class="page-title">
                                        </div>
                        
                                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Form</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Wizards</li>
                                            </ol>
                                        </nav>
                        
                                    </div>
                                </div>
                                <ul class="navbar-nav flex-row ms-auto breadcrumb-action-dropdown">
                                    <li class="nav-item more-dropdown">
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span>Settings</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down custom-dropdown-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                            </a>
                        
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">

                                                <a class="dropdown-item" data-value="Settings" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-settings&quot;><circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;></circle><path d=&quot;M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z&quot;></path></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings
                                                </a>

                                                <a class="dropdown-item" data-value="Mail" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-mail&quot;><path d=&quot;M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z&quot;></path><polyline points=&quot;22,6 12,13 2,6&quot;></polyline></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Mail
                                                </a>

                                                <a class="dropdown-item" data-value="Print" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-printer&quot;><polyline points=&quot;6 9 6 2 18 2 18 9&quot;></polyline><path d=&quot;M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2&quot;></path><rect x=&quot;6&quot; y=&quot;14&quot; width=&quot;12&quot; height=&quot;8&quot;></rect></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> Print
                                                </a>

                                                <a class="dropdown-item" data-value="Download" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-download&quot;><path d=&quot;M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4&quot;></path><polyline points=&quot;7 10 12 15 17 10&quot;></polyline><line x1=&quot;12&quot; y1=&quot;15&quot; x2=&quot;12&quot; y2=&quot;3&quot;></line></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download
                                                </a>

                                                <a class="dropdown-item" data-value="Share" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-share-2&quot;><circle cx=&quot;18&quot; cy=&quot;5&quot; r=&quot;3&quot;></circle><circle cx=&quot;6&quot; cy=&quot;12&quot; r=&quot;3&quot;></circle><circle cx=&quot;18&quot; cy=&quot;19&quot; r=&quot;3&quot;></circle><line x1=&quot;8.59&quot; y1=&quot;13.51&quot; x2=&quot;15.42&quot; y2=&quot;17.49&quot;></line><line x1=&quot;15.41&quot; y1=&quot;6.51&quot; x2=&quot;8.59&quot; y2=&quot;10.49&quot;></line></svg>" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share
                                                </a>
                                                
                                            </div>
                        
                                        </div>
                                    </li>
                                </ul>
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->

                    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#wizard_Default" class="active nav-link">Default</a>
                            <a href="#wizard_Vertical" class="nav-link">Vertical</a>
                            <a href="#wizard_Icons" class="nav-link">Icons</a>
                            <a href="#wizard_Vertical_Icons" class="nav-link">Vertical Icons</a>
                            <a href="#wizard_Vertical_Validation" class="nav-link">Vertical Validation</a>
                            <a href="#wizard_Validation" class="nav-link">Validation</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">

                        <div id="wizard_Default" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="bs-stepper stepper-form-one">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#defaultStep-one">
                                                <button type="button" class="step-trigger" role="tab" >
                                                    <span class="bs-stepper-circle">1</span>
                                                    <span class="bs-stepper-label">Step One</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#defaultStep-two">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle">2</span>
                                                    <span class="bs-stepper-label">Step Two</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#defaultStep-three">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle">3</span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Step Three</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content">
                                            <div id="defaultStep-one" class="content" role="tabpanel">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label for="defaultForm-name">Name</label>
                                                        <input type="text" class="form-control" id="defaultForm-name">
                                                    </div>
                                                </form>
                                                
                                                <div class="button-action mt-5">
                                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="defaultStep-two" class="content" role="tabpanel">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label for="defaultEmailAddress">Email Address</label>
                                                        <input type="email" class="form-control" id="defaultEmailAddress">
                                                    </div>
                                                </form>
                                                
                                                <div class="button-action mt-5">
                                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="defaultStep-three" class="content" role="tabpanel" >
                                                <form class="row g-3">
                                                    <div class="col-12">
                                                        <label for="defaultInputAddress" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="defaultInputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="defaultInputAddress2" class="form-label">Address 2</label>
                                                        <input type="text" class="form-control" id="defaultInputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="defaultInputCity" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="defaultInputCity">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="defaultInputState" class="form-label">State</label>
                                                        <select id="defaultInputState" class="form-select">
                                                            <option selected="">Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="defaultInputZip" class="form-label">Zip</label>
                                                        <input type="text" class="form-control" id="defaultInputZip">
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="defaultGridCheck">
                                                            <label class="form-check-label" for="defaultGridCheck">
                                                                Check me out
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="button-action mt-3">
                                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                    <button class="btn btn-success me-3">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="wizard_Vertical" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical Form</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    
                                    <div class="bs-stepper stepper-form-vertical vertical linear">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#verticalFormStep-one">
                                                <button type="button" class="step-trigger" role="tab" >
                                                    <span class="bs-stepper-circle">1</span>
                                                    <span class="bs-stepper-label">Step One</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#verticalFormStep-two">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle">2</span>
                                                    <span class="bs-stepper-label">Step Two</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#verticalFormStep-three">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle">3</span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Step Three</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="bs-stepper-content">
                                            <div id="verticalFormStep-one" class="content" role="tabpanel">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label for="verticalFormStepform-name">Name</label>
                                                        <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="name@example.com">
                                                    </div>
                                                </form>
                                                
                                                <div class="button-action mt-3">
                                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="verticalFormStep-two" class="content" role="tabpanel">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label for="verticalFormStepEmailAddress">Email Address</label>
                                                        <input type="email" class="form-control" id="verticalFormStepEmailAddress" placeholder="name@example.com">
                                                    </div>
                                                </form>
                                                
                                                <div class="button-action mt-3">
                                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="verticalFormStep-three" class="content" role="tabpanel" >
                                                <form class="row g-3">
                                                    <div class="col-12">
                                                        <label for="verticalFormInputAddress" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="verticalFormInputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="verticalFormInputAddress2" class="form-label">Address 2</label>
                                                        <input type="text" class="form-control" id="verticalFormInputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="verticalFormStepInputCity" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="verticalFormStepInputCity">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="verticalFormStepInputState" class="form-label">State</label>
                                                        <select id="verticalFormStepInputState" class="form-select">
                                                            <option selected="">Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="verticalFormStepInputZip" class="form-label">Zip</label>
                                                        <input type="text" class="form-control" id="verticalFormStepInputZip">
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="verticalFormStepGridCheck">
                                                            <label class="form-check-label" for="verticalFormStepGridCheck">
                                                                Check me out
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="button-action mt-3">
                                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                    <button class="btn btn-success me-3">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="wizard_Icons" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>With icons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="bs-stepper stepper-icons">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#withIconsStep-one">
                                                <button type="button" class="step-trigger" role="tab" >
                                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span>
                                                    <span class="bs-stepper-label">Step One</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#withIconsStep-two">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></span>
                                                    <span class="bs-stepper-label">Step Two</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#withIconsStep-three">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Step Three</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content">
                                            <div id="withIconsStep-one" class="content" role="tabpanel">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label for="withIconsStepForm-name">Name</label>
                                                        <input type="text" class="form-control" id="withIconsStepForm-name">
                                                    </div>
                                                </form>
                                                
                                                <div class="button-action mt-5">
                                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="withIconsStep-two" class="content" role="tabpanel">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label for="withIconsStepEmailAddress">Email Address</label>
                                                        <input type="email" class="form-control" id="withIconsStepEmailAddress">
                                                    </div>
                                                </form>
                                                
                                                <div class="button-action mt-5">
                                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="withIconsStep-three" class="content" role="tabpanel" >
                                                <form class="row g-3">
                                                    <div class="col-12">
                                                        <label for="withIconsInputAddress" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="withIconsInputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="withIconsInputAddress2" class="form-label">Address 2</label>
                                                        <input type="text" class="form-control" id="withIconsInputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="withIconsStepInputCity" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="withIconsStepInputCity">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="withIconsStepInputState" class="form-label">State</label>
                                                        <select id="withIconsStepInputState" class="form-select">
                                                            <option selected="">Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="withIconsStepInputZip" class="form-label">Zip</label>
                                                        <input type="text" class="form-control" id="withIconsStepInputZip">
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="withIconsStepGridCheck">
                                                            <label class="form-check-label" for="withIconsStepGridCheck">
                                                                Check me out
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="button-action mt-3">
                                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                    <button class="btn btn-success me-3">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="wizard_Vertical_Icons" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical with icons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="bs-stepper stepper-vertical-icons vertical linear">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#verticalWithIconsStep-one">
                                                <button type="button" class="step-trigger" role="tab" >
                                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span>
                                                    <span class="bs-stepper-label">Step One</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#verticalWithIconsStep-two">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></span>
                                                    <span class="bs-stepper-label">Step Two</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#verticalWithIconsStep-three">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Step Three</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content">
                                            <div id="verticalWithIconsStep-one" class="content" role="tabpanel">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label for="verticalWithIconsStepform-name">Name</label>
                                                        <input type="text" class="form-control" id="verticalWithIconsStepform-name">
                                                    </div>
                                                </form>
                                                
                                                <div class="button-action mt-5">
                                                    <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="verticalWithIconsStep-two" class="content" role="tabpanel">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label for="verticalWithIconsStepEmailAddress">Email Address</label>
                                                        <input type="email" class="form-control" id="verticalWithIconsStepEmailAddress">
                                                    </div>
                                                </form>
                                                
                                                <div class="button-action mt-5">
                                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                    <button class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="verticalWithIconsStep-three" class="content" role="tabpanel" >
                                                <form class="row g-3">
                                                    <div class="col-12">
                                                        <label for="verticalIconsInputAddress" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="verticalIconsInputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="verticalIconsInputAddress2" class="form-label">Address 2</label>
                                                        <input type="text" class="form-control" id="verticalIconsInputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="verticalWithIconsStepInputCity" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="verticalWithIconsStepInputCity">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="verticalWithIconsStepInputState" class="form-label">State</label>
                                                        <select id="verticalWithIconsStepInputState" class="form-select">
                                                            <option selected="">Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="verticalWithIconsStepInputZip" class="form-label">Zip</label>
                                                        <input type="text" class="form-control" id="verticalWithIconsStepInputZip">
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="verticalWithIconsStepGridCheck">
                                                            <label class="form-check-label" for="verticalWithIconsStepGridCheck">
                                                                Check me out
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="button-action mt-3">
                                                    <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                    <button class="btn btn-success me-3">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="wizard_Vertical_Validation" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Validation</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="bs-stepper stepper-form-validation-one">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#validationStep-one">
                                                <button type="button" class="step-trigger" role="tab" >
                                                    <span class="bs-stepper-circle">1</span>
                                                    <span class="bs-stepper-label">Step One</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#validationStep-two">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle">2</span>
                                                    <span class="bs-stepper-label">Step Two</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#validationStep-three">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle">3</span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Step Three</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content">
                                            <form class="needs-validation" onsubmit="return false" novalidate>

                                                <div id="validationStep-one" class="content" role="tabpanel">
                                                    <div id="test-form-1" class="needs-validation">
                                                        <div class="form-group mb-4">
                                                            <label for="validationStepform-name">Name</label>
                                                            <input type="text" class="form-control" id="validationStepform-name" placeholder="" required>
                                                            <div class="invalid-feedback">Please enter your name</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="button-action mt-5">
                                                        <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                                    </div>
                                                </div>
                                                <div id="validationStep-two" class="content" role="tabpanel">
                                                    <div class="needs-validation">
                                                        <div class="form-group mb-4">
                                                            <label for="validationStepEmailAddress">Email Address</label>
                                                            <input type="email" class="form-control" id="validationStepEmailAddress" placeholder="" required>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="button-action mt-5">
                                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                                    </div>
                                                </div>
                                                <div id="validationStep-three" class="content" role="tabpanel" >
                                                    <div class="row g-3 needs-validation">
                                                        <div class="col-12">
                                                            <label for="validationInputAddress" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="validationInputAddress" placeholder="1234 Main St" required>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="validationInputAddress2" class="form-label">Address 2</label>
                                                            <input type="text" class="form-control" id="validationInputAddress2" placeholder="Apartment, studio, or floor" required>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="validationStepInputCity" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="validationStepInputCity" required>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationStepInputState" class="form-label">State</label>
                                                            <select id="validationStepInputState" class="form-select" required>
                                                                <option selected="">Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="validationStepInputZip" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" id="validationStepInputZip" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="validationStepGridCheck" required>
                                                                <label class="form-check-label" for="validationStepGridCheck">
                                                                    Check me out
                                                                </label>
                                                                <div class="invalid-feedback">Please fill the email field</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="button-action mt-3">
                                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                        <button class="btn btn-success btn-submit">Submit</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="wizard_Validation" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical Form Validation</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    
                                    <div class="bs-stepper stepper-form-validation-vertical vertical linear">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#verticalFormValidationStep-one">
                                                <button type="button" class="step-trigger" role="tab" >
                                                    <span class="bs-stepper-circle">1</span>
                                                    <span class="bs-stepper-label">Step One</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#verticalFormValidationStep-two">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle">2</span>
                                                    <span class="bs-stepper-label">Step Two</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#verticalFormValidationStep-three">
                                                <button type="button" class="step-trigger" role="tab"  >
                                                    <span class="bs-stepper-circle">3</span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Step Three</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content">
                                            <form class="needs-validation" onsubmit="return false" novalidate>

                                                <div id="verticalFormValidationStep-one" class="content" role="tabpanel">
                                                    <div id="test-form-2" class="needs-validation">
                                                        <div class="form-group mb-4">
                                                            <label for="verticalFormValidationStepform-name">Name</label>
                                                            <input type="text" class="form-control" id="verticalFormValidationStepform-name" placeholder="" required>
                                                            <div class="invalid-feedback">Please enter your name</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="button-action mt-5">
                                                        <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                                    </div>
                                                </div>
                                                <div id="verticalFormValidationStep-two" class="content" role="tabpanel">
                                                    <div class="needs-validation">
                                                        <div class="form-group mb-4">
                                                            <label for="verticalFormValidationStepEmailAddress">Email Address</label>
                                                            <input type="email" class="form-control" id="verticalFormValidationStepEmailAddress" placeholder="" required>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="button-action mt-5">
                                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                                    </div>
                                                </div>
                                                <div id="verticalFormValidationStep-three" class="content" role="tabpanel" >
                                                    <div class="row g-3 needs-validation">
                                                        <div class="col-12">
                                                            <label for="verticalValidationinputAddress" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="verticalValidationinputAddress" placeholder="1234 Main St" required>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="verticalValidationinputAddress2" class="form-label">Address 2</label>
                                                            <input type="text" class="form-control" id="verticalValidationinputAddress2" placeholder="Apartment, studio, or floor" required>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="verticalFormValidationStepInputCity" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="verticalFormValidationStepInputCity" required>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="verticalFormValidationStepInputState" class="form-label">State</label>
                                                            <select id="verticalFormValidationStepInputState" class="form-select" required>
                                                                <option selected="">Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please fill the email field</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="verticalFormValidationStepInputZip" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" id="verticalFormValidationStepInputZip" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="verticalFormValidationStepGridCheck" required>
                                                                <label class="form-check-label" for="verticalFormValidationStepGridCheck">
                                                                    Check me out
                                                                </label>
                                                                <div class="invalid-feedback">Please fill the email field</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="button-action mt-3">
                                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                        <button class="btn btn-success btn-submit">Submit</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
            
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../public/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../public/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../public/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../public/src/plugins/src/waves/waves.min.js"></script>
    <script src="../public/layouts/horizontal-light-menu/app.js"></script>
    <script src="../public/src/plugins/src/highlight/highlight.pack.js"></script>
    <script src="../public/src/assets/js/scrollspyNav.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../public/src/plugins/src/stepper/bsStepper.min.js"></script>
    <script src="../public/src/plugins/src/stepper/custom-bsStepper.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->    
</body>
</html>