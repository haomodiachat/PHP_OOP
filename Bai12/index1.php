<?php
trait SetGetName
{
    public function setName($name)
    {
        $this -> name = $name;
    }
    public function getName()
    {
        return $this -> name;
    }
    public function getAll()
    {
        return $this -> getName();
    }
}

trait SetGetAge
{
    public function setAge($age)
    {
        $this -> age = $age;
    }
    public function getAge ()
    {
        return $this -> age;
    }
    public function getAll()
    {
        return $this -> getAll();
    }
}
class ConNguoi
{
    private $name;
    private $age;
    use SetGetName, SetGetAge;
    public function getAll()
    {
        return $this -> getName();
    }
}
$connguoi = new ConNguoi();
$connguoi -> setName('Phùng Thị hảo');
echo $connguoi -> getAll();