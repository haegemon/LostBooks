<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('books/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tbody>
      <table id = 'table'>
        <tr>
          <td><h3>Автор</h3></td><td><? echo $form['author']?></td>
        </tr> 
        <tr>
          <td><h3>Название</h3></td><td><? echo $form['name']?></td>
        </tr> 
        <tr>
          <td><h3>Статус</h3></td><td><? echo $form['status']?></td>
        </tr> 
        <tr>
          <td><h3>Кто вы?</h3></td><td><? echo $form['person_id']?></td>
        </tr> 
        <tr>
          <td><h3>Библиотечный код</h3></td><td><? echo $form['code']?></td>
        </tr> 
        <tr>
          <td><h3>Дата потери</h3></td><td><? echo $form['date_of']?></td>
        </tr> 
      </table>
    </tbody>
</table>
      <table>
      <tr>
        <td><a href="<?php echo url_for('books/index') ?>"><div id='button1'>К списку</div></a>
          <?php if (!$form->getObject()->isNew()): ?></td><td>
            <?php echo link_to('Delete', 'books/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" id='button1' value="Save" />
        </td>
      </tr>
    </table>
</form>
