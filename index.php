<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hybrid Trade</title>
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">-->
</head>

<?php
    require_once('connection.php');
    $query=mysqli_query($connection, "SELECT * FROM `brands`"); 
    $rows=mysqli_num_rows($query);
?>

<main>
    <header></header> 
    <body>
        <section class="startPage">
            <div class="video">
                <video src="video\Hybrid.mp4" autoplay loop muted></video>
            </div>
            <div class="headerBar">
            <ul class="menu">
                <li>Оставить заявку</li>
                <li>Расчитать стоимость</li>
            </ul>
            <p class="tel"><i class="fas fa-mobile-alt"></i>   +7 925 925 25 85</p>
            </div>
            <div class="mainBlock">
                <H1>Hybrid Trade</H1>
                <p class="mainText">Мы осуществляем помощь в покупке и привозе праворульных Гибридных автомобилей или Электромобилей жителям Новосибирска и Сибири.</p>
               
            </div>
            <div class="Brands">
                <?php 
                for ($i=0;$i<$rows;$i++){
                    $brand=mysqli_fetch_assoc($query);?>
                        <div class="brand">
                            <img class="brandImg" src="<?php echo $brand['Logo']?>" alt="<?php echo $brand['Brand']?>">
                        </div>
                    <?php }	?>
                 </div>

            
        </section>
        

    </body>
</main>
</html>