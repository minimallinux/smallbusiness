html body {
	color: <?php the_field('body_text_color','option');?>;
}

html ::selection {
  background: <?php the_field('primary_color','option');?>;
}
html ::-webkit-selection {
  background: <?php the_field('primary_color','option');?>;
}
html ::-moz-selection {
  background: <?php the_field('primary_color','option');?>;
}
html ::-o-selection {
  background: <?php the_field('primary_color','option');?>;
}
html ::-ms-selection {
  background: <?php the_field('primary_color','option');?>;
}

html blockquote:before {
  color: <?php the_field('primary_color','option');?>;
}

html a:hover{
	color: <?php the_field('primary_color','option');?>;
}
html a:focus{color: <?php the_field('primary_color','option');?>;}

html .checkmark li i{color: <?php the_field('primary_color','option');?>;}

html .backtotop{background:<?php the_field('primary_color','option');?>;}

html .top-btn a{background: <?php the_field('primary_color','option');?>;}

html #cp-header a.navbar-brand:hover h2{color: <?php the_field('primary_color','option');?>;}
html #cp-header .navbar-nav li.current-menu-item a{color: <?php the_field('primary_color','option');?>;}
html #cp-header .navbar-nav li a:hover{color: <?php the_field('primary_color','option');?>;}
html #cp-header .navbar-nav li:hover ul{background: <?php the_field('primary_color','option');?>;}

html .nav-social ul li a:hover{background: <?php the_field('primary_color','option');?>;}

@media(min-width: 992px){
	html #cp-header.active .navbar-nav li a{color: #7a7a7a}
	html #cp-header.active .navbar-nav li.current-menu-item a,html #cp-header.active .navbar-nav li a:hover{color: <?php the_field('primary_color','option');?>;}
	html .nav-social ul li a{background: <?php the_field('primary_color','option');?>;}
}
html .banner-form  .acf-button{background:  <?php the_field('primary_color','option');?>;}
html .banner-form  .acf-button:hover{color: <?php the_field('primary_color','option');?>;}

html .global-btn{background: <?php the_field('primary_color','option');?>;}
html .global-btn:hover{border-color: <?php the_field('primary_color','option');?>;color: <?php the_field('primary_color','option');?>;}

html .global-btn.btn-solid{border: solid 2px <?php the_field('primary_color','option');?>;}
html .global-btn.btn-solid:hover{background: <?php the_field('primary_color','option');?>; }

html .testimonial-section .info-outer h2{
	color: <?php the_field('primary_color','option');?>;
}

html .testimonial-section .owl-dots .owl-dot.active span, html .owl-dots .owl-dot:hover span {
    background: <?php the_field('primary_color','option');?>;
    border: 2px solid <?php the_field('primary_color','option');?>;
}

html .our-blog-date {
  background: <?php the_field('primary_color','option');?>;
}

html .blog-item h3 a:hover{color: <?php the_field('primary_color','option');?>;}
html .section_bg{background: <?php the_field('primary_color','option');?>;}
html .cp-title h2::after {
    background-color: <?php the_field('primary_color','option');?>;
}
html .cp-title h3::after {
    background-color: <?php the_field('primary_color','option');?>;
}

html .services-section .services-info .icon-box{
	color: <?php the_field('primary_color','option');?>;
}

html .services-section .services-info .info-block:hover{
	color:<?php the_field('primary_color','option');?>;
}
html .services-info.style-two .icon-box:before{
	border:2px solid <?php the_field('primary_color','option');?>;
}

html .services-section .services-info .info-block:hover .icon-box:before{
	border-color:<?php the_field('primary_color','option');?>;	
}

html .services-section .services-info .info-block:hover a{
	color:<?php the_field('primary_color','option');?>;
}


html .pricing-section-item .number-lists:before{border-top: solid 2px <?php the_field('primary_color','option');?>;border-left: solid 2px <?php the_field('primary_color','option');?>;}
html .pricing-section-item .number-lists:after{border-bottom: solid 2px <?php the_field('primary_color','option');?>; border-right: solid 2px <?php the_field('primary_color','option');?>;}

html .project-section .owl-dots .owl-dot.active span, html .owl-dots .owl-dot:hover span {
    background: <?php the_field('primary_color','option');?>;
    border: 2px solid <?php the_field('primary_color','option');?>;
}

html .bgcolor{background:<?php the_field('primary_color','option');?>;}
html .our-blog-date {
  background: <?php the_field('primary_color','option');?>;
}
html .blog-date {
  color: <?php the_field('primary_color','option');?>;
}
html .blog-item h3 a:hover{color: <?php the_field('primary_color','option');?>;}

html .wp-pagenavi a:hover,html .wp-pagenavi span.current{background: <?php the_field('primary_color','option');?>!important;border-color: <?php the_field('primary_color','option');?>!important;}

