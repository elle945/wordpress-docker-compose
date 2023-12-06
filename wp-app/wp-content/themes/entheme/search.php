<?php get_header(); ?>
<main>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1><?php printf(esc_html__('Sökresultat för: %s', 'textdomain'), '<span>' . get_search_query() . '</span>'); ?></h1>

      <?php if (have_posts()) : ?>
        <ul class="list-unstyled">
          <?php while (have_posts()) : the_post(); ?>
            <li class="search-result">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="entry-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <img src="<?= the_post_thumbnail_url("medium") ?>" alt="">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p><?php esc_html_e('Inga resultat hittades.', 'textdomain'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>
      </main>
<?php get_footer(); ?>