<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: left;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            #welcome{
                border: solid;
                border-width: 1px;
                border-color: #BBBBBB;
            }

            #welcomeHeader{
                background-color: #0088FF;
                color: #DDDDDD;
                padding: 5px;
            }

            #welcomeContent{
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div id="welcome">
                    <div id="welcomeHeader">
                        Welcome, Stranger!
                    </div>
                    <div id="welcomeContent">
                        <a href="./login">Login</a> or <a href="./register">register</a> to get started.
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>
