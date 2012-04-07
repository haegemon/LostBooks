<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Book', 'doctrine');

/**
 * BaseBook
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property PeopleBook $PeopleBook
 * 
 * @method integer    getId()         Returns the current record's "id" value
 * @method string     getName()       Returns the current record's "name" value
 * @method string     getCode()       Returns the current record's "code" value
 * @method PeopleBook getPeopleBook() Returns the current record's "PeopleBook" value
 * @method Book       setId()         Sets the current record's "id" value
 * @method Book       setName()       Sets the current record's "name" value
 * @method Book       setCode()       Sets the current record's "code" value
 * @method Book       setPeopleBook() Sets the current record's "PeopleBook" value
 * 
 * @package    lostbook
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBook extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('book');
        $this->hasColumn('id', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('name', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('code', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PeopleBook', array(
             'local' => 'id',
             'foreign' => 'people_id'));
    }
}