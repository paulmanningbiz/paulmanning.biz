<?php 

    require_once("config.php");
    require_once(INC_DIR . "/header.php");
?>
 
<div class="row">
 
	<div class="large-9 columns" role="content">
 
        <?php include(ART_DIR. "/contact.php"); 	?>
 
		<hr />

    </div>
 
    <aside class="large-3 columns">

        <img src="img/letter.jpg" />
        <?php include(INC_DIR. "/blog-menu.php"); 	?>

    </aside>
 
</div>
 
<?php  require_once(INC_DIR . "/footer.php"); 	?>