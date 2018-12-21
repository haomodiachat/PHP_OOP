<?php
trait Name
{
    private static $name = 'Chưa xét';
    public function setName($name)
    {
        self::$name = $name;
    }
    public function getName()
    {
        return self::$name;
    }
}

//khai báo class ConNguoi
class ConNguoi
{
    use Name;
}
class NguoiLon
{
    use Name;
}

$connguoi = new ConNguoi();
$connguoi -> setName('Phùng Thị hảo');
echo $connguoi -> getName();
//$trecon = new ConNguoi();
//echo $trecon -> getName();
$nguoilon = new NguoiLon();
echo $nguoilon -> getName();
//thuộc tính tĩnh  chỉ ảnh hưởng đến 1 class là Connguoi còn khi gọi nó ở một class Nguoilon thì hoàn toàn bình thường
