<div id='head'><h1>Наши книги!</h1></div>
<div id='table'>
<table align='center' height=100px width=600px rules=none>
    <tr align='center'>
      <td height=10px width=30px><div id='th'>Номер</div></th>
      <td height=10px width=30px align='center'><div id='th'>Автор</div></th>
      <td height=10px width=30px align='center'><div id='th'>Название</div></th>
      <td height=10px width=30px align='center'><div id='th'>Статус</div></th>
      <td height=10px width=30px align='center'><div id='th'>Хозяин</div></th>
      <td height=10px width=30px align='center'><div id='th'>Б. код</div></th>
      <td height=10px width=30px align='center'><div id='th'>Дата</div></th>
    </tr>
    <?php $b=12*15+15; foreach ($bookss as $books): ?>
    <? $a=dechex(ceil($b)); if($b<16){$a="0".$a;} $a="#".$a.$a.$a;  if($b>75){$b=$b-10;}else if($b>60){$b=ceil($b/1.05);}else{$b=$b/1.01;}?>
    <tr>
      <td align='center' bgcolor=<?php echo $a ?>><div id='td'><a href="<?php echo url_for('books/show?id='.$books->getId()) ?>"><?php echo $books->getId()?></a></div></td>
      <td align='center' bgcolor=<?php echo $a ?>><div id='td'><?php echo $books->getAuthor() ?></div></td>
      <td align='center' bgcolor=<?php echo $a ?>><div id='td'><?php echo $books->getName() ?></div></td>
      <td align='center' bgcolor=<?php echo $a ?>><div id='td'><?php echo $books->getStatus() ?></div></td>
      <td align='center' bgcolor=<?php echo $a ?>><div id='td'><?php echo $books->getPersonId() ?></div></td>
      <td align='center' bgcolor=<?php echo $a ?>><div id='td'><?php echo $books->getCode() ?></div></td>
      <td align='center' bgcolor=<?php echo $a ?>><div id='td'><?php echo $books->getDateOf() ?></div></td>
    </tr>
    <?php endforeach; ?>


</table>
</div>
