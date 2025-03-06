<?php  get_header();?>

<h1 id="h1">hello</h1>
<button type="button" class="btn btn-warning">Warning</button>
<div >

    <?php
    if(have_posts()):
        while(have_posts()): the_post();
    ?>

    <h2><?php the_title();  ?></h2>
    <small class='post-categories'><?php  the_time("Y/m/d");   ?> in <?php the_category();   ?></small>
    <?php the_post_thumbnail(array(200,200)); ?>
    <p><?php the_content(); ?></p>
    <?php endwhile;  ?>
    <?php endif; ?>
</div>


<div id="sidebar-primary" class='sidebar'>
    <?php if(is_active_sidebar('primary')):  ?>
        <?php dynamic_sidebar('primary');  ?>
        <?php else: ?>
        <!--    Add some text -->
            <?php endif; ?>
</div>

<div id="primary" class='sidebar'>
    <?php do_action('before_sidebar'); ?>
    <?php if(! dynamic_sidebar("sidebar_primary")); ?>
    <aside id='search' class='widget widget_search'>
        <?php get_search_form();?>
    </aside>
    <aside id='archives' class='widget'> 
        <h3 class='widget_title'><?php _e('Archives', 'shape') ; ?></h3>
        <ul>
            <?php wp_get_archives(array('type' => 'monthly'))  ?>
        </ul>
    </aside>
    <aside id='meta' class='widget'>
        <h3 class='widget_title'>
            <?php   _e('Meta', 'shape') ; ?>
        </h3>
        <ul>
            <?php wp_register();  ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    </aside>
    <?php endif;?>

</div>
<?php get_footer();?>

    
