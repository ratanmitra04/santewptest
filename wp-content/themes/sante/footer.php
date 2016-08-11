<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!--FOOTER SECTION-->
       <footer>
           <div class="container-fluid">
                <div class="row">
                    <div class="top-footer-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    
                                        <div class="about-sante-block">
                                            <img src="<?php bloginfo('template_directory')?>/images/footer_logo.png" class="img-responsive" alt="logo-img">
                                            <?php dynamic_sidebar('footer-description');?>
                                        </div>
                                    
                                </div>
                                <?php dynamic_sidebar('reach-us');?>
                            </div>
                        </div><!--end of container-->
                    </div>
                </div>
            </div><!--end of container-fluid-->

            <div class="container-fluid">
                <div class="row">
                    <div class="bottom-footer-bg">
                    	<?php dynamic_sidebar('footer-copyright');?>
                        <!--end of container-->
                    </div>
                </div>
            </div><!--end of container-fluid-->
        </footer>
        <!--SCRIPTS-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php bloginfo('template_directory')?>/js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/script.js"></script>
        

<?php wp_footer(); ?>
</body>
</html>
