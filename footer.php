
  <div class="bottom">
    <div class="container">
      <div class="row">
        <div class="column">
          <?php wp_nav_menu(array(
            'theme_location' => 'menu-footer',
            'menu_class' => 'menu_footer',
          )); ?>
        </div>

      </div>

  </div>
  <p>
     &copy; <?php echo date('Y'); ?>
    <?php bloginfo('name'); ?>
  </p>
</div>




      <?php wp_footer(); ?>

  </body>
</html>
