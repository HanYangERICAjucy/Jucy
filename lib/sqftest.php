<?php
//유저관리
/*유저 등록 유무 확인 함수*/
function checkuser($id, $con)
{       
    $resultset = mysql_query("select id from user_info where id = '$id'");
    
    if (mysql_num_rows($resultset) < 1)
    {
        $result = "empty";
    }
    else
    {
        $result = "exist";
    }
    return $result;
}

/*유저 등록함수 sha256 변환작업까지 수행함함 아이디 중복시 empty를 반환함*/
function adduser($id, $name, $passwd_in)
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    $res = array();
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    $check = checkuser($id, $con);
    if($check == "empty")
    {
        $passwd = hash("sha256", trim($id.$passwd_in));
        $resultset = mysql_query("insert into user_info (id, name, passwd) values ('$id', '$name', '$passwd')");
        $res = array(array("success"));
    }
    else
    {
        $res = array(array("empty"));
    }
    mysql_close($con);
    return $res;
}

/*유저 로그인 함수 성공시 success 실패시 empty를 이중 array 형식으로 반환 array 두번째 element로 아이디, 이름 정보 반환*/
function login($id, $passwd_in)
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $check = checkuser($id, $con);
    if($check != "empty")
    {
        $passwd = hash("sha256", trim($id.$passwd_in));
        $resultset = mysql_query("select id, name from user_info where id = '$id' and passwd = '$passwd'");
        if (mysql_num_rows($resultset) < 1)
        {
            mysql_close($con);
            return array(array("empty"));
        }
        else
        {
            $result = array(array("success"));
            $row = array();
            while($row = mysql_fetch_array($resultset, MYSQL_NUM))
            {
                array_push($result, $row);
            }
            mysql_close($con);
            return $result;
        }
    }
    mysql_close($con);
    return array(array("fail"));
}

/*id 에 해당하는 유저의 래밸을 올림 일반회원을 정회원으로 올리는 기능밖에 없음*/
function levelup($id)
{
     $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $check = checkuser($id, $con);
    if($check != "empty")
    {
        $resultset = mysql_query("update user_info set user_level = 10 where id = '$id'");       
        mysql_close($con);
        return array(array("success"));
    }
    mysql_close($con);
    return array(array("empty"));
}

/*모든 유저정보 반환*/
function showUSER()
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info order by user_level desc");
    if (mysql_num_rows($resultset) < 1)
    {
        mysql_close($con);
        return array(array("empty"));
    }
    else
    {
        $result = array();
        $row = array();
        while($row = mysql_fetch_array($resultset, MYSQL_NUM))
        {
            array_push($result, $row);
        }

        mysql_close($con);
        return $result;
    }
}  

/*id 검색결과 반환*/
function searchID($id)
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info where id = '$id' order by user_level desc");
    if (mysql_num_rows($resultset) < 1)
    {
        mysql_close($con);
        return array(array("empty"));
    }
    else
    {
        $result = array();
        $row = array();
        while($row = mysql_fetch_array($resultset, MYSQL_NUM))
        {
            array_push($result, $row);
        }

        mysql_close($con);
        return $result;
    }
}

/*회원 이름 검색 결과 반환 */
function searchNAME($name)
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info where name = '$name' order by user_level desc");
    if (mysql_num_rows($resultset) < 1)
    {
        mysql_close($con);
        return array(array("empty"));
    }
    else
    {
        $result = array();
        $row = array();
        while($row = mysql_fetch_array($resultset, MYSQL_NUM))
        {
            array_push($result, $row);
        }

        mysql_close($con);
        return $result;
    } 
}

/* 회원 등급 반환 0: 승인대기 / 10: 일반회원 / 100: 관리자*/
function searchLEVEL($level)
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info where user_level = $level");
    if (mysql_num_rows($resultset) < 1)
    {
        mysql_close($con);
        return array(array("empty"));
    }
    else
    {
        $result = array();
        $row = array();
        while($row = mysql_fetch_array($resultset, MYSQL_NUM))
        {
            array_push($result, $row);
        }
        
        mysql_close($con);
        return $result;
    } 
}

/*투표안한 유저목록 반환*/
function searchDIDNTVOTE()
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info where vote = 1 order by user_level desc");
    if (mysql_num_rows($resultset) < 1)
    {
        mysql_close($con);
        return array(array("empty"));
    }
    else
    {
        $result = array();
        $row = array();
        while($row = mysql_fetch_array($resultset, MYSQL_NUM))
        {
            array_push($result, $row);
        }

        mysql_close($con);
        return $result;
    }
}

