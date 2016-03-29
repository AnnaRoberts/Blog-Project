<?php get_header(); ?>         
                
        <section class="row">
            <div class "three columns">
                <?php dynamic_sidebar('front-page'); ?>
            </div>
            <div class="slideshow">
                <ul>
                    <li>This is my slider</li>
                    <li>Pretty cool?</li>
                    <li>Please dear god work</li>
                </ul>
            </div>
            <div class "six columns">
                <?php dynamic_sidebar('slideshow'); ?>
            </div>
                <div class="container-blog-displays">         
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>  	
                        <div class="row">
                            <div class="blog-displays">
                                <div class="nine columns">
                                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail');} ?>
                                </div>
                                <div class="nine columns">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                     <?php the_excerpt();?>
                                     <a href="<?php the_permalink(); ?>">Read More...</a>
                                </div>
                            </div>
                        </div>   
                    <?php } // end while                        		 
                } //end if
                ?>
                </div> 
            
        </section>
<script src="js/jquery-2.1.4.min (1).js"></script>    
<script src="js/unslider.js"></script> 
<script src="js/main.js"></script>
                    
 <?php get_footer(); ?>