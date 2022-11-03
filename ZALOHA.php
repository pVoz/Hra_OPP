<img src="" alt="">

<?php

function pre_r($value){
    echo ('<pre>');  
    print_r ($value);
    echo ('</pre>');
}


class Users 
{
    public $First_name;
    public $Last_name;
    public $email ;
    public $avatar;

        public function __construct($First_name,$Last_name,$email ,$avatar,)
        {
            $this->First_name         = $First_name; 
            $this->Last_name       = $Last_name;
            $this->email    = $email;
            $this->avatar    = $avatar;
        }
        public function vrat_obr(){
            
          echo "  <a href='". $this->avatar ."' ><img src='" . $this->avatar . "' alt=''></a>";

        }
        
        public function vrat_meno(){
            echo $this->First_name . (' ') . $this->Last_name;
        }
    }
 

$obr1 = 'https://static.wikia.nocookie.net/thetanklore/images/9/99/Lemonke.jpg/revision/latest/top-crop/width/360/height/360?cb=20210120063807';
$user = new Users ('Peter','Vozár','vozarp93@gmail.com' , $obr1 );

$user->vrat_obr();
$user->vrat_meno();



pre_r($user);

pre_r($users->First_name);



?>
