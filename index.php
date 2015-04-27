<?php get_header(); ?>
<div id="container">
    <?php get_sidebar(); ?>
    <div id="content">
        <?php /* The Loop — with comments! */ ?>  
        <?php while ( have_posts() ) : the_post() ?>
        <?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>  
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>    
            <?php /* an h2 title */ ?>      
            <h2 class="entry-title">
                <?php the_title(); ?>
            </h2>
            <div class="entry-discript">
                <?php the_meta(); ?>
            </div>
            <br />
            <hr />
            <?php /* The entry content */ ?>    
            <div class="entry-content">
                <?php the_content(); ?>
            </div><!– .entry-content –>
            <br />
            <br />
            <hr />
        </div><!– #post-<?php the_ID(); ?> –>
        <?php /* Close up the post div and then end the loop with endwhile */ ?>  
        <?php endwhile; ?>
    </div><!– #content –>  
</div><!– #container –>
 
<div id="primary" class="widget-area">
</div><!– #primary .widget-area –>
 
<div id="secondary" class="widget-area">
</div><!– #secondary –>
<?php get_footer(); ?>
<!--
http://themetation.com/2008/07/14/how-to-create-wordpress-themes-from-scratch-part-1/
http://themeshaper.com/wordpress-themes-templates-tutorial/
http://www.wpdesigner.com/2007/02/19/so-you-want-to-create-wordpress-themes-huh/
//-->