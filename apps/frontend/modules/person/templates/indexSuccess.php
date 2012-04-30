<h1>Persons List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Code</th>
      <th>Name</th>
      <th>People group</th>
      <th>Adress</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($persons as $person): ?>
    <tr>
      <td><a href="<?php echo url_for('person/show?id='.$person->getId()) ?>"><?php echo $person->getId() ?></a></td>
      <td><?php echo $person->getCode() ?></td>
      <td><?php echo $person->getName() ?></td>
      <td><?php echo $person->getPeopleGroup() ?></td>
      <td><?php echo $person->getAdress() ?></td>
      <td><?php echo $person->getEmail() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('person/new') ?>">New</a>
