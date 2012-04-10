<?php

/**
 * BooksTypes form base class.
 *
 * @method BooksTypes getObject() Returns the current form's model object
 *
 * @package    lostbook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBooksTypesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'booktype' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'booktype' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('booktype')), 'empty_value' => $this->getObject()->get('booktype'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('books_types[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BooksTypes';
  }

}
