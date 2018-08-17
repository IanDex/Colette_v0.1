<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas b-r sidebar-tabs" data-toggle='offcanvas'>
    <div class="sidebar">
        <div class="d-flex hv-100 align-items-stretch">
            <div>
                <div class="nav mt-5 pt-5 flex-column nav-pills" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                       aria-controls="v-pills-home" aria-selected="true"><i class="icon-inbox2"></i></a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                       aria-controls="v-pills-profile" aria-selected="false"><i class="icon-add"></i></a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                       aria-controls="v-pills-messages" aria-selected="false"><i class="icon-message"></i></a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                       aria-controls="v-pills-settings" aria-selected="false"><i class="icon-settings"></i></a>
                    <a href="#">
                        <figure class="avatar">
                            <img src="../assets/img/dummy/u6.png" alt="">
                            <span class="avatar-badge online"></span>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="relative brand-wrapper sticky b-b">
                        <div class="d-flex justify-content-between align-items-center p-3">
                            <div class="text-xs-center">
                                <span class="font-weight-lighter s-18">Menu</span>
                            </div>
                            <div class="badge badge-danger r-0">New Panel</div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="treeview"><a href="#">
                            <i class="icon icon-sailing-boat-water s-24"></i> <span>Dashboard</span> <i
                                class=" icon-angle-left  pull-right"></i>
                        </a>
                            <ul class="treeview-menu">
                                <li><a href="index.html"><i class="icon icon-folder5"></i>Panel Dashboard 1</a>
                                </li>
                                <li><a href="panel-page-dashboard1-rtl.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 1 - RTL</a>
                                </li>
                                <li><a href="panel-page-dashboard2.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 2</a>
                                </li>
                                <li><a href="panel-page-dashboard3.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 3</a>
                                </li>
                                <li><a href="panel-page-dashboard4.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 4</a>
                                </li>
                                <li><a href="panel-page-dashboard5.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 5</a>
                                </li>
                                <li><a href="panel-page-dashboard6.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 6</a>
                                </li>
                                <li><a href="panel-page-dashboard7.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 7</a>
                                </li>
                                <li><a href="panel-page-dashboard8.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 8</a>
                                </li>
                                <li><a href="panel-page-dashboard9.html"><i class="icon icon-folder5"></i>Panel
                                    Dashboard 9</a>
                                </li>
                                <li><a href="panel-page-dashboard10.html"><i class="icon icon-folder5"></i>Panel Dashboard 10</a></li>
                                <li><a href="panel-page-dashboard11.html"><i class="icon icon-folder5"></i>Panel Dashboard 11</a></li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="#">
                            <i class="icon icon icon-package s-24"></i>
                            <span>Products</span>
                            <span class="badge r-3 badge-primary pull-right">4</span>
                        </a>
                            <ul class="treeview-menu">
                                <li><a href="panel-page-products.html"><i class="icon icon-circle-o"></i>All
                                    Products</a>
                                </li>
                                <li><a href="panel-page-products-create.html"><i class="icon icon-add"></i>Add
                                    New </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="#"><i class="icon icon-account_box s-24"></i>Users<i
                                class=" icon-angle-left  pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="panel-page-users.html"><i class="icon icon-circle-o"></i>All Users</a>
                                </li>
                                <li><a href="panel-page-users-create.html"><i class="icon icon-add"></i>Add User</a>
                                </li>
                                <li><a href="panel-page-profile.html"><i class="icon icon-user"></i>User Profile </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="#">
                            <i class="icon icon-package s-24"></i>
                            <i class=" icon-angle-left  pull-right"></i>
                            <span>Inbox</span>
                        </a>
                            <ul class="treeview-menu">
                                <li><a href="panel-page-inbox.html"><i class="icon icon-circle-o"></i>All Messages</a>
                                </li>
                                <li><a href="panel7-inbox.html"><i class="icon icon-circle-o"></i>Panel7 - Inbox</a>
                                </li>
                                <li><a href="panel8-inbox.html"><i class="icon icon-circle-o"></i>Panel8 - Inbox</a>
                                </li>
                                <li><a href="panel-page-inbox-create.html"><i class="icon icon-add"></i>Compose</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview ">
                            <a href="#">
                                <i class="icon icon-package  s-24"></i> <span>Apps</span>
                                <i class=" icon-angle-left  pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="panel-page-chat.html"><i class="icon icon-circle-o"></i>Chat</a>
                                </li>
                                <li><a href="panel7-tasks.html"><i class="icon icon-circle-o"></i>Tasks / Todo</a>
                                </li>
                                <li><a href="panel-page-calendar.html"><i class="icon icon-date_range"></i>Calender</a>
                                </li>
                                <li><a href="panel-page-calendar2.html"><i class="icon icon-date_range"></i>Calender
                                    2</a>
                                </li>
                                <li><a href="panel-page-contacts.html"><i class="icon icon-circle-o"></i>Contacts</a>
                                </li>
                                <li><a href="panel1-projects.html"><i class="icon icon-circle-o"></i>Panel1 -
                                    Projects</a>
                                </li>
                                <li><a href="panel7-projects-list.html"><i class="icon icon-circle-o"></i>Panel7 -
                                    Projects List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon icon-documents3 s-24"></i> <span>Pages</span>
                                <i class=" icon-angle-left  pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="icon icon-documents3"></i>Blank Pages<i
                                        class=" icon-angle-left  pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="panel-page-blank.html"><i class="icon icon-document"></i>Simple
                                            Blank</a>
                                        </li>
                                        <li><a href="panel-page-blank-tabs.html"><i class="icon icon-document"></i>Tabs
                                            Blank <i
                                                    class=" icon-angle-left  pull-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon icon-fingerprint text-green"></i>Auth Pages<i
                                        class=" icon-angle-left  pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="login.html"><i class="icon icon-document"></i>Login Page 1</a>
                                        </li>
                                        <li><a href="login-2.html"><i class="icon icon-document"></i>Login Page 2</a>
                                        </li>
                                        <li><a href="login-3.html"><i class="icon icon-document"></i>Login Page 3</a>
                                        </li>
                                        <li><a href="login-4.html"><i class="icon icon-document"></i>Login Page 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon icon-bug text-red"></i>Error Pages<i
                                        class=" icon-angle-left  pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="panel-page-404.html"><i class="icon icon-document"></i>404 Page</a>
                                        </li>
                                        <li><a href="panel-page-500.html"><i class="icon icon-document"></i>500 Page<i
                                                class=" icon-angle-left  pull-right"></i></a>
                                        </li>
                                        <li><a href="panel-page-error.html"><i class="icon icon-document"></i>420 Page<i
                                                class=" icon-angle-left  pull-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon icon-documents3"></i>Other Pages<i
                                        class=" icon-angle-left  pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="panel-page-invoice.html"><i class="icon icon-document"></i>Invoice
                                            Page</a>
                                        </li>
                                        <li><a href="panel-page-no-posts.html"><i class="icon icon-document"></i>No Post
                                            Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="icon icon-goals-1  s-24"></i> <span>Elements</span>
                                <i class=" icon-angle-left  pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="panel-element-widgets.html">
                                    <i class="icon icon-widgets amber-text s-14"></i> <span>Widgets</span>
                                </a>
                                </li>
                                <li><a href="panel-element-counters.html">
                                    <i class="icon icon-filter_9_plus amber-text s-14"></i> <span>Counters</span>
                                </a>
                                <li><a href="panel-element-buttons.html">
                                    <i class="icon icon-touch_app amber-text s-14"></i> <span>Buttons</span>
                                </a>
                                </li>
                                <li>
                                    <a href="panel-element-typography.html">
                                        <i class="icon icon-text-width amber-text s-14"></i> <span>Typography</span>
                                    </a>
                                </li>
                                <li><a href="panel-element-tabels.html">
                                    <i class="icon icon-table amber-text s-14"></i> <span>Tables</span>
                                </a>
                                </li>
                                <li><a href="panel-element-alerts.html">
                                    <i class="icon icon-exclamation-circle amber-text s-14"></i> <span>Alerts</span>
                                </a>
                                </li>
                                <li><a href="panel-element-slider.html"><i
                                        class="icon icon-view_carousel amber-text s-14"></i>
                                    <span>Slider</span></a></li>
                                <li><a href="panel-element-tabs.html"><i class="icon icon-folders2 amber-text s-14"></i>
                                    <span>Tabs</span></a></li>
                                <li><a href="panel-element-progress-bars.html"><i
                                        class="icon icon-folders2 amber-text s-14"></i>
                                    <span>Progress Bars</span></a></li>
                                <li><a href="panel-element-badges.html"><i class="icon icon-flag7 amber-text s-14"></i>
                                    <span>Badges</span></a></li>
                                <li><a href="panel-element-preloaders.html"><i
                                        class="icon icon-data_usage amber-text s-14"></i>
                                    <span>Preloaders</span></a></li>
                            </ul>
                        </li>
                        <li class="treeview ">
                            <a href="#">
                                <i class="icon icon-wpforms  s-24 "></i> <span>Forms & Plugins</span>
                                <i class=" icon-angle-left  pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="panel-element-forms.html"><i
                                        class="icon icon-wpforms light-green-text"></i>Bootstrap
                                    Inputs</a>
                                </li>
                                <li><a href="form-jquery-validations.html"><i
                                        class="icon icon-note-important light-green-text"></i>
                                    Form Validation (Jquery)</a>
                                </li>
                                <li><a href="form-bootstrap-validations.html"><i
                                        class="icon icon-note-important light-green-text"></i>
                                    Form Validation (Bootstrap)</a>
                                </li>
                                <li><a href="panel-element-editor.html"><i class="icon icon-pen2 light-green-text"></i>Editor</a>
                                </li>
                                <li><a href="panel-element-toast.html"><i
                                        class="icon icon-notifications_active light-green-text"></i>Toasts</a>
                                </li>
                                <li><a href="panel-element-stepper.html"><i
                                        class="icon icon-burst_mode light-green-text"></i>Stepper</a>
                                </li>
                                <li><a href="panel-element-date-time-picker.html"><i
                                        class="icon icon-date_range light-green-text"></i>Date Time Picker</a>
                                </li>
                                <li><a href="panel-element-color-picker.html"><i
                                        class="icon icon-adjust light-green-text"></i>Color
                                    Picker</a>
                                </li>
                                <li><a href="panel-element-range-slider.html"><i
                                        class="icon icon-space_bar light-green-text"></i>Range
                                    Slider</a>
                                </li>
                                <li><a href="panel-element-select2.html"><i
                                        class="icon  icon-one-finger-click light-green-text"></i>Select 2</a>
                                </li>
                                <li><a href="panel-element-tags.html"><i class="icon  icon-tags3 light-green-text"></i>Tags</a>
                                </li>
                                <li><a href="panel-element-data-tables.html"><i
                                        class="icon icon-table light-green-text"></i>Data
                                    Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="#">
                            <i class="icon icon-bar-chart2  s-24"></i>
                            <span>Charts</span>
                            <i class=" icon-angle-left  pull-right"></i>
                        </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="panel-element-charts-js.html"><i
                                            class="icon icon-area-chart pink-text s-14"></i><span>Charts.Js</span></a>
                                </li>
                                <li>
                                    <a href="panel-element-morris.html"><i
                                            class="icon icon-bubble_chart pink-text s-14"></i>Morris
                                        Charts</a>
                                </li>
                                <li>
                                    <a href="panel-element-echarts.html">
                                        <i class="icon icon-bar-chart-o pink-text s-14"></i>Echarts</a>
                                </li>
                                <li>
                                    <a href="panel-element-easy-pie-charts.html">
                                        <i class="icon icon-area-chart pink-text s-14"></i>Easy Pie Charts</a>
                                </li>
                                <li>
                                    <a href="panel-element-jqvmap.html">
                                        <i class="icon icon-map pink-text s-14"></i>Jqvmap</a>
                                </li>
                                <li>
                                    <a href="panel-element-sparklines.html">
                                        <i class="icon icon-line-chart2 pink-text s-14"></i>Sparklines</a>
                                </li>
                                <li>
                                    <a href="panel-element-float.html">
                                        <i class="icon icon-pie-chart pink-text s-14"></i>Float Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="#">
                            <i class="icon icon-dialpad  s-24"></i>
                            <span>Extra</span>
                            <i class=" icon-angle-left  pull-right"></i>
                        </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="panel-element-letters.html">
                                        <i class="icon icon-brightness_auto light-blue-text s-14"></i>
                                        <span>Avatar Placeholders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="panel-element-icons.html">
                                        <i class="icon icon-camera2 light-blue-text s-14"></i> <span>Icons</span>
                                    </a>
                                </li>
                                <li><a href="panel-element-colors.html">
                                    <i class="icon icon-palette light-blue-text s-14"></i> <span>Colors</span>
                                </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <di class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="relative brand-wrapper sticky b-b p-3">
                        <form>
                            <div class="form-group input-group-sm has-right-icon">
                                <input class="form-control form-control-sm light r-30" placeholder="Search" type="text">
                                <i class="icon-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="sticky slimScroll">

                        <div class="p-2">
                            <ul class="list-unstyled">
                                <!-- Alphabet with number of contacts -->
                                <li class="pt-3 pb-3 sticky p-3 b-b bg-dark">
                                    <span class="badge r-3 badge-success">A</span>
                                </li>
                                <!-- Single contact -->
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u1.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u6.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u6.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="pt-3 pb-3 sticky p-3 b-b bg-dark">
                                    <span class="badge r-3 badge-danger">B</span>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u2.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u3.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u4.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <!-- Alphabet with number of contacts -->
                                <li class="pt-3 pb-3 sticky p-3 b-b bg-dark">
                                    <span class="badge r-3 badge-success gradient">C</span>
                                </li>
                                <!-- Single contact -->
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u1.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u6.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u6.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-4">
                                    <span class="badge r-3 badge-danger purple">D</span>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u2.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u3.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="my-1">
                                    <div class="card no-b p-3">
                                        <div class="">

                                            <div class="image mr-3  float-left">
                                                <img class="w-40px" src="../assets/img/dummy/u4.png" alt="User Image">
                                            </div>
                                            <div>
                                                <div>
                                                    <strong>Alexander Pierce</strong>
                                                </div>
                                                <small> alexander@paper.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </di>

            </div>
        </div>
    </div>
