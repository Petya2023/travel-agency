<?php get_header(); ?>

<section class="section section--grey js--nav">
    <div class="container">
        <div class="u-text-center u-margin-bottom-big">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
        <div class="row-2-1">
            <div class="page-content__info-box">
                <div class="single-content__img-box">
                    <img src="<?php the_field('image'); ?>" alt="" class="single-content__img">
                </div>
            </div>
            <div class="page-content">
                <div class="page-content__right__info u-margin-bottom-small">
                    <div class="page-content__info-box">
                        <i class="fa-solid fa-train icon icon--circle"></i>
                        <p>Вид транспорт: <?php the_field('type_of_transport'); ?></p>
                    </div>
                    <?php if (get_field('destination')): ?>
                        <div class="page-content__info-box">
                            <i class="fa-solid fa-location-crosshairs icon icon--circle"></i>
                            <p>Дестинация: <?php the_field('destination'); ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="page-content__info-box">
                        <i class="fa-regular fa-clock icon icon--circle"></i>
                        <p>Продължителност: <?php the_field('duration'); ?></p>
                    </div>

                    <div class="page-content__info-box">
                        <i class="fa-solid fa-calendar-days icon icon--circle"></i>
                        <p>Дати:
                            <?php
                            for ($i = 0; $i < 10; $i++) {
                                ?>     <?php
                                     the_field('date' . $i);
                            }
                            ?>
                        </p>
                    </div>

                    <div class="page-content__info-box">
                        <i class="fa-solid fa-clipboard-list icon icon--circle"></i>
                        <p>Оферта №: <?php the_field('offer_number'); ?></p>
                    </div>
                </div>
                <p class="price u-margin-bottom-small">Цена от <?php the_field('price'); ?> лв.</p>
                <a class="btn btn--yellow btn-open-modal">Запитване</a>
            </div>
            <div class="page-content__left">
                <div class="page-content page-content__box--2">
                    <h4>Програма</h4>

                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
            <div class="page-content__right">
                <?php if (get_field('the_price_includes')): ?>
                    <div class="page-content page-content__right__box--2 u-margin-bottom-small">
                        <h4>Цената включва:</h4>
                        <ul>
                            <?php
                            for ($i = 0; $i < 11; $i++) {
                                ?>
                                <li><?php the_field('li' . $i); ?></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if (get_field('the_price_doesnt_include')): ?>
                    <div class="page-content page-content__right__box--3">
                        <h4>Цената НЕ включва:</h4>
                        <ul>
                            <?php
                            for ($i = 0; $i < 11; $i++) {
                                ?>
                                <li><?php the_field('linegative' . $i); ?></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- <div class="splide" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="<?php echo get_theme_file_uri('assets/src/img/coast.jpg') ?>"
                            alt="">Slide 01</li>
                    <li class="splide__slide"><img src="<?php echo get_theme_file_uri('assets/src/img/mountains.jpg') ?>"
                            alt="">Slide 02</li>
                    <li class="splide__slide">Slide 03</li>
                </ul>
            </div>
        </div> -->
    </div>
</section>

<div class="modal hidden" id="modal">
    <div class="modal__overlay"></div>
    <div class="modal__content hidden">
        <div class="u-text-center">
            <h3 class="u-margin-bottom-small "> Запитване за
                <?php the_title(); ?>
            </h3>
        </div>
        <form class="contact__form" action="https://formsubmit.co/9a9274b8804fb31f31fa316e3e002ac7" method="POST">
            <input type="hidden" name="<?php the_title(); ?>">
            <input name="name" type="text" class="input" placeholder="Име" required>
            <input name="phone" type="tel" class="input" placeholder="Телефон" required>
            <input name="email" type="email" class="input" placeholder="Имейл" required>
            <textarea name="message" id="" cols="30" rows="10" class="input" placeholder="Запитване"
                required></textarea>
            <div class="u-margin-bottom-small">
                <input type="checkbox" name="privacy-policy" id="privacy-policy" required>
                <label for="privacy-policy" id="privacy-policy" class="privacy-policy"> &nbsp; Съгласен съм с
                    <a href="<?php echo site_url('/privacy-policy'); ?>">Политиката за поверителност</a> на
                    Leo Travel.</label>
            </div>
            <input type="submit" class="btn btn--yellow btn--submit" value="Изпрати">

        </form>
        <span class="modal__close">&times;</span>
    </div>
</div>
<?php get_footer(); ?>