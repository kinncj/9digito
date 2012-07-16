<?php
namespace Validator\Operator;
use Validator\Util\AbstractOperator;

class Nextel extends AbstractOperator
{
    protected $ranges = array(array(7700,7899),
                            array(5399,5399));
}