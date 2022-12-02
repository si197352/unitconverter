<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Distance Converter</title>
    <style media="screen">
      .div1{
        border: 2px solid black;
        width: 600px;
        margin-left: 400px;
        margin-top: 50px;
        background-color: azure;
        padding-bottom: 20px;
      }
      p{
        background-color: red;
        margin-top: -2px;
        text-align: center;
        color: white;
        font-size: 40px;
        margin-left: -2px;
        font-weight: bold;
      }
      form{
        margin-left: 120px;
      }
      label{
        font-size: 24px;
        font-weight: bold;
      }
      select{
        width: 300px;
        font-size: 20px;
        padding: 5px;
        margin-top: 10px;
      }
      select:hover{
        cursor: pointer;
      }
      #amount{
        width: 280px;
        font-size: 18px;
        padding: 7px;
        margin-top: 20px;
      }
      #convert{
        font-size: 22px;
        font-weight: bold;
        width: 120px;
        background-color: blue;
        border: 1px solid blue;
        color: white;
        border-radius: 5px;
        margin-top: 10px;
        margin-left: 90px;
        padding: 10px;
      }
      #convert:hover{
        cursor: pointer;
        opacity: 0.8;
      }
      h3{
        font-size: 25px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <p>Distance Converter</p>
      <form class="" action="distance converter.php" method="post">
        <label for="">Select a Conversion Option</label><br>
        <select class="" name="Distance" required>
          <option option selected hidden>Choose an Option</option>
          <option value="Meter to Centimeter">Meter to Centimeter</option>
          <option value="Centimeter to Meter">Centimeter to Meter</option>
          <option value="Kilometre to Meter">Kilometre to Meter</option>
          <option value="Meter to Kilometre">Meter to Kilometre</option>
          <option value="Mile to Kilometre">Mile to Kilometre</option>
          <option value="Kilometre to Mile">Kilometre to Mile</option>
          <option value="Yard to Meter">Yard to Meter</option>
          <option value="Meter to Yard">Meter to Yard</option>
          <option value="Yard to Foot">Yard to Foot</option>
          <option value="Foot to Yard">Foot to Yard</option>
          <option value="Foot to Inch">Foot to Inch</option>
          <option value="Inch to Foot">Inch to Foot</option>
          <option value="Nautical Mile to Kilometre">Nautical Mile to Kilometre</option>
          <option value="Kilometre to Nautical Mile">Kilometre to Nautical Mile</option>
          <option value="Inch to Centimeter">Inch to Centimeter</option>
          <option value="Centimeter to Inch">Centimeter to Inch</option>
          <option value="Centimeter to Milimetre">Centimeter to Milimetre</option>
          <option value="Milimetre to Centimeter">Milimetre to Centimeter</option>
          <option value="Micrometres to Meter">Micrometres to Meter</option>
          <option value="Meter to Micrometres">Meter to Micrometres</option>
          <option value="Meter to Nanometre">Meter to Nanometre</option>
          <option value="Nanometre to Meter">Nanometre to Meter</option>

        </select>
        <input id="amount" type="text" name="amount" value="" placeholder="Enter a Value" required><br>
        <h3>
          <?php

            if (isset($_POST['convert'])) {
              $amount=$_POST['amount'];
              $option=$_POST['Distance'];

              if ($option=='Meter to Centimeter') {
                  $result=$amount*100;
                  echo $amount." Meter = ".$result." Centimeter";
              }
              if ($option=='Centimeter to Meter') {
                $result=$amount/100;
                echo $amount." Centimeter = ".$result." Meter";
              }
              if ($option=='Kilometre to Meter') {
                $result=$amount*1000;
                echo $amount." Kilometre = ".$result." Meter";
              }
              if ($option=='Meter to Kilometre') {
                $result=$amount/1000;
                echo $amount." Meter = ".$result." Kilometre";
              }
              if ($option=='Mile to Kilometre') {
                $result=$amount*1.60934;
                echo $amount." Mile = ".$result." Kilometre";
              }
              if ($option=='Kilometre to Mile') {
                $result=$amount/1.60934;
                echo $amount." Kilometre = ".$result." Mile";
              }
              if ($option=='Yard to Meter') {
                $result=$amount/1.09361;
                echo $amount." Yard = ".$result." Meter";
              }
              if ($option=='Meter to Yard') {
                $result=$amount*1.09361;
                echo $amount." Meter = ".$result." Yard";
              }
              if ($option=='Yard to Foot') {
                $result=$amount*3;
                echo $amount." Yard = ".$result." Foot";
              }
              if ($option=='Foot to Yard') {
                $result=$amount/3;
                echo $amount." Foot = ".$result." Yard";
              }
              if ($option=='Foot to Inch') {
                $result=$amount*12;
                echo $amount." Foot = ".$result." Inch";
              }
              if ($option=='Inch to Foot') {
                $result=$amount/12;
                echo $amount." Inch = ".$result." Foot";
              }
              if ($option=='Nautical Mile to Kilometre') {
                $result=$amount*1.852;
                echo $amount." Nautical Mile = ".$result." Kilometre";
              }
              if ($option=='Kilometre to Nautical Mile') {
                $result=$amount/1.852;
                echo $amount." Kilometre = ".$result." Nautical Mile";
              }
              if ($option=='Inch to Centimeter') {
                $result=$amount*2.54;
                echo $amount." Inch = ".$result." Centimeter";
              }
              if ($option=='Centimeter to Inch') {
                $result=$amount/2.54;
                echo $amount." Centimeter = ".$result." Inch";
              }
              if ($option=='Centimeter to Milimetre') {
                $result=$amount*10;
                echo $amount." Centimeter = ".$result." Milimetre";
              }
              if ($option=='Milimetre to Centimeter') {
                $result=$amount/10;
                echo $amount." Milimetre = ".$result." Centimeter";
              }
              if ($option=='Micrometres to Meter') {
                $result=$amount/1e+6;
                echo $amount." Micrometres = ".$result." Meter";
              }
              if ($option=='Meter to Micrometres') {
                $result=$amount*1e+6;
                echo $amount." Meter = ".$result." Micrometres";
              }
              if ($option=='Meter to Nanometre') {
                $result=$amount*1e+9;
                echo $amount." Meter = ".$result." Nanometre";
              }
              if ($option=='Nanometre to Meter') {
                $result=$amount/1e+9;
                echo $amount." Nanometre = ".$result." Meter";
              }

            }else {
              echo "Choose a Conversion Option";
            }


           ?>
        </h3>

        <input id="convert" type="submit" name="convert" value="Convert">

      </form>

    </div>

  </body>
</html>
