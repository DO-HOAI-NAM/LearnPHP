<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> My Profile</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: whitesmoke;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        /* .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        } */
        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            color: violet;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .title.m-b-md {
            text-align: center;
            font-size: 50px;
            font-weight: 500;
            padding-top: 10 px;
        }

        .links {
            display: flex;
            justify-content: space-around;
            padding-top: 40 px;
        }

        .content {
            padding-left: 200 px;
        }

        a.image {
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="title m-b-md">
            My Profile
        </div>

        <div class="links">
            <a href="https://www.facebook.com/profile.php?id=100014507376505">My facebook</a>
            <a href="https://github.com/DO-HOAI-NAM">My Github</a>

            <a href="#">Blog</a>

        </div>

    </div>
    <div class="content">
        <p> FullName: DO HOAI NAM</p>
        <p> CLass: GCH0901</p>
        <p> Date of birth: 16/02/2001</p>
        <p> <a class="image" href="https://scontent.fhan5-11.fna.fbcdn.net/v/t1.6435-9/118002703_920382441788660_2140646971129449337_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=19026a&_nc_ohc=d-dXitLXzjkAX-yzJIH&_nc_ht=scontent.fhan5-11.fna&oh=00_AT9vfcOoA-53F14dR3AeqL9G4DNk0xrlOi1mwGSv0lHPXQ&oe=620198D9"> My image</a> </p>
    </div>
</body>

</html>