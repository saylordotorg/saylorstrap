<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


?>

<footer id="page-footer" class="container-fluid p-0 bg-dark text-light">
    <div id= "footer-container" class="container-fluid p-0">
        <div id="footer-navbar" class="container-fluid d-inline-flex flex-row align-items-center justify-content-center justify-content-sm-between bg-primary text-white">
            <div id="footer-logo-share-navbar" class="m-0 my-sm-1 mr-sm-auto d-none d-sm-inline-flex">
                <div class="d-inline-flex mr-1 my-auto">
                    <div class="footer-logo" align="center">
                        <a class="footer-logo" href="/"><img style="width: auto;height: 30px;" src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/logobar.jpg" alt=""></a>
                    </div>
                </div>
                <div id="footer-share" class="footer-share d-inline-flex flex-row justify-content-start ml-1 mr-auto mt-auto mb-auto">
                    <a title="Facebook | /SaylorFoundation" target="_blank" href="https://www.facebook.com/SaylorFoundation" class="fab fa-facebook-f fa-2x p-1"></a>
                    <a title="Twitter | @saylordotorg" target="_blank" href="https://twitter.com/saylordotorg" class="fab fa-twitter fa-2x p-1"></a>
                    <a title="Instagram | @saylordotorg" target="_blank" href="https://www.instagram.com/saylordotorg" class="fab fa-instagram fa-2x p-1"></a>
                    <a title="GitHub | /saylordotorg" target="_blank" href="https://github.com/saylordotorg" class="fab fa-github fa-2x p-1"></a>
                   <a title="LinkedIn | Saylor Academy" target="_blank" href="https://www.linkedin.com/school/1229385/" class="fab fa-linkedin-in fa-2x p-1"></a>
                </div>
            </div>
            <div id="footer-links" class="d-inline-flex flex-row flex-nowrap align-items-center justify-content-between justify-content-sm-end mx-auto mr-sm-1 my-2">
                <ul class="footer-nav d-flex align-items-center justify-content-center list-inline mt-auto mb-auto" >
                    <?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => 'footer1',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
				); ?>
                </ul>
            </div>
        </div>

        <div id="footer-logo-share-bottom-container" class="container-fluid d-sm-none mx-auto my-2 my-sm-0" align="center">
            <div id="footer-logo-share-bottom" class="d-inline-flex flex-row d-sm-none justify-content-between mx-auto">
                <div class="d-inline-flex my-1">
                    <div class="footer-logo mx-auto">
                        <a class="footer-logo" href="/"><img style="width: auto;height: 50px;" src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/logobarfooter.jpg" alt=""></a>
                    </div>
                </div>
                <div id="footer-share" class="footer-share d-inline-flex flex-row justify-content-around my-auto mx-auto">
                    <a title="Facebook | /SaylorFoundation" target="_blank" href="https://www.facebook.com/SaylorFoundation" class="fab fa-facebook-f fa-3x p-1 mx-auto"></a>
                    <a title="Twitter | @saylordotorg" target="_blank" href="https://twitter.com/saylordotorg" class="fab fa-twitter fa-3x p-1 mx-auto"></a>
                    <a title="Instagram | @saylordotorg" target="_blank" href="https://www.instagram.com/saylordotorg" class="fab fa-instagram fa-3x p-1 mx-auto"></a>
                    <a title="GitHub | /saylordotorg" target="_blank" href="https://github.com/saylordotorg" class="fab fa-github fa-3x p-1"></a>
                   <a title="LinkedIn | Saylor Academy" target="_blank" href="https://www.linkedin.com/school/1229385/" class="fab fa-linkedin-in fa-3x p-1 mx-auto"></a>
                </div>
            </div>
        </div>

      


        <div id="footer-text-container" class="font-weight-light small text-center d-flex flex-column container-fluid mt-1">
            <p style="font-size: 11px;">© Saylor Academy 2010-2017 except as otherwise noted. Excluding course final exams, content authored by Saylor Academy is available under a <span>Creative Commons Attribution 3.0 Unported</span> license. Third-party materials are the copyright of their respective owners and shared under various licenses. See <span>detailed licensing information</span>. <br>Saylor Academy and Saylor.org® are trade names of the Constitution Foundation, a 501(c)(3) organization through which our educational activities are conducted.</p>
        </div>

        <div class="d-flex-row d-flex-md-inline-row flex-wrap" align="center">
            <div id="footer-ccby-logo" class="ccby-logo float-md-right mr-md-5">
                <img style="width:80px;height: auto;"" src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/logofooter.jpg" alt="">
            </div>
            <div class="col-md-9">
                <p class="mx-auto my-auto d-flex flex-nowrap">
                	<h5>
                		<a href="https://www.saylor.org/sitemap">Sitemap</a> | 
                		<a href="https://www.saylor.org/terms-of-use">Terms of Use</a> | <a href="https://www.saylor.org/privacy-policy">Privacy Policy</a>
                	</h5>
                </p>
            </div>
        </div>
        <div id="footer-end" class="container-fluid text-center">
        	<p style="margin-bottom: 0"><br><br></p>
        </div>
    </div>
</footer>

<div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="" tabindex="-1">
    
    	<nav class="list-group d-md-none m-b-1">
		        <?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
		); ?>
		</nav>
   
</div>



<?php wp_footer(); ?>

    <script>
	jQuery( document ).ready(function() {
	  jQuery("#budrawer").click(function() {
	  	jQuery("#nav-drawer").toggleClass("closed");
	  	jQuery("body").toggleClass("drawer-open-left");
	  });
	});
    </script>


</body>

</html>

