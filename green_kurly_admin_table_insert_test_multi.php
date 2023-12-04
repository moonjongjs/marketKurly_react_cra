<?
    include_once('./kurly_header.php');
    
   
    // 관리자 회원 가입 저장
    $sql = "INSERT INTO green_kurly_admin_table (adminId, adminPw, adminName, adminEmail, adminHp, adminAddress) VALUES 
            ('moonjong2','moonjong123','이순신','moonjong2@naver.com','010-7942-5305','서울시 강남구 논현동 123'),
            ('moonjong3','moonjong123','이소영','moonjong3@naver.com','010-348-7942','서울시 서초구 서초동 777'),
            ('moonjong4','moonjong123','김수정','moonjong4@naver.com','010-632-6441','서울시 서대문구 연희동 356'),
            ('moonjong5','moonjong123','조지현','moonjong5@naver.com','010-8876-1234','서울시 중구 연수로 89'),
            ('moonjong6','moonjong123','정지연','moonjong6@naver.com','010-978-7890','서울시 강동구 길동 16')";

            
    $result = mysqli_query($conn, $sql);
    
    if($result==true){
        echo "관리자 회원 테이블 5명 저장 성공!";
    }
    else{
        echo "관리자 회원 테이블 5명 저장 실패!";
    }

?>