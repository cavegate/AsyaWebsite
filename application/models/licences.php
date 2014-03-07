<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/7/14
 * Time: 12:15 AM
 *
 * Description:
 * this is a model that is created for every record in licences
 */

class Licences extends MY_Model{

    /**
     * the name of the table
     */
    const DB_TABLE = "licences";
    /**
     * the primary key for the users table
     */
    const DB_TABLE_PK = "id";

    /**
     * the id of the licence (auto incremental)
     * @var int
     */
    public $id;

    /**
     * the licence that is given to the user
     * @var string(16)
     */
    public $serial;

    /**
     * the activation code that is given to the user
     * @var string(16)
     */
    public $active_code;

    /**
     * the code that the users have entered for their machine
     * @var string(30)
     */
    public $system_code;

    /**
     * the price that the user has payed for the licence
     * @var int
     */
    public $price;

    /**
     * the transfer code that can be given to other users
     * @var string(8)
     */
    public $transfer_code;

}
