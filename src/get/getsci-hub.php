<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {exit;} ?>
<title>UwU</title>
<button onclick="window.location.href='..'" class="button" >Back</button>
<script src="copy.js"></script> 
<?php
        $link = $_POST['url'];
        $link = strtr($link, array(' ' => '+'));
        $link = 'https://sci-hub.se/'. $link .'';
	$request = curl_init('https://php-pr0xy.herokuapp.com/get.php');
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request, CURLOPT_HTTPHEADER, array(
            'Proxy-Target-URL: '.$link.''
        ));
        $response = curl_exec($request);
        $response = str_replace('<a href="/', '<a href="'.$link.'/', $response);
        $response = str_replace('<a ', '<a onclick="copyURI(event)"', $response);
        echo $response
?>
