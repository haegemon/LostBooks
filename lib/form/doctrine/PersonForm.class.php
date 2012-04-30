<?php

/**
 * Person form.
 *
 * @package    lostbook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PersonForm extends BasePersonForm
{
  public function configure()
  {
    $f=new BooksForm();
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'code'         => new sfWidgetFormInputText(),
      'name'         => new sfWidgetFormInputText(),
      'people_group' => new sfWidgetFormInputText(),
      'adress'       => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
      'book'         => new sfWidgetFormInputText(),
    ));
    $this->embedForm('book', $f);
  }
}
