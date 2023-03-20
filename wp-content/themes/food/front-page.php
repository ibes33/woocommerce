<?php
get_header();
?>

front page

<div class="container">
    <section class="products">

        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="product-listing">
                        <div class="product-listing-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h2><?php the_title(); ?></h2>

                    </div>
                </a>
        <?php
            endwhile;
        endif;

        wp_reset_postdata();
        ?>
    </section>
</div>

<?php
get_footer();
?>