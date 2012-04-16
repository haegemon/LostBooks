<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Books', 'doctrine');

/**
 * BaseBooks
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $author
 * @property string $name
 * @property string $status
 * @property integer $person_id
 * @property string $code
 * 
 * @method integer getId()        Returns the current record's "id" value
 * @method string  getAuthor()    Returns the current record's "author" value
 * @method string  getName()      Returns the current record's "name" value
 * @method string  getStatus()    Returns the current record's "status" value
 * @method integer getPersonId()  Returns the current record's "person_id" value
 * @method string  getCode()      Returns the current record's "code" value
 * @method Books   setId()        Sets the current record's "id" value
 * @method Books   setAuthor()    Sets the current record's "author" value
 * @method Books   setName()      Sets the current record's "name" value
 * @method Books   setStatus()    Sets the current record's "status" value
 * @method Books   setPersonId()  Sets the current record's "person_id" value
 * @method Books   setCode()      Sets the current record's "code" value
 * @property  $
 * 
 * @package    lostbook
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBooks extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('books');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('author', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('status', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('person_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('code', 'string', 5, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 5,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('person', array(
             'local' => 'person_id',
             'foreign' => 'id'));
    }
}