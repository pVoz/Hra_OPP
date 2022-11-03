<?php

function pre_r($value){
    echo ('<pre>');  
    print_r ($value);
    echo ('</pre>');
}


class Being 
{
    public $name;
    public $health;
    public  $inventory = [];

        public function __construct($name,$health,array $inventory)
        {
            $this->name         = $name;
            $this->health       = $health;
            $this->inventory    = $inventory;
        }
        private  function perish()
        {
            var_dump ( $this->name .' '.'died');
        }
        public function takeDamage($dmg)
        {
           
           
                $this->health = $this->health - $dmg;
           
    if ( $this->health <= 0){
        $this->perish();
    } else {
        var_dump( $this->name. ' has ' . $this->health . ' HP'); 
    }

        }
}






$hero = new Being('marceline',50,[
    'gold' => 120, 'potion' => 3 ,'axe' => 1,
]);


$hero->takeDamage(2);
$hero->takeDamage(20);
$hero->takeDamage(10);


pre_r($hero->health);

$enemies = [
    new Being('Kunda',60,['gold' => 100,'potion' => 2, 'sword'=> 1 ]), 
     new Being('ssss',60,[
        'gold' => 100,'potion' => 2, 'sword'=> 1,
    ])
 

    ];
$enemies[0]->takeDamage(3);
