<?php
require_once ('PHPUnit/Framework/TestCase.php');
require_once ('bootstrap.php');
use Validator\Operators;
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
        $this->assertInstanceOf("Validator\\Operator\\Tim", $operator);
    }

    public function testShouldReturnVivoOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(50203344);
        $this->assertInstanceOf("Validator\\Operator\\Vivo", $operator);
    }

    public function testShouldReturnOiOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(52523344);
        $this->assertInstanceOf("Validator\\Operator\\Oi", $operator);
    }

    public function testShouldReturnClaroOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(61689988);
        $this->assertInstanceOf("Validator\\Operator\\Claro", $operator);
    }

    public function testShouldReturnNextelOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(53999988);
        $this->assertInstanceOf("Validator\\Operator\\Nextel", $operator);
    }

    public function testShouldReturnAeiouOperator()
    {
        $operator = $this->operators->getOperatorByPhoneNumber(79090066);
        $this->assertInstanceOf("Validator\\Operator\\Aeiou", $operator);
    }
}