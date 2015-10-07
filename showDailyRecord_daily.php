<?php
  include_once('base.php');
  setTitle("운동기록 보기");
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>


        <ul class="nav nav-tabs">
            <li><a href="showDailyRecord.php?day=<?=$_GET['day']?>&month=<?=$_GET['month']?>">CrossFit</a></li>
            <li><a href="showDailyRecord_weight.php?day=<?=$_GET['day']?>&month=<?=$_GET['month']?>">Weight</a></li>
            <li class="active"><a href="#">DailyWork</a></li>
      </ul>
        <h1><?=$_GET['month']?>월 <?=$_GET['day']?>일</h1>
      <div class="container-fluid">
        <h2>기타 운동</h2> 
        <div class="well">
          <ul>
            <li>기록1</li>
            <li>기록2</li>
            <li>기록3</li>
            <li>기록4</li>
          </ul>
        </div>
      </div>
      <div class="container-fluid">
      <div class="row">
       <div class="col-xs-3 ">
        <button type="button" class="btn btn-default">facebook</button>
       </div>
       <div class="col-xs-3 col-xs-offset-5">
        <button type="button" class="btn btn-default">fix</button>
       </div>
      </div>
      </div>


<?endblock('content');
  startblock('head');
  echo "<title> JUCY | ".$title."</title>";
  endblock('head');
  startblock('content-title');
  echo $title;
  endblock('content-title');
?>