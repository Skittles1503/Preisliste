<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <style>
          .container{
            width: 960px;
            background-color: yellow;
            text-align:center;
          }
          .row{
            height: 300px;
          }
          #portfolio>div{
            background-color: red;
          }
        </style>
</head>

<body>

<div class="container">
  <div class="row" id="portfolio">
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
  </div>
  <div class="row" id="Gurkenwasser">
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
  </div>
</div>

</body>
<?php
$str = 'abcdfddhfgef';

if (strlen($str) < 8) {
  echo "Kleiner als 8";
}

else {
  echo "größer als 8";
}
echo strlen($str); // 6

$str = ' ab cd ';
echo strlen($str); // 7
?>