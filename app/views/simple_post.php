<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple post</title>

</head>
<body>
  <div>
    <?php
      echo Form::open(array('url' => '/service/simple/post', 'method' => 'post'));
      echo Form::label('message', 'send message to service');
      echo Form::text('message', null, array('placeholder'=>'message'));
      echo "<br/>";
      echo Form::submit('sent!');
      echo Form::close();
    ?>
  </div>
</body>
</html>
