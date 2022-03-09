<?php get_header(); ?>

<main class="container">
    <section>
        <?php
        if( have_posts() ) :
            while ( have_posts() ) : the_post(); 
        ?>
        <content>
            <div class="container">
                <h2> <a href="<?php the_permalink() ?>">
                    <?php the_title() ?></a>
                </h2>
                <?php the_content() ?>
            </div>
        </content>
        <?php 
            endwhile;
        else :
            echo "<p>Não há posts</p>" ;
        endif;
        ?>
    </section>
    <aside>
        <div class="container">
            <?php get_sidebar(); ?>
        </div>
    </aside>
</main>
<?php get_footer(); ?>