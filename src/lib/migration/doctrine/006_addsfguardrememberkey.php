<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addsfguardrememberkey extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('sf_guard_remember_key', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'length' => 4,
             ),
             'remember_key' => 
             array(
              'type' => 'string',
              'length' => 32,
             ),
             'ip_address' => 
             array(
              'type' => 'string',
              'primary' => true,
              'length' => 50,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
              1 => 'ip_address',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('sf_guard_remember_key');
    }
}