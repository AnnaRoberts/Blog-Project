<?php 
/* Template Name: Archive Page */

get_header(); ?>  

<div class="archive-intro">
    <h3> Please take a look through all the past blogs!</h3>
    <h5>If you are looking for something specific, please use the search bar.</h5>
</div>

<div class="row">
    <div class="archive-container">
        <div class="twelve columns">
            <h3>Blogs by Post Date:</h3>
            <ul>
                 <?php wp_get_archives('type=postbypost'); ?>
            </ul>
        </div>  	
    </div>
</div>
<?php get_footer(); ?>