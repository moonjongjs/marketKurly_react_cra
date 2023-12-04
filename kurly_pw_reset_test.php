<?
    // http://moonjong.dothome.co.kr/kurly_green/kurly_pw_reset_test.php
    include_once('./kurly_header.php');

    $userId = 'moonjong';
    $userHp = '010-7942-5305';
    $userPw = '9999999999';

    $sql = "UPDATE green_kurly_table SET userPw='$userPw' WHERE userId='$userId'";
    $res = mysqli_query($conn, $sql);
 
    if( !$res ){    
        echo "다시 시도해 주세요";        
    }
    else{
        echo "비밀번호가 변경되었습니다.";
    }

?>