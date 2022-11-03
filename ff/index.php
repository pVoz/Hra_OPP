<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


class Wolf
{
    public $name = 'kunda';
    public $weight = 5 ;

    public function __construct()
    {
       echo 'i did made a dog ';
    }
    public function bark ()
    {
        echo "woof woof";
    }
}
class dog extends Wolf
{
    public function bark()
    {
        var_dump("pica hola");
    }
}

class coyote extends Wolf
{
    public function bark()
    {
        echo "wofsfasfjsaofjf";
    }
    public function kill ()
    {
        var_dump ($this->name . " kundaskolask");
    }
}



$dunco = new Dog();
var_dump( $dunco->name );
$dunco ->bark();

$courage = new dog();
var_dump( $courage -> name );


$danger = new Coyote("mrdkovidnas",20);
var_dump( $danger);
$danger->kill();

?>
</body>
</html>