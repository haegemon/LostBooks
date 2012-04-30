<div id='head'><h1>Форма связи</h1></div>
<br>
<? if(isset($_REQUEST['body'])){
    if(mail("stanislavkaledin@rambler.ru", $_REQUEST['body'],$_REQUEST['text'], "From: ".$_REQUEST['mail']."\r\n")){
      echo "<div id='table'>Письмо успешно отправлено</div>";
    }else{
     echo "<div id='table'>Письмо не было отправлено. Попробуйте еще раз.</div>";}}else{?>
<form action="" enctype='text/plain'>
<table id='table'>
  <tr>
    <td><h2>Тема письма:</h2></td>
    <td><input name='body' type='text' size=40 value="<?if(isset($_REQUEST['bodyvalue'])){echo $_REQUEST['bodyvalue'];}?>"></td>
  </tr>
  <tr>
    <td><h2>Тело письма:</h2></td>
    <td><textarea  rows=6 cols=32 name='text'><?if(isset($_REQUEST['textvalue'])){echo $_REQUEST['textvalue'];}?></textarea></td>
  </tr>
  <tr>
    <td><h2>Ваш e-mail<font color=#ff3300>*</font></h2></td>
    <td><input name='mail' type='text' size=40></td>
  </tr>
  <tr>
    <td></td>
    <td align='center'><input type='submit' id='button1' name='Отправить'></td>
  </tr>
</table>
<?;}?>
