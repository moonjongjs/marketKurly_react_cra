<?
    include_once('./kurly_header.php');

    $userEmail = $_POST['userEmail'];

    $sql = "SELECT * FROM green_kurly_table WHERE userEmail='$userEmail'";
    $res = mysqli_query($conn, $sql);

    // $res 안에 내용을 카운트 => mysqli_num_rows() 함수
    // 존재하는 아이디이면 중복된 아이디 이다. 
    if( mysqli_num_rows($res) > 0 ){
        echo 1;
    }
    else{
        echo 0;
    }

?>