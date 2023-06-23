
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Garda Educasia Official</title>
    <link rel="stylesheet" href="daftar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
    <link rel="icon" href="g.png">
    <link rel="icon" href="g.png" type="image/png">
</head>
<body>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="g.png" alt="">
            </div>
            <div class="login-card-header">
                <h1>Login</h1>
                <div>Silahkan login terlebih dahulu</div>
            </div>
            <form action="" method="post" class="login-card-form">
            <div class="form-item">
                <span class="form-item-icon material-symbols-rounded">person</span>
                <input type="text" name="email" placeholder="Enter Name" id="user" required>
            </div>
            <div class="form-item">
                <span class="form-item-icon material-symbols-rounded">lock</span>
                <input type="password"  name="password" placeholder="Enter Password" id="pass" required >
            </div>
            <div class="form-item-other">
                <div class="checkbox">
                    <input type="checkbox" id="rememberMeCheckBox">
                    <label for="rememberMeCheckBox">Mengikuti</label>
                </div>
            </div>
            <button id="myButton">LOGIN</button>
            </form>
      

        </div>
        <div class="login-card-social">
            <div>Lainnya</div>
            <div class="login-card-social-btn">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                     </svg>
                     <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                         </svg>
                     </a>
                </a>
            </div>
        </div>
    </div>
    <script>
  var button = document.getElementById("myButton");
  button.addEventListener("click", function() {
    window.location.href = "mpe.php";
  });
</script>
</body>
</html>
