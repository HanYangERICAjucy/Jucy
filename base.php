<?php
  require_once("lib/ti.php");
  $title = "_";
  function setTitle($t)
  { 
    global $title;
    $title = $t;
  }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <? emptyblock('head'); ?>
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <div class="panel panel-default">
    <div class="panel-heading">
      <button type="button" class="btn btn-link">
      <i class="glyphicon glyphicon-align-justify"></i>
      </button><? emptyblock('content-title'); ?>
    </div><!--END button  -->
    <div class="panel-body">
        <? emptyblock('content'); ?>
        <div class="panel-footer">Copyright 2015. JUCY all right reserved</div>
    </div><!--END panel-body  -->
  </div><!--END panel-default -->
</body>
</html>

