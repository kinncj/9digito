<?php
namespace Validator\Operator;
use Validator\Util\AbstractOperator;

class Aeiou extends AbstractOperator
{
    protected $ranges = array(array(7909,7909),
                            array(7922,7922));
}