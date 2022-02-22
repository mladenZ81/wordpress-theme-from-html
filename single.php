<?php while(have_posts()): the_post(); ?>
    <h1><?php the_title() ?></h1>
    <p><?php the_category(', ') ?><?php the_date() ?> by <?php the_author() ?></p>
    <div><?php the_content() ?></div>
<?php endwhile ?>