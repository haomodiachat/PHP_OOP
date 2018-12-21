<?php
include 'class.php';
$connguoi = new ConNguoi\ConNguoi();
echo $connguoi -> getname();
$nguoilon = new \nguoilon\NguoiLon();
echo $nguoilon -> getName();