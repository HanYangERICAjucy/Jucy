<?php
  include_once('./admin_base.php');
?>

<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>


<div class="row" style="margin-left: auto; margin-right: auto;">
  <div class="container-fluid">
    <div class="panel-group col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">회원정보</div>
        <div class="panel-body">
          <img src="1.png" class="img-circle" alt="icon1" width="50" height="50">
          <button type="button" class="btn btn-success col-xs-offset-7 col-md-offset-7"><a href="menu1.php">Click</a></button>
        </div>
      </div>

      <div class="panel panel-info">
        <div class="panel-heading">다이어트워</div>
        <div class="panel-body">
          <img src="2.png" class="img-circle" alt="icon2" width="50" height="50">
          <button type="button" class="btn btn-info col-xs-offset-7 col-md-offset-7"><a href="menu2.php">Click</a></button>
        </div>
      </div>

      <div class="panel panel-warning">
        <div class="panel-heading">오늘의운동</div>
        <div class="panel-body">
          <img src="3.png" class="img-circle" alt="icon3" width="50" height="50">
          <button type="button" class="btn btn-warning col-xs-offset-7 col-md-offset-7"><a href="menu3.php">Click</a></button>
        </div>
      </div>
    </div>
  </div>
</div>

<? endblock('content'); ?>