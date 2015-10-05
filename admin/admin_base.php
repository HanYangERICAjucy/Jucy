<?php
  require_once('../lib/ti.php');
  require_once('../lib/uploader.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>GYM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <? emptyblock('head'); ?>
</head>
<body>
  <div class="row" style="margin-left: auto; margin-right: auto;">
    <div class="navbar navbar-inverse col-md-12">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/admin/main.php">ADMIN PAGE</a>
        </div>
      </div>
    </div>
  </div>
<? emptyblock('content'); ?>
<? emptyblock('extra'); ?>
</body>
</html>
