<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<!--        <base href="../" />-->

        <title>CIC Supports</title>

        <!-- include common vendor stylesheets & fontawesome -->
        <link rel="stylesheet" type="text/css" href="../web/my_theme/node_modules/bootstrap/dist/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="../web/my_theme/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="../web/my_theme/node_modules/@fortawesome/fontawesome-free/css/regular.css">
        <link rel="stylesheet" type="text/css" href="../web/my_theme/node_modules/@fortawesome/fontawesome-free/css/brands.css">
        <link rel="stylesheet" type="text/css" href="../web/my_theme/node_modules/@fortawesome/fontawesome-free/css/solid.css">



        <!-- include vendor stylesheets used in "Horizontal Menu" page. see "/views//pages/partials/horizontal/@vendor-stylesheets.hbs" -->
        <link rel="stylesheet" type="text/css" href="../web/my_theme/node_modules/fullcalendar/main.css">


        <!-- include fonts -->
        <link rel="stylesheet" type="text/css" href="../web/my_theme/dist/css/ace-font.css">



        <!-- ace.css -->
        <link rel="stylesheet" type="text/css" href="../web/my_theme/dist/css/ace.css">


        <!-- favicon -->
        <link rel="icon" type="image/png" href="../web/my_theme/assets/favicon.png" />

        <!-- "Horizontal Menu" page styles, specific to this page for demo only -->
        <link rel="stylesheet" type="text/css" href="../web/my_theme/views/pages/horizontal/@page-style.css">
        <link rel="stylesheet" type="text/css" href="../web/my_theme/dist/css/ace-themes.css">

    </head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div class="body-container">
    <nav class="navbar navbar-sm navbar-fixed-xl navbar-expand-lg navbar-white">
        <div class="navbar-inner shadow-md">
            <div class="container container-plus">


                <div class="navbar-intro justify-content-xl-start bgc-transparent pr-lg-3 w-auto">

                    <button type="button" class="btn btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none btn-h-white" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
                        <span class="bars text-dark-tp5"></span>
                    </button><!-- mobile sidebar toggler button -->

                    <button type="button" class="btn btn-burger burger-compact align-self-center ml-2 d-none d-xl-flex btn-h-light-primary" data-toggle="sidebar" data-toggle-class="collapsed-h" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
                        <span class="bars text-dark-tp5"></span>
                    </button><!-- sidebar toggler button -->

                    <a class="navbar-brand text-dark-l1 ml-lg-1" href="#">
                        <span>CIC</span>
                        <span>Supports</span>
                    </a><!-- /.navbar-brand -->

                </div><!-- /.navbar-intro -->


                <!-- breadcrumbs -->
                <div class="navbar-content d-none d-xl-flex">
                    <ol class="breadcrumb pl-2 ml-3">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
<!--                        <li class="breadcrumb-item"><a class="text-dark-l1" href="#">หน้าหลัก</a></li>-->
<!--                        <li class="breadcrumb-item active text-dark-l4">ภาพรวมระบบ</li>-->
                    </ol>
                </div>


