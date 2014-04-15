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
                       	<h2>The CHK Group</h2>
                          
						  <?php while(the_repeater_field('our_partners', 19)): ?>
                          <article>
                            <a href="<?php echo the_sub_field('partner_website_link'); ?>">
                                <img class="borderbox" src="<?php echo the_sub_field('partner_featured_image'); ?>" alt="<?php echo the_sub_field('partner_name'); ?>"/>
                                <div class="vertical-align"><h1><?php echo the_sub_field('partner_name'); ?></h1></div> 
                            </a>
                          </article>
                          <?php  endwhile; ?>
                          
                        </div>
                        <div class="foot4">
                       		<h2>STANDARDS</h2>
                            <ul class="img-list">
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/iso.png" alt="ISO 9001"/></li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/iso2.png" alt="ISO 14001"/></li>
                                <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/iso3.png" alt="ISO 18001"/></li>
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
