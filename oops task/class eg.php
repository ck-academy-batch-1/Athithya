<?php 
class board{
    public $name;
    public $color;
        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
}
?>