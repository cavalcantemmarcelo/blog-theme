<?php get_header(); ?>

<main class="container">
    
    <aside>
        <div class="container">
            <?php get_sidebar(); ?>
        </div>
    </aside>
    <section>
        <?php
        if( have_posts() ) :
            while ( have_posts() ) : the_post(); 
        ?>
        <content>
            <div class="container">
                <h2><a href="<?php the_permalink() ?>">
                    <?php the_title() ?></a>
                </h2>
                <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail('imagem_horizontal');
                    }
                ?>
                <?php the_excerpt() ?>
                <p><a href="<?php the_permalink() ?>">
                    Saiba mais</a>
                </p>
            </div>
        </content>
        <?php 
            endwhile;
        else :
            echo "<p>Não há itens de portfólio.</p>" ;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>