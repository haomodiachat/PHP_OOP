<?php
class Person
{
    //khai báo thuộc tính xe dạng protected
    protected $name;
}
class Male extends Person
{
    function setName($name)
    {
        $this -> name = $name;
    }
    function getName()
    {
        return $this -> name;
    }
}
//khởi tạo lớp Person
$person = new Person();
//sai vì biến name có visibility là protected nên không tác động từ
$person -> name;
//khởi tạo lớp Male
$male = new Male();
//tác động vào biến name qua hàm setName
$male -> setName('Phùng Thị Hảo');
echo $male -> getName();
