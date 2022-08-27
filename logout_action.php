<?php
session_start();
$result = session_destroy();

if ($result) {  //성공시 True, 실패시 False 반환
?><script>
    alert("로그아웃 되었습니다.");
    location.replace('index.php');
    </script>
<?php } ?>
