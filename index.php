<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>vsegda220v.ru</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/stabCable.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/modal.css"/>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body>

<?php
/*
	if (isset($_GET["categoryID"]) || isset($_POST["categoryID"]))
		$categoryID = isset($_GET["categoryID"]) ? $_GET["categoryID"] : $_POST["categoryID"];
	else $categoryID = 0;
	$categoryID = (int)$categoryID;
*/    

	if (isset($_GET["model"]) || isset($_POST["model"])) { 
        $model = $_GET["model"];
    } else {
        $model = "norma";
    }
        
  //  echo "model=".$model."<br>";    

    require('php/DB-dataBase.php');
    require('php/DB-show.php');
    require('php/header.php');
    require('php/block-1.php');
    require('php/block-2.php');
    require('php/block-3.php');
    require('php/block-4.php');
    require('php/block-5.php');
    require('php/block-6.php');
    require('php/block-7.php');
    require('php/footer.php');
    require('php/modal.php');
?> 

<!--     <section class="row rowBlock1 circles">

        <a href="#">
            <div class="circle">
                <img src="" alt="Text"> 
            </div>
        </a>

        <a href="#">
            <div class="circle">
                <img src="" alt="Text"> 
            </div>  
        </a>

        <a href="#">
            <div class="circle">
                <img src="" alt="Text">
            </div>
        </a>

</section> -->
<script src="js/index.js"></script>
<script src="js/stabCable.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
</body>
</html>