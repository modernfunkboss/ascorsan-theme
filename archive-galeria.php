<?php get_header(); ?>
<div class="container">


<?php if( have_posts() ) : while( have_posts() ) : the_post();  ?>
      
<?php get_template_part('content_search', get_post_format());   ?>

<?php endwhile;?>

<?php else :
    get_template_part('no_results');
    endif; ?>

</div>
<?php get_footer(); ?>
