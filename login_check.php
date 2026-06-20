<?php
session_start();          // 로그인 상태 기억
include "db.php";

$loginId = $_POST['loginId'];
$loginPw = $_POST['loginPw'];

// 1. 해당 아이디 회원을 DB에서 찾기 (? = 보안용 자리표시자)
$sql = "SELECT * FROM member WHERE user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$loginId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// 2. 아이디가 있고 + 비밀번호가 일치하면 로그인 성공
if ($user && $user['user_pw'] === $loginPw) {
    $_SESSION['user_id']   = $user['user_id'];
    $_SESSION['user_name'] = $user['user_name'];
    header("Location: admin_users.php");   // 관리자 페이지로 이동
    exit;
} else {
    // 3. 실패 시 안내 후 로그인 페이지로 되돌리기
    echo "<script>";
    echo "alert('아이디 또는 비밀번호가 올바르지 않습니다.');";
    echo "location.replace('./login.html');";
    echo "</script>";
}
?>
