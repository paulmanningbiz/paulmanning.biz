<?php 

    require_once("config.php");
    require_once(INC_DIR . "/header.php");
?>

<div class="row">

    <aside class="large-3 columns">

        <ul class="side-nav">

            <img src="img/me2.jpg" />

            <h5>Favourite Songs</h5>

           	<li><a href="http://www.youtube.com/watch?v=4f6wzGpFKUQ" target="_blank">God Is In The House</a></li>
            <li><a href="http://www.youtube.com/watch?v=5ClTktEf4CA" target="_blank">Brand New Start</a></li>
            <li><a href="http://www.youtube.com/watch?v=uvgi7P97lu0" target="_blank">Uninvited</a></li>
            <li><a href="http://www.youtube.com/watch?v=oMX1sc3eOTE" target="_blank">Empire State Of Mind</a></li>

        </ul>

    </aside>

	<div class="large-6 columns" role="content">
 
	    <?php include(ART_DIR. "/about-me.php"); 	?>

    </div>
 
    <aside class="large-3 columns">

       	<ul class="side-nav">

       	    <img src="img/me.jpg" />

       	    <li><a href="http://www.youtube.com/watch?v=QaeALaGlLKs" target="_blank">If God Would Send his Angels</a></li>
       	    <li><a href="http://www.youtube.com/watch?v=D6zBjYIyz-0" target="_blank">Send Me An Angel</a></li>

       	</ul>
 
    </aside>

</div>
 
<?php require_once(INC_DIR . "/footer.php");	?>