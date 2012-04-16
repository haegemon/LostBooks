<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $books->getId() ?></td>
    </tr>
    <tr>
      <th>Автор:</th>
      <td><?php echo $books->getAuthor() ?></td>
    </tr>
    <tr>
      <th>Название:</th>
      <td><?php echo $books->getName() ?></td>
    </tr>
    <tr>
      <th>Тип:</th>
      <td><?php echo $books->getStatus() ?></td>
    </tr>
    <tr>
      <th>Кто вы?:</th>
      <td><?php echo $books->getPersonId() ?></td>
    </tr>
    <tr>
      <th>Библиотечный код:</th>
      <td><?php echo $books->getCode() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('books/edit?id='.$books->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('books/index') ?>">List</a>
