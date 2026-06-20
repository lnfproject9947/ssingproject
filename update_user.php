<?php
include "db.php";

$originalId = $_POST['originalId'];   // 원래 아이디 (어떤 회원을 고칠지 기준)
$userId     = $_POST['userId'];
$userPw     = $_POST['userPw'];
$userName   = $_POST['userName'];
$userEmail  = $_POST['userEmail'];

$sql = "UPDATE member
        SET user_id = ?, user_pw = ?, user_name = ?, user_email = ?
        WHERE user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId, $userPw, $userName, $userEmail, $originalId]);
?>
<script>
    alert("회원 정보가 수정되었습니다.");
    location.replace('./admin_users.php');
</script>
