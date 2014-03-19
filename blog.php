<?php

    require_once("config.php");
    require_once(INC_DIR . "/header.php");

?>

<div class="row">
 
	<div class="large-9 columns" role="content">

		<?php require_once(ART_DIR . "/sexless.php");                ?>
		<?php require_once(ART_DIR . "/spam-scam.php");              ?>
		<?php require_once(ART_DIR . "/lebara-resignation.php");     ?>
		<?php require_once(ART_DIR . "/knuckle-sandwhich.php");      ?>
		<?php require_once(ART_DIR . "/confession-box.php");         ?>
		<?php require_once(ART_DIR . "/birthday-wish.php");          ?>
		<?php require_once(ART_DIR . "/mothers-day.php");            ?>
		<?php require_once(ART_DIR . "/jesus-and-me.php");           ?>
		<?php require_once(ART_DIR . "/born-again-atheist.php");     ?>
        <?php require_once(ART_DIR . "/movember-moment.php");        ?>

    </div>

    <aside class="large-3 columns">

		<img src="img/blog.jpg" />

        <?php require_once(INC_DIR . "/blog-menu.php");   ?>

    </aside>
 
</div>

<?php require_once(INC_DIR . "/footer.php");   ?>