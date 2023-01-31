<?php include('../session.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medical Charting</title>

    <!--    GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

    <!--    STYLESHEET-->
    <link rel="stylesheet" href="../local/styles.css">
</head>
<body>

<header>
    <div class="img-frame">
        <img src="../assets/Johnny%20Appleseed.png" alt="profile" class="patient-photo">
    </div>
    <div class="patient-glance">
        <h2 class="patient-glance-content"><span>Patient Name: </span>Johnny Appleseed</h2>
        <h2 class="patient-glance-content"><span>DOB: </span>01/01/1950</h2>
        <h2 class="patient-glance-content"><span>MR#: </span>CC12345</h2>
    </div>
</header>
    <a class="back-button" href="../patients.php">Back</a>
    <br>
<div class="category-container">
    <h1 class="category-header">Vitals</h1>
    <br>
    <a class="new-button" href="../Patient-Data-Forms/vitalsInput.php">New</a>
    <br>
    <div class="sub-category">
        <h2 class="sub-category-head">TPR B/P O2</h2>
        <div class="sub-category-glance">
            <h3 class="glance-date">03/25/2022</h3>
            <div class="glance-data">
                <h4>Temperature: 97 F</h4>
                <h4>Respiration: 78</h4>
                <h4>Blood Pressure: 120</h4>
                <h4>Pulse Oximetry: 94%</h4>
            </div>
            <div class="flex-container">
                <button class="glance-button">View</button>
            </div>
        </div>
        <div class="sub-category-glance">
            <h3 class="glance-date">03/15/2022</h3>
            <div class="glance-data">
                <h4>Temperature: 97 F</h4>
                <h4>Respiration: 78</h4>
                <h4>Blood Pressure: 120</h4>
                <h4>Pulse Oximetry: 94%</h4>
            </div>
            <div class="flex-container">
                <button class="glance-button">View</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>