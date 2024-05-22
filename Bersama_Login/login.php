
<?php 

    // ketika tombol button ke trigger
    $message_box = 'username sudah dipakai!';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
    <style>
        *{
            margin: 0;
            color: white;
            font-family: "Poppins";
        }
        .login{
            margin: auto;
            margin-top: 100px;
            width: 50%;
            height:320px;
            max-width: 1000px;
            /* background: red; */
            border-radius: 5px;
            background: #2A629A;
            box-shadow: 0 0 5px #003285;
        }

        .login h2{
            margin: 10% 0 8px 35%;
            position: relative;
            top: 5%;
        }

        .register{
            margin-top: 10%;
            margin-left: 10%;
            width: 85%;
            display: grid;
            gap: 5px;
            /* background: red; */
        }
        label{
            margin-left: 8px;
        }
        input{
            color: black;
            margin: 0 0 5px 5px;
            width: 80%;
            height: 25px;
            margin-left: 15px;
        }
        /* #username-label{
            font-size: 13px;
            /* opacity: 0; */
        /* } */
        #username-label:hover{
            animation: moveText 4s;
            animation-fill-mode: forwards;
           
        } */

        input:hover{
            border: 2px solid blue;
        }

        /* @keyframes moveText{
            to{
            opacity: 1;
            position: relative;
            background: white;
            top: 13px;
            left:15px;
            width: 70px;
            text-align: center;
            color: grey;
            }
        } */
        #daftar{
            width: 50%;
            height:30px;
            border-radius: 8px;
            border: none;
            margin: 15px 0 0 20%;
            color: black;
            /* min-width: none; */
            /* max-width: 100%; */
            
        }
        @keyframes hoverDaftar {
            to{
                box-shadow: 5px 0 5px blueviolet, -5px 0 5px blueviolet;
            }
        }

        button:active{
            animation: hoverDaftar 5s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-play-state: running;
        }

    </style>
<body>
    <!-- Login Information -->
    <form action="" method="get"class="login">
        <h2>Register</h2>
        <div class="register">
            <?= $message_box ?>
            <label for="username" 
            id="username-label">Username :</label>
            <input type="text" id="username" required>
            <label for="password">Password</label>
            <input type="password" id="username">
            <button id="daftar">Daftar</button>
        </div>
    </form>
</body>
</html>