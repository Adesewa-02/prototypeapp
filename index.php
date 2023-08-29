
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        body{
            background-image: url(img/e9f1764c-0bdc-496a-be56-2aef89924b4b.jpg);
            color: white;
            font-family: sans-serif;    
             
            text-align: center;
        }
        .top{
            color: white;
            font-size: 30px;
        }
        .container {
            margin: 7rem;
        }

        .user {
            padding: 2rem;
            margin: 0;
        }
        .btn {
            padding: 7px;
            margin: 30px;
            width: 270px;
            border: 1px solid green;
            border-radius: 7px;
        }
        #pword {
            padding: 7px;
            border-radius: 7px;
            border: 1px solid white;
            width: 250px;
            margin: 0px;
        }
        #uname {
            padding: 7px;
            border: 1px solid white;
            border-radius: 7px;
            width: 250px;
        }
        .p {
            text-size: 40px;
        }
        .up {
            opacity: 0.3;
        }
    </style>
    <body>
        <div class="container">
            <h2 class="top">Login </h2>
            <p class="p">Please enter your Fullname and Password</p>
        <form method="post"  action="login.php">
            <div class="up">
            <div class="user">
            <input type="text" placeholder="Username" name="username" id="uname" required>

            </div>
            <div class="pass">
            <input type="text"  name="password" placeholder="password" id="pword" required>
            </div>
            <div><br>
            <button class="btn">Login</button>
        </form>
        </div>
    </body>
    </html>
    