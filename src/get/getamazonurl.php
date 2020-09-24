<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {exit;} ?>
<title>UwU</title>
<script src="copy.js"></script> 
<button onclick="window.location.href='..'" class="button" >Back</button>
<?php
        $link = $_POST['url'];
        $link = strtr($link, array('php-pr0xy.herokuapp.com' => 'amazon.co.jp'));
        $link = ''. $link .'';
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
