<?php
  include_once('base.php');
  setTitle("오늘의 운동");
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div>
              <ul class="nav navbar-nav">
                <li><a href="todaysExercise.php">CrossFit</a></li>
                <li class="active"><a href="#">Weight</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container-fluid">
          <object type="application/x-shockwave-flash"
           data="http://www.youtube.com/v/eKgPY1adc0A">
            <param name="wmode" value="transparent" />
          </object>
          <div class="well">설명text</div>
      </div>


<?endblock('content');
  startblock('head');
  echo "<title> JUCY | ".$title."</title>";
  endblock('head');
  startblock('content-title');
  echo $title;
  endblock('content-title');
?>