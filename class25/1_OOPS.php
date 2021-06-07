<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>    
    <style>
        body {
            background: #f9f9f9;
            padding-top: 15px;
        }
        body > p, body > div{
            margin: 30px 100px;
        }
        h1{            
            text-align: center;
            color: #e6e6e6;
            background: #777;
            border-radius: 25px;
            margin: 10px 50px;
        }
    </style>
</head>
<body>
    <h1>Inheritance</h1>
    <div>
        <p>Take Careem Service provider as an example</p>
        <?php
            class Member{
                public $firstName;
                public $middleName;
                public $lastName;

                function __construct()
                {
                    echo "I am member constructor <br>";
                }

                public function getFullName(){
                    return ucfirst(strtolower($firstName) )." ".ucfirst(strtolower($middleName) )." ".ucfirst(strtolower($lastName) );
                }

                public function DoJob()
                {
                    echo "I am member, do not know what kind of <br>";
                    echo "It seems I am instance of ". get_class($this);
                    echo "<br>";
                }
            }

            class Employee extends Member{

                public function __construct(){
                    // child construct do not call parent constructor implicitly
                    // you will have to call parent constructor explicitly, if required
                    parent::__construct();
                }

                public function WhatDoYouKnow(){
                    echo "my parent says about me is: <br>";
                    parent::DoJob();
                }
            }

            class Captain extends Member{

            }
            class VendorCaptain extends Captain{

            }
            class IndividualCaptain extends Captain{

            }

            class Customer extends Member{

            }
            class CoorporateCustomer extends Customer{

            }
            class NormalCustomer extends Customer{

            }
            $shahid = new Employee;
            $shahid->DoJob();
            $shahid->WhatDoYouKnow();
        ?>
    </div>
    <!-- <h1>Test 2</h1>
    <div>
        <?php

        ?>
    </div> -->
    <!-- <h1>Test 3</h1>
    <div>
        <?php        
            
        ?>
    </div> -->
</body>
</html>