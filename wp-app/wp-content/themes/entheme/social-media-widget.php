<?php 
class Social_Media_Widget extends WP_Widget {

function __construct() {
  parent::__construct(
    'social_media_widget',
    'Social Media Icons',
    array( 'description' => 'Displays social media icons' )
  );
}

public function widget( $args, $instance ) {
  echo $args['before_widget'];
  ?>
  <div class="social-media-icons">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
  </div>
  <?php
  echo $args['after_widget'];
}
}
?>