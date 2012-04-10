<h1>Bookss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Author</th>
      <th>Name</th>
      <th>Status</th>
      <th>Person mail</th>
      <th>Code</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($bookss as $books): ?>
    <tr>
      <td><a href="<?php echo url_for('books/show?id='.$books->getId()) ?>"><?php echo $books->getId() ?></a></td>
      <td><?php echo $books->getAuthor() ?></td>
      <td><?php echo $books->getName() ?></td>
      <td><?php echo $books->getStatus() ?></td>
      <td><?php echo $books->getPersonMail() ?></td>
      <td><?php echo $books->getCode() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('books/new') ?>">New</a>
