<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

 
    <!-- Область основного контента -->
    <?php
    $size = ini_get("post_max_size");
    $letter = $size[-1];
    $size = (int) $size;
    switch (strtoupper($letter)) { // преобразовать строку в верхний регистр (если в $size будет строка в нижнем регистре)
      case "G": {
          $size *= 1024;
        }
      case "M": {
          $size *= 1024;
        }
      case "K": {
          $size *= 1024;
        }
    }
    ?>
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</p>
    <!-- Область основного контента -->
  
</body>

</html>