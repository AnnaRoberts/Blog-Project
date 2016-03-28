<?php get_header(); ?>         
                
        <section class="row">
            <div class "three columns">
                <?php dynamic_sidebar('front-page'); ?>
            </div>
            <div class "six columns">
                <?php dynamic_sidebar('slideshow'); ?>
            </div>
                          
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                    <div clas="four columns">    	
                        <div class="row">
                            <div class="blog-displays">
                                <div class="twelve columns">
                                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail');} ?>
                                </div>
                                <div class="twelve columns">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                     <?php the_excerpt();?>
                                     <a href="<?php the_permalink(); ?>">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } // end while                        		 
                } //end if
                ?>
            
        </section>

                    
 <?php get_footer(); ?>