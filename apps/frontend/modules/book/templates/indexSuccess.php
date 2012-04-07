<h1>Books List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Code</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($books as $book): ?>
    <tr>
      <td><a href="<?php echo url_for('book/show?id='.$book->getId()) ?>"><?php echo $book->getId() ?></a></td>
      <td><?php echo $book->getName() ?></td>
      <td><?php echo $book->getCode() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('book/new') ?>">New</a>
