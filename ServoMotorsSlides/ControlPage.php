<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slideres</title>
    <style>
    .slider {
        width: 0%;
        /* Width of the outside container */
    }

    .slider1 {
        position: absolute;
        top: 30%;
        left: 0%;
    }

    .slider2 {
        position: absolute;
        top: 40%;
        left: 0%;
    }

    .slider3 {
        position: absolute;
        top: 50%;
        left: 0%;
    }

    .slider4 {
        position: absolute;
        top: 60%;
        left: 0%;
    }

    .slider5 {
        position: absolute;
        top: 70%;
        left: 0%;
    }

    .slider6 {
        position: absolute;
        top: 80%;
        left: 0%;
    }

    /* The slider itself */
    .slider {
        -webkit-appearance: none;
        /* Override default CSS styles */
        appearance: none;
        width: 500px;
        /* Full-width */
        height: 20px;
        /* Specified height */
        background: #d3d3d3;
        /* Grey background */
        outline: none;
        /* Remove outline */
        opacity: 0.7;
        /* Set transparency (for mouse-over effects on hover) */
        -webkit-transition: 0.2s;
        /* 0.2 seconds transition on hover */
        transition: opacity 0.2s;
    }

    /* Mouse-over effects */
    .slider:hover {
        opacity: 1;
        /* Fully shown on mouse-over */
    }

    /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        /* Override default look */
        appearance: none;
        width: 25px;
        /* Set a specific slider handle width */
        height: 25px;
        /* Slider handle height */
        background: #ffee00;
        /* Green background */
        cursor: pointer;
        /* Cursor on hover */
    }

    .slider::-moz-range-thumb {
        width: 25px;
        /* Set a specific slider handle width */
        height: 25px;
        /* Slider handle height */
        background: #e9da0e;
        /* Green background */
        cursor: pointer;
        /* Cursor on hover */
    }

    .button2 {
        background-color: rgb(158, 63, 34);

        color: rgb(254, 255, 254);
        font-size: 16px;
        border: none;
        padding: 15px 15px;
        display: inline-block;
    }

    .button2:hover {
        background-color: rgb(129, 48, 34);
    }

    .button2:active {
        background-color: rgb(223, 137, 25);
        box-shadow: rgb(212, 159, 13);
        transform: translateY(4px);
    }

    .centerON {
        margin: 0%;
        position: absolute;
        top: 20%;
        left: 18%;
    }

    .centersave {
        position: absolute;
        top: 20%;
        left: 25%;
    }

    .angle {
        font-size: 16px;
        font-style: oblique;
        color: rgb(250, 115, 4);
        position: absolute;
        top: 25%;
        left: 0%;
    }
    </style>
</head>

<body>
    <div class="centerON">
        <button class="button2" type="submit">Turn ON</button>
    </div>

    <form action="ControlPage.php" method='post'>
        <div class="slider slider1">
            <input type="range" min="0" max="180" class="slider" id="myslider1" name="slider1" />
            <p class="angle angle1">Angle: <span id="demo1"></span></p>
        </div>
        <div class="slider slider2">
            <input type="range" min="0" max="180" class="slider" id="myslider2" name="slider2" />
            <p class="angle angle2">Angle: <span id="demo2"></span></p>
        </div>
        <div class="slider slider3">
            <input type="range" min="0" max="180" class="slider" id="myslider3" name="slider3" />
            <p class="angle angle3">Angle: <span id="demo3"></span></p>
        </div>
        <div class="slider slider4">
            <input type="range" min="0" max="180" class="slider" id="myslider4" name="slider4" />
            <p class="angle angle4">Angle: <span id="demo4"></span></p>
        </div>
        <div class="slider slider5">
            <input type="range" min="0" max="180" class="slider" id="myslider5" name="slider5" />
            <p class="angle angle5">Angle: <span id="demo5"></span></p>
        </div>
        <div class="slider slider6">
            <input type="range" min="0" max="180" class="slider" id="myslider6" name="slider6" />
            <p class="angle angle6">Angle: <span id="demo6"></span></p>

        </div>
        <div class="centersave">
            <button class="button2" type="submit">Save</button>
        </div>
    </form>
    <script>
    var slider1 = document.getElementById("myslider1");
    var output1 = document.getElementById("demo1");
    output1.innerHTML = slider1.value;

    slider1.oninput = function() {
        output1.innerHTML = this.value;
    };
    var slider2 = document.getElementById("myslider2");
    var output2 = document.getElementById("demo2");
    output2.innerHTML = slider2.value;

    slider2.oninput = function() {
        output2.innerHTML = this.value;
    };
    var slider3 = document.getElementById("myslider3");
    var output3 = document.getElementById("demo3");
    output3.innerHTML = slider3.value;

    slider3.oninput = function() {
        output3.innerHTML = this.value;
    };
    var slider4 = document.getElementById("myslider4");
    var output4 = document.getElementById("demo4");
    output4.innerHTML = slider4.value;

    slider4.oninput = function() {
        output4.innerHTML = this.value;
    };
    var slider5 = document.getElementById("myslider5");
    var output5 = document.getElementById("demo5");
    output5.innerHTML = slider5.value;

    slider5.oninput = function() {
        output5.innerHTML = this.value;
    };
    var slider6 = document.getElementById("myslider6");
    var output6 = document.getElementById("demo6");
    output6.innerHTML = slider6.value;

    slider6.oninput = function() {
        output6.innerHTML = this.value;
    };
    </script>
    <?php

     $slider1=$_POST["slider1"] ?? "";
     $slider2=$_POST["slider2"] ?? "";
     $slider3=$_POST["slider3"]?? "";
     $slider4=$_POST["slider4"]?? '';
     $slider5=$_POST["slider5"]?? "";
     $slider6=$_POST["slider6"] ?? "";

    
    


    

    ?>

</body>

</html>

<?php 
 
 

 $dbServername= "localhost";
 $dbUsername='root';
 $dbPassword="";
 $dpName= "servoo";
 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dpName);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  $sql = "INSERT INTO servomotorss (servo1, servo2, servo3, servo4, servo5, servo6)
VALUES ($slider1, $slider2, $slider3, $slider4, $slider5, $slider6)";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
  echo "New record created successfully" . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


  $conn->close();
?>
