
<?php get_header(); ?>  
    
    <div class="row">
        <div class="about">
        <div class="eight columns">
            <?php if (have_posts()) :     
                while (have_posts()) : the_post(); ?> 
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                 endwhile;
            endif; ?>            
        </div>
        </div>
         <!-- BEGIN SIDEBAR -->
        <div class="three columns">
            <?php dynamic_sidebar('profile-widget'); ?>
        </div>
    <!-- END SIDEBAR -->
    </div>

<?php get_footer(); ?>