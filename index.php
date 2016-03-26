<?php get_header(); ?>         
                
        <section class="row">
            <div class "three columns">
                <?php dynamic_sidebar('front-page'); ?>
            </div>
            <div class "six columns">
                <?php dynamic_sidebar('slideshow'); ?>
            </div>
            <div class="my-slider">
                <ul>
                    <li>My slide</li>
                    <li>Another slide</li>
                    <li>My last slide</li>
                </ul>
            </div>
            <div class="nine columns">               
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        	
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
            

                    <?php } // end while                        		 
                } //end if
                ?>
            </div>

        </section>

<script src="//code.jquery.com/jquery-2.1.4.min (1).js"></script>
<script src="/js/unslider-master/src/js/unslider.js"></script> 
<script src="js/main.js"></script>

                    
 <?php get_footer(); ?>