<!--                <div class="navbar-content flex-grow-0 ml-auto">-->
<!--                    <button type="button" id="id-nav-post-btn" class="btn btn-sm px-2 btn-outline-grey btn-h-outline-green btn-h-text-grey btn-a-outline-green btn-bold btn-brc-tp mx-lg-2">-->
<!--                        <i class="fa fa-plus bgc-green radius-round w-3 h-3 text-center mr-lg-1 text-white pt-15 text-95"></i>-->
<!--                        <span class="d-none d-lg-inline">Create New</span>-->
<!--                    </button>-->
<!--                </div>-->


                <!-- mobile #navbarMenu toggler button -->
                <button class="navbar-toggler ml-1 mr-2 px-1" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
              <span class="pos-rel">
                  <img class="radius-3px mr-1 brc-grey-m2 border-1" width="36" src="assets/image/avatar/avatar6.jpg" alt="User's Photo">
                  <span class="badge badge-dot bgc-orange-d1 position-tr mr-1px mt-n1"></span>
              </span>
                </button>


                <div class="navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">

                    <div class="navbar-nav">
                        <ul class="nav nav-compact has-active-border">

                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle px-lg-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-bell text-110 icon-animated-bell mr-lg-2"></i>

                                    <span class="d-inline-block d-lg-none ml-2">Notifications</span><!-- show only on mobile -->
                                    <span class="d-none d-lg-block badge badge-dot bgc-danger position-tr mt-3 mr-35"></span>
                                    <span class="d-lg-none w-1 h-1 radius-round bgc-danger ml-2"></span>

                                    <i class="caret fa fa-angle-left d-block d-lg-none ml-auto"></i>
                                </a>
                                <div class="dropdown-menu dropdown-sm dropdown-animated p-0 bgc-white brc-primary-m3 border-b-2 shadow">
                                    <ul class="nav nav-tabs nav-tabs-simple w-100 nav-justified dropdown-clickable border-b-1 brc-secondary-l2" role="tablist">
                                        <li class="nav-item">
                                            <a class="d-style px-0 mx-0 py-3 nav-link active text-600 brc-blue-m1 text-dark-tp5 bgc-h-blue-l4" data-toggle="tab" href="#navbar-notif-tab-1" role="tab">
                                                <span class="d-active text-blue-d1 text-105">Notifications</span>
                                                <span class="d-n-active">Notifications</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="d-style px-0 mx-0 py-3 nav-link text-600 brc-purple-m1 text-dark-tp5 bgc-h-purple-l4" data-toggle="tab" href="#navbar-notif-tab-2" role="tab">
                                                <span class="d-active text-purple-d1 text-105">Messages</span>
                                                <span class="d-n-active">Messages</span>
                                            </a>
                                        </li>
                                    </ul><!-- .nav-tabs -->


                                    <div class="tab-content tab-sliding p-0">

                                        <div class="tab-pane mh-none show active px-md-1 pt-1" id="navbar-notif-tab-1" role="tabpanel">

                                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                <i class="fab fa-twitter bgc-blue-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                                                <span class="text-muted">Followers</span>
                                                <span class="float-right badge badge-danger radius-round text-80">- 4</span>
                                            </a>
                                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                <i class="fa fa-comment bgc-pink-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                                                <span class="text-muted">New Comments</span>
                                                <span class="float-right badge badge-info radius-round text-80">+12</span>
                                            </a>
                                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                <i class="fa fa-shopping-cart bgc-success-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                                                <span class="text-muted">New Orders</span>
                                                <span class="float-right badge badge-success radius-round text-80">+8</span>
                                            </a>
                                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                <i class="far fa-clock bgc-purple-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                                                <span class="text-muted">Finished processing data!</span>
                                            </a>

                                            <hr class="mt-1 mb-1px brc-secondary-l2" />
                                            <a href="#" class="mb-0 py-3 border-0 list-group-item text-blue text-uppercase text-center text-85 font-bolder">
                                                See All Notifications
                                                <i class="ml-2 fa fa-arrow-right text-muted"></i>
                                            </a>

                                        </div><!-- .tab-pane : notifications -->


                                        <div class="tab-pane mh-none pl-md-2" id="navbar-notif-tab-2" role="tabpanel">
                                            <div data-ace-scroll='{"ignore": "mobile", "height": 300, "smooth":true}'>
                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                    <img alt="Alex's avatar" src="assets/image/avatar/avatar.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                    <div>
                                                        <span class="text-primary-m1 font-bolder">Alex:</span>
                                                        <span class="text-grey text-90">Ciao sociis natoque penatibus et auctor ...</span>
                                                        <br />
                                                        <span class="text-grey-m1 text-85">
                                                  <i class="far fa-clock"></i>
                                                  a moment ago
                                              </span>
                                                    </div>
                                                </a>
                                                <hr class="my-1px brc-grey-l3" />
                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                    <img alt="Susan's avatar" src="assets/image/avatar/avatar3.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                    <div>
                                                        <span class="text-primary-m1 font-bolder">Susan:</span>
                                                        <span class="text-grey text-90">Vestibulum id ligula porta felis euismod ...</span>
                                                        <br />
                                                        <span class="text-grey-m1 text-85">
                                                  <i class="far fa-clock"></i>
                                                  20 minutes ago
                                              </span>
                                                    </div>
                                                </a>
                                                <hr class="my-1px brc-grey-l3" />
                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                    <img alt="Bob's avatar" src="assets/image/avatar/avatar4.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                    <div>
                                                        <span class="text-primary-m1 font-bolder">Bob:</span>
                                                        <span class="text-grey text-90">Nullam quis risus eget urna mollis ornare ...</span>
                                                        <br />
                                                        <span class="text-grey-m1 text-85">
                                                  <i class="far fa-clock"></i>
                                                  3:15 pm
                                              </span>
                                                    </div>
                                                </a>
                                                <hr class="my-1px brc-grey-l3" />
                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                    <img alt="Kate's avatar" src="assets/image/avatar/avatar2.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                    <div>
                                                        <span class="text-primary-m1 font-bolder">Kate:</span>
                                                        <span class="text-grey text-90">Ciao sociis natoque eget urna mollis ornare ...</span>
                                                        <br />
                                                        <span class="text-grey-m1 text-85">
                                                  <i class="far fa-clock"></i>
                                                  1:33 pm
                                              </span>
                                                    </div>
                                                </a>
                                                <hr class="my-1px brc-grey-l3" />
                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                    <img alt="Fred's avatar" src="assets/image/avatar/avatar5.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                    <div>
                                                        <span class="text-primary-m1 font-bolder">Fred:</span>
                                                        <span class="text-grey text-90">Vestibulum id penatibus et auctor  ...</span>
                                                        <br />
                                                        <span class="text-grey-m1 text-85">
                                                  <i class="far fa-clock"></i>
                                                  10:09 am
                                              </span>
                                                    </div>
                                                </a>

                                            </div><!-- ace-scroll -->

                                            <hr class="my-1px brc-secondary-l2 border-double" />
                                            <a href="html/page-inbox.html" class="mb-0 py-3 border-0 list-group-item text-purple text-uppercase text-center text-85 font-bolder">
                                                See All Messages
                                                <i class="ml-2 fa fa-arrow-right text-muted"></i>
                                            </a>
                                        </div><!-- .tab-pane : messages -->

                                    </div>
                                </div>
                            </li>


