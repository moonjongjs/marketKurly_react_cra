<?
    include_once('./kurly_header.php');
    
    $userId       = "moonjong";
    $userPw       = "moonjong123";
    $userName     = "이순신";
    $userEmail    = "moonjong@naver.com";
    $userHp       = "010-7942-5305";
    $userAddress  = "서울시 신촌로 우리집";
    $userGender   = "여성";
    $userBirth    = "1970-09-29";
    $userAddInput = "추천인 아이디 moonjong";
    $userService  = "이용약관동의 필수 내용 3가지 입력";

    $sql = "INSERT INTO green_kurly_table (userId, userPw, userName, userEmail, userHp, userAddress, userGender, userBirth, userAddInput, userService)
            VALUES ('$userId','$userPw','$userName','$userEmail','$userHp','$userAddress','$userGender','$userBirth','$userAddInput','$userService')";
    $result = mysqli_query($conn, $sql);
    
    if($result==true){
        echo "테이블 저장 성공!";
    }
    else{
        echo "테이블 저장 실패!";
    }

?>