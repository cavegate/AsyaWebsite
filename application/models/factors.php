<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/7/14
 * Time: 12:53 AM
 *
 * Description:
 * this is a model that is created for every record in factors
 */

class Ownership extends MY_Model{

    /**
     * the name of the table
     */
    const DB_TABLE = "factors";
    /**
     * the primary key for the users table
     */
    const DB_TABLE_PK = "id";

    /**
     * the id of the factor (Auto incremental)
     * @var int(10)
     */
    public $id;

    /**
     * the date of the factor
     * @var datetime
     */
    public $date;

    /**
     * the code for the banks reply
     * @var int(5)
     */
    public $bank_result_code;

    /**
     * the discount that this factor has
     * @var int;
     */
    public $discount;

    /**
     * the ref id of the bank
     * @var string(30)
     */
    public $bank_refid;

    /**
     * the bank sales reference id
     * @var int(10)
     */
    public $bank_sales_reference_id;
}
