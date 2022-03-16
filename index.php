<?php get_header(); ?>

<main class="container">
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
            echo "<p>Não há posts</p>" ;
        endif;
        ?>
    </section>
    <aside>
        <div class="container">
            <?php 

                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => '5',
                    'orderby' => 'title'
                );

                $portfolioItens = new WP_Query($args);

                while( $portfolioItens->have_posts()) : 
                    $portfolioItens->the_post();
                
            
            ?>
                <div class="portfolio-item">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <a href="<?php the_permalink() ?>">
                    <?php 
                    if(has_post_thumbnail()){
                        the_post_thumbnail('imagem_horizontal');
                    }
                    ?>
                    </a>
                    <p><a href="<?php the_permalink() ?>">Saiba mais</a>
                </p>
                </div>
            <?php endwhile; ?>
        </div>
    </aside>
</main>
<?php get_footer(); ?>