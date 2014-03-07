<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/7/14
 * Time: 12:35 AM
 *
 * Description:
 * this is a model that is created for every record in ownership
 */

class Ownership extends MY_Model{

    /**
     * the name of the table
     */
    const DB_TABLE = "ownership";
    /**
     * the primary key for the users table
     */
    const DB_TABLE_PK = "id";

    /**
     * the id of the ownership
     * @var int
     */
    public $id;

    /**
     * the id of the user
     * @var int
     */
    public $user_id;

    /**
     * the id of the licence
     * @var int
     */
    public $licence_id;
}