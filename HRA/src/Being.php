<?php
namespace penis;
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
?>