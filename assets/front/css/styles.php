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


.mainmenu-area.nav-fixed {
    background:  <?php echo $color; ?>;
}
.bottomtotop i {
    background:  <?php echo $color; ?>;   
}

.single-causes .content .mybtn1:hover {
    background:  <?php echo $color; ?>; 
}


.single-causes .content .progress-area .progress .progress-bar {
    background:  <?php echo $color; ?>;
}

.team .team-member .bg-color .social-links li a {
    color:  <?php echo $color; ?>;
}


.single-blog .content .link {
  color: <?php echo $color; ?>;
}

.footer-newsletter-widget .newsletter-form-area button {
    background:  <?php echo $color; ?>; 
}

.request-to-call .request-form .mybtn1:hover {
    background:  <?php echo $color; ?>; 
}
.video-play-btn i {
    color: <?php echo $color; ?>;
}

.recent-causes-widget .post-list li .progress-area .progress .progress-bar {
    background:  <?php echo $color; ?>; 
}


.tags-widget .tags-list li a:hover {
    background:<?php echo $color; ?>; 
    border-color: <?php echo $color; ?>;
}

.single-info-box .icon {
    background:<?php echo $color; ?>; 
}



.video-play-btn2 {
    background:<?php echo $color; ?>;
}

.tags-widget .tags-list li a.active {
    background:<?php echo $color; ?>; 
    border-color: <?php echo $color; ?>;
}

.categori-widget .categori-list li a:hover,
.categori-widget .categori-list li a.active {
    color: <?php echo $color; ?>;
}

.recent-causes-widget .post-list li .post .post-details .post-title:hover {
    color: <?php echo $color; ?>;
}

.single-causes.details .content .footer-text .social-text li a:hover {
    background:<?php echo $color; ?>; 
    border-color: <?php echo $color; ?>;
}
.mybtn1 {
    background:<?php echo $color; ?>; 
}

.input-field:focus {
  border-bottom: 1px solid <?php echo $color; ?> !important;
}

.single-blog .content .top-meta li a i {
    color: <?php echo $color; ?>;
}

.page-center ul.pagination li.active {
  background: <?php echo $color; ?> !important;
}

.blog-details-area .blog-details .content .top-meta li a i {
    color: <?php echo $color; ?>;
}

.tag-widget .tags-list li a:hover {
    background:<?php echo $color; ?>; 
    border-color: <?php echo $color; ?>;
}

.archives-widget .archives-list li a:hover {
    color: <?php echo $color; ?>;
}

.recent-post-widget .post-list li .post .post-details .post-title:hover {
    color: <?php echo $color; ?>;
}

.categori-widget-area .categori-list a:hover {
    color: <?php echo $color; ?>;
}

.ui-accordion .ui-accordion-header {
    background:<?php echo $color; ?>; 
}

.contact-us .contact-section-title .title {
    color: <?php echo $color; ?>;
}
.contact-us .right-area .contact-info .left .icon {
    background:<?php echo $color; ?>;
}

.contact-us .left-area .contact-form ul li .input-field:focus {
  border-bottom: 1px solid <?php echo $color; ?> !important;
}

.contact-us .right-area .social-links ul li a {
    background:<?php echo $color; ?>;
}

.contact-us .right-area .social-links ul li a:hover {
    background:#fec501;
}

.login-signup .log-reg-tab-menu .nav li a.active {
    background:<?php echo $color; ?>;
}

.login-signup .login-area .submit-btn {
    background:<?php echo $color; ?>;
    border: 1px solid  #ffc107;
}

.login-signup .login-area .login-form .form-input i {
    color: <?php echo $color; ?>;
}

.donate .overlay {
    background:<?php echo $color; ?>;
}

.mainmenu-area .navbar #main_menu .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover,
.mainmenu-area .navbar #main_menu .navbar-nav .nav-item .dropdown-menu .dropdown-item.active {
    color: <?php echo $color; ?>;
}

.mainmenu-area .navbar #main_menu .navbar-nav .nav-item .dropdown-menu {
   border-top: 3px solid <?php echo $color; ?>; 
}

.footer .copy-bg .content .content p a {
    color: <?php echo $color; ?>;
}

