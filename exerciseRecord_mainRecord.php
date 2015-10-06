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
          <div class="dropdown mainExercise" >
            <button id="dropdown" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" width="200px">Bench Press
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li value="0"><a href="#" onclick="changeGraph(0)">Bench Press</a></li>
              <li value="1"><a href="#" onclick="changeGraph(1)">Squat</a></li>
              <li value="2"><a href="#" onclick="changeGraph(2)">Shoulder Press</a></li>
              <li value="3"><a href="#" onclick="changeGraph(3)">Dead Lift</a></li>
            </ul>
          </div>
          <img id="graph"src="stuart.jpg" width="80%">
      </div>
   
   <script type="text/javascript">
       
       var img = new Array("stuart.jpg","dave.png","test_graph.png","lake.jpg");
      
       function changeGraph (argument) {
         var image = $("#graph");

        switch(argument){
          case 0:
            $("#graph")[0].src = img[0];
            $("#dropdown")[0].innerHTML = "Bench Press<span class='caret'></span>";
            break;
          case 1:
            $("#graph")[0].src = img[1];
            $("#dropdown")[0].innerHTML = "Squat<span class='caret'></span>";
            break;
          case 2:
            $("#graph")[0].src = img[2];
            $("#dropdown")[0].innerHTML = "Shoulder Press<span class='caret'></span>";
            break;
          case 3:
            $("#graph")[0].src = img[3];
            $("#dropdown")[0].innerHTML = "Dead Lift<span class='caret'></span>";
            break;

        }

       }
       </script>
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