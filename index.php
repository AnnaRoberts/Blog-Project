<?php get_header(); ?>         
                
        <section class="row">
            <div class "three columns">
                <?php dynamic_sidebar('front-page'); ?>
            </div>
            <div class="seven columns">      
                <div class="slideshow">
                    <ul>
                        <li style="background-image: url('slide01.jpg');">
                            <div class="slides-message">
                                <h1>The Wildflower Blog Series</h1>
                            </div>
                        </li>
                        <li style="background-image: url('slide03.jpg');">
                            <div class="slides-message">
                                <h1>The Wildflower Blog Series</h1>
                            </div>
                        </li>
                        <li style="background-image: url('slide02.jpg');">
                            <div class="slides-message">
                                <h3>The Wildflower Blog Series</h3>
                            </div>
                        </li>
                    </ul>                
                </div>
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