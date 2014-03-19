<?php 

    require_once("config.php");
    require_once(INC_DIR . "/header.php");
?>
 
<div class="row">
 
	<div class="large-9 columns" role="content">
 
		<article>
 
			<h3><a href="#">Lebara Resignation</a></h3>
			<h6>Written by <a href="#">Paul Manning</a> on April 4th 2011.</h6>

 			<div class="row">

				<div class="large-10 columns">

					<?php include(ART_DIR. "lebara-resignation.php"); 	?>

                </div>
            </div>

		</article>
 
			<hr />
 
    </div>
 
    <aside class="large-3 columns">
 
         <?php include(INC_DIR. "blog-menu.php"); 	?>
 
    </aside>
 
</div>
 
<?php  require_once(INC_DIR . "/footer.php"); 	?>