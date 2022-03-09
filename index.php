<?php get_header(); ?>

<main class="container">
    <?php
    if( have_posts() ) :
        while ( have_posts() ) : the_post(); 
    ?>
    <section>
        <div class="container">
            <h2> <a href="<?php the_permalink() ?>">
                <?php the_title() ?></a>
            </h2>
            <?php the_content() ?>
        </div>
    </section>
    <?php 
        endwhile;
    else :
        echo "<p>Não há posts</p>" ;
    endif;
    ?>
    <aside>
    <?php get_sidebar(); ?>
    </aside>
</main>
<?php get_footer(); ?>