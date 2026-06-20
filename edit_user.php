<?php
include "db.php";

$userId = $_GET['userId'];

$sql = "SELECT * FROM member WHERE user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>회원 수정</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="page">
  <section class="card">

    <h1>회원 수정</h1>

    <form action="update_user.php" method="post">

      <input type="hidden" name="originalId"
             value="<?php echo $user['user_id']; ?>">

      <div class="form-group">
        <label>아이디</label>
        <input type="text" name="userId"
               value="<?php echo $user['user_id']; ?>">
      </div>

      <div class="form-group">
        <label>이름</label>
        <input type="text" name="userName"
               value="<?php echo $user['user_name']; ?>">
      </div>

      <div class="form-group">
        <label>이메일</label>
        <input type="email" name="userEmail"
               value="<?php echo $user['user_email']; ?>">
      </div>

      <div class="form-group">
        <label>비밀번호</label>
        <input type="password" name="userPw"
               value="<?php echo $user['user_pw']; ?>">
      </div>

      <button class="btn" type="submit">수정 완료</button>

    </form>

  </section>
</main>

</body>
</html>
