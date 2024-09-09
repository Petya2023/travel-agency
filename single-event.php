<?php get_header(); ?>
<l?php if (wp_get_post_parent_id(get_the_ID())) { echo 'I am a child page.' ; } ?>
    <section class="section page-content u-margin-top-huge js--nav">
        <div class="container">
            <div class="u-text-center u-margin-bottom-medium">
                <h2 class="u-margin-bottom-small ">
                    <?php the_title(); ?>
                </h2>
            </div>
            <div class="row-2-1">
                <div class="page-content__left">
                    <div class="page-content__box page-content__box--2">
                        <h4>Програма</h4>
                        <?php the_category(); ?>
                        <ul>
                            <?php the_content(); ?>
                        </ul>
                    </div>
                </div>
                <div class="page-content__right">
                    <div class="page-content__box page-content__right__box--1">
                        <div class="page-content__right__info u-margin-bottom-small">
                            <div class="page-content__right__info__box">
                                <i class="fa-solid fa-train icon"></i>
                                <p>Вид транспорт:</p>
                            </div>
                            <div class="page-content__right__info__box">
                                <i class="fa-solid fa-location-crosshairs icon"></i>
                                <p>Дестинация:</p>
                            </div>
                            <div class="page-content__right__info__box">
                                <i class="fa-regular fa-clock icon"></i>
                                <p>Продължителност:</p>
                            </div>
                            <div class="page-content__right__info__box">
                                <i class="fa-solid fa-calendar-days icon"></i>
                                <p>Дати:</p>
                            </div>
                            <div class="page-content__right__info__box">
                                <i class="fa-solid fa-clipboard-list icon"></i>
                                <p>Оферта:</p>
                            </div>
                        </div>
                        <p class="price u-margin-bottom-small">Цена от ХХХ лв.</p>
                        <a class="btn btn--yellow btn-open-modal">Запитване</a>
                    </div>
                    <div class="page-content__box page-content__right__box--2">
                        <h4>Цената включва:</h4>
                        <ul>

                        </ul>
                    </div>
                    <div class="page-content__box page-content__right__box--3">
                        <h4>Цената НЕ включва:</h4>
                        <ul>
                        </ul>
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
            <form action="https://api.web3forms.com/submit" method="POST" class="contact__form">
                <input type="hidden" name="access_key" value="f90b2087-bee9-4006-9d02-75e07a799d0c">

                <input type="text" class="input" placeholder="Име" required>
                <input type="tel" class="input" placeholder="Телефон" required>
                <input type="email" class="input" placeholder="Имейл" required>
                <textarea name="" id="" cols="30" rows="10" class="input" placeholder="Запитване" required></textarea>
                <div class="u-margin-bottom-small"><input type="checkbox" name="privacy-policy" id="privacy-policy"
                        required>
                    <label for="privacy-policy" id="privacy-policy">Съгласен съм с
                        Политиката за поверителност на
                        Leo Travel,
                        налична на този сайт.</label>
                </div>
                <input type="hidden" name="redirect" value="https://web3forms.com/success">
                <button type="submit" class="btn btn--yellow btn--submit" value="Изпрати"></button>

            </form>
            <span class="modal__close">&times;</span>
        </div>
    </div>
    <?php get_footer(); ?>