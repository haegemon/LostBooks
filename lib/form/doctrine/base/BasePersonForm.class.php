<?php

/**
 * Person form base class.
 *
 * @method Person getObject() Returns the current form's model object
 *
 * @package    lostbook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'code'         => new sfWidgetFormInputText(),
      'name'         => new sfWidgetFormInputText(),
      'people_group' => new sfWidgetFormInputText(),
      'adress'       => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'code'         => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'people_group' => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'adress'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'email'        => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('person[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

}
