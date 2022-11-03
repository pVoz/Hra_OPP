

<?php

function pre_r($value)
{
    echo ('<pre>');
    print_r($value);
    echo ('</pre>');
}


class Users
{
    public $First_name;
    public $Last_name;
    public $email;
    public $avatar;


    public function __construct($First_name, $Last_name, $email, $avatar, $admin = null)
    {
        $this->First_name   = $First_name;
        $this->Last_name    = $Last_name;
        $this->email        = $email;
        $this->avatar       = $avatar;
        $this->admin        = $admin;
    }
    public function vrat_obr()
    {

        echo "<a href='" . $this->avatar . "'><img src='" . $this->avatar . "'alt=''></a>";
    }

    public function vrat_meno()
    {
        if ($this->admin) {

            echo  '<br>' . "[ADMIN]" . (' - ') . $this->First_name . (' ') . $this->Last_name;
        } else {
            echo '<br>' . $this->First_name . (' ') . $this->Last_name;
        }
        // if ($this->user) {
        //     echo $this->First_name . (' ') . $this->Last_name;
        // }

    }



    public function email()
    {
        echo $this->email;
    }
}

class admin extends Users
{
};
$obr1 = 'ss.jpg';
$admin = new admin('Jenifer', 'Kundova', 'vozarp93@gmail.com', $obr1, true);
$admin2 = new admin('Alkor', 'Malos', 'vozarp93@gmail.com', $obr1, true);


$obr1 = 'ss.jpg';
$obr2 = 'ss.jpg';
$obr3 = 'ss.jpg';
$user = new Users('Peter', 'Vozár', 'vozarp93@gmail.com', $obr1);
$user2 = new Users('Jano', 'dddd', 'alkohol@gmail.com', $obr2);
$user3 =  new Users('Mrdloper', 'asss', 'odkundes3@gmail.com', $obr3);


// echo $admin->First_name . ' ' . $admin->Last_name . '<br>';
// echo $user2->First_name . ' ' . $user2->Last_name . '<br>';
$user2->email() . '<br>';
echo '<br>';
$user->vrat_meno();

$admin->vrat_meno();
$admin2->vrat_meno();
$user3->vrat_meno();
?>
