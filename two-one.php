<?php 

	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/includes/";
	include($INC_DIR. "header.php");
?>

<div class="row">

	<div class="large-12 columns">
			
		<?php include($INC_DIR. "nav.php"); 	?>

		<hr />

	</div>

</div>

<div class="row">
 
	<div class="large-9 columns" role="content">
 
		<article>
 
			<div class="row">

				<div class="large-10 columns">

					<?php include($ART_DIR. "two-one.php"); 	        ?>

	            </div>

	        </div>

		</article>

    </div>
 
    <aside class="large-3 columns">

	    <img src="img/two-one.jpg" />
        <?php include($INC_DIR. "lyrics-menu.php"); 	?>
 
    </aside>
 
</div>
 
<?php include($INC_DIR. "footer.php"); 	?>