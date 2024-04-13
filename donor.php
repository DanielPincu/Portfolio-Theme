<?php get_header() ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

         

            <div class="test">
                <div class="test">

                    <?php
                    $pill_template_loop = new WP_Query(array(
                        "post_type" => "detail",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($pill_template_loop->have_posts()): ?>
                        <?php while($pill_template_loop->have_posts()): $pill_template_loop->the_post() ?>

                            <?php get_template_part("template-parts/details"); ?>
                           

                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
                    <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer() ?>