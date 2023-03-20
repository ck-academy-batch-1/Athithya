<h3>DESTRUCTOR..</h3>
<?php
class notebook{
    var $notename;
    var $notebooktype;
        function __construct($notename,$notebooktype){
            $this -> name = $notename;
            $this ->type = $notebooktype;
    }
    function __destruct(){
        echo"The Notebook Name is:  {$this->name} <br> The NoteBook Type is:   {$this ->type}";
        
    }
}
$brand = new notebook("ITC Classmate","Pocket Note");
?>