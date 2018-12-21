<?php
class ConNguoi
{
    var $chan;
    var $tay;
    var $mat;
    var $mui;
    function an()
    {

    }
}
//kế thừa dùng extends
class NguoiLon extends ConNguoi
{
    var $lamviec;
    function di()
    {

    }
    function noi()
    {

    }
}
class TreCon extends ConNguoi
{
    function bo()
    {

    }
}
//gọi thuộc tính và phương thức của lớp cha
class ParentClass
{
    function getClass()
    {
        return 'ParentClass';
    }
}
class ChildClass extends ParentClass
{
    var $name = 'ChildClass';
    function getClass()
    {
        return 'ChildClass';
    }
    function getMethod()
    {
        echo 'Đây là phương thức ăn của lớp ' .$this -> getClass();
    }
    function getMethodParent()
    {
        echo 'Đây là phương thức ăn của lớp ' .parent::getClass();
    }
}
$class = new ChildClass();
//kết quả trả về: đây là phương thức ăn của lớp trẻ con
$class -> getMethod();
echo "<br>";
//kết quả :Đây là phương thức ăn của lớp người lớn
$class -> getMethodParent();

