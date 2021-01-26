<meta charset="utf-8">

<?php
  //주소창으로 받아올때는 $_GET

  $name=$_POST["name"];
  $email=$_POST["email"];
  $message=$_POST["message_con"];

  $con=mysqli_connect("localhost", "yunwoojung", "dnwjd31223!", "yunwoojung");
  $sql="insert into send_message (name, email, message) values ('$name', '$email', '$message')";
  mysqli_query($con, $sql);
  mysqli_close($con);

  echo "
    <script>
      alert('보내기가 완료되었습니다.');
      location.href='../index.php';
    </script>
  ";







 ?>
