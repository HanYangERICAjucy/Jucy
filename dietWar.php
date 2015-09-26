<?php
  include_once('base.php');
  setTitle("다이어트 워");
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>


        <h1>시즌7</h1>
        <div class="row">
          <div class="col-xs-4 col-xs-offset-2">
            <img src="woods.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236">
          </div>
          <button type="button" class="btn btn-default">좋아요</button>
          <div class="col-xs-4">
            <img src="lake.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236">
         </div>
         </div>
         <div class="row">
          <div class="col-xs-4 col-xs-offset-2">
            <img src="woods.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236">
          </div>
          <button type="button" class="btn btn-default">좋아요</button>
          <div class="col-xs-4">
            <img src="lake.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236">
         </div>
         </div>
         <div class="row">
          <div class="col-xs-4 col-xs-offset-2">
            <img src="woods.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236">
          </div>
          <button type="button" class="btn btn-default">좋아요</button>
          <div class="col-xs-4">
            <img src="lake.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236">
         </div>
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