//(미완성 | 태스트 필요)


// 유저 기록 관리
/* 유저 일일 기록 반환 */
function dailyRECORD ($id, $date) {
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    $resultset = mysql_query("select * from user_record where id = '$id' and record_date = '$date'");
    if (mysql_num_rows($resultset) < 1)
    {
         mysql_close($con);
        return array(array("empty"));
    }
    else
    {
        $result = array();
        $row = array();
        while($row = mysql_fetch_array($resultset, MYSQL_NUM))
        {
            array_push($result, $row);
        }

        mysql_close($con);
        return $result;
    }
}

/*(그래프)유저 기록 반환 id, 운동이름 (bench_press, shoulder_press, deadlift, sit_up), 출력할 목록의 최대 숫자 입력필요 */
function getGRAPH ($id, $exercise_name, $limit) {
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    $resultset = mysql_query("select ".$exercise_name.", record_date from user_record where id = '$id' order by record_date desc limit ".$limit);
    if (mysql_num_rows($resultset) < 1)
    {
         mysql_close($con);
        return array(array("empty"));
    }
    else
    {
        $result = array();
        $row = array();
        while($row = mysql_fetch_array($resultset, MYSQL_NUM))
        {
            array_push($result, $row);
        }

        mysql_close($con);
        return $result;
    }
}

/*유저 기록 입력 id, 날짜 운동기록 (bench_press, shoulder_press, deadlift, sit_up)입력 내용 없을시 0, 크로스핏 | 웨이트 기록 입력 내용 없을시 '' 입력*/
function saveRECORD ($id, $date, $bench_press, $shoulder_press, $deadlift, $sit_up, $crossfit, $weight) {
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    
    
    $checkset = mysql_query("select * from user_record where id = '$id' and record_date = '$date'");
    
    if(mysql_num_rows($checkset) < 1)
    {
        $resultset = mysql_query("insert into user_record values ('$id', '$date', $bench_press, $shoulder_press, $deadlift, $sit_up,'$crossfit', '$weight')");
        $res = array(array("success"));
    }
    else
    {
        $res = array(array("empty"));
    }
     mysql_close($con);
     return $res;
}

/*유저 기록 수정 id, 날짜 운동기록 (bench_press, shoulder_press, deadlift, sit_up)입력 내용 없을시 0, 크로스핏 | 웨이트 기록 입력 내용 없을시 '' 입력*/
function modifyRECORD ($id, $date, $bench_press, $shoulder_press, $deadlift, $sit_up, $crossfit, $weight) {
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    $delete = mysql_query("delete from user_record where id = '$id' and record_date = '$date'");
    $resultset = mysql_query("insert into user_record values ('$id', '$date', $bench_press, $shoulder_press, $deadlift, $sit_up,'$crossfit', '$weight')");

    mysql_close($con);
    return array(array('success'));
}
    



//오늘의 운동
/* 오늘의 운동 입력 */
function saveTODAYex($cross_list, $cross_url, $weight_list, $weight_url, $date)
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    $res = array();
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    $checkset = mysql_query("select * from today_exercise where record_date = '$date'");
    
    if(mysql_num_rows($checkset) < 1)
    {
        $resultset = mysql_query("insert into today_exercise values ('$date', '$cross_list', '$corss_rul', '$weight_list', '$weight_url')");
        $res = array(array("success"));
    }
    else
    {
        $res = array(array("empty"));
    }
    mysql_close($con);
    return $res;
}

/* 오늘의 운동 목록 반환 */
function showTODAYex($date)
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    $res = array();
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    $resultset = mysql_query("select * from today_exercise where record_date = '$date'");
    if (mysql_num_rows($resultset) < 1)
    {
         mysql_close($con);
        return array(array("empty"));
    }
    else
    {
        $result = array();
        $row = array();
        while($row = mysql_fetch_array($resultset, MYSQL_NUM))
        {
            array_push($result, $row);
        }

        mysql_close($con);
        return $result;
    }
    
}

/* 오늘의 운동 수정 */
function modifyTODAYex($cross_list, $cross_url, $weight_list, $weight_url, $date)
{
    $con = mysql_connect("202.150.213.206", "u242089643_jucy", "gksdid1!");
    $res = array();
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    $checkset = mysql_query("delete from today_exercise where record_date = '$date'");
    
    $resultset = mysql_query("insert into today_exercise values ('$date', '$cross_list', '$corss_rul', '$weight_list', '$weight_url')");
        
    return array(array("success"));
}


?>