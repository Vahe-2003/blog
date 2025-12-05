<?php
class User {
    private $firstName;
    private $lastName;
    protected $passportId;
    protected $phone;
    public $age;

    public function __construct($firstName, $lastName, $passportId, $phone, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->passportId = $passportId;
        $this->phone = $phone;
        $this->age = $age;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getPassportId() {
        return $this->passportId;
    }

    public function getPhone() {
        return $this->phone;
    }
}

class Student extends User {
    public $gpa;
    public $faculty;
    public $course;

    public function __construct($firstName, $lastName, $passportId, $phone, $age, $gpa, $faculty, $course) {
        parent::__construct($firstName, $lastName, $passportId, $phone, $age);
        $this->gpa = $gpa;
        $this->faculty = $faculty;
        $this->course = $course;
    }
}
