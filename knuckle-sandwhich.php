<?php 

    require_once("config.php");
    require_once(INC_DIR . "/header.php");
?>
 
<div class="row">
 
	<div class="large-9 columns" role="content">
 
    	<article>
 
			<div class="row">

				<div class="large-10 columns">

					<?php include(ART_DIR. "/knuckle-sandwhich.php"); 	?>

                </div>
            </div>

		</article>

    </div>

    <aside class="large-3 columns">

        <img src="img/preacher.jpg" />
	    <?php include(INC_DIR. "/blog-menu.php"); 	?>
 
    </aside>
 
</div>
 
<?php  require_once(INC_DIR . "/footer.php"); 	?>