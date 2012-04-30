<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('books/'.($form->getObject()->isNew() ? 'create' : 'index').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tbody>
      <table id = 'table'>
        <tr>
          <td><h3>Автор<font color='red'>*</font></h3></td><td><? echo $form['author']?></td>
        </tr> 
        <tr>
          <td><h3>Название<font color='red'>*</font></h3></td><td><? echo $form['name']?></td>
        </tr> 
        <tr>
          <td><h3>Статус</h3></td><td><? echo $form['status']?></td>
        </tr> 
        <tr>
          <td colspan=2><? echo $form['person_id']?></td>
        </tr> 
        <tr>
          <td><h3>Библиотечный код</h3></td><td><? echo $form['code']?></td>
        </tr> 
        <tr>
          <td><h3>Дата потери</h3><font size=-2>Если не укажете - текущая дата</font></td><td><? echo $form['date_of']?></td>
        </tr> 
      </table>
    </tbody>
</table>
      <table>
      <tr>
        <td><a href="<?php echo url_for('books/index') ?>"><div id='button1'>К списку</div></a></td><td>
          <?php if (!$form->getObject()->isNew()): ?><div id='button1'>
            <?php echo link_to('Удалить', 'books/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Вы уверены что хотите удалить?')) ?>
          </div></td><td><?php endif; ?>
          <input type="submit" id='button1' value="Сохранить" />
        </td>
      </tr>
    </table>
    <? echo $form['id']."\n".$form['_csrf_token']?>
</form>
