<?php

/**
 * Books form.
 *
 * @package    lostbook
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BooksForm extends BaseBooksForm
{
  public function configure()
  {
    $pers=new PersonForm();
    $this->embedForm('person_id',$pers);
  }
}
