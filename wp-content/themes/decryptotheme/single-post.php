<?php get_header(); ?>

<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="card-columns">
    <?php while (have_posts()): ?>
    <?= the_post() ?>
          <h1><?= the_title() ?></h1>
          <h2>Posté le <?= the_time('F jS, Y') ?></h2>
          <p><?= the_content() ?></p>
  <?php endwhile ?>
  </div>
</main>

<?php get_footer(); ?>