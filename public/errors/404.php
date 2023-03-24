
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style type="text/css">
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .wrap{
            width: 33.3%;
            margin:0 auto;
        }
       
        p a{
            color: #fff;
            font-size:13px;
            margin-left:30px;
            padding:5px;
            background:#FA8334;
            text-decoration:none;
            -webkit-border-radius:.3em;
            -moz-border-radius:.3em;
            border-radius:.3em;
        }
        p a:hover{
            color: #fff;
        }
        .footer{
            position:absolute;
            bottom:10px;
            right:10px;
            font-size:12px;
            color:#aaa;
        }
        .footer a{
            color:#666;
            text-decoration:none;
        }

        .error {
            font-size: 256px;
            color: #101010;
        }

    </style>
</head>
<body>
<div class="wrap">
    <div class="logo">
        <h1 class="error">404</h1>
        <img src="/errors/images/404.jpg" alt="" />
        <p><a href="<?=PATH;?>">Go back to Home</a></p>
    </div>
</div>
</body>
</html>

