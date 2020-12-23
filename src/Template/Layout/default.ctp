<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Fashom';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>


    <!-- Ext stylesheet -->
    <?= $this->Html->css('ext/ext-theme-crisp-all.css'); ?>

    <!-- Font Awesome stylesheet -->
    <?= $this->Html->css('fonts/fontawesome/css/font-awesome.min.css'); ?>
    <!-- /font awesome stylesheet -->

    <!-- Bootstrap stylesheet -->
    <?= $this->Html->css('mouldifi-bootstrap.css'); ?>
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <?= $this->Html->css('perfect-scrollbar.css'); ?>
    <!-- /perfect scrollbar stylesheet -->

    <!-- Mouldifi-core stylesheet -->
    <?= $this->Html->css('mouldifi-core.css'); ?>
    <!-- /mouldifi-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <?= $this->Html->css('theme-indigo.min.css'); ?>
    <!-- Color-Theme stylesheet -->

    <!--Load JQuery-->
    <?= $this->Html->script('scripts/jquery-3.5.1.min.js'); ?>
    <!--Bootstrap JQuery-->
    <?= $this->Html->script('bootstrap.bundle.min.js'); ?>
    <!--Perfect Scrollbar JQuery-->
    <?= $this->Html->script('perfect-scrollbar.min.js'); ?>
    <!--Big Slide JQuery-->
    <?= $this->Html->script('bigSlide.min.js'); ?>
    <!--Custom JQuery-->
    <?= $this->Html->script('functions.js'); ?>
    <!--Bootstrap JQuery-->
    <?= $this->Html->script('scripts/bootstrap.min.js'); ?>
    <!--Ext JQuery-->
    <?= $this->Html->script('ext/ext-all.js'); ?>
    <!--Form JQuery-->
    <?= $this->Html->script('scripts/jquery.form.min.js'); ?>

    <?= $this->Html->script('scripts/script.js'); ?>
    <?= $this->Html->script('sweetalert.min.js'); ?>
    <?= $this->Html->script('loading-overlay/loadingoverlay.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body id="body" data-theme="indigo">

<div id="preloader"></div>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Large Modal</h3>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
          <div class="container-modal-footer">
              <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
              <button type="submit" form="" class="btn btn-primary modal-save-changes" data-dismiss="modal">Save changes</button>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel1">Large Modal</h3>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
          <div class="container-modal-footer">
              <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
              <button type="submit" form="" class="btn btn-primary modal-save-changes" data-dismiss="modal">Save changes</button>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Page container -->
<div class="gx-container">

    <!-- Page Sidebar -->
    <div id="menu" class="side-nav gx-sidebar d-none1">
        <div class="navbar-expand-lg">
            <!-- Sidebar header  -->
            <div class="sidebar-header">
                <a class="site-logo" href="#">
                    <img src="img/logo.png" alt="Fashom" title="Fashom">
                </a>

                <a href="#" class="close-mobile-menu hidden_mobile"><i class="fa fa-close fa-lg"></i></a>

            </div>
            <!-- /sidebar header -->

            <!-- Main navigation -->
            <div id="main-menu" class="main-menu navbar-collapse collapse">
                <ul class="nav-menu">
                    <li class="main-menu-item"><a class="users_menu active" href="#">Users</a></li>
                    <li class="main-menu-item"><a class="countries_menu" href="#">Countries</a></li>
                    <li class="main-menu-item"><a class="cities_menu" href="#">Cities</a></li>
                    <li class="main-menu-item"><a class="states_menu" href="#">States</a></li>
                </ul>
            </div>
            <!-- /main navigation -->
        </div>
    </div>
    <!-- /page sidebar -->

    <!-- Main Container -->
    <div class="gx-main-container">

        <!-- Main Header -->
        <header class="main-header">
            <div class="gx-toolbar">
                <div class="sidebar-mobile-menu">
                    <a class="gx-menu-icon menu-toggle" href="#menu">
                        <span class="menu-icon icon-grey"></span>
                    </a>
                </div>

                <ul class="quick-menu header-notifications ml-auto">



                    <li class="dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" class="d-inline-block" aria-expanded="true">
                            <i class="zmdi zmdi-notifications-active icons-alert animated infinite wobble d-none"></i>
                        </a>

                        <div role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-perfectscrollbar">
                                <div class="messages-list">
                                    <ul class="list-unstyled">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" class="d-inline-block" aria-expanded="true">
                            <i class="zmdi zmdi-comment-alt-text icons-alert zmdi-hc-fw d-none"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" data-placement="bottom-end" data-x-out-of-boundaries="">
                            <div class="gx-card-header d-flex align-items-center">
                                <div class="mr-auto">
                                    <h3 class="card-heading">Messages</h3>
                                </div>
                            </div>

                            <div class="dropdown-menu-perfectscrollbar1">
                                <div class="messages-list">
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="Domnic Brown" src="http://via.placeholder.com/150x150"
                                                     class="rounded-circle size-40 user-avatar">
                                                <span class="badge badge-danger rounded-circle">5</span>
                                            </div>

                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">Domnic Brown</a>
                                                    </h5>
                                                    <span class="meta-date"><small>6:19 PM</small></span>
                                                </div>
                                                <p class="sub-heading">There are many variations of passages of...</p>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="John Smith" src="http://via.placeholder.com/150x150"
                                                     class="rounded-circle size-40 user-avatar">
                                                <span class="badge badge-danger rounded-circle"></span>
                                            </div>

                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">John Smith</a>
                                                    </h5>
                                                    <span class="meta-date"><small>4:18 PM</small></span>
                                                </div>
                                                <p class="sub-heading">Lorem Ipsum is simply dummy text of the...</p>
                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="John Smith" src="http://via.placeholder.com/150x150"
                                                     class="size-40 rounded-circle user-avatar">
                                                <span class="badge badge-danger rounded-circle">8</span>
                                            </div>

                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">John Smith</a>
                                                    </h5>
                                                    <span class="meta-date"><small>7:10 PM</small></span>
                                                </div>
                                                <p class="sub-heading">The point of using Lorem Ipsum is that it
                                                    has...</p>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="alex dolgove" src="http://via.placeholder.com/150x150"
                                                     class="size-40 rounded-circle user-avatar">
                                                <span class="badge badge-danger rounded-circle"></span>
                                            </div>

                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">alex dolgove</a>
                                                    </h5>
                                                    <span class="meta-date"><small>5:10 PM</small></span>
                                                </div>
                                                <p class="sub-heading">It is a long established fact that a reader
                                                    will...</p>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>

                                        </li>

                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="Domnic Harris" src="http://via.placeholder.com/150x150"
                                                     class="size-40 rounded-circle user-avatar">

                                                <span class="badge badge-danger rounded-circle">3</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">Domnic Harris</a>
                                                    </h5>
                                                    <span class="meta-date"><small>7:35 PM</small></span>
                                                </div>
                                                <p class="sub-heading">All the Lorem Ipsum generators on the...</p>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

<!--
                    <li class="dropdown user-nav">
                        <a class="dropdown-toggle no-arrow d-inline-block" href="#" role="button" id="userInfo"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar size-40" src="http://via.placeholder.com/150x150" alt="...">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userInfo">
                            <div class="user-profile">
                                <img class="user-avatar border-0 size-40" src="http://via.placeholder.com/150x150"
                                     alt="User">
                                <div class="user-detail ml-2">
                                    <h4 class="user-name mb-0">Chris Harris</h4>
                                    <small>Administrator</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="zmdi zmdi-face zmdi-hc-fw mr-1"></i>
                                Account
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="zmdi zmdi-settings zmdi-hc-fw mr-1"></i>
                                Setting
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-sign-out"></i>
                                Logout
                            </a>
                        </div>
                    </li>
-->


                <li><?= $this->Html->link(__('', true), array('controller' => 'FashomUsers', 'action' => 'logout'), array('class' => 'fa fa-sign-out')) ?> </li>
                </ul>
            </div>
        </header>
        <!-- /main header -->

        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">
                <div class="dashboard animated slideInUpTiny animation-duration-3">
                    <?php echo $this->fetch('content');?>
                </div>
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> Copyright Fashom © 2020. All rights reserved</p>
                    <!--<p> ©2019 Withom LLC. All rights reserved</p>-->
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->



</div>
<!-- /page container -->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade close-mobile-menu"></div>
<!-- /menu backdrop -->

</body>

</html>
