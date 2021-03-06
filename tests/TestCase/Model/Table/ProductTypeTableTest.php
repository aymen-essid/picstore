<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductTypeTable Test Case
 */
class ProductTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductTypeTable
     */
    public $ProductType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductType') ? [] : ['className' => 'App\Model\Table\ProductTypeTable'];
        $this->ProductType = TableRegistry::get('ProductType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductType);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
