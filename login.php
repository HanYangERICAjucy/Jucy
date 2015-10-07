<?php
  include_once('base.php');
  setTitle("로그인");

  function loginpage()
  {
      echo '<h1>로그인</h1>';
      echo '<form action="login.php" method="post">';
      echo '<input type="text" name="id" value="'.$_POST['id'].'" placeholder="id"/>';
      echo '<input type="password" name="pw" value="" placeholder="pw"/>';
      echo '<input type="submit" name="" value="login"/><br/>';
      echo '<a href="register.php">회원가입</a>';
      echo '</form>';
  }
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>
<?php
if($_POST['id'] != ''|| $_POST['pw']!='')
  {
      $result = login($_POST['id'], $_POST['pw']);
      if($result[0][0] == 'success')
      {
          session_start();
          $_SESSION['user_id'] = $result[1][0];
          $_SESSION['user_name'] = $result[1][1];
          $_SESSION['user_level'] = $result[1][2];
          header("Location: /todaysExercise.php");
      }
      else
      {
          // 존재하지 않는 아이디거나 비밀번호가 틀림
          loginpage();
      }
  } else {
            loginpage();
         }
  endblock('content');
  startblock('head');
  echo "<title> JUCY | ".$title."</title>";
  endblock('head');
  startblock('content-title');
  echo $title;
  endblock('content-title');
?>