html .modal-close{background: <?php the_field('primary_color','option');?>;}


html .form-control:focus {
    box-shadow: 0 0 0 0.2rem <?php the_field('primary_color','option');?>;
}


html .widget ul li a:hover{color: <?php the_field('primary_color','option');?>;}
html .widget ul li span{color: <?php the_field('primary_color','option');?>;}

html .widget .widget-title:after{border-top: solid 2px <?php the_field('primary_color','option');?>;}

html .widget .tagcloud a:hover{background: <?php the_field('primary_color','option');?>;}

html .comments-area .submit{background: <?php the_field('primary_color','option');?>;}

html .comments-area .submit:hover{background: <?php the_field('primary_color','option');?>;}

html .comment-metadata a:hover,

html .comment-metadata a:focus,

html .pingback .comment-edit-link:hover,

html .pingback .comment-edit-link:focus {

	color: <?php the_field('primary_color','option');?>;

}
html .side-post-entry h4 a:hover{color: <?php the_field('primary_color','option');?>;}

html .nf-field-container .nf-field-element input[type="text"]:focus,
html .nf-field-container .nf-field-element input[type="email"]:focus,
html .nf-field-container .nf-field-element input[type="password"]:focus,
html .nf-field-container .nf-field-element input[type="tel"]:focus,
html .nf-field-container .nf-field-element input[type="number"]:focus,
html .nf-field-container .nf-field-element select:focus,
html .nf-field-container .nf-field-element textarea:focus{
	border-color:<?php the_field('primary_color','option');?>;
}


html .field-wrap button, html .field-wrap input[type=button], html .field-wrap input[type=submit]{background: <?php the_field('primary_color','option');?>;border: solid 1px <?php the_field('primary_color','option');?>;}
html .field-wrap button:hover, html .field-wrap input[type=button]:hover, html .field-wrap input[type=submit]:hover{border-color: <?php the_field('primary_color','option');?>;color: <?php the_field('primary_color','option');?>;}

html .acf-map:after{background: <?php the_field('primary_color','option');?>94;}

html .col-box{background-color: <?php the_field('primary_color','option');?>;}

html .counter{color: <?php the_field('primary_color','option');?>;}

html .widget-lists{color: <?php the_field('primary_color','option');?>;}

html .gallery-section .filters li i{display: none;}
html .gallery-section .filters li:hover,
html .gallery-section .filters li.active{
	background: <?php the_field('primary_color','option');?>;
	border-color: <?php the_field('primary_color','option');?>;
}


html .contact-page .row{background: <?php the_field('primary_color','option');?>; }

html .contact-page  .acf-button{background:  <?php the_field('primary_color','option');?>;}
html .contact-page  .acf-button:hover{color: <?php the_field('primary_color','option');?>;border-color: <?php the_field('primary_color','option');?>;}

html .banner-form  .acf-button:hover{color: <?php the_field('primary_color','option');?>;border-color: <?php the_field('primary_color','option');?>;}


/**@media 991px**/@media ( max-width: 991px ){

	html #cp-header .navbar-nav li.current-menu-item a{color: <?php the_field('primary_color','option');?>;}
	html #cp-header .navbar-nav i.toggle-down{background: <?php the_field('primary_color','option');?>;}
	html #cp-header .navbar-nav ul li a:hover{color:<?php the_field('primary_color','option');?>;}


}/**end @media 991px**/

html h1,html h2,html h3,html h4,html h5,html h6 {
	color:<?php the_field('title_color','option');?>;
}
html a{
	color: <?php the_field('secondary_color','option');?>;
}
html .top-info{color: <?php the_field('secondary_color','option');?>;}
html .top-btn a:hover{background: <?php the_field('secondary_color','option');?>;}
html #cp-header{background: <?php the_field('nav_background','option');?>;}

html #footer{background: <?php the_field('footer_background','option');?>;}

html .blog-item h3 a{color: <?php the_field('secondary_color','option');?>;}

html .modal-close:hover{background: <?php the_field('secondary_color','option');?>;}

html .cp-services h4 a{color: <?php the_field('secondary_color','option');?>;}

html .global-btn.light{color: <?php the_field('secondary_color','option');?>}

html .global-btn.btn-solid.light:hover{color: <?php the_field('secondary_color','option');?>;}


html .global-btn.btn-solid{color: <?php the_field('primary_color','option');?>;border: solid 2px <?php the_field('primary_color','option');?>;}
html .global-btn.btn-solid:hover{background: <?php the_field('primary_color','option');?>;}


html .blog-item h3 a{color: <?php the_field('secondary_color','option');?>;}

html .section_bgdark{background: <?php the_field('secondary_color','option');?>;}

html .pricing-section-item .number-lists{background: <?php the_field('secondary_color','option');?>;}