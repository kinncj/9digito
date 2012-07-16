<?php
require_once ('PHPUnit/Framework/TestCase.php');
require_once ('bootstrap.php');
use Validator\Operators;
class TestClaro extends \PHPUnit_Framework_TestCase 
{
    private $operators;

    public function setUp()
    {
        $this->operators = new Operators();
    }

    public function testShouldReturnTrueForProvidedNumber()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(61680066);
        $this->assertTrue($operator->isValid());
    }
    
    public function testShouldReturnFalseForProvidedNumber()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(41680066);
        $this->assertFalse($operator->isValid());
    }
    
    public function testShouldReturn9DigitForProvidedNumber()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(61680066);
        $this->assertTrue($operator->isValid());
        $this->assertEquals(961680066, $operator->get9DigitNumber());
    }
}