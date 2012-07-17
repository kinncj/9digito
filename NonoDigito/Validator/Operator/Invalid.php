<?php
namespace NonoDigito\Validator\Operator;
use NonoDigito\Validator\Operator\AbstractOperator;
class Invalid extends AbstractOperator
{
    public function isValid()
    {
       return false;
    }

    public function getName()
    {
       return "Invalid Operator";
    }
}