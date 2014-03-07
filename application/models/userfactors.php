<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/7/14
 * Time: 10:11 AM
 *
 * Description:
 * this is a model that is created for every record in factors
 */

class Userfactors extends MY_Model{

    /**
     * the name of the table
     */
    const DB_TABLE = "userfactors";
    /**
     * the primary key for the users table
     */
    const DB_TABLE_PK = "id";

    /**
     * the id of the userfactor
     * @var int(10)
     */
    public $id;

    /**
     * the user id
     * @var int(10)
     */
    public $user_id;

    /**
     * the factor id
     * @var int(10)
     */
    public $factor_id;
}
