<?php
Header("HTTP/1.1 404 Not Found");
?>

<!DOCTYPE html>
<html>
<head>
  <title>404</title>
  <link rel="icon" href="photo/logo.png" type="photo/logo.png">
  <style type="text/css">
    html {
background-image: url("photo/fon.jpg"); /*изображение фона*/
background-size: cover; /*размер фона*/
margin: 0px;
}

.h1{
  font-size: 100px;
  font-family: Roboto, sans-serif;
  text-align: center;
  color: violet;
}

.m4{
  font-size: 130px;
  text-align: center;
  color: orange;
}

.main{
  font-size: 50px;
  text-align: center;
  color: red;
}
  </style>
  <meta http-equiv="Content-Type" content="text/html" charset="windows-1251" />
</head>
<body>

  <h1 class="h1">Ошибка</h1>
  <p class="m4">404</p>
  <a href="index.html" class="main">Перейти на главную</a>

</body>
</html>