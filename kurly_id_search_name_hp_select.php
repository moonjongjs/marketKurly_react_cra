<?
    include_once('./kurly_header.php');

    $userName = $_POST['userName'];
    $userHp = $_POST['userHp'];

    $sql = "SELECT userId, userGaib FROM green_kurly_table 
            WHERE userName='$userName' AND userHp='$userHp'";
    $res = mysqli_query($conn, $sql);

    // $res 안에 내용을 카운트 => mysqli_num_rows() 함수
    // 회원 아이디와 가입일자 응답 => JSON 형식으로 응답
    // 데이이터베이스 회원정보 배열로 가져오기   
    if( mysqli_num_rows($res) > 0 ){
        $record = mysqli_fetch_array($res);
        echo '{"아이디": "'.$record['userId'].'", "가입일": "'.$record['userGaib'].'"}';
    }
    else{
        echo '';
    }

?>