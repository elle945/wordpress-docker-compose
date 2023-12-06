<!-- Blogg -->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <h1>
                        <?php single_post_title(); ?>
                    </h1>
 
                    <?php if (have_posts()):
                      while (have_posts()):
                        the_post(); ?>
                          <div class="card mb-4">
                              <a href="<?= the_permalink(); ?>">
                                  <img src="<?= the_post_thumbnail_url("medium") ?>" class="card-img-top" alt="">
                              </a>
                              <div class="card-body">
                                  <a href="<?= the_permalink(); ?>">
                                      <h1 class="card-title">
                                          <?= the_title(); ?>
                                      </h1>
                                  </a>
                                  <ul class="meta">
                                      <li>
                                          <i class="fa fa-calendar"></i>
                                          <?= the_time('j F, Y') ?>
                                      </li>
                                      <li class="fa fa-user">
                                          <?= the_author_posts_link(); ?>
                                      </li>
                                      <li>
                                          <i class="fa fa-globe"></i>
                                          <?= the_category(", "); ?>
                                      </li>
                                  </ul>
                                  <p class="card-text">
                                      <?= the_excerpt(); ?>
                                  </p>
                              </div>
                          </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
 
                <aside id="sidebar" class="col-xs-12 col-md-4">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>