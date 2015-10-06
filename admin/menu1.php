<<<<<<< HEAD
<!DOCTYPE html>
<head>
  <title>GYM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="row" style="margin-left: auto; margin-right: auto;">
    <div class="navbar navbar-inverse col-md-4">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="main.html">ADMIN PAGE</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin-left: auto; margin-right: auto;">
    <div class="container-fluid col-md-4">
      <h2>회원정보</h2>
      <form action="">
        <input type="radio" name="search" value="id"> ID<br />
        <input type="radio" name="search" value="name"> 이름<br />
        <input type="radio" name="search" value="email"> 이메일<br />
        <input type="radio" name="search" value="userlevel"> 가입상태<br />
        <br />
          <input type="text" class="col-xs-offset-3 col-xs-6 col-md-offset-3 col-md-6" name="search" id="text" placeholder="입력">
          <button type="submit" class="btn btn-default col-xs-offset-1 col-xs-2 col-md-offset-1 col-md-2">검색</button>
        </form>    
        <br />    
        <br />
        <br />
      <table class="table table-striped">
        <thead>
          <tr>
            <th>아이디</th>
            <th>사용자이름</th>
            <th>사용자이메일</th>
            <th>가입상태</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>관리자</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>가입요청중</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
            <td>가입승인완료</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
=======
<?php
  include_once('./admin_base.php');
?>

<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>


<div class="row" style="margin-left: auto; margin-right: auto;">
  <div class="container-fluid col-md-4">
    <h2>회원정보</h2>
    <form action="">
      <input type="radio" name="search" value="id"> ID<br />
      <input type="radio" name="search" value="name"> 이름<br />
      <input type="radio" name="search" value="email"> 이메일<br />
      <input type="radio" name="search" value="userlevel"> 가입상태<br />
      <br />
        <input type="text" class="col-xs-offset-3 col-xs-6 col-md-offset-3 col-md-6" name="search" id="text" placeholder="입력">
        <button type="submit" class="btn btn-default col-xs-offset-1 col-xs-2 col-md-offset-1 col-md-2">검색</button>
      </form>    
      <br />    
      <br />
      <br />
    <table class="table table-striped">
      <thead>
        <tr>
          <th>아이디</th>
          <th>사용자이름</th>
          <th>사용자이메일</th>
          <th>가입상태</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
          <td>관리자</td>
        </tr>
        <tr>
          <td>Mary</td>
          <td>Moe</td>
          <td>mary@example.com</td>
          <td>가입요청중</td>
        </tr>
        <tr>
          <td>July</td>
          <td>Dooley</td>
          <td>july@example.com</td>
          <td>가입승인완료</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<? endblock('content'); ?>
>>>>>>> master
