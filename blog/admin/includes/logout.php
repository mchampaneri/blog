<?php
    session_start();
    $_session["open"] = 0;

    session_destroy();
	header('Location: http://localhost/blog/');
?>