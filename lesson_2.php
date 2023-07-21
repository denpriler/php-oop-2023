<?php

$studentList = [];

class Student
{
    private string $email;
    private string $name;
    private ?int $age;

    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
        $this->age = null;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAge(): string|int
    {
        if ($this->isFullAge()) {
            return $this->age;
        }
        return "<strong>" . $this->age . "<strong>";
    }

    private function isFullAge(): bool
    {
        return $this->age >= 18;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}

$denis = new Student('denispriler.dev@mail.com', 'Denis');