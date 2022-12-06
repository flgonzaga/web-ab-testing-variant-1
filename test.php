<?php
if (isset($_POST['request']) && ($_POST['request'] == 'ab'))
{
    if (!isset($_COOKIE['x-ms-trigger'])) {
        $_COOKIE['x-ms-trigger'] = 1;
        $current_cookie_value = $_COOKIE['x-ms-routing-name'];
    
        //kill original cookie
        $arr_cookie_options = array (
            'expires' => time() - 3600,
            'path' => '/',
            'domain' => '.web-ab-experiments.azurewebsites.net', // leading dot for compatibility or use subdomain
            'secure' => true,     // or false
            'httponly' => true,    // or false
            'samesite' => 'None' // None || Lax  || Strict
        );
        setcookie('x-ms-routing-name', $current_cookie_value, $arr_cookie_options); 
    
        //Create new cookie
        $arr_cookie_options = array (
            'expires' => time() + 60*60*24*365,
            'path' => '/',
            'domain' => '.web-ab-experiments.azurewebsites.net', // leading dot for compatibility or use subdomain
            'secure' => true,     // or false
            'httponly' => true,    // or false
            'samesite' => 'None' // None || Lax  || Strict
        );
        setcookie('x-ms-routing-name', $current_cookie_value, $arr_cookie_options); 
    
        echo $current_cookie_value;
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Original</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NYMGM621S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){window.dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7NYMGM621S');
    </script>
</head>
<body>
    <!-- Content -->
    <script>
        gtag('event', 'experiment_impression', {
            'experiment_id': 'hA8zNR0GTFGIxr2jWnU1UA',
            'variant_id': 'hA8zNR0GTFGIxr2jWnU1UA.0',
            'sent_to': 'G-7NYMGM621S',
        });
    </script>
    <style>
        body {
            background-color: #353638;
            color: #f6f8fa;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a {
            color: #dd73fd;
        }
    </style>
    <h1>Hello World</h1>
    <p>Original version has been loaded.</p>
    <a href="page.html">Go to page</a>
</body>
</html>