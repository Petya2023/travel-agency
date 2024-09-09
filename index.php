<?php get_header(); ?>
<section class="section--grey">
  <div class="container">
    <div class="u-text-center u-margin-bottom-big">
      <h2>
        Избрани пътешествия
      </h2>
    </div>
    <div class="row u-margin-bottom-big">
      <?php
      while (have_posts()) {
        the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="scene">
            <div class="card">
              <div class="card__img-box card__img-box--1">
                <img src="<?php the_field('image'); ?>" alt="" class="card__img">
              </div>
              <div class="card__bottom">
                <h5 class="card__title u-margin-bottom-huge"><?php the_title(); ?></h5>
                <h5 class="card__price"><?php the_field('price'); ?> лв.</h5>
              </div>
            </div>
          </div>
        </a>
        <?php
      }
      ?>
    </div>
    <div class="paginate_links u-text-center">
      <?php
      echo paginate_links();
      ?>
    </div>
  </div>
  </div>
</section>
<section class="section section--months">
  <div class="u-text-center u-margin-bottom-medium">
    <h2>Календар на пътуванията</h2>
  </div>
  <div class="months">
    <?php
    $startMonth = strtotime(date('F')); //променливата съдържа текущия месец
    $endMonth = strtotime('+12 months', $startMonth); //променливата взима текущия месец и му добавя 12 месеца
    while ($startMonth < $endMonth) {
      $year; //създаваме променлива, в която ще запишем година в зависимост от проверката
      if (wp_date('n', $startMonth) >= wp_date('n')) { //ако месецът (число) е по-голям или равен на текущия месец (число)
        $year = date('Y'); //записваме текущата година в променливата
      } else { //ако месецът е по-малък от текущия месец
        $pastYear = strtotime(date('Y')); //записваме текущата година в променлива
        $nextYear = strtotime('+1 year', $pastYear); //добавяме една година на текущата година и записваме новата година в променлива
        $year = wp_date('Y', $nextYear);
      }
      ?>
      <!-- създаваме линк за категория за всеки месец -->
      <a href="<?php echo site_url('/category' . '/' . $year . '/' . wp_date('F', $startMonth)); ?>">
        <!-- създаваме кутия за всеки месец -->
        <div class="months__month">
          <p class="months__month__text">
            <?php echo wp_date('F', $startMonth); ?>
          </p>
        </div>
      </a>
      <?php
      $startMonth = strtotime('+1 month', $startMonth); //добавяме 1 месец при всяко завъртане на цикъла
    }
    ?>
  </div>
</section>
<?php get_footer(); ?>