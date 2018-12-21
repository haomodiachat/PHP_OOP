<?php
class ConNguoi1
{
    private static $name = 'amonymouse';
    public function setName($name)
    {
        self::$name = $name;
    }
    public function getName()
    {
        return self::$name;
    }
}
//khởi tạo đối tượng con người
$chuBlog = new ConNguoi1();
//set name cho đối tượng
$chuBlog -> setName('Phùng Thị Hảo');
//in ra name của đối tượng
echo $chuBlog -> getName();
//khởi tạo đối tượng con người
$nguoixem = new ConNguoi1();
echo $nguoixem -> getName();

//gọi phương thức và thuộc tính tĩnh trong class
class ConNguoi2
{
    private static $name = 'Phùng Thị Hảo';
    public static function getName()
    {
        //gọi thuộc tính tĩnh
        return self::$name;
        //hoặc
        //return ConNguoi::$name;
    }
    public function showAll()
    {
        //gọi phương thức tĩnh
        return self::getname();
        //hoặc
        //return ConNguoi::getName();
    }
}
//gọi thuộc tính tĩnh ngoài class
//ConNguoi2:: $name;
//gọi phương thức tĩnh
//ConNguoi :: showAll();
//hoặc
$connguoi = new ConNguoi2();
$connguoi -> showAll();

//kế thừa phương thức tĩnh từ lớp ch
class ConNguoi3
{
    private static $name = 'Phùng Thị Hảo';
    public static function getName()
    {
        return ConNguoi3::$name;
    }
}
class NguoiLon extends ConNguoi
{
    public function getName()
    {
        parent::getName();
    }
}
