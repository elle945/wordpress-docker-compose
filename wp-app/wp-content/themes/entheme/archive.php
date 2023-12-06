<?php get_header(); ?>

<main>
  <section>
    <div class="container">
    <div class="row">
        <div class="col-12">
        <?php
          if (is_category()) {
            echo '<h1>Kategori: ' . single_cat_title('', false) . '</h1>';
          } else {
            echo '<h1>' . get_the_archive_title() . '</h1>';
          }
          ?>
        </div>
      </div>
      <div class="row">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <div class="col-xs-12 col-sm-6 col-md-6 custom-card">
            <div class="card mb-4">
              <img src="<?= the_post_thumbnail_url("medium") ?>" class="card-img-top" alt="">
              <div class="card-body">
                <h2 class="card-title"><?php the_title(); ?></h2>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-dark back-to-home-button">Läs mer</a>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
