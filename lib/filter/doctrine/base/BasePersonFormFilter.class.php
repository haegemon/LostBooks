<?php

/**
 * Person filter form base class.
 *
 * @package    lostbook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'code'         => new sfWidgetFormFilterInput(),
      'name'         => new sfWidgetFormFilterInput(),
      'people_group' => new sfWidgetFormFilterInput(),
      'adress'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'code'         => new sfValidatorPass(array('required' => false)),
      'name'         => new sfValidatorPass(array('required' => false)),
      'people_group' => new sfValidatorPass(array('required' => false)),
      'adress'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

  public function getFields()
  {
    return array(
      'code'         => 'Text',
      'name'         => 'Text',
      'people_group' => 'Text',
      'adress'       => 'Text',
      'email'        => 'Text',
    );
  }
}
