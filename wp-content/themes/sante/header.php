<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        
        <style type="text/css">
        <?php
            $banner=query_posts('post_type=banner'.'&order=asc');
            //$i=0;
      		foreach ($banner as $banner_all)
      		{
      			$hotel_room=wp_get_attachment_image_src(get_post_thumbnail_id($banner_all->ID),'thumb');
      	    ?>
            #carousel-example-generic .carousel-banner-img<?php echo $banner_all->ID;?> {
			background: url('<?php echo $hotel_room[0]; ?>') no-repeat;
			position: absolute;
			top: 0;
			left: 0;
			min-width: 100%;
			height: 100%;
			background-size: cover;
		}
            <?php
            //$i++;
      		}
            ?>
        	
        </style>
        
</head>
<body>
<!--HEADER STARTS-->
        <div id="header-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar-wrapper">
                        <div class="container">
                            <div class="row">
                                <nav class="navbar  navbar-static-top">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span> 
                                        </button>
                                        <a class="navbar-brand" href="#">
                                            <img src="<?php bloginfo('template_directory')?>/images/header-logo.png" class="img-responsive" alt="logo">
                                        </a>
                                    </div>
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                    	<?php
											wp_nav_menu( array(
												'theme_location' => 'primary',
												'menu_class'     => 'primary-menu nav navbar-nav',
											 ) );
										?>
										<?php /*?>
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Reach Us</a></li>  
                                        </ul>
                                        <?php */?>
                                    </div> 
                                </nav>

                            </div>
                        </div><!--end of container-->
                    </div><!--end of nav-wrapper-->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <?php
				            $banner=query_posts('post_type=banner'.'&order=asc');
				            $i=0;
				      		foreach ($banner as $banner_all)
				      		{
				      	    ?>
                            	<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" <?php if ($i==0){?>class="active"<?php }?>></li>
                            <?php 
                            $i++; 
				      		}?>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                        	<?php
				            $banner=query_posts('post_type=banner'.'&order=asc');
				            $i=0;
				      		foreach ($banner as $banner_all)
				      		{
				      	    ?>
                            <div class="item <?php if ($i==0){?>active<?php }?>">
                                <div class="carousel-banner-img<?php echo $banner_all->ID;?>">
                                    <div class="container">
                                    	<?php echo $banner_all->post_content;?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            $i++;
				      		}?>
                        </div>
                    </div><!--end of Carousel-->
                    
                </div>
            </div><!--end of container-fluid-->
        </div>
        <!--END OF HEADER SECTION-->