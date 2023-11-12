<?php 
include('../database.php');
?>
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" class="favicon" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Noto+Sans+Arabic:wght@700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet" />

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="../assets/css/all.min.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />

        <!--================== Unicons CSS =================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

        <title>Baazex - Admin</title>
    </head>

    <body>
        <!--************* MAIN CODE ****************-->

        <main class="main logIn">
            <section class="login-section">
                <div class="login-box">
                    <h2>Admin Login</h2>
                    <form action="scripts/login.php" method="post">
                        <div class="input-group">
                            <label for="userName">اسم المستخدم</label>
                            <input type="text" id="userName" name="userName" required />
                        </div>
                        <div class="input-group">
                            <label for="password">كلمة السر</label>
                            <input type="password" id="password" name="password" required />
                        </div>
                        <div class="carBtn">
                            <button name="login" type="submit">تسجيل دخول</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
