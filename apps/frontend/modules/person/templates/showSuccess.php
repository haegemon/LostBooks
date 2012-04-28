<table>
  <tbody>
    <tr>
      <th>Code:</th>
      <td><?php echo $person->getCode() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $person->getName() ?></td>
    </tr>
    <tr>
      <th>People group:</th>
      <td><?php echo $person->getPeopleGroup() ?></td>
    </tr>
    <tr>
      <th>Adress:</th>
      <td><?php echo $person->getAdress() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $person->getEmail() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('person/edit?email='.$person->getEmail()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('person/index') ?>">List</a>
