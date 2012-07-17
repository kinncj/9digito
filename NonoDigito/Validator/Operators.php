<?php

namespace NonoDigito\Validator;

use  NonoDigito\Validator\Operator\Invalid;

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
                $class = "NonoDigito\\Validator\\Operator\\".$directory->getBasename('.php');
                $reflectedClass = new \ReflectionClass($class);
                if (!$reflectedClass->isAbstract()) {
                    $this->operators[] = new $class;
                }
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