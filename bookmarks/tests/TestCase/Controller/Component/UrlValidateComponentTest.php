<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\UrlValidateComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\UrlValidateComponent Test Case
 */
class UrlValidateComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\UrlValidateComponent
     */
    public $UrlValidate;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->UrlValidate = new UrlValidateComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UrlValidate);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
