<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
//use yii\bootstrap4\Html;
//use yii\bootstrap4\Nav;
//use yii\bootstrap4\NavBar;

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
        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/bootstrap/dist/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/@fortawesome/fontawesome-free/css/regular.css">
        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/@fortawesome/fontawesome-free/css/brands.css">
        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/@fortawesome/fontawesome-free/css/solid.css">



        <!-- include vendor stylesheets used in "Horizontal Menu" page. see "/views//pages/partials/horizontal/@vendor-stylesheets.hbs" -->
        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/fullcalendar/main.css">

        <!-- include vendor stylesheets used in "More Elements" page. see "/views//pages/partials/form-more/@vendor-stylesheets.hbs" -->

        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/bootstrap-select/dist/css/bootstrap-select.css">

        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/bootstrap-duallistbox/dist/bootstrap-duallistbox.css">


        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/select2/dist/css/select2.css">
        <link rel="stylesheet" type="text/css" href="../my_theme/node_modules/chosen-js/chosen.css">

        <!-- include fonts -->
        <link rel="stylesheet" type="text/css" href="../my_theme/dist/css/ace-font.css">



        <!-- ace.css -->
        <link rel="stylesheet" type="text/css" href="../my_theme/dist/css/ace.css">


        <!-- favicon -->
        <link rel="icon" type="image/png" href="../my_theme/assets/favicon.png" />

        <!-- "Horizontal Menu" page styles, specific to this page for demo only -->
        <link rel="stylesheet" type="text/css" href="../my_theme/views/pages/horizontal/@page-style.css">
        <link rel="stylesheet" type="text/css" href="../my_theme/dist/css/ace-themes.css">

        <style>
            @font-face {
                font-family: 'SukhumvitSet-Medium';
                src: url('../my_theme/dist/font/SukhumvitSet-Medium.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }

            @font-face {
                font-family: 'SukhumvitSet-Bold';
                src: url('../my_theme/dist/font/SukhumvitSet-Bold.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }

            body {
                font-family: "SukhumvitSet-Medium";
                font-size: 16px;
            }
            /*!
 * Bootstrap-select v1.13.18 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2020 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */

            @-webkit-keyframes bs-notify-fadeOut {
                0% {
                    opacity: 0.9;
                }
                100% {
                    opacity: 0;
                }
            }
            @-o-keyframes bs-notify-fadeOut {
                0% {
                    opacity: 0.9;
                }
                100% {
                    opacity: 0;
                }
            }
            @keyframes bs-notify-fadeOut {
                0% {
                    opacity: 0.9;
                }
                100% {
                    opacity: 0;
                }
            }
            select.bs-select-hidden,
            .bootstrap-select > select.bs-select-hidden,
            select.selectpicker {
                display: none !important;
            }
            .bootstrap-select {
                width: 220px \0;
                /*IE9 and below*/
                vertical-align: middle;
            }
            .bootstrap-select > .dropdown-toggle {
                position: relative;
                width: 100%;
                text-align: right;
                white-space: nowrap;
                display: -webkit-inline-box;
                display: -webkit-inline-flex;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
            .bootstrap-select > .dropdown-toggle:after {
                margin-top: -1px;
            }
            .bootstrap-select > .dropdown-toggle.bs-placeholder,
            .bootstrap-select > .dropdown-toggle.bs-placeholder:hover,
            .bootstrap-select > .dropdown-toggle.bs-placeholder:focus,
            .bootstrap-select > .dropdown-toggle.bs-placeholder:active {
                color: #999;
            }
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:hover,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:hover,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:hover,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:hover,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:hover,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:hover,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:focus,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:focus,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:focus,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:focus,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:focus,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:focus,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:active,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:active,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:active,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:active,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:active,
            .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:active {
                color: rgba(255, 255, 255, 0.5);
            }
            .bootstrap-select > select {
                position: absolute !important;
                bottom: 0;
                left: 50%;
                display: block !important;
                width: 0.5px !important;
                height: 100% !important;
                padding: 0 !important;
                opacity: 0 !important;
                border: none;
                z-index: 0 !important;
            }
            .bootstrap-select > select.mobile-device {
                top: 0;
                left: 0;
                display: block !important;
                width: 100% !important;
                z-index: 2 !important;
            }
            .has-error .bootstrap-select .dropdown-toggle,
            .error .bootstrap-select .dropdown-toggle,
            .bootstrap-select.is-invalid .dropdown-toggle,
            .was-validated .bootstrap-select select:invalid + .dropdown-toggle {
                border-color: #b94a48;
            }
            .bootstrap-select.is-valid .dropdown-toggle,
            .was-validated .bootstrap-select select:valid + .dropdown-toggle {
                border-color: #28a745;
            }
            .bootstrap-select.fit-width {
                width: auto !important;
            }
            .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
                width: 220px;
            }
            .bootstrap-select > select.mobile-device:focus + .dropdown-toggle,
            .bootstrap-select .dropdown-toggle:focus {
                outline: thin dotted #333333 !important;
                outline: 5px auto -webkit-focus-ring-color !important;
                outline-offset: -2px;
            }
            .bootstrap-select.form-control {
                margin-bottom: 0;
                padding: 0;
                border: none;
                height: auto;
            }
            :not(.input-group) > .bootstrap-select.form-control:not([class*="col-"]) {
                width: 100%;
            }
            .bootstrap-select.form-control.input-group-btn {
                float: none;
                z-index: auto;
            }
            .form-inline .bootstrap-select,
            .form-inline .bootstrap-select.form-control:not([class*="col-"]) {
                width: auto;
            }
            .bootstrap-select:not(.input-group-btn),
            .bootstrap-select[class*="col-"] {
                float: none;
                display: inline-block;
                margin-left: 0;
            }
            .bootstrap-select.dropdown-menu-right,
            .bootstrap-select[class*="col-"].dropdown-menu-right,
            .row .bootstrap-select[class*="col-"].dropdown-menu-right {
                float: right;
            }
            .form-inline .bootstrap-select,
            .form-horizontal .bootstrap-select,
            .form-group .bootstrap-select {
                margin-bottom: 0;
            }
            .form-group-lg .bootstrap-select.form-control,
            .form-group-sm .bootstrap-select.form-control {
                padding: 0;
            }
            .form-group-lg .bootstrap-select.form-control .dropdown-toggle,
            .form-group-sm .bootstrap-select.form-control .dropdown-toggle {
                height: 100%;
                font-size: inherit;
                line-height: inherit;
                border-radius: inherit;
            }
            .bootstrap-select.form-control-sm .dropdown-toggle,
            .bootstrap-select.form-control-lg .dropdown-toggle {
                font-size: inherit;
                line-height: inherit;
                border-radius: inherit;
            }
            .bootstrap-select.form-control-sm .dropdown-toggle {
                padding: 0.25rem 0.5rem;
            }
            .bootstrap-select.form-control-lg .dropdown-toggle {
                padding: 0.5rem 1rem;
            }
            .form-inline .bootstrap-select .form-control {
                width: 100%;
            }
            .bootstrap-select.disabled,
            .bootstrap-select > .disabled {
                cursor: not-allowed;
            }
            .bootstrap-select.disabled:focus,
            .bootstrap-select > .disabled:focus {
                outline: none !important;
            }
            .bootstrap-select.bs-container {
                position: absolute;
                top: 0;
                left: 0;
                height: 0 !important;
                padding: 0 !important;
            }
            .bootstrap-select.bs-container .dropdown-menu {
                z-index: 1060;
            }
            .bootstrap-select .dropdown-toggle .filter-option {
                position: static;
                top: 0;
                left: 0;
                float: left;
                height: 100%;
                width: 100%;
                text-align: left;
                overflow: hidden;
                -webkit-box-flex: 0;
                -webkit-flex: 0 1 auto;
                -ms-flex: 0 1 auto;
                flex: 0 1 auto;
            }
            .bs3.bootstrap-select .dropdown-toggle .filter-option {
                padding-right: inherit;
            }
            .input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option {
                position: absolute;
                padding-top: inherit;
                padding-bottom: inherit;
                padding-left: inherit;
                float: none;
            }
            .input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option .filter-option-inner {
                padding-right: inherit;
            }
            .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
                overflow: hidden;
            }
            .bootstrap-select .dropdown-toggle .filter-expand {
                width: 0 !important;
                float: left;
                opacity: 0 !important;
                overflow: hidden;
            }
            .bootstrap-select .dropdown-toggle .caret {
                position: absolute;
                top: 50%;
                right: 12px;
                margin-top: -2px;
                vertical-align: middle;
            }
            .input-group .bootstrap-select.form-control .dropdown-toggle {
                border-radius: inherit;
            }
            .bootstrap-select[class*="col-"] .dropdown-toggle {
                width: 100%;
            }
            .bootstrap-select .dropdown-menu {
                min-width: 100%;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .bootstrap-select .dropdown-menu > .inner:focus {
                outline: none !important;
            }
            .bootstrap-select .dropdown-menu.inner {
                position: static;
                float: none;
                border: 0;
                padding: 0;
                margin: 0;
                border-radius: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .bootstrap-select .dropdown-menu li {
                position: relative;
            }
            .bootstrap-select .dropdown-menu li.active small {
                color: rgba(255, 255, 255, 0.5) !important;
            }
            .bootstrap-select .dropdown-menu li.disabled a {
                cursor: not-allowed;
            }
            .bootstrap-select .dropdown-menu li a {
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            .bootstrap-select .dropdown-menu li a.opt {
                position: relative;
                padding-left: 2.25em;
            }
            .bootstrap-select .dropdown-menu li a span.check-mark {
                display: none;
            }
            .bootstrap-select .dropdown-menu li a span.text {
                display: inline-block;
            }
            .bootstrap-select .dropdown-menu li small {
                padding-left: 0.5em;
            }
            .bootstrap-select .dropdown-menu .notify {
                position: absolute;
                bottom: 5px;
                width: 96%;
                margin: 0 2%;
                min-height: 26px;
                padding: 3px 5px;
                background: #f5f5f5;
                border: 1px solid #e3e3e3;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
                pointer-events: none;
                opacity: 0.9;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .bootstrap-select .dropdown-menu .notify.fadeOut {
                -webkit-animation: 300ms linear 750ms forwards bs-notify-fadeOut;
                -o-animation: 300ms linear 750ms forwards bs-notify-fadeOut;
                animation: 300ms linear 750ms forwards bs-notify-fadeOut;
            }
            .bootstrap-select .no-results {
                padding: 3px;
                background: #f5f5f5;
                margin: 0 5px;
                white-space: nowrap;
            }
            .bootstrap-select.fit-width .dropdown-toggle .filter-option {
                position: static;
                display: inline;
                padding: 0;
            }
            .bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,
            .bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner {
                display: inline;
            }
            .bootstrap-select.fit-width .dropdown-toggle .bs-caret:before {
                content: '\00a0';
            }
            .bootstrap-select.fit-width .dropdown-toggle .caret {
                position: static;
                top: auto;
                margin-top: -1px;
            }
            .bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
                position: absolute;
                display: inline-block;
                right: 15px;
                top: 5px;
            }
            .bootstrap-select.show-tick .dropdown-menu li a span.text {
                margin-right: 34px;
            }
            .bootstrap-select .bs-ok-default:after {
                content: '';
                display: block;
                width: 0.5em;
                height: 1em;
                border-style: solid;
                border-width: 0 0.26em 0.26em 0;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg);
            }
            .bootstrap-select.show-menu-arrow.open > .dropdown-toggle,
            .bootstrap-select.show-menu-arrow.show > .dropdown-toggle {
                z-index: 1061;
            }
            .bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:before {
                content: '';
                border-left: 7px solid transparent;
                border-right: 7px solid transparent;
                border-bottom: 7px solid rgba(204, 204, 204, 0.2);
                position: absolute;
                bottom: -4px;
                left: 9px;
                display: none;
            }
            .bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:after {
                content: '';
                border-left: 6px solid transparent;
                border-right: 6px solid transparent;
                border-bottom: 6px solid white;
                position: absolute;
                bottom: -4px;
                left: 10px;
                display: none;
            }
            .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:before {
                bottom: auto;
                top: -4px;
                border-top: 7px solid rgba(204, 204, 204, 0.2);
                border-bottom: 0;
            }
            .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:after {
                bottom: auto;
                top: -4px;
                border-top: 6px solid white;
                border-bottom: 0;
            }
            .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:before {
                right: 12px;
                left: auto;
            }
            .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:after {
                right: 13px;
                left: auto;
            }
            .bootstrap-select.show-menu-arrow.open > .dropdown-toggle .filter-option:before,
            .bootstrap-select.show-menu-arrow.show > .dropdown-toggle .filter-option:before,
            .bootstrap-select.show-menu-arrow.open > .dropdown-toggle .filter-option:after,
            .bootstrap-select.show-menu-arrow.show > .dropdown-toggle .filter-option:after {
                display: block;
            }
            .bs-searchbox,
            .bs-actionsbox,
            .bs-donebutton {
                padding: 4px 8px;
            }
            .bs-actionsbox {
                width: 100%;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .bs-actionsbox .btn-group button {
                width: 50%;
            }
            .bs-donebutton {
                float: left;
                width: 100%;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .bs-donebutton .btn-group button {
                width: 100%;
            }
            .bs-searchbox + .bs-actionsbox {
                padding: 0 8px 4px;
            }
            .bs-searchbox .form-control {
                margin-bottom: 0;
                width: 100%;
                float: none;
            }
            /*# sourceMappingURL=bootstrap-select.css.map */

        </style>

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
                  <img class="radius-3px mr-1 brc-grey-m2 border-1" width="36" src="assets/image/avatar/my_pic.jpeg" alt="User's Photo">
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

<!--                                        <div class="tab-pane mh-none show active px-md-1 pt-1" id="navbar-notif-tab-1" role="tabpanel">-->
<!---->
<!--                                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                <i class="fab fa-twitter bgc-blue-tp1 text-white text-110 mr-15 p-2 radius-1"></i>-->
<!--                                                <span class="text-muted">Followers</span>-->
<!--                                                <span class="float-right badge badge-danger radius-round text-80">- 4</span>-->
<!--                                            </a>-->
<!--                                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                <i class="fa fa-comment bgc-pink-tp1 text-white text-110 mr-15 p-2 radius-1"></i>-->
<!--                                                <span class="text-muted">New Comments</span>-->
<!--                                                <span class="float-right badge badge-info radius-round text-80">+12</span>-->
<!--                                            </a>-->
<!--                                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                <i class="fa fa-shopping-cart bgc-success-tp1 text-white text-110 mr-15 p-2 radius-1"></i>-->
<!--                                                <span class="text-muted">New Orders</span>-->
<!--                                                <span class="float-right badge badge-success radius-round text-80">+8</span>-->
<!--                                            </a>-->
<!--                                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                <i class="far fa-clock bgc-purple-tp1 text-white text-110 mr-15 p-2 radius-1"></i>-->
<!--                                                <span class="text-muted">Finished processing data!</span>-->
<!--                                            </a>-->
<!---->
<!--                                            <hr class="mt-1 mb-1px brc-secondary-l2" />-->
<!--                                            <a href="#" class="mb-0 py-3 border-0 list-group-item text-blue text-uppercase text-center text-85 font-bolder">-->
<!--                                                See All Notifications-->
<!--                                                <i class="ml-2 fa fa-arrow-right text-muted"></i>-->
<!--                                            </a>-->
<!---->
<!--                                        </div><!-- .tab-pane : notifications -->-->


<!--                                        <div class="tab-pane mh-none pl-md-2" id="navbar-notif-tab-2" role="tabpanel">-->
<!--                                            <div data-ace-scroll='{"ignore": "mobile", "height": 300, "smooth":true}'>-->
<!--                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                    <img alt="Alex's avatar" src="assets/image/avatar/avatar.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />-->
<!--                                                    <div>-->
<!--                                                        <span class="text-primary-m1 font-bolder">Alex:</span>-->
<!--                                                        <span class="text-grey text-90">Ciao sociis natoque penatibus et auctor ...</span>-->
<!--                                                        <br />-->
<!--                                                        <span class="text-grey-m1 text-85">-->
<!--                                                  <i class="far fa-clock"></i>-->
<!--                                                  a moment ago-->
<!--                                              </span>-->
<!--                                                    </div>-->
<!--                                                </a>-->
<!--                                                <hr class="my-1px brc-grey-l3" />-->
<!--                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                    <img alt="Susan's avatar" src="assets/image/avatar/avatar3.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />-->
<!--                                                    <div>-->
<!--                                                        <span class="text-primary-m1 font-bolder">Susan:</span>-->
<!--                                                        <span class="text-grey text-90">Vestibulum id ligula porta felis euismod ...</span>-->
<!--                                                        <br />-->
<!--                                                        <span class="text-grey-m1 text-85">-->
<!--                                                  <i class="far fa-clock"></i>-->
<!--                                                  20 minutes ago-->
<!--                                              </span>-->
<!--                                                    </div>-->
<!--                                                </a>-->
<!--                                                <hr class="my-1px brc-grey-l3" />-->
<!--                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                    <img alt="Bob's avatar" src="assets/image/avatar/avatar4.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />-->
<!--                                                    <div>-->
<!--                                                        <span class="text-primary-m1 font-bolder">Bob:</span>-->
<!--                                                        <span class="text-grey text-90">Nullam quis risus eget urna mollis ornare ...</span>-->
<!--                                                        <br />-->
<!--                                                        <span class="text-grey-m1 text-85">-->
<!--                                                  <i class="far fa-clock"></i>-->
<!--                                                  3:15 pm-->
<!--                                              </span>-->
<!--                                                    </div>-->
<!--                                                </a>-->
<!--                                                <hr class="my-1px brc-grey-l3" />-->
<!--                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                    <img alt="Kate's avatar" src="assets/image/avatar/avatar2.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />-->
<!--                                                    <div>-->
<!--                                                        <span class="text-primary-m1 font-bolder">Kate:</span>-->
<!--                                                        <span class="text-grey text-90">Ciao sociis natoque eget urna mollis ornare ...</span>-->
<!--                                                        <br />-->
<!--                                                        <span class="text-grey-m1 text-85">-->
<!--                                                  <i class="far fa-clock"></i>-->
<!--                                                  1:33 pm-->
<!--                                              </span>-->
<!--                                                    </div>-->
<!--                                                </a>-->
<!--                                                <hr class="my-1px brc-grey-l3" />-->
<!--                                                <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">-->
<!--                                                    <img alt="Fred's avatar" src="assets/image/avatar/avatar5.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />-->
<!--                                                    <div>-->
<!--                                                        <span class="text-primary-m1 font-bolder">Fred:</span>-->
<!--                                                        <span class="text-grey text-90">Vestibulum id penatibus et auctor  ...</span>-->
<!--                                                        <br />-->
<!--                                                        <span class="text-grey-m1 text-85">-->
<!--                                                  <i class="far fa-clock"></i>-->
<!--                                                  10:09 am-->
<!--                                              </span>-->
<!--                                                    </div>-->
<!--                                                </a>-->
<!---->
<!--                                            </div><!-- ace-scroll -->-->
<!---->
<!--                                            <hr class="my-1px brc-secondary-l2 border-double" />-->
<!--                                            <a href="html/page-inbox.html" class="mb-0 py-3 border-0 list-group-item text-purple text-uppercase text-center text-85 font-bolder">-->
<!--                                                See All Messages-->
<!--                                                <i class="ml-2 fa fa-arrow-right text-muted"></i>-->
<!--                                            </a>-->
<!--                                        </div><!-- .tab-pane : messages -->-->

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
                                    <img id="id-navbar-user-image" class="d-none d-lg-inline-block radius-3px mr-1 brc-grey-m2 border-1" src="../my_theme/assets/image/avatar/avatar2.jpg" height="42" alt="User's Photo">

                                    <span class="d-inline-block d-lg-none">Welcome, Admin</span>
                                    <!-- show only on mobile -->

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
                                                  <span>โซนพื้นที่</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=areagroup" class="nav-link">
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
                                        <a href="index.php?r=areadef" class="nav-link">
                                          <span class="nav-text">
                                                  <span>พื้นที่ตรวจ</span>
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
                                        <a href="index.php?r=plan" class="nav-link">
                                          <span class="nav-text">
                                                  <span>5ส.</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=plan" class="nav-link">
                                          <span class="nav-text">
                                                  <span>Safety</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=plan" class="nav-link">
                                          <span class="nav-text">
                                                  <span>Kizen</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=plan" class="nav-link">
                                          <span class="nav-text">
                                                  <span>Big cleaning</span>
                                          </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <b class="sub-arrow"></b>
                        </li>
                        <li class="nav-item">

                            <a href="#" class="nav-link dropdown-toggle collapsed">
                                <i class="nav-icon fa fa-ban"></i>
                                <span class="nav-text fadeable">
                                  <span>CAR</span>
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
                                        <a href="index.php?r=car" class="nav-link">
                                          <span class="nav-text">
                                                  <span>CAR 5ส.</span>
                                          </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?r=car" class="nav-link">
                                          <span class="nav-text">
                                                  <span>CAR Safety</span>
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
<script src="../my_theme/node_modules/jquery/dist/jquery.js"></script>
<script src="../my_theme/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../my_theme/node_modules/bootstrap/dist/js/bootstrap.js"></script>

<!-- include vendor scripts used in "Alerts" page. see "/views//pages/partials/alerts/@vendor-scripts.hbs" -->
<script src="../my_theme/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
<script src="../my_theme/node_modules/interactjs/dist/interact.js"></script>

<!-- include vendor scripts used in "Horizontal Menu" page. see "/views//pages/partials/horizontal/@vendor-scripts.hbs" -->
<script src="../my_theme/node_modules/chart.js/dist/Chart.js"></script>

<script src="../my_theme/node_modules/fullcalendar/main.js"></script>


<!-- include vendor scripts used in "More Elements" page. see "/views//pages/partials/form-more/@vendor-scripts.hbs" -->

<script src="../my_theme/node_modules/typeahead.js/dist/typeahead.bundle.js"></script>
<script src="../my_theme/node_modules/bootstrap-select/dist/js/bootstrap-select.js"></script>


<script src="../my_theme/node_modules/select2/dist/js/select2.js"></script>
<script src="../my_theme/node_modules/chosen-js/chosen.jquery.js"></script>


<script src="../my_theme/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

<!-- include ace.js -->
<script src="../my_theme/dist/js/ace.js"></script>



<!-- demo.js is only for Ace's demo and you shouldn't use it -->
<!--<script src="../web/my_theme/app/browser/demo.js"></script>-->


<!-- "Horizontal Menu" page script to enable its demo functionality -->
<script src="../my_theme/views/pages/horizontal/@page-script.js"></script>
<!--<script src="../my_theme/views/pages/form-more/@page-script.js"></script>-->

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
    });


</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
