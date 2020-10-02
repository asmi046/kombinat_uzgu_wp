<?php
$args = array(
  
  'hide_empty' => 0,
  'show_count' => 0,
  'taxonomy' => 'asgproductcat',
  'title_li' => ''
);
?>
<div class="sidebar-catalog">
  <ul class="ul-clean">
    <?php 
      wp_list_categories($args);
    ?>
  </ul>
</div>