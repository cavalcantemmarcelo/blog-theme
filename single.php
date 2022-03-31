<?php get_header(); ?>

<main class="container">

    <section>
        <div class="container">
            <h2> <?php the_title() ?> </h2>
            <?php the_content() ?>
            <?php the_meta() ?>
        </div>
    </section>
    <aside>
        <?php 
            if(has_post_thumbnail()){
                the_post_thumbnail();
            }
        ?>
    </aside>
    
</main>
<?php get_footer(); ?>