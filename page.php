<?php
get_header();
?>
<section class="section--grey js--nav">
    <div class="container">
        <div class="u-text-center u-margin-bottom-big">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();
?>