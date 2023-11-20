<?php get_header() ?>
    <div class="container">
        <div class="content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                        <?php the_content(); ?>  
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer() ?>