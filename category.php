<!doctype html>
<html lang="en-US">

  <head>
  
	<?php
		include("head.html");
	?>
	
  </head>
  
  <body>
	
	
	<div class="container category-page">
		<div class="row">
			<div class="col-md-3 side-menu d-none d-md-block">
				<?php
					include("side_menu.html");
				?>
			</div>
			<div class="col-md-9 product-thumbnails">
				<?php
					include("product_details.html")
					/* include("products.html") */
				?>
			</div>
		</div>
	</div>
	
	
	<?php
		include("menu.html");
	?>
	
	
	

	<?php 
		include("footer.html");
	?>
	
  </body>
  
</html>