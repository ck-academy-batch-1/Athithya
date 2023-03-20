<h3>TRAITS..</h3>

<?php
trait clothes{
    public function cc(){
        echo "Cotton Cloth is so nice...";
    }
}
class cottoncloth{
    use clothes;
}
$chudi = new cottoncloth();
$chudi -> cc();
?>