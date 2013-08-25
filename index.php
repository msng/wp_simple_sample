<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>

    <body>
        <h1>
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <p><?php bloginfo('description'); ?></p>

        <?php if ( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>

                <div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_content(); ?></div>
                </div>

            <?php endwhile;  ?>
        <?php else: ?>
            <p>No posts.</p>
        <?php endif; ?>

        <?php wp_footer(); ?>
    </body>
</html>
