<?php
  include_once('base.php');
  setTitle("로그인");
echo "\n<br/>";
$a = getGRAPH('aaaa', 'bench_press', 5);
foreach ($a as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}
$b = saveRECORD('aaaa', '2015-06-12', 200, 20, 30, 40, 'cross50', 'wieght50');
foreach ($b as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}
echo "<br/>";
$c = getGRAPH('aaaa', 'bench_press', 5);
foreach ($c as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}
echo "<br/>";
$d = saveRECORD('aaaa', '2015-06-12', 420, 120, 230, 340, 'cross50', 'wieght50');
foreach ($b as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}
echo "<br/>";
$e = getGRAPH('aaaa', 'bench_press', 5);
foreach ($e as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}
echo "<br/>";
$f = modifyRECORD('aaaa', '2015-06-12',150, 120, 230, 340, 'cross50', 'wieght50');
foreach ($f as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}
echo "<br/>";
$g = getGRAPH('aaaa', 'bench_press', 5);
foreach ($g as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}

echo "<br/>";
$h = showTODAYex('2015-06-05');
foreach ($h as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}

echo "<br/>";
$h = dailyRECORD('aaaa', '2015-05-10');
foreach ($h as $var)
{
    foreach ($var as $elem)
            echo "$elem \t";
        echo "\n<br/>";
}
  if($_GET['id'] != ''| $_GET['pw']!='')
  {
      $result = login($_GET['id'], $_GET['pw']);
      echo "<br/>aa<br/>".$result[1][1]."<br/>";
      foreach ($result as $var)
      {
        foreach ($var as $elem)
        {
            echo "$elem\t";
        }
        echo "\n";
      }
  } else {
?>



<!-- 이부분만 바꿔서 수정하면 됩니다. -->
<? startblock('content'); ?>


    <h1>로그인</h1>
    <form action="login.php" method="get">
        <input type="text" name="id" value="" placeholder="id"/>
        <input type="password" name="pw" value="" placeholder="pw"/>
        <input type="submit" name="" value="login"/>
    </form>

<?
         }
  endblock('content');
  startblock('head');
  echo "<title> JUCY | ".$title."</title>";
  endblock('head');
  startblock('content-title');
  echo $title;
  endblock('content-title');
?>