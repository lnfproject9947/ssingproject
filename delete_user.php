<?php
include "db.php";

$userId = $_POST['userId'];

// 보안용 prepared statement로 삭제
$sql = "DELETE FROM member WHERE user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);
?>
<script>
    alert("아이디가 삭제되었습니다.");
    location.replace('./admin_users.php');   // 삭제 후 관리자 페이지로 복귀
</script>
