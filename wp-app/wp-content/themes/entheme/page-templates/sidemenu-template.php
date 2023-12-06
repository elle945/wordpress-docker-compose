<?php
/*
Template Name: sidemenu-sida
*/
get_header();
?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
<main>
  <section>
    <div class="container">
      <div class="row ">
        <div class="col-md-3">
        <nav class="navbar navbar-light bg-dark">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'sidemenu',
              )
            );
            ?>
          </nav>
      
        </div>
        <div class="col-md-7">
        <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
