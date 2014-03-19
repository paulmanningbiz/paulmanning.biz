<?php 

    require_once("config.php");
    require_once(INC_DIR . "/header.php");
?>
 
<div class="row">

    <aside class="large-3 columns">

    	<img src="img/lyric1.jpg" />
        <?php include(INC_DIR. "/lyrics-menu.php"); 	?>

    </aside>

	<div class="large-6 columns" role="content">
 
		<article>

            <p>
            My profound lyrics with their poetic quality & penetrating insights into the human
            condition are placed here for your instant pleasure & sheer delight
            </p>

		</article>

    </div>

    <aside class="large-3 columns">

        	<img src="img/lyric2.jpg" />
            <?php include(INC_DIR. "/lyrics-menu.php"); 	?>

    </aside>

</div>
 
<?php  require_once(INC_DIR . "/footer.php"); 	?>