</aside>

<script>
    /*
     *  Add sidebar classes (sidebar-mini sidebar-collapse sidebar-expanded-on-hover) in body tag
     *  you can remove this script tag and add classes directly to body
     *  this is only for demo
     */
    document.body.className += ' sidebar-mini' + ' sidebar-collapse' + ' theme-dark';
</script>

    <a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
        <i></i>
    </a>
    <div class="has-sidebar-left has-sidebar-tabs">
        <!--div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                <div class="search-bar">
                    <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                           placeholder="start typing...">
                </div>
                <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                   aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
            </div>
        </div>
    </div-->
        <div class="sticky">
            <div class="navbar navbar-expand d-flex justify-content-between bd-navbar darko shadow">
                <div class="relative">
                    <div class="d-flex">
                        <div class="d-none d-md-block">
                            <h1 class="nav-title text-white">Dashboard</h1>
                        </div>
                    </div>
                </div>
                <!--Top Menu Start -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages-->
            <li class="dropdown custom-dropdown messages-menu">
                <a href="#" class="nav-link" data-toggle="dropdown">
                       <i class="icon-message "></i>
                       <span class="badge badge-success badge-mini rounded-circle">4</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu pl-2 pr-2">
                            <!-- start message -->
                            <li>
                                <a href="#">
                                    <div class="avatar float-left">
                                        <img src="../assets/img/dummy/u4.png" alt="">
                                        <span class="avatar-badge busy"></span>
                                    </div>
                                    <h4>
                                        Support Team
                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                            <!-- end message -->
                            <!-- start message -->
                            <li>
                                <a href="#">
                                    <div class="avatar float-left">
                                        <img src="../assets/img/dummy/u1.png" alt="">
                                        <span class="avatar-badge online"></span>
                                    </div>
                                    <h4>
                                        Support Team
                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                            <!-- end message -->
                            <!-- start message -->
                            <li>
                                <a href="#">
                                    <div class="avatar float-left">
                                        <img src="../assets/img/dummy/u2.png" alt="">
                                        <span class="avatar-badge idle"></span>
                                    </div>
                                    <h4>
                                        Support Team
                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                            <!-- end message -->
                            <!-- start message -->
                            <li>
                                <a href="#">
                                    <div class="avatar float-left">
                                        <img src="../assets/img/dummy/u3.png" alt="">
                                        <span class="avatar-badge busy"></span>
                                    </div>
                                    <h4>
                                        Support Team
                                        <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                </a>
                            </li>
                            <!-- end message -->
                        </ul>
                    </li>
                    <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                </ul>
            </li>
            <!-- Notifications -->
            <li class="dropdown custom-dropdown notifications-menu">
                <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                    <i class="icon-notifications "></i>
                    <span class="badge badge-danger badge-mini rounded-circle">4</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="header">You have 10 notifications</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li>
                                <a href="#">
                                    <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer p-2 text-center"><a href="#">View all</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                   aria-controls="navbarToggleExternalContent"
                   aria-expanded="false" aria-label="Toggle navigation">
                    <i class=" icon-search3 "></i>
                </a>
            </li>
            <!-- Right Sidebar Toggle Button -->
            <li>
                <a class="nav-link ml-2" data-toggle="control-sidebar">
                    <i class="icon-tasks "></i>
                </a>
            </li>
            <!-- User Account-->
            <li class="dropdown custom-dropdown user user-menu ">
                <a href="#" class="nav-link" data-toggle="dropdown">
                    <img src="../assets/img/dummy/u8.png" class="user-image" alt="User Image">
                    <i class="icon-more_vert "></i>
                </a>
                <div class="dropdown-menu p-4 dropdown-menu-right">
                    <div class="row box justify-content-between my-4">
                        <div class="col">
                            <a href="#">
                                <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                <div class="pt-1">Apps</div>
                            </a>
                        </div>
                        <div class="col"><a href="#">
                            <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                            <div class="pt-1">Profile</div>
                        </a></div>
                        <div class="col">
                            <a href="#">
                                <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                <div class="pt-1">Settings</div>
                            </a>
                        </div>
                    </div>
                    <div class="row box justify-content-between my-4">
                        <div class="col">
                            <a href="#">
                                <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                                <div class="pt-1">Favourites</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#">
                                <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                                <div class="pt-1">Saved</div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#">
                                <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                                <div class="pt-1">Settings</div>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row box justify-content-between my-4">
                        <div class="col">
                            <a href="#">
                                <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                <div class="pt-1">Apps</div>
                            </a>
                        </div>
                        <div class="col"><a href="#">
                            <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                            <div class="pt-1">Profile</div>
                        </a></div>
                        <div class="col">
                            <a href="#">
                                <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                <div class="pt-1">Settings</div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
            </div>
        </div>
        <div class="container-fluid relative animatedParent animateOnce my-3">
          <div class="slimScroll">
            <div style="height:2000px">

              <?php
          $líneas = file('../index.html');

          ?>
          <textarea name="name" rows="8" cols="80">
          <?php
          foreach ($líneas as $num_línea => $línea) {
              echo htmlspecialchars($línea);
              
          }
          ?>
          </textarea>

            </div>
          </div>
        </div>
    </div>

<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                            data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="../assets/js/app.js"></script>
<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel1.0.8/panel-page-dashboard11.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 16:08:07 GMT -->
</html>
