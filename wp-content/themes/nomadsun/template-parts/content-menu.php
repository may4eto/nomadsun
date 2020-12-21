
<div id="toggle">
<a class="menu-toggle link f6 archivo white ttu tracked block w4" href="#">
  Places
</a>
</div>
<div class="menu">
  <nav>
  <?php wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
  </nav>
</div>