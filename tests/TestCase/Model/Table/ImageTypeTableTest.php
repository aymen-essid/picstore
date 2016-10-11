<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImageTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImageTypeTable Test Case
 */
class ImageTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImageTypeTable
     */
    public $ImageType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.image_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ImageType') ? [] : ['className' => 'App\Model\Table\ImageTypeTable'];
        $this->ImageType = TableRegistry::get('ImageType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImageType);

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
