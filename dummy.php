<?php
header('Content-Type: application/json; charset=UTF-8; Access-Control-Allow-Origin:*');
$con = mysqli_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    
    if (!$con)
    {
        
      die('연결 안됨: '.mysql_error());
        
    } else {
        
      if(mysqli_select_db($con,"u242089643_tdc"))
      {
          echo "success\n";
      }
        
    }
    $numbers  = "0123456789";
    $characters  = "0123456789";  
    $characters .= "abcdefghijklmnopqrstuvwxyz";  
    $characters .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($count = 0; $count < 1000; $count++){
        $id = "";
        $name = "";
        $pw = "";
        for($i = 0; $i < 5; $i++)
        {
            $id .= $characters[mt_rand(0, strlen($characters)-1)]; 
        }
        
        for($i = 0; $i < 5; $i++)
        {
            $name .= $characters[mt_rand(0, strlen($characters)-1)]; 
        }
        for($i = 0; $i < 5; $i++)
        {
            $pw .= $characters[mt_rand(0, strlen($characters)-1)]; 
        }
        /*
        $date = "2015-";
        $date.= "0";
        $date.= $numbers[mt_rand(1, strlen($numbers)-1)]; 
        $date.= "-0";
        $date.= $numbers[mt_rand(1, strlen($numbers)-1)];*/
        $passwd = hash("sha256", trim($id.$pw));
        echo "insert into user_info (id, name, passwd) values ($id, $name, $pw)\n";
        $resultset = mysqli_real_query($con,"insert into user_info (id, name, passwd) values ('$id', '$name', '$passwd')");
    }
    mysqli_close($con);



?>