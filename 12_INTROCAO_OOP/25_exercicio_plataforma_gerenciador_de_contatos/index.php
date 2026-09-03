<?php
class Contact
{
    public string $name;
    public string $email;
    public string $phone;
    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function  setEmail($email)
    {
        $this->email = $email;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}

$rose = new Contact("Rose", "lalalala@gmail.com", "6199999999");

echo $rose->email;
echo "<br>";
echo $rose->name;
echo "<br>";
echo $rose->phone;
echo "<br>";
echo $rose->phone = "61995555555";
echo "<br>";
echo $rose->email = "blabla@gmail.com";
