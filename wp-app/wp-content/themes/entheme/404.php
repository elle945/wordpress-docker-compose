<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h1>404 - Sidan hittades inte</h1>
          <p>Tyvärr verkar sidan du letar efter inte finnas. Du kan återvända till startsidan genom att klicka på knappen nedan.</p>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="back-to-home-button">Tillbaka till startsidan</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
