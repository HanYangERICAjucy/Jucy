<?php
/*유저 기록 반환 (미완성)*/
function user_record () {
    $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");
    
    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    
    $resultset = mysql_query("select * from user_record");
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
    $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");
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

/*유저 로그인 함수 성공시 success 실패시 empty를 이중 array 형식으로 반환*/
function login($id, $passwd_in)
{
    $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");

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
        $resultset = mysql_query("select * from user_info where id = '$id' and passwd = '$passwd'");
        if (mysql_num_rows($resultset) < 1)
        {
            mysql_close($con);
            return array(array("empty"));
        }
        else
        {
            mysql_close($con);
            return array(array("success"));
        }
    }
    mysql_close($con);
    return array(array("fail"));
}

/*id 에 해당하는 유저의 래밸을 올림 일반회원을 정회원으로 올리는 기능밖에 없음*/
function levelup($id)
{
     $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");

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
    $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info");
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
    $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info where id = '$id'");
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
    $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info where name = '$name'");
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

/* 회원 등급 반환 0 */
function searchLEVEL($level)
{
    $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");

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
    $con = mysql_connect("localhost", "u242089643_jucy", "gksdid1!");

    if (!$con)
    {
      die('연결 안됨: '.mysql_error());
    } else {
      mysql_select_db("u242089643_tdc");
    }
    $resultset = mysql_query("select id, name, user_level, vote from user_info where vote = 1");
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

?>