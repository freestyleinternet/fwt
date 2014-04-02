<?php 
/*
	Template Name: News/Blog 
*/
get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<section>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
 					<?php endwhile; endif; ?>
                   
                       <div class="posts">
                            <?php 
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								
								$args = array( 'post_type' => 'post', 'posts_per_page' => -1);
								$wp_query = new WP_Query($args);
								
								while ( have_posts() ) : the_post(); 
							?>
                            <article>
                            	<a href="<?php echo get_permalink(); ?>">
                                	<?php 
										if ( has_post_thumbnail() ) { 
											the_post_thumbnail('newsthumb', array('class' => 'alignleft'));
										}
									?>
                                    <h1><?php the_title(); ?></h1>
                                	<h2><?php the_time('j/n/Y'); ?></h2>
                                    <p><?php echo truncate($post->post_content, 180); ?> <span><img src="<?php bloginfo('template_directory'); ?>/assets/images/small-right-arrow-black.svg"></span></p>
                                </a>
                            </article>
                             <?php endwhile; ?>
                             <ul class="navigation">
                                <li class="left"><?php next_posts_link( '&larr; Older posts' ); ?></li>
                                <li class="right"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></li>
                            </ul>
                        </div>
					
                </section>
                <?php get_sidebar(); ?>
                
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>
