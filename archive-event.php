<?php get_header(); ?>
<section class="section">
    <div class="container">
        <div class="u-text-center u-margin-bottom-medium u-margin-top-huge">
            <h2 class="u-margin-bottom-small">
                All Events
            </h2>
        </div>
        <div class="row-1-1-1">
            <?php
            while (have_posts()) {
                the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="scene">
                        <div class="card">
                            <div class="card__img-box card__img-box--1">&nbsp;</div>
                            <div class="card__bottom">
                                <h4 class="card__title"><?php the_title(); ?></h4>
                                <h4 class="card__price">$89</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <?php
            }
            ?>
        </div>
        <?php
        echo paginate_links();
        ?>
    </div>
    </div>
</section>
<?php get_footer(); ?>