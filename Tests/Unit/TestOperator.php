<?php
require_once ('PHPUnit/Framework/TestCase.php');
require_once ('bootstrap.php');
use NonoDigito\Validator\Operators;
class TestOperator extends \PHPUnit_Framework_TestCase 
{
    private $operators;

    public function setUp()
    {
        $this->operators = new Operators();
    }

    public function testShouldReturnTimOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(64290088);
        $this->assertEquals("Tim", $operator->getName());
    }

    public function testShouldReturnVivoOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(50203344);
        $this->assertEquals("Vivo", $operator->getName());
    }

    public function testShouldReturnOiOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(52523344);
        $this->assertEquals("Oi", $operator->getName());
    }

    public function testShouldReturnClaroOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(61689988);
        $this->assertEquals("Claro", $operator->getName());
    }

    public function testShouldReturnNextelOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(53999988);
        $this->assertEquals("Nextel", $operator->getName());
    }

    public function testShouldReturnAeiouOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(79090066);
        $this->assertEquals("Aeiou", $operator->getName());
    }

    public function testShouldReturnInvalidOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(22222222);
        $this->assertEquals("Invalid Operator", $operator->getName());
    }
}