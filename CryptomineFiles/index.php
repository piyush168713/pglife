<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Cryptomine</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Unlock the new world of cryptocurrency</h2>
        <h3 class="white pb-3">Get upto 5-7% return on your money daily</h3>
        <!--
        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        -->
    </div>

    <section class="story section container">
        <div class="story__container grid">
            <div class="story__data">
                <h2 class="section__title story__section-title">
                    Our Story
                </h2>

                <h1 class="story__title">
                    Inspirational Watch of <br> this year
                </h1>

                <p class="story__description">
                    The latest and modern watches of this year, is available in various
                    presentations in this store, discover them now.
                </p>

                <a href="#" class="button button--small">Discover</a>
            </div>

            <div class="story__images">
                <img src="img/story2.png" alt="" class="story__img">
                <div class="story__square"></div>
            </div>
        </div>
    </section>

    <div class="page-container">
        <h1 class="city-heading">
            Major Coins
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bitcoin">
                    <div class="city-card rounded-circle">
                        <img src="img/bitcoin.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Ethereum">
                    <div class="city-card rounded-circle">
                        <img src="img/eth.jpg" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Ardor">
                    <div class="city-card rounded-circle">
                        <img src="img/ardor.jpg" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Dash">
                    <div class="city-card rounded-circle">
                        <img src="img/dash.jpg" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>