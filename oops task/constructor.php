<h3>CONSTRUCTOR..</h3>
<?php
class furniture{
    public $model;
    public $brand;
        function model(){
            $this-> model;
        }
        function brand(){
            $this-> brand;
        }
        function __construct($m,$b)
        {
            $this->model = $m;
            $this->brand = $b;
        }
}
$tool = new furniture('usha','Floyd Home');
    echo "Furniture ModelName:". $tool-> model;
    echo "<br>";
    echo "Furniture BrandName:".$tool-> brand;
?>



