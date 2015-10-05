<?php
  include_once('./admin_base.php');
?>

<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>


  <div class="row" style="margin-left: auto; margin-right: auto;">
    <div class="container-fluid col-md-4">
      <h2>오늘의운동</h2>
      <div class="panel panel-default">
        <div class="panel-heading">동영상 업로드</div>
        <div class="panel-body">    
          <div class="embed-responsive embed-responsive-16by9">
            <object width="425" height="350" type="application/x-shockwave-flash" data="https://www.youtube.com/v/watch?v=glXgSSOKlls">
              <param name="wmode" value="transparent" />
            </object>
          </div>
        </div>
        <div class="panel-footer">
          <form>
            동영상주소
            <input type="text" name="link">
            <button type="button" class="btn btn-default col-xs-offset-1" data-dismiss="modal">올리기</button>
          </form>
        </div>
      </div>
    </div>
  </div>

 <? endblock('content'); ?>