.team .team-member .bg-color .t-img .name {
  background: <?php echo $color; ?>b3;
}

.contact-us .left-area .contact-form .captcha-area li .input-field:focus {
  border-bottom: 1px solid <?php echo $color; ?> !important;
}




.contact-us .right-area .contact-info {
  border-bottom: 2px solid <?php echo $color; ?>;
}


.makea-donation .content .donet-price li a:hover {
    background: <?php echo $color; ?>;
}

.video-play-btn2:before {
    background: <?php echo $color; ?>;
}

.thankyou .content {
    background: <?php echo $color; ?>;
    }




.mainmenu-area .navbar #main_menu .navbar-nav .nav-link::before {
    background: <?php echo $secendary_color; ?>;
}

.page-center ul.pagination li {
    background: <?php echo $color; ?>1a !important;
}


.hero-area .content .links-area .link.left {
  background: <?php echo $secendary_color; ?>;
}

.hero-area .content .sub-title {
  color: <?php echo $secendary_color; ?>;
}

.single-causes.details .content .footer-text .social-text li a {
    color: <?php echo $secendary_color; ?>;
}

.single-causes.details .content .top-meta .left span {
    color: <?php echo $secendary_color; ?>;
}

.single-causes .content .top-meta .right span {
    color: <?php echo $secendary_color; ?>;
}

.single-causes.details .content .top-meta .right span {
    color: <?php echo $secendary_color; ?>;
}

.section-heading .sub-title {
    color: <?php echo $secendary_color; ?>;
}

.statistics .single-statistics-box .right .num {
    color: <?php echo $secendary_color; ?>;
}

.single-causes .content .top-meta .left span {
    color: <?php echo $secendary_color; ?>;
}

.single-causes .content .mybtn1 {
  background: <?php echo $secendary_color; ?>;
}

.single-causes .content .top-meta .right span {
    color: <?php echo $secendary_color; ?>;
}

.donate .content .donet-btn-area .mybtn1 {
    background: <?php echo $secendary_color; ?>;
}

.request-to-call .request-form .mybtn1 {
    background: <?php echo $secendary_color; ?>;
}

.team .owl-controls .owl-dots .owl-dot.active {
    background: <?php echo $secendary_color; ?>;
}

.testimonial .owl-controls .owl-dots .owl-dot.active {
    background: <?php echo $secendary_color; ?>;
}

.testimonial .single-testimonial .people .img img {
  border: 7px solid <?php echo $secendary_color; ?>;
}

.testimonial .single-testimonial .people .designation {
    color: <?php echo $secendary_color; ?>;
}

.blog .owl-controls .owl-dots .owl-dot.active {
    background: <?php echo $secendary_color; ?>;
}

.address-widget .about-info li p i {
    color: <?php echo $secendary_color; ?>;
}

.address-widget .about-info li:hover i {
  background:<?php echo $secendary_color; ?>;
  border-color:<?php echo $secendary_color; ?>;
}

.footer .fotter-social-links ul li a {
    color: <?php echo $secendary_color; ?>;
}

.footer .fotter-social-links ul li a:hover {
background:<?php echo $secendary_color; ?>;
}

.search-form-area-mobile {
  border-top: 3px solid <?php echo $secendary_color; ?>;
}

.login-signup .login-area .submit-btn {
    border: 1px solid <?php echo $secendary_color; ?>;
}

.footer-newsletter-widget .newsletter-form-area button:hover {
    background:<?php echo $secendary_color; ?>;
}

.contact-us .right-area .social-links ul li a:hover {
    background:<?php echo $secendary_color; ?>;
}

.mybtn1:hover {
    background:<?php echo $secendary_color; ?>;
}

.makea-donation .preloaded_amountValue {

    background:<?php echo $secendary_color; ?>;
  border:1px solid <?php echo $secendary_color; ?>;
}

.makea-donation .content .donet-price li a {
    background:<?php echo $secendary_color; ?>;
}
.thankyou .content .icon {
      color: <?php echo $secendary_color; ?>;
      }

.makea-donation .preloaded_amountValue {
    border: 1px solid white;
    background:#7b808a73;
    color: #black;
}

.makea-donation .preloaded_amountValue {
    color:black;
}