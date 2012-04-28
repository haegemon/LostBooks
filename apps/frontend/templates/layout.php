<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta name='Author' content='Kaledin Stas'>
    <meta name='Reply-to' content='stanislavkaledin@rambler.ru'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
      
      </div>

      <div id="divider">
      
      </div>
      <div id="search">
      <form action="" method="get">
      <font size=+3>&#9;&#9;&#9;<i>Поиск книг:</i></font><br>
      <font size=-2 color=#aaaaaa>Введите сюда библиотечный код, или название:  </font><INPUT type="text">
      </form>
      </div>
      <div id="menu">
        <center>
          <br>
          <ul>
          <li><a href="<?php echo url_for('books/new') ?>"><font color=#fafafa><div id='th'>Создать новую книгу</div></font></a><br><font size=-2>если нашли или потеряли</font><br>
&nbsp;
          <li><div id='th'>Связаться</div>
&nbsp;
          <li><div id='th'>Полезные ссылки</div>
&nbsp;
          <li>Что-то еще (фантазия истощилась)
          </ul>
        </center>
      </div>
      <div id="divider2">
      </div>
      <div id="content">
          <br><br><br>
          <center>
          <?php echo $sf_content ?>
          </center>
      </div>
      <div id="foot">
        <br>
        Связаться <a href="mailto:web.mipt@gmail.com">web.mipt@gmail.com</a><br>
        
        WEB-MIPT 2012<br>
      </div>
    </div>
  </body>
</html>
