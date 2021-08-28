<?php
require_once 'header.php';
require_once 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
</head>

<body>
    <div class="about-section">
        <div class="inner-container">
            <h1>ABOUT US</h1>

            <p class="text"> We are a small family company who love classic cars.Except for our 3 cars, they are all original cars. All are ready for you! </p>
            <div class="steps">
                <ul>
                    <li>GO RESERVE PAGE AND SEE OUR CARS</li>
                    <li>CLICK RESERVE BUTTON AND GO TO RESERVATION PAGE</li>
                    <li>CHOOSE YOUR PREFERS AND LET US MAKE IT READY FOR YOU</li>
                </ul>

            </div>
            <p>
                Name:John C Smith </p>
            <p>
                Phone Number: (225) 222-3449</p>
            <p>

                Address: 693 Edwina Ln, Greensburg, LA, 70441
            </p>

        </div>
    </div>
</body>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: "Open Sans", sans-serif;
        box-sizing: border-box;
    }

    .body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f1f1f1;

    }

    .about-section {
        background: url(images/about1.jpg) no-repeat left;
        background-size: 60%;
        background-color: #F3F1F5;
        overflow: hidden;
        padding: 100px 0;
    }

    .inner-container {
        border: 3px solid black;
        width: 55%;
        float: right;
        background-color: white;
        padding: 140px;

    }

    .text {
        font-size: 13px;
        color: #545454;
        line-height: 30px;
        text-align: justify;
        margin-bottom: 40px;
    }

    .steps {
        display: flex;
        justify-content: space-around;
        font-weight: 700;
        font-size: 13px;
    }

    @media screen and (max-width:1000px) {
        .about-section {
            background-size: 100%;
            padding: 100px 40px;

        }

        .inner-container {
            width: 100%;
        }
    }

    @media screen and (max-width:600px) {
        .about-section {
            padding: 0;

        }

        .inner-container {
            width: 60px;
        }

    }
</style>