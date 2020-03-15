<?php
$args = array(
  'numberposts' => 1, // если -1 то выводит все
  'orderby' => 'date',
  'order' => 'DESC',
  'post_type' => 'brand_main', // тип поста
  'suppress_filters' => true,
);

$posts = get_posts($args);

foreach ($posts as $post) {
  setup_postdata($post);
  ?>
  <div class="main-block__name"><?php the_title(); ?></div>
  <div class="main-block__desc"><?php the_field('main-brand_desc'); ?></div>
  <?php
}
wp_reset_postdata(); // сброс
?>