<?php
include 'ConNguoi.php';
use ConNguoi as People;
$connguoi = new People\ConNguoi();
echo $connguoi -> getName();