<?php

    require_once("config.php");
    require_once(INC_DIR . "/header.php");

?>
 
<div class="row">

    <aside class="large-3 columns">

        <img src="img/come-inside.jpg" />
	    <?php require_once(INC_DIR. "/lyrics-menu.php"); 	?>

    </aside>
 
	<div class="large-6 columns" role="content">
 
		<article>
 
			<div class="row">

				<div class="large-10 columns">

				    <?php require_once(ART_DIR. "/come-inside.php"); 	?>

		</article>

    </div>

    <aside class="large-3 columns">

	    <img src="img/love-is-here.jpg" />

    </aside>
 
</div>

 <?php require_once(INC_DIR . "/footer.php"); 	?>