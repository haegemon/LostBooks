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
      <td><?php echo $books->getStatus() ?></td>
    </tr>
    <tr bgcolor=#44ffff>
      <th>Кто:</th>
      <td><?php echo $books->getPersonId() ?></td>
    </tr>
    <tr bgcolor=#55ffff>
      <th>Биб. код:</th>
      <td><?php echo $books->getCode() ?></td>
    </tr>
    <tr bgcolor=#66ffff>
      <th>Дата:</th>
      <td><?php echo $books->getDateOf() ?></td>
    </tr>
  </tbody>
</table>

<hr>

<a href="<?php echo url_for('books/edit?id='.$books->getId()) ?>"><div id='button'>Править</div></a>
&nbsp;
<a href="<?php echo url_for('books/index') ?>"><div id='button'>К списку</div></a>
