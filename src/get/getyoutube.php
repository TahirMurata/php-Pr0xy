<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {exit;} ?>
<title>UwU</title>
<button onclick="window.location.href='..'" class="button" >Back</button>
<?php
        $link = $_POST['urlyt'];
        $link = strtr($link, array('https://www.youtube.com/watch?v=' => '', 'https://php-pr0xy.herokuapp.com/url?q=https://www.youtube.com/watch%3Fv%3D' => ''));
        $link = substr($link, 0, strpos($link, "&sa"));
        echo "<iframe width='560' height='315' src='https://www.youtube-nocookie.com/embed/".$link."' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
?>
