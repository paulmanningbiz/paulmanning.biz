<?php

    require_once("config.php");
    require_once(INC_DIR . "/header.php");

?>

<div class="row">

    <aside class="large-3 columns">

        <img src="img/desire1.jpg" />

         <?php include(INC_DIR. "/poetry-menu.php"); 	?>

    </aside>

	<div class="large-6 columns" role="content">

 		<article>
 
			<div class="row">

				<div class="large-10 columns">

						<?php require_once(ART_DIR . "/breathe.php");	?>

                </div>

            </div>

		</article>

    </div>

 
    <aside class="large-3 columns">

        <img src="img/desire2.jpg" />
 
    </aside>
 
</div>

<?php  require_once(INC_DIR . "/footer.php"); 	?>