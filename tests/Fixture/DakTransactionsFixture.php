<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DakTransactionsFixture
 *
 */
class DakTransactionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dak' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dak_action_id' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'office_organization_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'decision_taken' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'transaction_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'sender_action_owner' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'receiver_action_owner' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recipient' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'attention' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified_by' => ['type' => 'biginteger', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '',
            'dak' => '',
            'dak_action_id' => 1,
            'office_organization_id' => 1,
            'decision_taken' => 'Lorem ip',
            'transaction_date' => '2015-07-06',
            'sender_action_owner' => '',
            'receiver_action_owner' => '',
            'recipient' => 'Lorem ipsum dolor sit amet',
            'attention' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-07-06',
            'modified' => '2015-07-06',
            'created_by' => '',
            'modified_by' => ''
        ],
    ];
}