<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link pl-lg-3 pr-lg-4 pos-rel">-->
<!--                                    <i class="far fa-envelope text-110 icon-animated-vertical"></i>-->
<!---->
<!--                                    <span class="d-inline-block d-lg-none ml-2">Messages</span>-->
<!--                                    <span class="d-none d-lg-block text-600 text-orange-d3 text-85 position-tr mt-15 mr-2">+2</span>-->
<!--                                    <span class="d-lg-none text-600 text-orange-d3 text-90 ml-2">(+2)</span>-->
<!--                                </a>-->
<!--                            </li>-->


                            <li class="nav-item dropdown order-first order-lg-last dropdown-hover">
                                <a class="nav-link dropdown-toggle px-lg-2 ml-lg-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img id="id-navbar-user-image" class="d-none d-lg-inline-block radius-3px mr-1 brc-grey-m2 border-1" src="../web/my_theme/assets/image/avatar/avatar6.jpg" height="42" alt="User's Photo">

                                    <span class="d-inline-block d-lg-none">Welcome, Admin</span><!-- show only on mobile -->

                                    <i class="caret fa fa-ellipsis-v d-none d-xl-block"></i>
                                    <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                                </a>

                                <div class="dropdown-menu dropdown-caret dropdown-menu-right brc-primary-m3">
                                    <div class="d-none d-lg-block">
                                        <div class="dropdown-header">
                                            Welcome, Admin
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>

                                    <a class="dropdown-item btn btn-outline-grey btn-h-light-blue btn-a-light-primblueary" href="html/page-profile.html">
                                        <i class="fa fa-user text-primary-m1 text-105 mr-1"></i>
                                        โปรไล์
                                    </a>

                                    <div class="dropdown-divider brc-secondary-l2"></div>

                                    <a class="dropdown-item btn btn-outline-grey btn-h-light-orange btn-a-light-orange" href="html/page-login.html">
                                        <i class="fa fa-power-off text-orange-d2 text-105 mr-1"></i>
                                        ออกจากระบบ
                                    </a>
                                </div>
                            </li><!-- /.nav-item:last -->

                        </ul><!-- /.navbar-nav menu -->
                    </div><!-- /.navbar-nav -->

                </div><!-- /.navbar-menu.navbar-collapse -->


            </div><!-- /.container -->
        </div><!-- /.navbar-inner -->
    </nav>
    <div id="sidebar" class="sidebar sidebar-fixed sidebar-hover sidebar-h sidebar-white sidebar-top" data-swipe="true" data-backdrop="true" data-dismiss="true">
        <div class="sidebar-inner border-r-0 border-b-1 brc-secondary-l2 shadow-md">
            <div class="container container-plus px-0 d-flex flex-column flex-xl-row">

                <div class="flex-grow-1 d-xl-flex flex-xl-row ace-scroll" data-ace-scroll="{}">
                    <!-- ace-scroll is not applied in desktop view, but it's used in mobile view -->
                    <div class="sidebar-section">
                        <div class="sidebar-section-item fadeable-below fadeable-center px-3">

                            <div class="fadeinable sidebar-shortcuts-mini w-auto" role="button">
                                <div>
                                    <div>
                                        <span class="btn btn-success p-0"></span><span class="btn btn-info p-0"></span>
                                    </div>
                                    <div class="mt-n2">
                                        <span class="btn btn-info p-0"></span><span class="btn btn-success p-0"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="fadeable flex-xl-column text-center">
                                <div class="sub-arrow"></div>
                                <div class="my-3">
                                    <button class="btn px-25 py-2 text-95 btn-outline-success border-b-2 radius-2">
                                        <i class="fa fa-signal"></i>
                                    </button>

                                    <button class="btn px-25 py-2 text-95 btn-outline-info border-b-2 radius-2">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <button class="btn px-25 py-2 text-95 btn-outline-success border-b-2 radius-2">
                                        <i class="fa fa-users"></i>
                                    </button>

                                    <button class="btn px-25 py-2 text-95 btn-outline-info border-b-2 radius-2">
                                        <i class="fa fa-cogs"></i>
                                    </button>
                                </div>

                                <div class="d-flex align-items-center ml-3 ml-xl-0 my-3">
                                    <i class="fa fa-search mr-n3 text-info-m1"></i>
                                    <input type="text" class="sidebar-search-input pl-4 pr-3 mr-n2" maxlength="60" placeholder="Search ..." aria-label="Search" />
                                    <a href="#"><i class="fa fa-microphone text-muted ml-n1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <ul class="nav nav-spaced nav-fill text-center nav-active-sm has-active-border active-on-top">


                        <li class="nav-item-caption">
                            <span class="fadeable pl-3">MAIN</span>
                            <span class="fadeinable mt-n2 text-125">&hellip;</span>
                            <!--
                                      OR something like the following (with `.hideable` text)
                                  -->
                            <!--
                                      <div class="hideable">
                                          <span class="pl-3">MAIN</span>
                                      </div>
                                      <span class="fadeinable mt-n2 text-125">&hellip;</span>
                                  -->
                        </li>


                        <li class="nav-item">

                            <a href="index.php?r=site/index" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <span class="nav-text fadeable">
                	  <span>หน้าหลัก</span>
                    </span>


                            </a>

                            <b class="sub-arrow"></b>

                        </li>


