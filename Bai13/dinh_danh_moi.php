<?php
trait Name
{
    private $name = 'Phùng Thị Hảo';
    public function getName()
    {
        return $this -> name;
    }
}
class ConNguoi
{
    use Name {
        //thay đổi thuộc tính private thành public
        getName as doName;
    }
}
$connguoi = new ConNguoi();
echo $connguoi -> doName();