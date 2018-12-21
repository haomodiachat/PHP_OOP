<?php
trait Name
{
    private $name = 'Phùng Thị Hảo';
    private function getName()
    {
        return $this -> name;
    }
}
class ConNguoi
{
    use Name {
        //thay đổi thuộc tính private thành public
        getName as public doName;
    }
}
$connguoi = new ConNguoi();
echo $connguoi -> doName();