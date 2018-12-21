<?php
//các lớp imlement lại interface thì phải định nghĩa và khai báo các phương thức có trong interface
interface DongVat1
{
    public function getName();
}
class ConTrau implements DongVat1
{
    private $name;
    public function getName()
    {
       return $this -> name;
    }
}
//một class có thể implement nhiều interface
interface DongVat2
{
    public function getName();
}
interface ConBo
{
    public function checkSung();
}
class ConNghe implements DongVat2, ConBo
{
    private $name;
    const SUNG = false;
    public function getName()
    {
        return $this -> name;
    }
    public function checkSung()
    {
        return self::SUNG;
    }
}