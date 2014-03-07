<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/7/14
 * Time: 10:14 AM
 *
 * Description:
 * this is a model that is created for every record in factors
 */

class Userlicence extends MY_Model{

    /**
     * the name of the table
     */
    const DB_TABLE = "userlicence";
    /**
     * the primary key for the users table
     */
    const DB_TABLE_PK = "id";

    /**
     * the id of the userlicence
     * @var int(10)
     */
    public $id;

    /**
     * the id of the user
     * @var int(10)
     */
    public $user_id;

    /**
     * the id of the licence
     * @var int(10)
     */
    public $licence_id;
}
