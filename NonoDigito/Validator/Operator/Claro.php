<?php
namespace NonoDigito\Validator\Operator;
use NonoDigito\Validator\Operator\AbstractOperator;

class Claro extends AbstractOperator
{
    protected $ranges = array(array(6168,6181),
                            array(6300,6339),
                            array(6570,6650),
                            array(6914,6931),
                            array(7052,7086),
                            array(7600,7699),
                            array(7968,7970),
                            array(8800,8999),
                            array(9100,9499));
}