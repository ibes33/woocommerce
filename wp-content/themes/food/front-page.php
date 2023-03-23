<?php
get_header();
?>

<!-- Swiper -->
<div class="container">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img width="400" height="400" alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/s1.png"></div>
            <div class="swiper-slide"><img width="400" height="400" alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/s2.png"></div>
            <div class="swiper-slide"><img width="400" height="400" alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/s3.png"></div>
            <div class="swiper-slide"><img width="400" height="400" alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/s4.png"></div>
            <div class="swiper-slide"><img width="400" height="400" alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/images/s5.png"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- toate produsele -->
<div class="container">

    <button class="product-btn">
        Vezi toate bunatatile
    </button>

    <div class="products">

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
    </div>
</div>

<!-- noutati -->
<div class="container">

    <h2>
        Noutati
    </h2>

    <div class="swiper products-news">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'product',
                'product_tag' => 'new',
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <a href="<?php the_permalink(); ?>" class="swiper-slide">
                        <div class=" ">
                            <div class=" ">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <!-- <span class="price"><?php woocommerce_template_loop_price(); ?></span> -->
                            <span>$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                        </div>
                    </a>
            <?php
                endwhile;
            endif;

            wp_reset_postdata();
            ?>

        </div>
        <div class="swiper-pagination"></div>
    </div>

</div>

<?php
get_footer();
?>