<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $book->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $book->getName() ?></td>
    </tr>
    <tr>
      <th>Code:</th>
      <td><?php echo $book->getCode() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('book/edit?id='.$book->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('book/index') ?>">List</a>
