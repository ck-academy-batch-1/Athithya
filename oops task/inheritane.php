<h3>INHERITANCE..</h3>
<?php
class camera{
    public $cameramodel;
    public $cameraquality;
        function cameramodel(){
            $this->cameramodel;
        }
        function cameraquality(){
            $this->cameraquality;
        }
        function __construct($m,$q){
            $this->cameramodel=$m;
            $this->cameraquality=$q;
        }
}
class cameratimer extends camera{
    public $timer = true;
    
}
$camera = new cameratimer('Canon EOS R6','Sony A7R IV');
    echo "The Camera ModelName is:". $camera->cameramodel;
    echo"<br>";
    echo "The Camera Quality is:".$camera->cameraquality;
?>