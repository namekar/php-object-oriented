<?php

    class User {
        public $username = 'ryu';
        public $email = 'namekar09@gmail.com';
        public function addFriend(){
            
            return "$this->email added a new friend";
        }


    }
    $UserOne = new User ();
    $UserTwo = new User();
    echo get_class($UserOne) . '<br>';
    echo $UserOne->username . '<br>';

    
    echo $UserOne->addFriend() . '<br>';
    print_r(get_class_vars('User'));
    print_r(get_class_methods('User'));
    echo get_class($UserTwo) . '<br>';
    
    echo $UserTwo->addFriend() . '<br>';
    $UserTwo->username = 'yoshi';
    $UserTwo->email = 'karim@gmail.com';
    echo $UserTwo->username . '<br>';
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>