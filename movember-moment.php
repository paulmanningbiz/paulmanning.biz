<?php 

    require_once("config.php");
    require_once(INC_DIR . "/header.php");
?>
 
 
	<!-- Main Page Content and Sidebar -->
 
	<div class="row">
 
		<!-- Main Blog Content -->
		<div class="large-9 columns" role="content">
 
			<article>
 
				<div class="row">

					<div class="large-10 columns">

						<?php include(ART_DIR. "/movember-moment.php"); ?>

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