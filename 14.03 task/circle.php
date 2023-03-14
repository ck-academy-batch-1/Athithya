<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Rectangle</h3>
    <?php
    class Rectangle{
    private $length;
    private $width;
    function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;
    }
        function get_area(){
            return $this->length * $this->width;
            }
        }
        $rect = new Rectangle(4,3);
       echo "Area of Rectangle: ". $rect->get_area();
    ?>
    
    <h3>circle</h3>
    <?php
    class circle{
        private $diameter;
        private $pi;
        function __construct($diameter,$pi){
            $this->pi=$pi;
            $this->diameter=$diameter;
        }
        function get_area(){
            return $this->pi * $this->diameter;
        }
    }
        $cir = new circle(2,6);
        echo "Area of circle:" . $cir->get_area();
    ?>
    <h3>square</h3>
    <?php
    class square
    {
        private $side;
        function __construct($side){
            $this->side=$side;
           
        }
        function get_area(){
            return $this->side * $this->side;
        }
    }
        $squa = new square(2);
        echo "Area of Square:" . $squa->get_area();
    ?>
</body>
</html>