<?php get_header(); ?>
<main>
<section>
        <div class="container">
            <div class="row">
 
                <div class="col-xs-12 col-md-9">
                    <h1>
                        <?php single_post_title(); ?>
                    </h1>
                </div>
 
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <article>
                                <img src="<?= the_post_thumbnail_url("medium") ?>" alt="">
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <?= the_time('j F, Y') ?>
                                    </li>
                                    <li class="fa fa-user">
                                        <?= the_author_posts_link(); ?>
                                    </li>
                                    <li> <i class="fa fa-user"></i>
                                        <?= the_category(", "); ?>
                                    </li>
 
                                </ul>
            <p><?php the_content(); ?></p>
                            </article>
 
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
 
                <aside id="sidebar" class="col-xs-12 col-md-3">
                    <?php get_sidebar();?>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>