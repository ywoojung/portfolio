<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>이메일 보내기</title>
  </head>
  <body>
    <form name="message_form" action="php/send_db.php" method="post">
      이름 : <input type="text" name="name" value="">
      이메일 : <input type="text" name="email" value="">
      메세지 : <textarea name="message_con" rows="8" cols="80"></textarea><br>
      <input type="button" value="send" onclick="send_message()">
    </form>
    <script type="text/javascript">

      function send_message() {
        if (!document.message_form.name.value) {
          alert('이름을 입력해주세요.');
          document.message_form.name.focus();
          return;
        }
        if (!document.message_form.email.value) {
          alert('이메일을 입력해주세요.');
          document.message_form.email.focus();
          return;
        }
        if (!document.message_form.message_con.value) {
          alert('내용을 입력해주세요.');
          document.message_form.message_con.focus();
          return;
        }
        document.message_form.submit();
      }

    </script>
  </body>
</html>
