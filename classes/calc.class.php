<?php

class Calc{
    public $operator;
    public $inputOne;
    public $inputTwo;

    public function __construct(string $one, int $two, int $three){
        $this->operator = $one;
        $this->inputOne = $two;
        $this->inputTwo = $three;
    }

    public function calculator(){
        switch ($this->operator) {
            case 'add':
                $result = $this->inputOne + $this->inputTwo;
                return $result;
                break;

                case 'sub':
                    $result = $this->inputOne - $this->inputTwo;
                    return $result;
                    break;

                    case 'div':
                        $result = $this->inputOne / $this->inputTwo;
                        return $result;
                        break;

                        case 'mul':
                            $result = $this->inputOne * $this->inputTwo;
                            return $result;
                            break;
            
            default:
                echo "Error is Happening!!";
                break;
        }
    }
}