<?php
/*
Template Name: Kontaktformulärssida
*/

get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2">           
        <h2>Kontakta oss</h2>
          <?php echo do_shortcode('[contact-form-7 id="851669a" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
