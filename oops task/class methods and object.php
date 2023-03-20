

<h3>CLASS OBJECT AND METHODS..</h3>
<?php 
class Ac{
    public $name;
    public $color;
        function set_name($name){
            $this->name=$name;
        }
        function set_color($color){
            $this->color=$color;
        }
        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
}
    $voltas = new Ac();
    $voltas -> set_name('Carrier AC');
    $voltas -> set_color('black');
        echo "Brand Name:".$voltas->get_name();
        echo"<br>";
        echo "Color:". $voltas->get_color();

?>