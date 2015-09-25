<?php
  include_once('base.php');
  setTitle("운동기록 하기");
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>


    <div class="row">
      <div class="col-sm-12">기록할 운동을 선택하세요</div>
      <div class="col-sm-9">
        <div>
          <label >
            <input type="radio" id="q128" name="quality[21]" value="1"/> CrossFit
          </label> 
          <label >
            <input type="radio" id="q129" name="quality[21]" checked="checked" value="2" /> Weight
          </label> 
        </div>
      </div>
    </div>
    <h1>9월 17일</h1>
    <!--if) crossfit을 선택했다면-->
    <div class="container-fluid">
      <h2>오늘의 운동</h2> 
      <div class="well">text</div>
      <div class="form-group">
        <label for="comment"></label>
        <textarea class="form-control" rows="1" id="comment"></textarea>
      </div>
    </div>
    <div class="container-fluid">
      <h2>기타 운동</h2> 
      <div class="btn-group">
    <!--           <button class="btn">운동종목</button>
    -->          <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li>푸쉬업</li>
      <li>덤벨프레스</li>
    </ul>
    </div>
    <div class="btn-group">
    <!--           <button class="btn">운동종목</button>
    -->          <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li>1</li>
      <li>2</li>
    </ul>
    </div>        
    </div>
    <!--if)weight를 선택했다면-->
    <!--       <div class="container-fluid">
            <h2>오늘의 운동</h2> 
            <div class="well">text</div>
            <div class="form-group">
              <label for="comment"></label>
              <textarea class="form-control" rows="1" id="comment"></textarea>
            </div>
          </div>
          <div class="container-fluid">
            <h2>기타 운동</h2> 
            <div class="btn-group">
               <button class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li>푸쉬업</li>
                <li>덤벨프레스</li>
              </ul>
            </div>
          </div> -->
    <div class="container-fluid">
      <div class="row">
         <div class="col-xs-3 col-xs-offset-9">
          <button type="button" class="btn btn-default">저장</button>
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