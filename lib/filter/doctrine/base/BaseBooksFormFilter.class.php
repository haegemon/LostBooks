<?php

/**
 * Books filter form base class.
 *
 * @package    lostbook
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBooksFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'author'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('bookstypes'), 'add_empty' => true)),
      'person_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('person'), 'add_empty' => true)),
      'code'      => new sfWidgetFormFilterInput(),
      'date_of'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'author'    => new sfValidatorPass(array('required' => false)),
      'name'      => new sfValidatorPass(array('required' => false)),
      'status'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('bookstypes'), 'column' => 'booktype')),
      'person_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('person'), 'column' => 'id')),
      'code'      => new sfValidatorPass(array('required' => false)),
      'date_of'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('books_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Books';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'author'    => 'Text',
      'name'      => 'Text',
      'status'    => 'ForeignKey',
      'person_id' => 'ForeignKey',
      'code'      => 'Text',
      'date_of'   => 'Date',
    );
  }
}
