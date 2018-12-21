<?php
//Thuộc tính
class Name1 {
    //đối vói thuộc tính động
    var $propertyName;
    //đối với thuộc tính cố định(hằng)
   // const $constName = value;
}
class Connguoi1{
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;
}
//Phương thức
class Name2 {
    function methodName()
    {
        //code
    }
}
class ConNguoi2 {
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;
    function an()
    {
        //code
    }
    function noi($caunoi)
    {
        //code
    }
    function di()
    {
        //code
    }
}

//khởi tạo một lớp
//new className;
//hoặc
//new ClassName();
//hoặc có thế gán vào một biến
//$variable = new className();
//truy xuất thuộc tính của class
//truy xuất trong
//truy xuất thông tin của thuộc tính name trong phương thức noi của class ConNguoi3
class ConNguoi3 {
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;
    function an()
    {
        //code
    }
    function noi($cauhoi)
    {
        return $this -> name = $cauhoi;
    }
    function di()
    {
        //code
    }
    // truy xuất thông tin của thuộc tính cố định trong class ta sử dụng
    //self::propertyName;
    //hoặc
    //className::propertyName
    function getSoChan(){
        return self::sochan;
    }
}

//truy xuất ngoài
//đối với thuộc tính động
//$newClass = new className();
//$newClass -> propertyName;
//đối vói thuộc tính cố định
//className::propertyName;

//gọi các thuộc tính động và cố định trong lớp CongNguoi3
$tai = new ConNguoi3();
$tai -> name;
$tai -> mui;
ConNguoi3::sochan;

//ket luận
class ConNguoi4
{
    //khai báo thuộc tính động
    public $name;
    public $mat;
    public $mui;
    //khai báo constant
    const SOCHAN = 2;

    //khai báo phương thức
    public function an()
    {
        //code
    }
    public function noi($cauhoi)
    {
        //gọi phương thức trong class
        return $this -> getSoChan();
    }
    public function di()
    {
        //code
    }
    public function getName()
    {
        //gọi thuộc tính động trong class
        return $this -> name;
    }
    public function getSoChan()
    {
        //gọi thuộc tính constant trong class
        return self::SOCHAN;
    }
}
//khởi tạo class
$connguoi = new ConNguoi4();
//gọi thuộc tính ngoài class và đồng thời gán giá trị mới cho thuộc tính
$connguoi -> name ='Phùng Thị Hảo';
//gọi lại thuộc tính để xem thay đổi
echo $connguoi -> name;
//gọi phương thức
echo $connguoi -> noi('Phùng Thị hảo');


