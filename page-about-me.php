<?php
    // Template Name: About Page
?>


<?php  get_header();?>

<h1 id="h1">hello</h1>

<?php
if(have_posts()):
    while(have_posts()): the_post();
?>

<h2><?php the_title();  ?></h2>
<p><?php the_content(); ?></p>
<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer();?>



    
