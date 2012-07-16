<?php

namespace Validator\Util;

abstract class AbstractOperator
{
    protected $ranges = array();
    protected $number;
    public function isValid()
    {
        $number = $this->number;
        if (strlen($number) === 9) {
            $number[0] = "";
        }
        $this->number = trim($number);
        $number = substr(trim($number),0,4);
        foreach ($this->ranges as $range) {
            if ($number >= $range[0] && $number <= $range[1]) {
                return true;
            }
        }
        return false;
    }
    
    public function get9DigitNumber () {
        return "9{$this->number}";
    }
    
    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getName()
    {
        return str_replace("Validator\\Operator\\","",get_class($this));
    }
}
