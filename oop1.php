<?php

    class User {
        public $username;
        private  $email;
        public function addFriend(){
            
            return "$this->email added a new friend";
        }
        public function __construct(public $theUser,public $TheEmail){
            $this->username = $theUser;
            $this->email = $TheEmail;
        }
        //GETTER
        public function getEmail(){
            return "$this->email added a new photo";
        }
        public function setEmail($email){
            if(strpos($email,'@') >-1){
                $this->email = $email;
            }
        }
    }
    class adminUser extends User {

    }
    $UserOne = new User ('mario','mario@gmail.com');
    $UserTwo = new User('luigi','luigi@gmail.com');
    $UserThree = new adminUser('yoshi','yoshit@gmail.com');
    echo $UserThree->username . '<br>';
    echo $UserThree->getEmail() . '<br>';


    $UserOne->setEmail('yoshi@gmail.com');
    echo $UserOne->getEmail() .'<br>';
    echo $UserTwo->getEmail() .'<br>';





    echo get_class($UserOne) . '<br>';
    echo $UserOne->username . '<br>';
    echo $UserOne->getEmail() . '<br>';
    echo $UserTwo->getEmail() . '<br>';
    print_r(get_class_vars('User'));
    print_r(get_class_methods('User'));
    echo get_class($UserTwo) . '<br>';
    echo $UserTwo->addFriend() . '<br>';
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