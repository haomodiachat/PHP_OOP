<?php
//lập trình hướng thủ tục
function getPersonnel() {
    $name = 'Phung Thi Hao';
    $age = 21;
    return $name .'_'.$age;
}

//lập trình hướng đối tượng
class Personnel {
    private $name = 'Phung Thi Hao';
    private $age = 21;
    public function getPersonnel()
    {
        return $this->name.'-'.$this -> age;
    }
}
