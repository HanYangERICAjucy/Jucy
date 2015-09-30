<?php
  include_once('base.php');
  setTitle("운동기록 보기");
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>

    
      

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="exerciseRecord_mainRecord.php">주요기록</a></li>
                <li ><a href="exerciseRecord_dailyRecord.php">매일기록</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container-fluid">
          <form action="mainExerciseGraph.php">
            <select name="mainExercise">
              <option value="BenchPress">Bench Press</option>
              <option value="Squat">Squat</option>
              <option value="ShoulderPress">Shoulder Press</option>
              <option value="DeadLift">Dead Lift</option>
            </select>
            <input type="submit">
            <img src="test_graph.png" width="80%">
            
          </form>

      </div>
   


<?endblock('content');
  startblock('head');
  echo "<title> JUCY | ".$title."</title>";
  endblock('head');
  startblock('content-title');
  echo $title;
  endblock('content-title');
?>
