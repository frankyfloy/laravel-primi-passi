<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                border: 0;
                box-sizing: border-box;
                padding: 0;
                outline: none;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow: hidden;
            }


            nav.nav-console{
                background-image: linear-gradient(180deg, #000000 67%, #414141 120%);
                height: 60px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 50px;
            }

            ul.navList{
                list-style: none;
                display: flex;
                color : #a1aba9;
                align-self: center;
                min-width: 25%;
            }

            li{
                margin-right: 30px;
                font-weight: bold;
                cursor: pointer;
            }ì

            ul.navList li a{
                text-decoration: none;
                color : #a1aba9;
            }

            .cont-icon{
                padding: 0 10px;
            }

            nav .cont-icon i{
                color: #a1aba9;
                padding: 1px 3px;
                cursor: pointer;
            }


            ul li a:hover, nav .cont-icon i:hover{
                color: white;
                transform: scale(1.08);
                transition: all 0.15s linear;
            }

            main{
                height: calc(100vh - 60px - 5vh);
            }

            main img{
                height: 100%;
                width: 100%;
                object-fit:  cover;
                opacity: 0.98;
            }

            footer{
                height: 5vh;
                background-image: linear-gradient(0deg, #000000 48%,  #414141 153%);
            }

        </style>
    </head>

    <body>
        <header>
            <nav class="nav-console">


                <ul class="navList">
                    <li><a href="/">Home</a></li>
                    <li><a href="/prenota">Prenota</a></li>
                    <li><a href="/info">Info</a></li>
                </ul>


                <div>
                    <span class="cont-icon"><i class="fas fa-ellipsis-v "></i></span>
                </div>
            </nav>
        </header>

        <main>
            <img src="https://www.savoia.eu/immagini/intro.jpg" alt="">
        </main>

        <footer></footer>

    </body>
</html>
