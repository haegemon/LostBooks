<?foreach($bookfather as $bf){
   echo $bf->getName();}?>

<?$bd=url_for('books/link').'?bodyvalue=Насчет книги '.$books->getName().' автора '.$books->getAuthor()."&textvalue=Привет! У тебя есть моя книга ".$books->getName().". Не мог бы ты мне ее вернуть за вознаграждение?"?>

<table bgcolor=#00ccff>
  <tbody>
    <tr bgcolor=#00ccff>
      <th>Id:</th>
      <td><?php echo $books->getId() ?></td>
    </tr>
    <tr bgcolor=#11ddff>
      <th>Автор:</th>
      <td><?php echo $books->getAuthor() ?></td>
    </tr>
    <tr bgcolor=#22eeff>
      <th>Название:</th>
      <td><?php echo $books->getName() ?></td>
    </tr>
    <tr bgcolor=#33ffff>
      <th>Статус:</th>
      <td><?php $d=$books->getStatus(); echo $d ?></td>
    </tr>
    <tr bgcolor=#44ffff>
      <th>Кто <?if($d=='Ищу'){echo 'ищет';}else{ echo 'нашел';}?>:</th>
      <td><?php echo $bf->getName() ?></td>
    </tr>
    <tr bgcolor=#55ffff>
      <th>Его email:</th>
      <td><a href="<? echo $bd ?>"><?php echo $bf->getEmail() ?></a></td>
    </tr>
    <tr bgcolor=#77ffff>
      <th>Биб. код:</th>
      <td><?php echo $books->getCode() ?></td>
    </tr>
    <tr bgcolor=#aaffff>
      <th>Дата:</th>
      <td><?php echo $books->getDateOf() ?></td>
    </tr>
  </tbody>
</table>

<hr>

<!--<a href="<?php echo url_for('books/edit?id='.$books->getId()) ?>"><div id='button'>Править</div></a>
&nbsp;-->
<a href="<?php echo url_for('books/index') ?>"><div id='button'>К списку</div></a>
