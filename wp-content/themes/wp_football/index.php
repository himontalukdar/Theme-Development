<?php get_header();?>
<section class="post-area">
<?php 

//loops
if(have_posts()):
    while(have_posts()):
        the_post();

?>

<?php 
endwhile;
endif;

?>
</section>
<aside class="sidebar">
<?php get_sidebar();?>
</aside>
<?php get_footer();?>