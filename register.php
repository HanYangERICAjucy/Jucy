<?php
  include_once('base.php');
  setTitle("로그인");

  /* 회원가입 페이지 html 코드 호출 함수 */
  function registerpage()
  {
      echo '<h1>회원가입</h1>';
      echo '<form action="register.php" method="post">';
      echo '<input type="text" name="id" value="'.$_POST[id].'" placeholder="아이디"/><br/>';
      echo '<input type="text" name="name" value="'.$_POST[name].'" placeholder="이름"/><br/>';
      echo '<input type="password" name="pw" value="" placeholder="비밀번호"/><br/>';
      echo '<input type="password" name="repw" value="" placeholder="비밀번호확인"/><br/>';
      echo '<input type="submit" name="" value="완료"/><br/>';
      echo '</form>';
  }
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>
<?php
if($_POST['id'] != '' && $_POST['pw']!='')
  {
      
      if($_POST['pw'] == $_POST['repw'])
      {
          $result = login($_POST['id'], $_POST['pw']);
          if($result[0][0] == 'fail')
          {
              $a = adduser($_POST['id'], $_POST['name'], $_POST['pw']);
              if($a[0][0] == 'success')
              {
                  // 아이디 생성완료 로그인페이지로 이동
                  header('Location: /login.php');
              }
              else
              {
                  // 아이디 생성실패 거의 발생되지 않는 경우
                  registerpage();
              }
          }
          else
          {
              //아이디가 중복됨
              registerpage();
          }
          
      }
      else
      {
          // id 혹은 비밀번호 입력 안함
          registerpage();
      }
  } else {
            // 처음 화면 열때 알림메시지 필요 없음
            registerpage();
         }
  endblock('content');
  startblock('head');
  echo "<title> JUCY | ".$title."</title>";
  endblock('head');
  startblock('content-title');
  echo $title;
  endblock('content-title');
?>