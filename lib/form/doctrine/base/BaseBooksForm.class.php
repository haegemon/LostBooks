<?php

/**
 * Books form base class.
 *
 * @method Books getObject() Returns the current form's model object
 *
 * @package    lostbook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBooksForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'author'    => new sfWidgetFormInputText(),
      'name'      => new sfWidgetFormInputText(),
      'status'    => new sfWidgetFormInputText(),
      'person_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('person'), 'add_empty' => false)),
      'code'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'author'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'name'      => new sfValidatorString(array('max_length' => 100)),
      'status'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'person_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('person'))),
      'code'      => new sfValidatorString(array('max_length' => 5, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('books[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Books';
  }

}
