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
        /**
         * interfaces are like abstract class, but
         * 1. they have no concrete method
         * 2. They does not need abstract
         * 3. they are inheritable
         */
            interface IAccountable{                
                public function getCreatedOn();
                public function getUpdatedOn();
            }

            abstract class AccountableEntity implements IAccountable{
                private $password;
                public function about(){
                    echo "I am an instance of accountableEntity class";
                }
                public abstract function getCreatedOn();
                public abstract function getUpdatedOn();
            }
            abstract class Member extends AccountableEntity{
                public $firstName;
                public $middleName;
                public $lastName;

                public $phoneNumber1;
                public $phoneNumber2;

                function __construct()
                {
                    echo "I am member constructor <br>";
                    $firstName = "abdul";
                }

                /**
                 * This method is final, it means it can not be overridden in child class
                 */
                public final function getFullName(){
                    return ucfirst(strtolower($this->firstName) )." ".ucfirst(strtolower($this->middleName) )." ".ucfirst(strtolower($this->lastName) );
                }

                public function DoJob()
                {
                    echo "I am member, do not know what kind of <br>";
                    echo "It seems I am instance of ". get_class($this);
                    echo "<br>";
                }

                public function about(){
                    echo "I am an instance of Member class";
                }

                // public function getCreatedOn(){
                //     echo "this will return created on date time";
                // }
                
                // public function getUpdatedOn(){
                //     echo "this will return updated on date time";
                // }
                
                abstract public function getCreatedOn();
                abstract public function getUpdatedOn();
            }

            /**
             * Abstract Class - a class which has abstract 0 or more abstract method and has abstract keyword at class declaration 
             * an abstract class can not be instantiated.
             */
            abstract class Employee extends Member{
                public $JoiningDate;
                public $Salary;

                

                public function WhatDoYouKnow(){
                    echo "my parent says about me is: <br>";
                    parent::DoJob();
                }

                /**
                 * This is overriding parent method about
                 */
                public function about(){
                    echo "I am an instance of Employee class";
                }
                // public function getFullName(){
                //     echo "I am overriding a final method from parent";
                // }

                public abstract function getEmployeeId();
                public abstract function getApplicationAccess();
                
                abstract public function getCreatedOn();
                abstract public function getUpdatedOn();
            }


            /**
             * Concret class, a class which have no abstract method
             */
            class CallCenterEmployee extends Employee{
                public function __construct(){
                    echo "I am CallCenterEmployee Constructor";
                    echo "<br>";
                    // child construct do not call parent constructor implicitly
                    // you will have to call parent constructor explicitly, if required
                    parent::__construct();
                }
                public $rating;
                public function getEmployeeId(){
                    return "CSE-007";
                }
                public function getApplicationAccess(){
                    return "Middle-level-Access";
                }
                public function getCreatedOn(){
                    echo "this will return created on date time";
                }
                
                public function getUpdatedOn(){
                    echo "this will return updated on date time";
                }
                public function DoJob()
                {
                    echo "I am CallCenterEmployee, and I know who i am <br>";
                    echo "<br>";
                    //$this->DoJob();
                    parent::DoJob();
                    $this->about();
                }
            }
            
            class BillingEmployee extends Employee{
                public $performance;
                
                public function getEmployeeId(){
                    return "BE-008";
                }
                
                public function getApplicationAccess(){
                    return "full-Access";
                }
                public function getCreatedOn(){
                    echo "this will return created on date time";
                }
                
                public function getUpdatedOn(){
                    echo "this will return updated on date time";
                }
            }

            class Captain extends Member{

                public function getCreatedOn(){
                    echo "this will return created on date time";
                }
                
                public function getUpdatedOn(){
                    echo "this will return updated on date time";
                }
            }
            class Customer extends Member{

                public function getCreatedOn(){
                    echo "this will return created on date time";
                }
                
                public function getUpdatedOn(){
                    echo "this will return updated on date time";
                }
            }
            class VendorCaptain extends Captain{

            }
            class IndividualCaptain extends Captain{

            }

            class CoorporateCustomer extends Customer{

            }
            class NormalCustomer extends Customer{

            }
            $shahid = new CallCenterEmployee;
           // $shahid->getCreatedOn();
            $shahid->DoJob();
            $shahid->WhatDoYouKnow();
            $shahid->about();
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