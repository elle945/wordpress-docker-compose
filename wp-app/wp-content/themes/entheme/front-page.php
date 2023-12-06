<?php
get_header();
?>
 
<?php if (have_posts()):
  while (have_posts()):
    the_post() ?>
      <div class="img-wrapper">
        <div class="img-container">
        <img class="background-img" src="<?php the_post_thumbnail_url('full') ?>" alt="trees" style="position: relative; filter: brightness(60%) contrast(80%);">
          <div class="overlay-text">
            <h1><?php the_title() ?></h1>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
<?php endif; ?>
 
<?php
get_footer();
?>