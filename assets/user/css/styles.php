<?php
header("Content-type: text/css; charset: UTF-8");
if(isset($_GET['color']))
{
  $color = '#'.$_GET['color'];
}
else {
  $color = '#1f71d4';
}


if(isset($_GET['secendary_color']))
{
  $secendary_color = '#'.$_GET['secendary_color'];
}
else {
  $secendary_color = '#fec501';
}
?>


.dashbord-content .aside-area .main-menu ul li a.active {
     background-color: <?php echo $color; ?>; }
.dashbord-content .aside-area .main-menu ul li a.active:hover {
     background-color: <?php echo $color; ?>; }

    .dashbord-content .aside-area .current-balance .icon-area .icon {
      background-color: <?php echo $color; ?>;
}
      .dashbord-content .aside-area .current-balance .content .amount {
        color: <?php echo $color; ?>;
 }


      .dashbord-content .aside-area .current-balance .icon-area .icon::after {
        background: <?php echo $color; ?>33;
        }
      .dashbord-content .aside-area .current-balance .icon-area .icon::before {
        background: <?php echo $color; ?>26;
		 }

       .dashbord-content .aside-area .help-box .icon-area .icon::after {
        background: <?php echo $color; ?>33;
        }
      .dashbord-content .aside-area .help-box .icon-area .icon::before {
        background: <?php echo $color; ?>26;
        }
    .dashbord-content .aside-area .help-box .content .title {

      color: <?php echo $color; ?>;
}
.pagination>.page-item.active>a,
.pagination>.page-item.active>a:focus,
.pagination>.page-item.active>a:hover,
.pagination>.page-item.active>span,
.pagination>.page-item.active>span:focus,
.pagination>.page-item.active>span:hover {
  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
}

.btn-base {
    background:  <?php echo $color; ?> !important;
    border: 1px solid  <?php echo $color; ?> !important;
}

.mr-table td a {
    color:  <?php echo $color; ?>;
}
.mr-table td a:hover {
    color:  <?php echo $color; ?>;
}
.btn.btn-primary {

  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
  box-shadow: 0 2px 2px 0 <?php echo $color; ?>, 0 3px 1px -2px <?php echo $color; ?>, 0 1px 5px 0 <?php echo $color; ?>;
}

.btn.btn-primary:hover {
  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
}

.btn.btn-primary:focus,
.btn.btn-primary.focus,
.btn.btn-primary:hover {
  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
}

.btn.btn-primary:active,
.btn.btn-primary.active,
.open>.btn.btn-primary.dropdown-toggle,
.show>.btn.btn-primary.dropdown-toggle {
  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
  box-shadow: 0 2px 2px 0 <?php echo $color; ?>, 0 3px 1px -2px <?php echo $color; ?>, 0 1px 5px 0 <?php echo $color; ?>;
}

.btn.btn-primary:focus,
.btn.btn-primary:active,
.btn.btn-primary:hover {
  box-shadow: 0 14px 26px -12px <?php echo $color; ?>, 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px <?php echo $color; ?>;
}
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show>.btn-primary.dropdown-toggle {
  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
}

    .dashbord-content .aside-area .help-box .icon-area .icon {
      background-color: <?php echo $color; ?>;
 }

       .message-modal .modal .modal-dialog .modal-header {
        background: <?php echo $color; ?>;
        }
        .message-modal .modal .contact-form ul li .input-field:focus {
              border-bottom: 1px solid <?php echo $color; ?> !important; }

      .message-modal .modal .contact-form .submit-btn {
        background: <?php echo $color; ?>;
        }
        .message-modal .modal .contact-form .submit-btn:hover {
          background: <?php echo $color; ?>;
          }
.mybtn1 {

  background: <?php echo $color; ?>;
 }
  .mybtn1:hover {

    background: <?php echo $color; ?>; }

    .profile .open-tikit-area .material-icons {

      background: <?php echo $color; ?>;
 }

 .card-header.card-header-primary {
  background: <?php echo $color; ?>;
 }
.edit-account .card-body .btn {
  background: <?php echo $color; ?> !important; }

        .main-menu #main-menu .navbar-nav .nav-item .nav-link.notifications .btn {

          background-color: <?php echo $color; ?>; }

.footer-newsletter-widget .newsletter-form-area button.btn {
  background-color: <?php echo $color; ?>; }
}

.address-widget .about-info li p i {
  color: <?php echo $color; ?>; !important;
}

.address-widget .about-info li:hover i {
  background: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>;
}


.footer .fotter-social-links ul li a:hover {
  background: <?php echo $secendary_color; ?>;
  border-color: <?php echo $secendary_color; ?>
}

.footer .fotter-social-links ul li a {
  color: <?php echo $secendary_color; ?>;
  border-color: <?php echo $secendary_color; ?>
}

.main-menu #main-menu .navbar-nav .nav-item.dropdown .dropdown-menu .dropdown-item:hover {
  color: <?php echo $secendary_color; ?>;
}

.add_lan_tab .nav-tabs .nav-link.active,
.add_lan_tab .nav-tabs .nav-link:hover {
  background-color: <?php echo $secendary_color; ?>;
}

.address-widget .about-info li p i {
  color: <?php echo $secendary_color; ?>; 
}

.address-widget .about-info li p i {
  border: 1px solid <?php echo $secendary_color; ?>26;
}


.form-control, .is-focused .form-control {
    background-image: linear-gradient(to top, <?php echo $color; ?> 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}