# my-php-app (회원 관리 시스템)

회원가입 / 로그인 / 회원관리(수정·삭제) 기능이 포함된 PHP 웹 애플리케이션을
Docker로 컨테이너화하고, GitHub Actions로 Docker Hub에 자동 배포(CI/CD)하는 프로젝트입니다.

## 기술 스택
- PHP 8.2 + Apache
- MySQL (PDO)
- HTML / CSS / JavaScript
- Docker
- GitHub Actions (CI/CD)

## 주요 기능
- 회원가입 (insert_user.php)
- 로그인 (login_check.php)
- 회원 목록·관리 (admin_users.php)
- 회원 수정 (edit_user.php / update_user.php)
- 회원 삭제 (delete_user.php)

## 실행 방법
```bash
docker pull lnfproject/my-php-app:latest
docker run -d -p 8080:80 lnfproject/my-php-app:latest
```
브라우저에서 `http://localhost:8080/login.html` 접속

## CI/CD
main 브랜치에 push하면 GitHub Actions가 자동으로 Docker 이미지를 빌드하여
Docker Hub(`lnfproject/my-php-app`)에 배포합니다.
