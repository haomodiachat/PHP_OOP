<?php
namespace SetGetAge;
trait SetGetAge
{
    public function setAge($age)
    {
        $this -> age = $age;
    }
    public function getAge()
    {
        return $this -> age;
    }
}