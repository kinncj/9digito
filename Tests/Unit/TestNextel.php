<?php
require_once ('PHPUnit/Framework/TestCase.php');
require_once ('bootstrap.php');
use Validator\Operators;
class TestNextel extends \PHPUnit_Framework_TestCase 
{
    private $operators;

    public function setUp()
    {
        $this->operators = new Operators();
    }

    public function testShouldReturnTrueForProvidedNumber()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(53990066);
        $this->assertTrue($operator->isValid());
    }
    
    public function testShouldReturnFalseForProvidedNumber()
    {
        $this->assertNull($this->operators->getOperatorByPhoneNumber(43990066));
    }
    
    public function testShouldReturn9DigitForProvidedNumber()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(53990066);
        $this->assertTrue($operator->isValid());
        $this->assertEquals(953990066, $operator->get9DigitNumber());
    }
}