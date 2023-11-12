<?php 
include('../database.php');
include('scripts/firstname.php');


?>
<!DOCTYPE html>
<html lang="en">
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

        <title>baazex - Admin</title>
    </head>

    <body>
        <!--************* MAIN CODE ****************-->

        <main class="main">
        <section>
    <div class="table-container">
        <h2 class="tableHeader">Clients</h2>
        <div class="table-responsive"> <!-- Add this div for responsiveness -->
            <table class="users-table">
            <thead>
    <tr>
        <th style="width: 10%;">Date</th>
        <th style="width: 10%;">Name</th>
        <th style="width: 10%;">Phone Number</th>
        <th style="width: 10%;">Email</th>
        <th style="width: 10%;">Country</th>
        <th style="width: 10%;">Paper1</th>
        <th style="width: 10%;">Paper2</th>
        <th style="width: 10%;">Other Broker</th>
        <th style="width: 10%;">On Your Behalf</th>
        <th style="width: 10%;">Experience</th>
        <th style="width: 20%;">Hear About Us</th>
        <th>Delete</th>
    </tr>
</thead>

                <tbody>
                    <?php include('scripts/clients.php'); ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

        </main>
    </body>


        <script src="https://unpkg.com/scrollreveal"></script>
        <!--=============== SCROLL REVEAL - PAGE ANNIMATION ===============-->
        <script src="../assets/js/scrollrevealAnimation.min.js"></script>

        <!--=============== SWIPER JS - PRODUCT SLIDER ===============-->
        <script src="../assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
