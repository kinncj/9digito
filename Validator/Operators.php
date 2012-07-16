<?php

namespace Validator;

use Validator\Operator\Invalid;

use Operator;

class Operators 
{
    private $number;
    private $operators = array();
    private $operatorsDir;
    public function __construct()
    {
        $this->operatorsDir = dirname(__FILE__).'/Operator/';
    }

    public function getOperators()
    {
        $directoryIterator = new \DirectoryIterator($this->operatorsDir);
        foreach ($directoryIterator as $directory) {
            if ($directory->isFile()) {
                $class = "Validator\\Operator\\".$directory->getBasename('.php');
                $this->operators[] = new $class;
            }
        }
        return $this->operators;
    }

    public function getOperatorByPhoneNumber($number)
    {
        $operators = $this->getOperators();
        $this->number = $number;
        foreach ($operators as $operator) {
            $operator->setNumber($number);
            if ($operator->isValid()) {
                $this->operator = $operator;
                return $operator;
            }
        }
        return new Invalid();
    }
}