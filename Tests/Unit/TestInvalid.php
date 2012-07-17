<?php
require_once ('PHPUnit/Framework/TestCase.php');
require_once ('bootstrap.php');
use NonoDigito\Validator\Operators;
class TestInvalid extends \PHPUnit_Framework_TestCase 
{
    private $operators;

    public function setUp()
    {
        $this->operators = new Operators();
    }

    public function testShouldReturnTrueForProvidedNumber()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(2222222);
        $this->assertFalse($operator->isValid());
    }
}