<!--                        <li class="nav-item active open">-->
<!---->
<!--                            <a href="#" class="nav-link dropdown-toggle">-->
<!--                                <i class="nav-icon fa fa-cube"></i>-->
<!--                                <span class="nav-text fadeable">-->
<!--                	  <span>Mega</span>-->
<!--                    </span>-->
<!---->
<!--                                <b class="caret fa fa-angle-left rt-n90"></b>-->
<!--                            </a>-->
<!--                            <div class="hideable submenu collapse show">-->
<!--                                <ul class="submenu-inner">-->
<!---->
<!--                                    <li class="nav-item">-->
<!---->
<!--                                        <a href="html/dashboard-2.html" class="nav-link">-->
<!---->
<!--                          <span class="nav-text">-->
<!--                				  <span>Dashboard 2</span>-->
<!--                          </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!---->
<!--                                        <a href="html/dashboard-3.html" class="nav-link">-->
<!---->
<!--                          <span class="nav-text">-->
<!--                				  <span>Dashboard 3</span>-->
<!--                          </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="html/dashboard-4.html" class="nav-link">-->
<!--                          <span class="nav-text">-->
<!--                				  <span>Dashboard 4</span>-->
<!--                          </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    -->
<!--                                    <li class="nav-item active">-->
<!---->
<!--                                        <a href="html/horizontal.html" class="nav-link">-->
<!---->
<!--                          <span class="nav-text">-->
<!--                				  <span>Horizontal Menu</span>-->
<!--                          </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="html/two-menus-1.html" class="nav-link">-->
<!--                          <span class="nav-text">-->
<!--                				  <span>Two Menus</span>-->
<!--                          </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="html/landing-page-1.html" class="nav-link">-->
<!--                          <span class="nav-text">-->
<!--                				  <span>Landing Page 1</span>-->
<!--                          </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="html/landing-page-2.html" class="nav-link">-->
<!--                          <span class="nav-text">-->
<!--                				  <span>Landing Page 2</span>-->
<!--                          </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="html/coming-soon.html" class="nav-link">-->
<!--                          <span class="nav-text">-->
<!--                				  <span>Coming Soon</span>-->
<!--                          </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                            <b class="sub-arrow"></b>-->
<!---->
<!--                        </li>-->


                        <li class="nav-item">

                            <a href="#" class="nav-link dropdown-toggle collapsed">
                                <i class="nav-icon fa fa-desktop"></i>
                                <span class="nav-text fadeable">
                                  <span>ข้อมูลพื้นฐาน</span>
                                </span>
                                <b class="caret fa fa-angle-left rt-n90"></b>
                                <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                <!--
                                     <b class="caret d-n-collapsed fa fa-minus text-80"></b>
                                     <b class="caret d-collapsed fa fa-plus text-80"></b>
                                 -->
                            </a>

                            <div class="hideable submenu collapse">
                                <ul class="submenu-inner">
                                    <li class="nav-item">
                                        <a href="index.php?r=areazone" class="nav-link">
                                          <span class="nav-text">
                                                  <span>กลุ่มพื้นที่</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=area" class="nav-link">
                                          <span class="nav-text">
                                                  <span>พื้นที่</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=inspectionteam" class="nav-link">
                                          <span class="nav-text">
                                                  <span>ทีมตรวจ</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=department" class="nav-link">
                                          <span class="nav-text">
                                                  <span>แผนก</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=person" class="nav-link">
                                          <span class="nav-text">
                                                  <span>ข้อมูลบุคคล</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=inspectiontopic" class="nav-link">
                                          <span class="nav-text">
                                                  <span>หัวข้อตรวจ</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=inspectiontopicitem" class="nav-link">
                                          <span class="nav-text">
                                                  <span>รายละเอียดการตรวจ</span>
                                          </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <b class="sub-arrow"></b>

                        </li>


                        <li class="nav-item">

                            <a href="#" class="nav-link dropdown-toggle collapsed">
                                <i class="nav-icon fa fa-table"></i>
                                <span class="nav-text fadeable">
                                  <span>จัดการทีม</span>
                                </span>
                                <b class="caret fa fa-angle-left rt-n90"></b>
                                <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                <!--
                                     <b class="caret d-n-collapsed fa fa-minus text-80"></b>
                                     <b class="caret d-collapsed fa fa-plus text-80"></b>
                                 -->
                            </a>

                            <div class="hideable submenu collapse">
                                <ul class="submenu-inner">
                                    <li class="nav-item">
                                        <a href="index.php?r=inspectionteam" class="nav-link">
                                          <span class="nav-text">
                                                  <span>ทีมตรวจ</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="html/table-datatables.html" class="nav-link">
                                          <span class="nav-text">
                                                  <span>DataTables</span>
                                          </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <b class="sub-arrow"></b>
                        </li>

                        <li class="nav-item">

                            <a href="#" class="nav-link dropdown-toggle collapsed">
                                <i class="nav-icon fa fa-table"></i>
                                <span class="nav-text fadeable">
                                  <span>แผนการตรวจ</span>
                                </span>
                                <b class="caret fa fa-angle-left rt-n90"></b>
                                <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                <!--
                                     <b class="caret d-n-collapsed fa fa-minus text-80"></b>
                                     <b class="caret d-collapsed fa fa-plus text-80"></b>
                                 -->
                            </a>

                            <div class="hideable submenu collapse">
                                <ul class="submenu-inner">
                                    <li class="nav-item">
                                        <a href="html/table-basic.html" class="nav-link">
                                          <span class="nav-text">
                                                  <span>5ส.</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="html/table-datatables.html" class="nav-link">
                                          <span class="nav-text">
                                                  <span>Safety</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="html/table-bootstrap.html" class="nav-link">
                                          <span class="nav-text">
                                                  <span>Kizen</span>
                                          </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <b class="sub-arrow"></b>
                        </li>
                        <li class="nav-item">
                            <a href="html/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <span class="nav-text fadeable">
                                  <span>รูปภาพ</span>
                                </span>
                            </a>
                            <b class="sub-arrow"></b>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=reports" class="nav-link">
                                <i class="nav-icon far fa-chart-bar"></i>
                                <span class="nav-text fadeable">
                                  <span>รายงาน</span>
                                </span>
                            </a>
                            <b class="sub-arrow"></b>
                        </li>


                        <li class="nav-item-caption">
                            <span class="fadeable pl-3">OTHER</span>
                            <span class="fadeinable mt-n2 text-125">&hellip;</span>
                            <!--
                                      OR something like the following (with `.hideable` text)
                                  -->
                            <!--
                                      <div class="hideable">
                                          <span class="pl-3">OTHER</span>
                                      </div>
                                      <span class="fadeinable mt-n2 text-125">&hellip;</span>
                                  -->
                        </li>



                    </ul>
                </div>

                <div class="sidebar-section d-none d-xl-flex ml-xl-auto pl-xl-4">
                    <!-- the logout and settings button, only shown in desktop view -->
                    <div class="sidebar-section-item fadeable-below fadeable-center ml-xl-1">
                        <div class="fadeinable w-auto">
                            <a href="#" title="Settings" class="btn btn-outline-warning btn-brc-tp radius-3px py-2" data-toggle="modal" data-target="#id-ace-settings-modal">
                                <i class="fa fa-cog text-140"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section d-xl-none ml-xl-auto">
                    <!-- sidebar footer, only show in mobile view -->
                    <div class="sidebar-section-item fadeable-left fadeable-top">
                        <div class="fadeinable">
                            <button type="button" class="btn btn-primary btn-bold radius-1">
                                <i class="fa fa-cloud"></i>
                            </button>
                        </div>

                        <div id="sidebar-footer" class="fadeable text-center border-t-1 brc-secondary-l3 w-95">
                            <div class="py-2">
                                <button type="button" class="btn btn-primary px-5 btn-bold radius-1">
                                    Upgrade
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .container -->
        </div><!-- .sidebar-inner -->
    </div>

    <div class="main-container">

        <div role="main" class="main-content">
            <div class="page-content container container-plus px-md-4 px-xl-5">
                <?= Alert::widget() ?>
               <?=$content?>
            </div>

            <footer class="footer">
                <div class="footer-inner">
                    <div class="h-100 pt-3 border-t-1 brc-secondary-l2 bgc-white-tp1 shadow-md">
                        <span class="text-primary-m1 font-bolder text-120">CIC</span>
                        <span class="text-secondary-d2">Support &copy; <?=date('Y')?></span>
                    </div>
                </div><!-- .footer-inner -->
            </footer>

            <div class="footer-tools">
                <a href="#" class="btn-scroll-up btn btn-green px-25 py-2 text-95 radius-1 mb-2 mr-2">
                    <i class="fa fa-angle-double-up w-2 h-2"></i>
                </a>
            </div>
        </div>

    </div>

