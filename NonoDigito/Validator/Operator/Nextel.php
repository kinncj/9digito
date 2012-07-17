<?php
namespace NonoDigito\Validator\Operator;
use NonoDigito\Validator\Operator\AbstractOperator;

class Nextel extends AbstractOperator
{
    protected $ranges = array(array(7700,7899),
                            array(5399,5399));
}