<!DOCTYPE html>
<html>
    <head>
        <title>AliBoxStudio Management</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin-top: -200px;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 84px;
            }

            
            #btnlogin {
            position:relative;
            margin-top:10%;
            background:#fff;
            border:3px solid #055388;
            padding:20px;
            font-size:0.9em;
            color:white;
            
            font-family: 'Open Sans', sans-serif;
            color: #055388;
            font-weight:600;
            letter-spacing:5px;
            text-transform:uppercase;
            border-radius: 5px;
            
            }

            #btnlogin:hover {
            bottom:4px;
            box-shadow:0px 2px 0px 0px #055388;
            transition: all .01s ease-in-out;
            -moz-transition: all .01s ease-in-out;
            -webkit-transition: all .01s ease-in-out;
            }

            #btnlogin:active {
            top:4px;
            box-shadow:inset 0px 2px 0px 0px #055388;
            transition: all .01s ease-in-out;
            -moz-transition: all .01s ease-in-out;
            -webkit-transition: all .01s ease-in-out;
            
            /*bottom:0px;
            box-shadow:0px 0px 0px 0px #055388;
            transition: all .01s ease-in-out;
            -moz-transition: all .01s ease-in-out;
            -webkit-transition: all .01s ease-in-out;*/
            
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src="./img/blogo.png" alt="Fjords" width="300" height="auto">
                <div class="title">example edit</div>
                <button id="btnlogin">LOG IN</button></br>
            </div>
        </div>
    </body>
</html>
