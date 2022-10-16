<?php 
class stack {
    private $MAX_SIZE=100;
    private $top;
    private $item = [  ];

    public function __construct()
    {
        $top =-1;
    }
    public function push($element)
    {   
        if($this->top >= ( $this->MAX_SIZE - 1)){
            echo"Stack full on push";
        }else{
            $this->top+=1;
            $this->item[$this->top]=$element;
        }

    }
    public function isEmpty(){

        if ($this->top == -1){
            return true;
        }else{
            return false;
        }
    }
    public function pop()
    {
        if($this->isEmpty()){
            echo"Stack empty on push";
        }else{
            $this->top-=1;

        }

    }
    public function pop2(&$element)
    {
        if($this->isEmpty()){
            echo"Stack empty on push";
        }else{
            $element=$this->item[$this->top];
            $this->top-=1;

        }

    }
    public function gettop(&$element)
    {
        if($this->isEmpty()){
            echo"Stack empty on push";
        }else{
            $element=$this->item[$this->top];
            echo $element ."<br>";

        }

    }

    public function print_stack()
    {   echo "[ ";
        for ($i=$this->top;$i>0;$i--){
            echo $this->item[$i]." ";
        }
        echo "]"."<br>";
    }
}
    $stack=new stack();
    $stack->push('a');
    $stack->push(10);
    $stack->push(15.23);
    $stack->push(20);
    $stack->print_stack();

    $y=2;
    $stack->gettop($y);

    $stack->pop();
    $stack->print_stack();

    $stack->push(7);
    $stack->print_stack();