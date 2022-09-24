<?php
class User
{
    public $id, $firstName, $lastName, $email, $dateOfBirth, $gender, $dateOfAddition, $userLevel;

    function __construct($sqlResult)
    {
        $this->id = $sqlResult['ID'];
        $this->firstName = $sqlResult['FirstName'];
        $this->lastName = $sqlResult['LastName'];
        $this->dateOfBirth = $sqlResult['DateOfBirth'];
        $this->gender = $sqlResult['Gender'];
        $this->dateOfAddition = $sqlResult['DateOfAddition'];
        $this->userLevel = $sqlResult['UserLevel'];
    }
}
