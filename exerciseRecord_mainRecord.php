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
          <form >
            <select name="mainExercise" onchange="changeGraph(this.form)">
              <option value="0">Bench Press</option>
              <option value="1">Squat</option>
              <option value="2">Shoulder Press</option>
              <option value="3">Dead Lift</option>
            </select>
           
            <img id="graph"src="stuart.jpg" width="80%">
            
          </form>

      </div>
   <script type="text/javascript">
   var img = new Array("stuart.jpg","dave.png","test_graph.png","lake.jpg");
   function changeGraph(frm){
    var exercise = frm.mainExercise.selectedIndex;

    switch(exercise){
      case 0:
        frm.graph.src = img[0];
        break;
      case 1:
        frm.graph.src = img[1];
        break;
      case 2:
        frm.graph.src = img[2];
        break;
      case 3:
        frm.graph.src = img[3];
        break;

    }
   }
   </script>


<?endblock('content');
  startblock('head');
  echo "<title> JUCY | ".$title."</title>";
  endblock('head');
  startblock('content-title');
  echo $title;
  endblock('content-title');
?>