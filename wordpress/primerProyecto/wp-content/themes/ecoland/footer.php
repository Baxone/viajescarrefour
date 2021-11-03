 <footer class="ftco-footer ftco-section">
      <div class="container">
				<div class="row">
				<div class="col-md-12 text-center">
				<ul class="ftco-footer-social list-unstyled ">
					<li><a href="#"><span class="icon-twitter"></span></a></li>
					<li><a href="#"><span class="icon-facebook"></span></a></li>
					<li><a href="#"><span class="icon-instagram"></span></a></li>
				</ul>
				</div>
        
          <div class="col-md-12 text-center">
            <?php  $variablesfoot = array('menu' => 'footer', 'menu_class' => 'd-flex' ) ?>
						<p>Copyright &copy; 2019 All rights reserved - <?php  wp_nav_menu($variablesfoot);  ?></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<?php get_template_part('partials/layout/scripts') ?>
  </body>
</html>