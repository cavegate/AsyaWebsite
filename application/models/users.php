<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/6/14
 * Time: 9:43 PM
 *
 * Description:
 * this is a model that is created for every record in users
 */

class Users extends MY_Model{

    /**
     * the name of the table
     */
    const DB_TABLE = "users";
    /**
     * the primary key for the users table
     */
    const DB_TABLE_PK = "id";

    /**
     * the id of the user (auto increment)
     * @var int
     */
    public $id;

    /**
     * the email of the user
     * @var string(50)
     */
    public $email;

    /**
     * the hashed password of the user
     * @var string(50)
     */
    public $password;

    /**
     * if the email is activated or not (true for yes and false for no)
     * @var boolean
     */
    public $is_active;

    /**
     * the date and time of the last login
     * @var datetime
     */
    public $last_login;

    /**
     * the first name of the user
     * @var string(50)
     */
    public $first_name;

    /**
     * the last name of the user
     * @var string(50)
     */
    public $last_name;

    /**
     * the telephone number of the user
     * @var string(50)
     */
    public $tel;

    /**
     * the email code assigned to the user in order to activate
     * @var string(30)
     */
    public $email_code;
}