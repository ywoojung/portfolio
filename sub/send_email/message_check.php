<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>메세지확인</title>
    <style media="screen">
      .clear::after { content: ''; display: block; clear: both; }
      ul { width: 70%; height: auto; list-style: none; }
      ul li { width: 100%; height: auto; }
      ul li.title { background: #eee; }
      ul li span { display: block; float: left; text-align: center; padding: 10px 0; }
      ul li span:nth-child(1) { width: 20%; }
      ul li span:nth-child(2) { width: 30%; }
      ul li span:nth-child(3) { width: 50%; }
    </style>
  </head>
  <body>
    <ul>
      <li class="title clear">
        <span>이름</span>
        <span>이메일</span>
        <span>메세지</span>
      </li>

      <?php

        $con=mysqli_connect("localhost", "yunwoojung", "dnwjd31223!", "yunwoojung");
        $sql="select * from send_message order by num desc";
        $result=mysqli_query($con, $sql);

        while($row=mysqli_fetch_array($result)) {
          $name=$row["name"];
          $email=$row["email"];
          $message=$row["message"];
       ?>

      <li>
        <span><?=$name?></span>
        <span><?=$email?></span>
        <span><?=$message?></span>
      </li>

      <?php
      }
       ?>


    </ul>
  </body>
</html>
