                <footer>
                    <div class="wrapper"> 
                        <div class="foot1">
							<?php
                                wp_nav_menu(
                                    array(
                                    'menu'		  => 'general-footer',
                                    'container'       => '',
                                    'menu_class'	=> 'general'
                                ));
                            ?>
                        </div>
                        <div class="foot2">
                        	<h2>Our Services</h2>
                            <?php
                                wp_nav_menu(
                                    array(
                                    'menu'		  => 'our-services',
                                    'container'       => '',
                                    'menu_class'	=> 'services'
                                ));
                            ?>
                        </div>
                      <div class="foot3">
                       	<h2>Our Services</h2>
                          <article>
                            <a href="index.php">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-article-placeholder.jpg" alt="National Map Centre"/>
                                <div class="vertical-align"><h1>National Map Centre</h1></div> 
                            </a>
                          </article>
                          <article>
                          	<a href="index.php">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-article-placeholder.jpg" alt="Oxford Cartographers"/>
                                <div class="vertical-align"><h1>Oxford Cartographers</h1></div>
                            </a> 
                          </article>
                          <article>
                          	<a href="index.php">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-article-placeholder.jpg" alt="CHK America"/>
                                <div class="vertical-align"><h1>CHK America (FWT in the USA)</h1></div> 
                            </a>
                          </article>
                        </div>
                        <div class="foot4">
                       		<h2>STANDARDS</h2>
                            <ul class="img-list">
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/iso.png" alt="ISO"/></li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/iso.png" alt="ISO"/></li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/iso.png" alt="ISO"/></li>
                            </ul>
                        </div>
                    </div>
                </footer>
    
    		</div> <!-- End of pageContent -->
    	</div> <!-- End of mobileContainer -->
    </div> <!-- End of page -->  
    <?php wp_footer(); ?>
</body>
</html>
