</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- css saya -->
    <link rel="stylesheet" href="styleP.css" />

    <link rel="Website icon" type="png" href="imgweb/LOGOFIX.png">

    <title>GANCANGRENT</title>
</head>

<body>
    <p class="text-center template"><b>GANCANGRENT</b></p>

    <form method="POST" action="ceklogin.php" id="myform">
        <div class="inputBox">
            <h3>Login Here</h3>

            <label for="username">Username</label>
            <input type="text" placeholder="Email or Phone" id="username" name="username" required />

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password" required />
            <div id="toggle" onclick="showHide();"></div>
            <p class="regist">
                
                <a href="regis.php" class="text-decoration-none">sign up here</a>
            </p>
            <div>
                <a class="tombol btn" type="submit" onclick="document.getElementById('myform').submit()">Login</a>

            </div>
        </div>
    </form>

    <!-- <footer> -->
        <div class="text-center">
            <img class="mLog" src="imgweb/mobilLog.png" alt="" data-tilt/>
        </div>
    <!-- </footer> -->

    <script type="text/javascript" src="vanilla-tilt.min.js"></script>
    <script src="perpus.js"></script>
</body>

</html>