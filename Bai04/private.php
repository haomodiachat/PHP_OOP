<?php
class Person
{
    private $name;
    private function run()
    {
        return 'Đây là hàm run';
    }
    function setName($name)
    {
        $this -> name = $name;
    }
    function getName()
    {
        return $this -> name;
    }
    function getRunMethod()
    {
        return $this -> run();
    }
}
//khởi tạo class
$person = new Person();
//set thuộc tính name
$person -> setName('Phùng Thị Hảo');
//lấy ra thuộc tính name
echo $person -> getName();
echo "<br>";
//gọi giá trị của phương thức run
echo $person -> getRunMethod();
