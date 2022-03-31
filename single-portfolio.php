<?php get_header(); ?>

<main class="container">

    <section>
        <div class="container">
            <h2> <?php the_title() ?> </h2>
            <?php the_content() ?>
            <?php 
                if(has_post_thumbnail()){
                    the_post_thumbnail('imagem_horizontal');
                }
            ?>

            <h3>Autor do livro</h3>
            <?php 
            $image = get_field('autor_do_livro');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <p><strong>Código: </strong> 
                <?php the_field('codigo'); ?>
            </p>
        </div>
    </section>

    <aside>
        <?php 

            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => '5',
                'orderby' => 'title',
                'post__not_in' => [get_the_ID()]
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
                    the_post_thumbnail();
                }
                ?>
                </a>
                <p><a href="<?php the_permalink() ?>">Saiba mais</a></p>
            </div>
        <?php endwhile; ?>
    </aside>

</main>
<?php get_footer(); ?>