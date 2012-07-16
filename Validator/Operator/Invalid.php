<?php
namespace Validator\Operator;
use Validator\Util\AbstractOperator;
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