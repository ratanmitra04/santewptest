<?php
/**
 * Template Name:Home
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
$page_id=get_the_ID();
$page=get_post($page_id);
$title=$page->post_title;
$content=$page->post_content;


$vendor_management = get_post_meta( $page_id, 'Vendor Management', true );
$catalog_management = get_post_meta( $page_id, 'Catalog Management', true );
$workflow_management = get_post_meta( $page_id, 'Workflow Management', true );
$payment_gateway = get_post_meta( $page_id, 'Payment Gateway Integration', true );
$commission_management = get_post_meta( $page_id, 'Commission Management', true );
$affiliate_management = get_post_meta( $page_id, 'Affiliate Management', true );
$customer_management = get_post_meta( $page_id, 'Customer Management', true );
$analytics = get_post_meta( $page_id, 'Analytics', true );
?>
        <!--BODY SITE-->
        <div id="body-site">
            <div class="container">
                <div class="market-place-section">
                    <h1>Marketplace Solutions</h1>
                    <hr>
                    <div class="row">
                    	<?php dynamic_sidebar('marketplace-solutions');?>
                    </div>
                    <div class="row">
                        <div class="scroll-down-anchor-link">
                            <a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!--end of market-place-section-->

                <div class="awesome-features-section">
                    <h1>Awesome Features</h1>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="awesome-features-left-block">
                                <div class="feature-item">
                                    <div class="features-title">
                                        <img src="<?php bloginfo('template_directory')?>/images/vendor.jpg" alt="img">
                                        <h2>Vendor Management</h2>
                                    </div>
                                    <p><?php echo $vendor_management;?></p>
                                </div>
                                <div class="feature-item">
                                    <div class="features-title">
                                        <img src="<?php bloginfo('template_directory')?>/images/catalog.jpg" alt="img">
                                        <h2>Catalog Management</h2>
                                    </div>
                                    <p><?php echo $catalog_management;?></p>
                                </div>
                                <div class="feature-item">
                                    <div class="features-title">
                                        <img src="<?php bloginfo('template_directory')?>/images/workflow.jpg" alt="img">
                                        <h2>Workflow Management</h2>
                                    </div>
                                    <p><?php echo $workflow_management;?></p>
                                </div>
                                <div class="feature-item">
                                    <div class="features-title">
                                        <img src="<?php bloginfo('template_directory')?>/images/payment.jpg" alt="img">
                                        <h2>Payment Gateway Integration</h2>
                                    </div>
                                    <p><?php echo $payment_gateway;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="awesome-features-right-block">
                                <div class="feature-item">
                                    <div class="features-title">
                                        <h2>Commission Management</h2>
                                        <img src="<?php bloginfo('template_directory')?>/images/commission.jpg" alt="img">
                                    </div>
                                    <p><?php echo $commission_management;?></p>
                                </div>
                                <div class="feature-item">
                                    <div class="features-title">
                                        <h2>Affiliate Management</h2>
                                        <img src="<?php bloginfo('template_directory')?>/images/affiliate.jpg" alt="img">
                                    </div>
                                    <p><?php echo $affiliate_management;?></p>
                                </div>
                                <div class="feature-item">
                                    <div class="features-title">
                                        <h2>Customer Management</h2>
                                        <img src="<?php bloginfo('template_directory')?>/images/customer.jpg" alt="img">
                                    </div>
                                    <p><?php echo $customer_management;?></p>
                                </div>
                                <div class="feature-item">
                                    <div class="features-title">
                                        <h2>Analytics</h2>
                                        <img src="<?php bloginfo('template_directory')?>/images/analytics.jpg" alt="img">
                                    </div>
                                    <p><?php echo $analytics;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="scroll-down-anchor-link">
                            <a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!--end of awesome-features-section-->

                <!--MARKET PLACE-->
                <div class="market-place-section">
                    <div class="row">
                        <h1>Marketplace Types</h1>
                        <hr>
                    
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="seperator">
                                    <img src="<?php bloginfo('template_directory')?>/images/e-learning.jpg" class="img-responsive">
                                    <div class="market-item-info">
                                        <img src="<?php bloginfo('template_directory')?>/images/learning-logo.png" class="img-responsive">
                                        <h2>E-Learning</h2>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="seperator">
                                    <img src="<?php bloginfo('template_directory')?>/images/food-beverage.jpg" alt="food-beverage-img" class="img-responsive">
                                    <div class="market-item-info">
                                        <img src="<?php bloginfo('template_directory')?>/images/beverage-logo.png" class="img-responsive">
                                        <h2>Food & Beverage</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="seperator">
                                    <img src="<?php bloginfo('template_directory')?>/images/retail-goods.jpg" alt="retail-goods-img" class="img-responsive">
                                    <div class="market-item-info">
                                        <img src="<?php bloginfo('template_directory')?>/images/goods-logo.png" class="img-responsive">
                                        <h2>Retail & Goods</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="seperator">
                                    <img src="<?php bloginfo('template_directory')?>/images/logistics.jpg" alt="logistics-img" class="img-responsive">
                                    <div class="market-item-info">
                                        <img src="<?php bloginfo('template_directory')?>/images/logistics-logo.png" class="img-responsive">
                                        <h2>Logistics</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="seperator">
                                    <img src="<?php bloginfo('template_directory')?>/images/healthcare.jpg" alt="healthcare-img" class="img-responsive">
                                    <div class="market-item-info">
                                        <img src="<?php bloginfo('template_directory')?>/images/healthcare-logo.png" class="img-responsive">
                                        <h2>Healthcare</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="seperator">
                                    <img src="<?php bloginfo('template_directory')?>/images/services.jpg" alt="learning-img" class="img-responsive">
                                    <div class="market-item-info">
                                        <img src="<?php bloginfo('template_directory')?>/images/services-logo.png" class="img-responsive">
                                        <h2>Services</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="scroll-down-anchor-link">
                            <a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!--end of market-place-section-->
            </div> 

            <div class="container-fluid">
                <div class="row">
                    <div class="success-stories-slider-block">
                        <h1>Success Stories</h1>
                        <hr>
                        <div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                            <?php $success_stories = query_posts('post_type=success-stories'.'&order=asc');
                            $i=0;
                            foreach ($success_stories as $success_stories_all) {
					        	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $success_stories_all->ID ), 'thumb' );
					        ?>
                                <div class="item <?php if ($i==0){?>active<?php }?>">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="row">
                                            <img src="<?php echo $image[0];?>" alt="Image"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="row">
                                            <div class="carousel-item-content">
                                            	<?php echo $success_stories_all->post_content;?>
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                                <?php
                                $i++; 
						        }?>
                                <!--/item-->
                            </div><!--end of carousel inner-->
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                            <?php 
                            $j=0;
                            foreach ($success_stories as $success_stories_all) {
                            ?>
                            	<li data-target="#myCarousel" data-slide-to="<?php echo $j;?>" <?php if ($j==0){?>class="active"<?php }?>></li>
                           	<?php $j++; }?>
                            </ol>    
                        </div>
                    </div><!--end of success-stories-slider-block-->
                </div>
            </div>
        

            <div class="container">
                <div class="partners-section">
                    <h1>Partners</h1>
                    <hr>
                    <div class="row">
                        <div class="partners-logos-block">
                        <?php $partners = query_posts('post_type=partners'.'&order=asc');
                            foreach ($partners as $partners_all) {
					        	$image_partners = wp_get_attachment_image_src( get_post_thumbnail_id( $partners_all->ID ), 'thumb' );
					        ?>
	                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
	                                <img src="<?php echo $image_partners[0];?>" alt="<?php echo $partners_all->post_name;?>" class="img-responsive">    
	                            </div>
                            <?php }?>
                        </div> 
                    </div>
                </div><!--end of partners-section-->
                <div class="row">
                    <div class="get-started-section">
                        <h1>Get Started</h1>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                        <a href="#"><button>Get Started</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="scroll-up-anchor-link">
                        <a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                        <p>Go to Top</p>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF BODY SITE-->
        
<?php //get_sidebar(); ?>
<?php get_footer(); ?>