@extends('layouts.app')
@section('content')


    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html " target="_blank">
    <img src="../../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold">Argon Dashboard 2 PRO</span>
    </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link active" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
    <i class="ni ni-shop text-primary text-sm opacity-10"></i>
    </div>
    <span class="nav-link-text ms-1">Dashboards</span>
    </a>
    <div class="collapse  show " id="dashboardsExamples">
    <ul class="nav ms-4">
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/dashboards/landing.html">
    <span class="sidenav-mini-icon"> L </span>
    <span class="sidenav-normal"> Landing </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/dashboards/default.html">
    <span class="sidenav-mini-icon"> D </span>
    <span class="sidenav-normal"> Default </span>
    </a>
    </li>
    <li class="nav-item ">
     <a class="nav-link " href="../../pages/dashboards/automotive.html">
    <span class="sidenav-mini-icon"> A </span>
    <span class="sidenav-normal"> Automotive </span>
    </a>
    </li>
    <li class="nav-item active">
    <a class="nav-link active" href="../../pages/dashboards/smart-home.html">
    <span class="sidenav-mini-icon"> S </span>
    <span class="sidenav-normal"> Smart Home </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
    <span class="sidenav-mini-icon"> V </span>
    <span class="sidenav-normal"> Virtual Reality <b class="caret"></b></span>
    </a>
    <div class="collapse " id="vrExamples">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/dashboards/vr/vr-default.html">
    <span class="sidenav-mini-icon text-xs"> V </span>
    <span class="sidenav-normal"> VR Default </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/dashboards/vr/vr-info.html">
    <span class="sidenav-mini-icon text-xs"> V </span>
    <span class="sidenav-normal"> VR Info </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/dashboards/crm.html">
    <span class="sidenav-mini-icon"> C </span>
    <span class="sidenav-normal"> CRM </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item mt-3">
    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">PAGES</h6>
    </li>
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link " aria-controls="pagesExamples" role="button" aria-expanded="false">
    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
    <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
    </div>
    <span class="nav-link-text ms-1">Pages</span>
    </a>
    <div class="collapse " id="pagesExamples">
    <ul class="nav ms-4">
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal"> Profile <b class="caret"></b></span>
    </a>
    <div class="collapse " id="profileExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/profile/overview.html">
    <span class="sidenav-mini-icon text-xs"> P </span>
    <span class="sidenav-normal"> Profile Overview </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/profile/teams.html">
    <span class="sidenav-mini-icon text-xs"> T </span>
    <span class="sidenav-normal"> Teams </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/profile/projects.html">
    <span class="sidenav-mini-icon text-xs"> A </span>
    <span class="sidenav-normal"> All Projects </span>
     </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
    <span class="sidenav-mini-icon"> U </span>
    <span class="sidenav-normal"> Users <b class="caret"></b></span>
    </a>
    <div class="collapse " id="usersExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/users/reports.html">
    <span class="sidenav-mini-icon text-xs"> R </span>
    <span class="sidenav-normal"> Reports </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/users/new-user.html">
    <span class="sidenav-mini-icon text-xs"> N </span>
    <span class="sidenav-normal"> New User </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
    <span class="sidenav-mini-icon"> A </span>
    <span class="sidenav-normal"> Account <b class="caret"></b></span>
    </a>
    <div class="collapse " id="accountExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/account/settings.html">
    <span class="sidenav-mini-icon text-xs"> S </span>
    <span class="sidenav-normal"> Settings </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/account/billing.html">
    <span class="sidenav-mini-icon text-xs"> B </span>
    <span class="sidenav-normal"> Billing </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/account/invoice.html">
    <span class="sidenav-mini-icon text-xs"> I </span>
    <span class="sidenav-normal"> Invoice </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/account/security.html">
    <span class="sidenav-mini-icon text-xs"> S </span>
    <span class="sidenav-normal"> Security </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal"> Projects <b class="caret"></b></span>
    </a>
    <div class="collapse " id="projectsExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/projects/general.html">
    <span class="sidenav-mini-icon text-xs"> G </span>
    <span class="sidenav-normal"> General </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/projects/timeline.html">
    <span class="sidenav-mini-icon text-xs"> T </span>
    <span class="sidenav-normal"> Timeline </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/pages/projects/new-project.html">
    <span class="sidenav-mini-icon text-xs"> N </span>
    <span class="sidenav-normal"> New Project </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/pages/pricing-page.html">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal"> Pricing Page </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/pages/rtl-page.html">
    <span class="sidenav-mini-icon"> R </span>
    <span class="sidenav-normal"> RTL </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/pages/widgets.html">
    <span class="sidenav-mini-icon"> W </span>
    <span class="sidenav-normal"> Widgets </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/pages/charts.html">
    <span class="sidenav-mini-icon"> C </span>
    <span class="sidenav-normal"> Charts </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/pages/sweet-alerts.html">
    <span class="sidenav-mini-icon"> S </span>
    <span class="sidenav-normal"> Sweet Alerts </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/pages/notifications.html">
    <span class="sidenav-mini-icon"> N </span>
    <span class="sidenav-normal"> Notifications </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/pages/chat.html">
    <span class="sidenav-mini-icon"> C </span>
    <span class="sidenav-normal"> Chat </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link " aria-controls="applicationsExamples" role="button" aria-expanded="false">
    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
    <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
    </div>
    <span class="nav-link-text ms-1">Applications</span>
    </a>
    <div class="collapse " id="applicationsExamples">
    <ul class="nav ms-4">
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/applications/kanban.html">
    <span class="sidenav-mini-icon"> K </span>
    <span class="sidenav-normal"> Kanban </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/applications/wizard.html">
    <span class="sidenav-mini-icon"> W </span>
    <span class="sidenav-normal"> Wizard </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/applications/datatables.html">
    <span class="sidenav-mini-icon"> D </span>
    <span class="sidenav-normal"> DataTables </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/applications/calendar.html">
    <span class="sidenav-mini-icon"> C </span>
    <span class="sidenav-normal"> Calendar </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/applications/analytics.html">
    <span class="sidenav-mini-icon"> A </span>
    <span class="sidenav-normal"> Analytics </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
    <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
    </div>
    <span class="nav-link-text ms-1">Ecommerce</span>
    </a>
    <div class="collapse " id="ecommerceExamples">
    <ul class="nav ms-4">
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/ecommerce/overview.html">
    <span class="sidenav-mini-icon"> O </span>
    <span class="sidenav-normal"> Overview </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal"> Products <b class="caret"></b></span>
    </a>
    <div class="collapse " id="productsExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/ecommerce/products/new-product.html">
    <span class="sidenav-mini-icon text-xs"> N </span>
    <span class="sidenav-normal"> New Product </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/ecommerce/products/edit-product.html">
    <span class="sidenav-mini-icon text-xs"> E </span>
    <span class="sidenav-normal"> Edit Product </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/ecommerce/products/product-page.html">
    <span class="sidenav-mini-icon text-xs"> P </span>
    <span class="sidenav-normal"> Product Page </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/ecommerce/products/products-list.html">
    <span class="sidenav-mini-icon text-xs"> P </span>
    <span class="sidenav-normal"> Products List </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
    <span class="sidenav-mini-icon"> O </span>
    <span class="sidenav-normal"> Orders <b class="caret"></b></span>
    </a>
    <div class="collapse " id="ordersExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/ecommerce/orders/list.html">
    <span class="sidenav-mini-icon text-xs"> O </span>
    <span class="sidenav-normal"> Order List </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/ecommerce/orders/details.html">
     <span class="sidenav-mini-icon text-xs"> O </span>
    <span class="sidenav-normal"> Order Details </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="../../pages/ecommerce/referral.html">
    <span class="sidenav-mini-icon"> R </span>
    <span class="sidenav-normal"> Referral </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#authExamples" class="nav-link " aria-controls="authExamples" role="button" aria-expanded="false">
    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
    <i class="ni ni-single-copy-04 text-danger text-sm opacity-10"></i>
    </div>
    <span class="nav-link-text ms-1">Authentication</span>
    </a>
    <div class="collapse " id="authExamples">
    <ul class="nav ms-4">
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
    <span class="sidenav-mini-icon"> S </span>
    <span class="sidenav-normal"> Sign In <b class="caret"></b></span>
    </a>
    <div class="collapse " id="signinExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/signin/basic.html">
    <span class="sidenav-mini-icon text-xs"> B </span>
    <span class="sidenav-normal"> Basic </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/signin/cover.html">
    <span class="sidenav-mini-icon text-xs"> C </span>
    <span class="sidenav-normal"> Cover </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/signin/illustration.html">
    <span class="sidenav-mini-icon text-xs"> I </span>
    <span class="sidenav-normal"> Illustration </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#signupExample">
    <span class="sidenav-mini-icon"> S </span>
    <span class="sidenav-normal"> Sign Up <b class="caret"></b></span>
    </a>
    <div class="collapse " id="signupExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/signup/basic.html">
    <span class="sidenav-mini-icon text-xs"> B </span>
    <span class="sidenav-normal"> Basic </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/signup/cover.html">
    <span class="sidenav-mini-icon text-xs"> C </span>
    <span class="sidenav-normal"> Cover </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/signup/illustration.html">
    <span class="sidenav-mini-icon text-xs"> I </span>
    <span class="sidenav-normal"> Illustration </span>
    </a>
    </li>
     </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#resetExample">
    <span class="sidenav-mini-icon"> R </span>
    <span class="sidenav-normal"> Reset Password <b class="caret"></b></span>
    </a>
    <div class="collapse " id="resetExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/reset/basic.html">
    <span class="sidenav-mini-icon text-xs"> B </span>
    <span class="sidenav-normal"> Basic </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/reset/cover.html">
    <span class="sidenav-mini-icon text-xs"> C </span>
    <span class="sidenav-normal"> Cover </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/reset/illustration.html">
    <span class="sidenav-mini-icon text-xs"> I </span>
    <span class="sidenav-normal"> Illustration </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
    <span class="sidenav-mini-icon"> L </span>
    <span class="sidenav-normal"> Lock <b class="caret"></b></span>
    </a>
    <div class="collapse " id="lockExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/lock/basic.html">
    <span class="sidenav-mini-icon text-xs"> B </span>
    <span class="sidenav-normal"> Basic </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/lock/cover.html">
    <span class="sidenav-mini-icon text-xs"> C </span>
    <span class="sidenav-normal"> Cover </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/lock/illustration.html">
    <span class="sidenav-mini-icon text-xs"> I </span>
    <span class="sidenav-normal"> Illustration </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
    <span class="sidenav-mini-icon"> 2 </span>
    <span class="sidenav-normal"> 2-Step Verification <b class="caret"></b></span>
    </a>
    <div class="collapse " id="StepExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/verification/basic.html">
    <span class="sidenav-mini-icon text-xs"> B </span>
    <span class="sidenav-normal"> Basic </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/verification/cover.html">
    <span class="sidenav-mini-icon text-xs"> C </span>
    <span class="sidenav-normal"> Cover </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/verification/illustration.html">
    <span class="sidenav-mini-icon text-xs"> I </span>
    <span class="sidenav-normal"> Illustration </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#errorExample">
    <span class="sidenav-mini-icon"> E </span>
    <span class="sidenav-normal"> Error <b class="caret"></b></span>
    </a>
    <div class="collapse " id="errorExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/error/404.html">
    <span class="sidenav-mini-icon text-xs"> E </span>
    <span class="sidenav-normal"> Error 404 </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../../pages/authentication/error/500.html">
    <span class="sidenav-mini-icon text-xs"> E </span>
    <span class="sidenav-normal"> Error 500 </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <hr class="horizontal dark" />
    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">DOCS</h6>
    </li>
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#basicExamples" class="nav-link " aria-controls="basicExamples" role="button" aria-expanded="false">
    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
    <i class="ni ni-spaceship text-dark text-sm"></i>
    </div>
    <span class="nav-link-text ms-1">Basic</span>
    </a>
    <div class="collapse " id="basicExamples">
    <ul class="nav ms-4">
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#gettingStartedExample">
    <span class="sidenav-mini-icon"> G </span>
    <span class="sidenav-normal"> Getting Started <b class="caret"></b></span>
    </a>
    <div class="collapse " id="gettingStartedExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/quick-start/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon text-xs"> Q </span>
    <span class="sidenav-normal"> Quick Start </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon text-xs"> L </span>
    <span class="sidenav-normal"> License </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon text-xs"> C </span>
    <span class="sidenav-normal"> Contents </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/build-tools/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon text-xs"> B </span>
    <span class="sidenav-normal"> Build Tools </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item ">
    <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#foundationExample">
    <span class="sidenav-mini-icon"> F </span>
    <span class="sidenav-normal"> Foundation <b class="caret"></b></span>
    </a>
    <div class="collapse " id="foundationExample">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/colors/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon text-xs"> C </span>
    <span class="sidenav-normal"> Colors </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/grid/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon text-xs"> G </span>
    <span class="sidenav-normal"> Grid </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/typography/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon text-xs"> T </span>
    <span class="sidenav-normal"> Typography </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/icons/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon text-xs"> I </span>
    <span class="sidenav-normal"> Icons </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link " aria-controls="componentsExamples" role="button" aria-expanded="false">
    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
    <i class="ni ni-app text-dark text-sm"></i>
    </div>
    <span class="nav-link-text ms-1">Components</span>
    </a>
    <div class="collapse " id="componentsExamples">
    <ul class="nav ms-4">
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> A </span>
    <span class="sidenav-normal"> Alerts </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/badge/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> B </span>
    <span class="sidenav-normal"> Badge </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> B </span>
    <span class="sidenav-normal"> Buttons </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/cards/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> C </span>
    <span class="sidenav-normal"> Card </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> C </span>
    <span class="sidenav-normal"> Carousel </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> C </span>
    <span class="sidenav-normal"> Collapse </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> D </span>
    <span class="sidenav-normal"> Dropdowns </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/forms/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> F </span>
    <span class="sidenav-normal"> Forms </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/modal/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> M </span>
    <span class="sidenav-normal"> Modal </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/navs/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> N </span>
    <span class="sidenav-normal"> Navs </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> N </span>
    <span class="sidenav-normal"> Navbar </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal"> Pagination </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal"> Popovers </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/progress/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal"> Progress </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> S </span>
    <span class="sidenav-normal"> Spinners </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/tables/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> T </span>
    <span class="sidenav-normal"> Tables </span>
    </a>
    </li>
    <li class="nav-item ">
    <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/argon-dashboard" target="_blank">
    <span class="sidenav-mini-icon"> T </span>
    <span class="sidenav-normal"> Tooltips </span>
    </a>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="https://github.com/creativetimofficial/ct-argon-dashboard-pro/blob/main/CHANGELOG.md" target="_blank">
    <div class="icon icon-shape icon-sm text-center  me-2 d-flex align-items-center justify-content-center">
    <i class="ni ni-align-left-2 text-dark text-sm"></i>
    </div>
    <span class="nav-link-text ms-1">Changelog</span>
    </a>
    </li>
    </ul>
    </div>
    <div class="sidenav-footer mx-3 my-3">
    <div class="card card-plain shadow-none" id="sidenavCard">
    <img class="w-60 mx-auto" src="../../assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
    <div class="card-body text-center p-3 w-100 pt-0">
    <div class="docs-info">
    <h6 class="mb-0">Need help?</h6>
    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
    </div>
    </div>
    </div>
    <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
    </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
    
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm">
    <a class="text-white" href="javascript:;">
    <i class="ni ni-box-2"></i>
    </a>
    </li>
    <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Smart Home</li>
    </ol>
    <h6 class="font-weight-bolder mb-0 text-white">Smart Home</h6>
    </nav>
    <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
    <a href="javascript:;" class="nav-link p-0">
    <div class="sidenav-toggler-inner">
    <i class="sidenav-toggler-line bg-white"></i>
    <i class="sidenav-toggler-line bg-white"></i>
    <i class="sidenav-toggler-line bg-white"></i>
    </div>
    </a>
    </div>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
    <div class="input-group">
    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
    <input type="text" class="form-control" placeholder="Type here...">
    </div>
    </div>
    <ul class="navbar-nav  justify-content-end">
    <li class="nav-item d-flex align-items-center">
    <a href="../../pages/authentication/signin/illustration.html" class="nav-link text-white font-weight-bold px-0" target="_blank">
    <i class="fa fa-user me-sm-1"></i>
    <span class="d-sm-inline d-none">Sign In</span>
    </a>
    </li>
    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
    <div class="sidenav-toggler-inner">
    <i class="sidenav-toggler-line bg-white"></i>
    <i class="sidenav-toggler-line bg-white"></i>
    <i class="sidenav-toggler-line bg-white"></i>
    </div>
    </a>
    </li>
    <li class="nav-item px-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-white p-0">
    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
    </a>
    </li>
    <li class="nav-item dropdown pe-2 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-bell cursor-pointer"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
    <li class="mb-2">
    <a class="dropdown-item border-radius-md" href="javascript:;">
    <div class="d-flex py-1">
    <div class="my-auto">
    <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " alt="user image">
    </div>
    <div class="d-flex flex-column justify-content-center">
    <h6 class="text-sm font-weight-normal mb-1">
    <span class="font-weight-bold">New message</span> from Laur
    </h6>
    <p class="text-xs text-secondary mb-0">
    <i class="fa fa-clock me-1"></i>
    13 minutes ago
    </p>
    </div>
    </div>
    </a>
    </li>
    <li class="mb-2">
    <a class="dropdown-item border-radius-md" href="javascript:;">
    <div class="d-flex py-1">
    <div class="my-auto">
    <img src="../../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
    </div>
    <div class="d-flex flex-column justify-content-center">
    <h6 class="text-sm font-weight-normal mb-1">
    <span class="font-weight-bold">New album</span> by Travis Scott
    </h6>
    <p class="text-xs text-secondary mb-0">
    <i class="fa fa-clock me-1"></i>
    1 day
    </p>
    </div>
    </div>
    </a>
    </li>
    <li>
    <a class="dropdown-item border-radius-md" href="javascript:;">
    <div class="d-flex py-1">
    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
    <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>credit-card</title>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
    <g transform="translate(1716.000000, 291.000000)">
    <g transform="translate(453.000000, 454.000000)">
    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
    </g>
    </g>
    </g>
    </g>
    </svg>
    </div>
    <div class="d-flex flex-column justify-content-center">
    <h6 class="text-sm font-weight-normal mb-1">
    Payment successfully completed
    </h6>
    <p class="text-xs text-secondary mb-0">
    <i class="fa fa-clock me-1"></i>
    2 days
    </p>
    </div>
    </div>
    </a>
    </li>
    </ul>
    </li>
    </ul>
    </div>
    </div>
    </nav>
    
    <div class="container-fluid py-4">
    <div class="row">
    <div class="col-xl-7">
    <div class="card">
    <div class="card-header d-flex pb-0 p-3">
    <h6 class="my-auto">Cameras</h6>
    <div class="nav-wrapper position-relative ms-auto w-50">
    <ul class="nav nav-pills nav-fill p-1" role="tablist">
    <li class="nav-item">
    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">
    Lounge
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
    Office
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
    Attic
    </a>
    </li>
    </ul>
    </div>
    <div class="dropdown pt-2">
    <a href="javascript:;" class="text-secondary ps-4" id="dropdownCam" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-ellipsis-v"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-end me-sm-n4 px-2 py-3" aria-labelledby="dropdownCam">
    <li><a class="dropdown-item border-radius-md" href="javascript:;">Pause</a></li>
    <li><a class="dropdown-item border-radius-md" href="javascript:;">Stop</a></li>
    <li><a class="dropdown-item border-radius-md" href="javascript:;">Schedule</a></li>
    <li>
    <hr class="dropdown-divider">
    </li>
    <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Remove</a></li>
    </ul>
    </div>
    </div>
    <div class="card-body p-3 mt-2">
    <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show position-relative active height-400 border-radius-lg" id="cam1" role="tabpanel" aria-labelledby="cam1" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/smart-home-1.jpg'); background-size:cover;">
    <div class="position-absolute d-flex top-0 w-100">
    <p class="text-white p-3 mb-0">17.05.2021 4:34PM</p>
    <div class="ms-auto p-3">
    <span class="badge badge-secondary">
    <i class="fas fa-dot-circle text-danger"></i>
    Recording</span>
    </div>
    </div>
    </div>
    <div class="tab-pane fade position-relative height-400 border-radius-lg" id="cam2" role="tabpanel" aria-labelledby="cam2" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/smart-home-2.jpg'); background-size:cover;">
    <div class="position-absolute d-flex top-0 w-100">
    <p class="text-white p-3 mb-0">17.05.2021 4:35PM</p>
    <div class="ms-auto p-3">
    <span class="badge badge-secondary">
    <i class="fas fa-dot-circle text-danger"></i>
    Recording</span>
    </div>
    </div>
    </div>
    <div class="tab-pane fade position-relative height-400 border-radius-lg" id="cam3" role="tabpanel" aria-labelledby="cam3" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/smart-home-3.jpg'); background-size:cover;">
    <div class="position-absolute d-flex top-0 w-100">
    <p class="text-white p-3 mb-0">17.05.2021 4:57PM</p>
    <div class="ms-auto p-3">
    <span class="badge badge-secondary">
    <i class="fas fa-dot-circle text-danger"></i>
    Recording</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-5 ms-auto mt-xl-0 mt-4">
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body p-3">
    <div class="row">
    <div class="col-8 my-auto">
    <div class="numbers">
    <p class="text-sm mb-0 text-capitalize font-weight-bold opacity-7">Wheather today</p>
    <h5 class="font-weight-bolder mb-0">
    San Francisco - 29°C
    </h5>
    </div>
    </div>
    <div class="col-4 text-end">
    <img class="w-50" src="../../assets/img/small-logos/icon-sun-cloud.png" alt="image sun">
    <h5 class="mb-0 text-end me-1">Cloudy</h5>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row mt-4">
    <div class="col-md-6">
    <div class="card">
    <div class="card-body text-center">
    <h1 class="text-gradient text-primary"><span id="status1" countto="21">21</span> <span class="text-lg ms-n2">°C</span></h1>
    <h6 class="mb-0 font-weight-bolder">Living Room</h6>
    <p class="opacity-8 mb-0 text-sm">Temperature</p>
    </div>
    </div>
    </div>
    <div class="col-md-6 mt-md-0 mt-4">
    <div class="card">
    <div class="card-body text-center">
    <h1 class="text-gradient text-primary"> <span id="status2" countto="44">44</span> <span class="text-lg ms-n1">%</span></h1>
    <h6 class="mb-0 font-weight-bolder">Outside</h6>
    <p class="opacity-8 mb-0 text-sm">Humidity</p>
    </div>
    </div>
    </div>
    </div>
    <div class="row mt-4">
    <div class="col-md-6">
    <div class="card">
    <div class="card-body text-center">
    <h1 class="text-gradient text-primary"><span id="status3" countto="87">87</span> <span class="text-lg ms-n2">m³</span></h1>
    <h6 class="mb-0 font-weight-bolder">Water</h6>
    <p class="opacity-8 mb-0 text-sm">Consumption</p>
    </div>
    </div>
    </div>
    <div class="col-md-6 mt-md-0 mt-4">
    <div class="card">
    <div class="card-body text-center">
    <h1 class="text-gradient text-primary"><span id="status4" countto="417">417</span> <span class="text-lg ms-n2">GB</span></h1>
    <h6 class="mb-0 font-weight-bolder">Internet</h6>
    <p class="opacity-8 mb-0 text-sm">All devices</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row mt-4">
    <div class="col-lg-6 ms-auto">
    <div class="card">
    <div class="card-header pb-0 p-3">
    <div class="d-flex align-items-center">
    <h6 class="mb-0">Consumption by room</h6>
    <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" title="See the consumption per room">
    <i class="fas fa-info"></i>
    </button>
    </div>
    </div>
    <div class="card-body p-3">
    <div class="row">
    <div class="col-5 text-center">
    <div class="chart">
    <canvas id="chart-consumption" class="chart-canvas" height="197"></canvas>
    </div>
    <h4 class="font-weight-bold mt-n8">
    <span>310.0</span>
    <span class="d-block text-body text-sm">WATTS</span>
    </h4>
    </div>
    <div class="col-7">
    <div class="table-responsive">
    <table class="table align-items-center mb-0">
    <tbody>
    <tr>
    <td>
    <div class="d-flex px-2 py-0">
    <span class="badge bg-primary me-3"> </span>
    <div class="d-flex flex-column justify-content-center">
    <h6 class="mb-0 text-sm">Living Room</h6>
    </div>
    </div>
    </td>
    <td class="align-middle text-center text-sm">
    <span class="text-xs font-weight-bold"> 15% </span>
    </td>
    </tr>
    <tr>
    <td>
    <div class="d-flex px-2 py-0">
    <span class="badge bg-secondary me-3"> </span>
    <div class="d-flex flex-column justify-content-center">
    <h6 class="mb-0 text-sm">Kitchen</h6>
    </div>
    </div>
    </td>
    <td class="align-middle text-center text-sm">
    <span class="text-xs font-weight-bold"> 20% </span>
    </td>
    </tr>
    <tr>
    <td>
    <div class="d-flex px-2 py-0">
    <span class="badge bg-info me-3"> </span>
    <div class="d-flex flex-column justify-content-center">
    <h6 class="mb-0 text-sm">Attic</h6>
    </div>
    </div>
    </td>
    <td class="align-middle text-center text-sm">
    <span class="text-xs font-weight-bold"> 13% </span>
    </td>
    </tr>
    <tr>
    <td>
    <div class="d-flex px-2 py-0">
    <span class="badge bg-success me-3"> </span>
    <div class="d-flex flex-column justify-content-center">
     <h6 class="mb-0 text-sm">Garage</h6>
    </div>
    </div>
    </td>
    <td class="align-middle text-center text-sm">
    <span class="text-xs font-weight-bold"> 32% </span>
    </td>
    </tr>
    <tr>
    <td>
    <div class="d-flex px-2 py-0">
    <span class="badge bg-warning me-3"> </span>
    <div class="d-flex flex-column justify-content-center">
    <h6 class="mb-0 text-sm">Basement</h6>
    </div>
    </div>
    </td>
    <td class="align-middle text-center text-sm">
    <span class="text-xs font-weight-bold"> 20% </span>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 mt-lg-0 mt-4">
    <div class="row">
    <div class="col-sm-6">
    <div class="card h-100">
    <div class="card-body p-3">
    <h6>Consumption per day</h6>
    <div class="chart pt-3">
    <canvas id="chart-cons-week" class="chart-canvas" height="170"></canvas>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 mt-sm-0 mt-4">
    <div class="card h-100">
    <div class="card-body text-center p-3">
    <h6 class="text-start">Device limit</h6>
    <round-slider value="21" valueLabel="Temperature"></round-slider>
    <h4 class="font-weight-bold mt-n7"><span class="text-dark" id="value">21</span><span class="text-body">°C</span></h4>
    <p class="ps-1 mt-5 mb-0"><span class="text-xs">16°C</span><span class="px-3">Temperature</span><span class="text-xs">38°C</span></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <hr class="horizontal dark my-5">
    <div class="row">
    <div class="col-lg-2 col-sm-6">
    <div class="card h-100">
    <div class="card-body">
    <div class="d-flex mb-4">
    <p class="mb-0">Off</p>
    <div class="form-check form-switch ms-auto">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckHumidity">
    </div>
    </div>
    <svg width="60" viewBox="0 0 296 179" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter1_f)">
    <path d="M165.907 34.625C165.907 34.625 156.143 47.861 148.512 47.425C138.946 46.863 137.312 35.325 128.444 34.625C119.166 34.764 118.219 46.725 108.163 47.425C99.1529 47.264 95.3359 34.843 86.7469 34.625C78.1579 34.407 69.0029 47.425 69.0029 47.425" stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
    <path d="M154.919 102.625C154.919 102.625 140.219 115.861 128.726 115.425C114.326 114.863 111.855 103.325 98.508 102.625C84.538 102.764 83.108 114.725 67.969 115.425C54.403 115.262 48.655 102.842 35.719 102.625C22.783 102.408 9 115.425 9 115.425" stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
    <path d="M238.919 156.625C238.919 156.625 224.219 169.861 212.726 169.425C198.326 168.863 195.855 157.325 182.508 156.625C168.538 156.764 167.108 168.725 151.969 169.425C138.403 169.262 132.655 156.842 119.719 156.625C106.783 156.408 93 169.425 93 169.425" stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
    <path d="M264.076 1.00001C261.378 1.03054 234 43.7744 234 60.3879C234 68.3648 237.169 76.015 242.809 81.6555C248.45 87.296 256.1 90.4648 264.077 90.4648C272.054 90.4648 279.704 87.296 285.344 81.6555C290.985 76.015 294.154 68.3648 294.154 60.3879C294.154 43.7744 266.775 0.970878 264.076 1.00001Z" fill="#CED4DA" />
    <path d="M282.441 49.6635C279.436 50.5823 278.383 55.8514 280.089 61.4324C281.796 67.0134 285.615 70.7928 288.62 69.874C291.625 68.9553 292.678 63.6862 290.972 58.1052C289.266 52.5242 285.446 48.7448 282.441 49.6635Z" fill="white" />
    <path d="M207.411 61C205.49 61.0222 186 91.4522 186 103.278C186 108.956 188.256 114.402 192.271 118.418C196.287 122.433 201.733 124.689 207.411 124.689C213.09 124.689 218.536 122.433 222.552 118.418C226.567 114.402 228.823 108.956 228.823 103.278C228.823 91.4522 209.332 60.9792 207.411 61Z" fill="#CED4DA" />
    <path d="M219.337 96.8934C217.197 97.5476 216.447 101.299 217.662 105.272C218.877 109.245 221.596 111.936 223.736 111.282C225.876 110.627 226.626 106.876 225.411 102.903C224.196 98.9298 221.477 96.2392 219.337 96.8934Z" fill="white" />
    </g>
    <defs>
    <filter id="filter1_f" x="0" y="0" width="295.154" height="178.435" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix" />
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
    <feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur" />
    </filter>
    </defs>
    </svg>
    <p class="mt-4 mb-0 font-weight-bold">Humidity</p>
    <span class="text-xs">Inactive since: 2 days</span>
    </div>
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
    <div class="card bg-default h-100">
    <div class="card-body">
    <div class="d-flex mb-3">
    <p class="mb-0 text-white">On</p>
    <div class="form-check form-switch ms-auto">
    <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckTemperature">
    </div>
    </div>
    <svg width="40" viewBox="0 0 217 342" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter3_f)">
    <path d="M67 178.583C93.5097 178.583 115 157.092 115 130.583C115 104.073 93.5097 82.5825 67 82.5825C40.4903 82.5825 19 104.073 19 130.583C19 157.092 40.4903 178.583 67 178.583Z" fill="white" />
    <path d="M67 188.583C99.0325 188.583 125 162.615 125 130.583C125 98.55 99.0325 72.5825 67 72.5825C34.9675 72.5825 9 98.55 9 130.583C9 162.615 34.9675 188.583 67 188.583Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-dasharray="1 66" />
    <g filter="url(#filter3_f)">
    <path d="M61.6224 120.764C78.6362 111.727 88.2605 96.5543 83.1189 86.8741C77.9773 77.1939 60.0169 76.6723 43.0031 85.7091C25.9894 94.7458 16.3651 109.919 21.5067 119.599C26.6482 129.279 44.6087 129.801 61.6224 120.764Z" fill="white" />
    </g>
    </g>
    <g filter="url(#filter2_d)">
    <path d="M83.768 199.054L83.768 63.0005C83.768 53.7179 87.4555 44.8155 94.0192 38.2518C100.583 31.688 109.485 28.0005 118.768 28.0005C128.051 28.0005 136.953 31.688 143.517 38.2518C150.08 44.8155 153.768 53.7179 153.768 63.0005L153.768 201.97C162.845 209.089 169.677 218.673 173.448 229.574C177.219 240.475 177.768 252.232 175.03 263.438C172.291 274.643 166.382 284.822 158.008 292.755C149.634 300.689 139.152 306.041 127.815 308.17C123.7 309.262 119.422 309.601 115.187 309.17C102.415 308.838 90.0831 304.437 79.9858 296.609C69.8886 288.781 62.5533 277.935 59.0477 265.649C55.5422 253.364 56.0495 240.28 60.4957 228.302C64.9419 216.325 73.095 206.079 83.768 199.056V199.054Z" fill="url(#paint0_linear)" />
    <path d="M57.7443 249.189C57.7443 257.029 59.257 264.644 62.2406 271.821C65.1226 278.754 69.2556 285.005 74.5247 290.402C77.1201 293.061 79.9789 295.485 83.0218 297.609C86.0911 299.75 89.3762 301.605 92.7861 303.122C99.8678 306.273 107.414 307.971 115.213 308.169L115.251 308.17L115.289 308.174C116.437 308.291 117.607 308.35 118.769 308.35C121.749 308.35 124.707 307.964 127.558 307.203L127.595 307.193L127.632 307.186C134.372 305.929 140.788 303.521 146.701 300.029C152.492 296.61 157.625 292.258 161.958 287.096C166.323 281.896 169.728 276.046 172.078 269.71C174.511 263.153 175.745 256.248 175.745 249.189C175.745 244.564 175.208 239.958 174.149 235.501C173.12 231.169 171.592 226.949 169.607 222.957C167.658 219.036 165.262 215.323 162.485 211.919C159.725 208.536 156.585 205.453 153.151 202.757L152.769 202.457V201.97L152.769 63.0001C152.769 58.4096 151.87 53.957 150.097 49.766C148.385 45.7174 145.933 42.0811 142.81 38.9583C139.688 35.8355 136.051 33.3839 132.003 31.6715C127.812 29.8988 123.359 29 118.769 29C114.178 29 109.726 29.8988 105.535 31.6715C101.486 33.3839 97.8497 35.8355 94.7269 38.9583C91.6041 42.0811 89.1524 45.7174 87.44 49.766C85.6674 53.957 84.7686 58.4096 84.7686 63.0001L84.7686 199.055V199.593L84.3189 199.89C76.3153 205.164 69.6443 212.384 65.0268 220.769C62.6796 225.031 60.8688 229.575 59.6449 234.275C58.3838 239.117 57.7443 244.135 57.7443 249.189ZM56.7443 249.189C56.7443 228.231 67.4872 209.785 83.7686 199.055L83.7686 63.0001C83.7686 43.6699 99.4385 28 118.769 28C138.099 28 153.769 43.6699 153.769 63.0001L153.769 201.97C167.757 212.955 176.745 230.023 176.745 249.189C176.745 278.544 155.665 302.975 127.816 308.169C124.93 308.94 121.898 309.35 118.769 309.35C117.559 309.35 116.366 309.289 115.188 309.169C82.7694 308.344 56.7443 281.806 56.7443 249.189Z" fill="white" fill-opacity="0.5" />
    </g>
    <path d="M72.6179 250.554C72.616 242.091 74.9489 233.792 79.3597 226.569C83.7705 219.347 90.0883 213.481 97.6179 209.617V85.5544H139.618V209.616C146.888 213.347 153.032 218.946 157.421 225.838C161.809 232.73 164.282 240.667 164.586 248.832C164.89 256.998 163.014 265.096 159.15 272.296C155.286 279.495 149.574 285.536 142.602 289.796C135.63 294.056 127.648 296.382 119.479 296.535C111.31 296.688 103.247 294.662 96.1202 290.666C88.9933 286.67 83.0595 280.848 78.9288 273.798C74.7982 266.748 72.6199 258.725 72.6179 250.554Z" fill="white" />
    <defs>
    <filter id="filter30_f" x="2" y="65.5825" width="130" height="130" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix" />
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
    <feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur" />
    </filter>
    <filter id="filter30_f" x="0.122314" y="59.2585" width="104.381" height="87.9562" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix" />
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
    <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur" />
    </filter>
    <filter id="filter2_d" x="36.7441" y="0" width="180.001" height="341.351" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix" />
    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
    <feOffset dx="10" dy="2" />
    <feGaussianBlur stdDeviation="15" />
    <feColorMatrix type="matrix" values="0 0 0 0 0.501961 0 0 0 0 0.501961 0 0 0 0 0.501961 0 0 0 0.302 0" />
    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
    </filter>
    <linearGradient id="paint0_linear" x1="161.625" y1="141.948" x2="43.5768" y2="169.912" gradientUnits="userSpaceOnUse">
    <stop offset="1" stop-color="white" stop-opacity="0.596" />
    <stop offset="1" stop-color="#F7F7F7" stop-opacity="0.204" />
    </linearGradient>
    </defs>
    </svg>
    <p class="mt-2 mb-0 font-weight-bold text-white">Temperature</p>
    <span class="text-xs text-white">Active</span>
    </div>
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
    <div class="card h-100">
    <div class="card-body">
    <div class="d-flex mb-4">
    <p class="mb-0">Off</p>
    <div class="form-check form-switch ms-auto">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckAc">
    </div>
    </div>
    <svg width="70" viewBox="0 0 306 180" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter0_f)">
    <path d="M165.907 35.625C165.907 35.625 156.143 48.861 148.512 48.425C138.946 47.863 137.312 36.325 128.444 35.625C119.166 35.764 118.219 47.725 108.163 48.425C99.1529 48.264 95.3359 35.843 86.7469 35.625C78.1579 35.407 69.0029 48.425 69.0029 48.425" stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
    <path d="M154.919 103.625C154.919 103.625 140.219 116.861 128.726 116.425C114.326 115.863 111.855 104.325 98.508 103.625C84.538 103.764 83.108 115.725 67.969 116.425C54.403 116.262 48.655 103.842 35.719 103.625C22.783 103.408 9 116.425 9 116.425" stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
    <path d="M238.919 157.625C238.919 157.625 224.219 170.861 212.726 170.425C198.326 169.863 195.855 158.325 182.508 157.625C168.538 157.764 167.108 169.725 151.969 170.425C138.403 170.262 132.655 157.842 119.719 157.625C106.783 157.408 93 170.425 93 170.425" stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
    <path d="M220.25 19.4441L257.266 111.061" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M229.482 41.7656L207.122 31.8528" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M229.482 41.7655L239.189 18.897" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M249.223 90.6272L240.025 113.29" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M249.223 90.6271L272.091 100.334" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M190.205 58.6675L288.055 72.4195" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M214.151 61.834L194.387 76.2415" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M214.151 61.834L199.2 41.9931" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M266.338 69.1682L281.365 88.4654" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M266.338 69.1682L286.179 54.217" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M209.151 104.299L269.986 26.4342" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M223.866 85.1443L226.461 109.465" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M223.866 85.1442L199.208 88.1718" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M256.311 43.6169L280.536 40.2513" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <path d="M256.311 43.6168L253.283 18.9585" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    <circle cx="239.321" cy="66.5" r="8.5" fill="white" />
    </g>
    <defs>
    <filter id="filter0_f" x="0" y="10.9402" width="294.703" height="168.495" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix" />
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
    <feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur" />
    </filter>
    </defs>
    </svg>
    <p class="mt-4 mb-0 font-weight-bold">Air Conditioner</p>
    <span class="text-xs">Inactive since: 1 hour</span>
    </div>
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
    <div class="card h-100">
    <div class="card-body">
    <div class="d-flex mb-4">
    <p class="mb-0">Off</p>
    <div class="form-check form-switch ms-auto">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckLights">
    </div>
    </div>
    <svg width="72" viewBox="0 0 301 157" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter0_f)">
    <mask mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="301" height="156">
    <rect width="301" height="156" fill="#C4C4C4" />
    </mask>
    <g mask="url(#mask0)">
    <path d="M150 250.825C209.094 250.825 257 202.92 257 143.825C257 84.7307 209.094 36.8252 150 36.8252C90.9055 36.8252 43 84.7307 43 143.825C43 202.92 90.9055 250.825 150 250.825Z" fill="#CED4DA" />
    <path d="M150 277.825C224.006 277.825 284 217.831 284 143.825C284 69.819 224.006 9.8252 150 9.8252C75.9938 9.8252 16 69.819 16 143.825C16 217.831 75.9938 277.825 150 277.825Z" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" stroke-dasharray="1 66" />
    <g filter="url(#filter1_f)">
    <path d="M135.743 126.588C166.447 110.28 183.244 81.824 173.262 63.0298C163.28 44.2355 130.297 42.22 99.5936 58.528C68.8901 74.8359 52.0924 103.292 62.0748 122.086C72.0573 140.88 105.04 142.896 135.743 126.588Z" fill="white" />
    </g>
    <path d="M182 143.435H122V156.435H182V143.435Z" fill="white" />
    <path d="M6.5 151.935H124.063L151.927 133.325L180.5 151.935H294.5" stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
    </g>
    </g>
    <defs>
    <filter id="filter0_f" x="0.5" y="3.8252" width="300" height="153.175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix" />
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
    <feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur" />
    </filter>
    <filter id="filter1_f" x="24" y="9" width="187.337" height="167.116" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix" />
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
    <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur" />
    </filter>
    </defs>
    </svg>
    <p class="mt-4 font-weight-bold mb-0">Lights</p>
    <span class="text-xs">Inactive since: 27 min</span>
    </div>
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
    <div class="card bg-default h-100">
    <div class="card-body">
    <div class="d-flex mb-4">
    <p class="mb-0 text-white">On</p>
    <div class="form-check form-switch ms-auto">
    <input class="form-check-input" type="checkbox" id="flexwifiCheckDefault" checked>
    </div>
    </div>
    <svg width="45px" viewBox="0 0 41 31" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>wifi</title>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="wifi" transform="translate(3.000000, 3.000000)">
    <path d="M7.37102658,14.6156105 C12.9664408,9.02476091 22.0335592,9.02476091 27.6289734,14.6156105" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
    <circle id="Oval" fill="#FFFFFF" cx="17.5039082" cy="22.7484921" r="4.9082855"></circle>
    <path d="M0,7.24718945 C9.66583791,-2.41572982 25.3341621,-2.41572982 35,7.24718945" stroke="#FFFFFF" stroke-width="5" opacity="0.398982558" stroke-linecap="round" stroke-linejoin="round"></path>
    </g>
    </g>
    </svg>
    <p class="font-weight-bold mt-4 mb-0 text-white">Wi-fi</p>
    <span class="text-xs text-white">Active</span>
    </div>
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-sm-0 mt-4">
    <div class="card h-100">
    <div class="card-body d-flex flex-column justify-content-center text-center">
    <a href="javascript:;">
    <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
    <h5 class="text-secondary"> New device </h5>
    </a>
    </div>
    </div>
    </div>
    </div>
    <footer class="footer pt-3  ">
    <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
    <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="copyright text-center text-sm text-muted text-lg-start">
    © <script>
                      document.write(new Date().getFullYear())
                    </script>,
    made with <i class="fa fa-heart"></i> by
    <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
    for a better web.
    </div>
    </div>
    <div class="col-lg-6">
    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
    <li class="nav-item">
    <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
    </li>
    <li class="nav-item">
    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
    </li>
    <li class="nav-item">
    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
    </li>
    <li class="nav-item">
    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </footer>
    </div>
    </main>
    <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
    <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3 bg-transparent ">
    <div class="float-start">
    <h5 class="mt-3 mb-0">Argon Configurator</h5>
    <p>See our dashboard options.</p>
    </div>
    <div class="float-end mt-4">
    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
    <i class="fa fa-close"></i>
    </button>
    </div>
    
    </div>
    <hr class="horizontal dark my-1">
    <div class="card-body pt-sm-3 pt-0 overflow-auto">
    
    <div>
    <h6 class="mb-0">Sidebar Colors</h6>
    </div>
    <a href="javascript:void(0)" class="switch-trigger background-color">
    <div class="badge-colors my-2 text-start">
    <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
    <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
    <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
    <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
    </div>
    </a>
    
    <div class="mt-3">
    <h6 class="mb-0">Sidenav Type</h6>
    <p class="text-sm">Choose between 2 different sidenav types.</p>
    </div>
    <div class="d-flex">
    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
    </div>
    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
    
    <div class="d-flex my-3">
    <h6 class="mb-0">Navbar Fixed</h6>
    <div class="form-check form-switch ps-0 ms-auto my-auto">
    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
    </div>
    </div>
    <hr class="horizontal dark mb-1">
    <div class="d-flex my-4">
    <h6 class="mb-0">Sidenav Mini</h6>
    <div class="form-check form-switch ps-0 ms-auto my-auto">
    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
    </div>
    </div>
    <hr class="horizontal dark my-sm-4">
    <div class="mt-2 mb-5 d-flex">
    <h6 class="mb-0">Light / Dark</h6>
    <div class="form-check form-switch ps-0 ms-auto my-auto">
    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
    </div>
    </div>
    <a class="btn btn-primary w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro">Buy now</a>
    <a class="btn btn-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free demo</a>
    <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard">View documentation</a>
    <div class="w-100 text-center">
    <a class="github-button" href="https://github.com/creativetimofficial/ct-argon-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
    <h6 class="mt-3">Thank you for sharing!</h6>
    <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
    </a>
    </div>
    </div>
    </div>
    </div>

@endsection