</div>

<!-- include common vendor scripts used in demo pages -->
<script src="../web/my_theme/node_modules/jquery/dist/jquery.js"></script>
<script src="../web/my_theme/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../web/my_theme/node_modules/bootstrap/dist/js/bootstrap.js"></script>

<!-- include vendor scripts used in "Alerts" page. see "/views//pages/partials/alerts/@vendor-scripts.hbs" -->
<script src="../web/my_theme/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
<script src="../web/my_theme/node_modules/interactjs/dist/interact.js"></script>

<!-- include vendor scripts used in "Horizontal Menu" page. see "/views//pages/partials/horizontal/@vendor-scripts.hbs" -->
<script src="../web/my_theme/node_modules/chart.js/dist/Chart.js"></script>

<script src="../web/my_theme/node_modules/fullcalendar/main.js"></script>

<!-- include ace.js -->
<script src="../web/my_theme/dist/js/ace.js"></script>



<!-- demo.js is only for Ace's demo and you shouldn't use it -->
<script src="../web/my_theme/app/browser/demo.js"></script>


<!-- "Horizontal Menu" page script to enable its demo functionality -->
<script src="../web/my_theme/views/pages/horizontal/@page-script.js"></script>

<script>
    $('#id-toast-success2').on('click', function() {
        $.aceToaster.add({
            placement: 'rc',
            body: "<p class='p-3 mb-0 text-center text-white'>\
                        <span class='d-inline-block mb-3 border-2 bgc-white radius-round p-25'>\
                            <i class='fa fa-check fa-2x mx-1px text-success'></i>\
                        </span><br />\
                        <span class='text-125'>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</span>\
                    </p>\
                    <button data-dismiss='toast' class='close position-tr mt-1 mr-2 text-white'>&times;</button></div>\
                    ",

            width: 360,
            delay: 4000,

            close: false,

            className: 'bgc-success-d2 shadow ',

            bodyClass: 'border-0 p-0 text-dark-tp2',
            headerClass: 'd-none',

            progress: 'position-bl bgc-white-tp4 py-2px m-1px',
            progressReverse: true
        })
    })


    $('#id-toast-error').on('click', function() {
        $.aceToaster.add({
            placement: 'br',
            body: "<div class='p-3 m-2 d-flex'>\
                     <span class='align-self-center text-center mr-3 py-2 px-1 border-1 bgc-danger radius-round'>\
                        <i class='fa fa-times text-180 w-4 text-white mx-2px'></i>\
                     </span>\
                     <div>\
                        <h4 class='text-dark-tp3'>Something went wrong</h4>\
                        <span class='text-dark-tp3 text-110'>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</span>\
                     </div>\
                    </div>\
                    <button data-dismiss='toast' class='btn text-grey btn-h-light-danger position-tr mr-1 mt-1'><i class='fa fa-times'></i></button></div>",

            width: 480,
            delay: 5000,

            close: false,

            className: 'shadow border-none radius-0 border-l-4 brc-danger',

            bodyClass: 'border-0 p-0',
            headerClass: 'd-none'
        })
    })
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
