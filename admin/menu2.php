<?php
  include_once('./admin_base.php');
?>

<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>

<?

if (!empty($_POST)) {
  // POST가 빈 요청이 아닐때.
  $round = $_POST['round'];
  $upload_path = "./upload/".$round;

  // uploader 객체를 생성한다. (라이브러리 직접 수정해도 됨)
  $extentions = array ('image/pjpeg', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png', 'image/gif');
  $uploader = new Uploader();
  $uploader->set_extentions($extentions);

  $uploader->set_directory($upload_path);

  if ( $uploader->upload() ) {
    $uploader->show_file();
    echo "Success";
  }
}
?>






<div class="row" style="margin-left: auto; margin-right: auto;">
  <div class="container-fluid col-md-4">
    <h2>다이어트워</h2>
    <button>다이어트워 활성화/비활성화 : 다이어트워 시즌에만 활성화</button><br /><br />
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="a.jpg" class="img-responsive" alt="Chania">
      </div>

      <div class="item">
        <img src="b.jpg" class="img-responsive" alt="Chania">
      </div>

      <div class="item">
        <img src="c.jpg" class="img-responsive" alt="Flower">
      </div>

      <div class="item">
        <img src="d.png" class="img-responsive" alt="Flower">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>
<br />
<div class="row" style="margin-left: auto; margin-right: auto;">
  <!-- Trigger the modal with a button -->
  <div id="addbutton" class="container-fluid">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">사진추가</button>
  </div>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <form enctype="multipart/form-data" action="#" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="128288">
        <div class="modal-header">
          <p><button type="button" class="close" data-dismiss="modal">&times;</button></p>
          <h4 class="modal-title">사진추가</h4>
        </div>
        <div class="modal-body">


          <div class="form-group">

          <form enctype="multipart/form-data" action="img_uploader.php" method="post">
             <!-- 8.클라이언트쪽 업로드 제한용량을 설정함-->
            <input type="hidden" name="MAX_FILE_SIZE" value="128288">
            <b>파일:</b> 
            <input type="file" name="upload" />
            <select name="round">
              <option value="1">1회차</option>
              <option value="2">2회차</option>
            </select>
            <input type="hidden" name="type" value="image"/>
            <div align="center"><input type="submit" name="upload_form" value="업로드" /></div>
            <input type="hidden" name="upload_check" value="true" />
          </form>


          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
 
<? endblock('content'); ?>
<? startblock('extra'); ?>
    <script>
      $(document).ready(function(){
          $("button").click(function(){
              $("#myCarousel").toggle();
              $("#addbutton").toggle();
          });
      });
    </script>
<? endblock('extra'); ?>