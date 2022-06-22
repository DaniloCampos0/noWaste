<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['id'])){
        die("VOCÊ NAO PODE ENTRASR NA BRINCADEIRA, PQ NAO ESTA BRINCANDO NA LOGAÇÃO, seu muleke !!!<p><a href=\"index.php\">Entre na brincadeira</a></p>");
    }
?>