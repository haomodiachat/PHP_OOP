<?php
//nhúng 2 file chứa trait
include 'SetGetName.php';
include 'SetGetAge.php';
class ConNguoi
{
    private $name;
    private $age;
    use SetGetName;
    use \SetGetAge\SetGetAge;
}
$connguoi = new ConNguoi();
$connguoi -> setName('Phùng Thị Hảo');
echo $connguoi -> getName();
echo "<br>";
$connguoi -> setAge(22);
echo $connguoi -> getAge();