<?php get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<section>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </section>
                
                <aside>
                	<?php get_template_part( 'templates/partials/inc-socialbuttons'); ?>
                	
                    <div class="homeblock update">
                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/no-right-of-way.jpg">
                            <h2>FWT UPDATE</h2>
                            <p>FWT win the contract to supply all street  Centro Transport Executive that is running so the text limit is running here to two lines  read more...</p>
                            <span class="yellowimg arrow thinner">News</span>
                        </a>
                  </div>
                  
                  <div class="col homeblock contactblock">
                        <a href="#">
                            <h2>CONTACT US</h2>
                            <span class="yellowimg arrow thinner">View</span>
                        </a>
                  </div>
                  
                </aside>
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>
