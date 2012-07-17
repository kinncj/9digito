<?php
namespace NonoDigito\Validator\Operator;
use NonoDigito\Validator\Operator\AbstractOperator;

class Oi extends AbstractOperator
{
    protected $ranges = array(array(5252,5267),
                            array(5400,5419),
                            array(5700,5768),
                            array(6011,6056),
                            array(6086,6167),
                            array(6200,6299),
                            array(6500,6569),
                            array(6500,6569),
                            array(6867,6899),
                            array(6932,6999),
                            array(7971,7999),
                            array(8010,8099));
}