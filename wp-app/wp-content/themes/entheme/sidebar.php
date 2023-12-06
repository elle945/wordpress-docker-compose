<div class="search-form">
  <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
      <span class="screen-reader-text"><?php echo _x('Sök efter:', 'label', 'textdomain'); ?></span>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Sök efter...', 'placeholder', 'textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit"><?php echo esc_html_x('Sök', 'submit button', 'textdomain'); ?></button>
  </form>
</div>

<div class="widget">
    <h2>Sidor</h2>
    <ul>
        <?php wp_list_pages("title_li="); ?>
    </ul>
</div>
<div class="widget">
<h2>Arkiv</h2>
<ul>
    <?php wp_get_archives("type=monthly");?>
</ul>
</div>
<div class="widget">
    <h2>Kategorier</h2>
    <ul>
         <?php wp_list_categories('title_li='); ?>
    </ul>
</div>