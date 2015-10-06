<?php
  include_once('base.php');
  setTitle("운동기록 보기");
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>

    
      

       
          <!--<div class="container-fluid">
            <div>
              <ul class="nav nav-tabs">
                <li class="active"><a href="exerciseRecord_mainRecord.php">주요기록</a></li>
                <li ><a href="exerciseRecord_dailyRecord.php">매일기록</a></li>
              </ul>
            </div>
          </div>-->
        
        <div class="secondTab">
          <a href="exerciseRecord_mainRecord.php"><p class="left" style="background-color:#DF314D">주요기록</p></a>
          <a href="exerciseRecord_dailyRecord.php"><p class="right" >매일기록</p></a>
        </div>

        <div class="container-fluid">
          <form action="mainExerciseGraph.php">
            <select name="mainExercise">
              <option value="BenchPress">Bench Press</option>
              <option value="Squat">Squat</option>
              <option value="ShoulderPress">Shoulder Press</option>
              <option value="DeadLift">Dead Lift</option>
            </select>
            <input type="submit">
            
            <div style="width: 100%">
              <canvas id="canvas" height="450" width="600"></canvas>
            </div>
            
          </form>

      </div>
   

<?startblock('extra');?>

<script src="js/Chart.min.js"></script>
<script>
var barChartData = {
  // 가로축 라벨
  labels : ["January","February","March","April","May","June","July"],
  datasets : [
    {
      fillColor : "rgba(220,220,220,0.5)",
      strokeColor : "rgba(220,220,220,0.8)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      // 세로축 데이터들
      data : [90,99,100,120,123,80,140]
    }
  ]

}
window.onload = function(){
  var ctx = document.getElementById("canvas").getContext("2d");
  window.myBar = new Chart(ctx).Bar(barChartData, {
    responsive : true
  });
}

</script>

<?endblock('extra');?>

<?endblock('content');
  startblock('head');
  echo "<title> JUCY | ".$title."</title>";
  endblock('head');
  startblock('content-title');
  echo $title;
  endblock('content-title');
?>