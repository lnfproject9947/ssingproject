<?php
include "db.php";

$userId    = $_POST['userId'];
$userPw    = $_POST['userPw'];
$userName  = $_POST['userName'];
$userEmail = $_POST['userEmail'];

// 변수 이름 오타 수정 + 보안용 prepared statement 사용
$sql = "INSERT INTO member
        (user_id, user_pw, user_name, user_email, user_reg_datetime)
        VALUES (?, ?, ?, ?, NOW())";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId, $userPw, $userName, $userEmail]);
?>
<script>
    alert("회원가입이 완료되었습니다.");
    location.replace('./login.html');
</script>
