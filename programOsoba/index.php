<?php
include 'Osoba.class.php';



$jane = new Osoba('Jane', 'Doe', 'f', '2000-02-12', 555888777);
echo $jane -> getInfo();

echo 'Telefon przed zmianą: ';
echo $jane -> getPhoneNumber();
$jane -> setPhoneNumber(123456789);
echo "<br>" ;
echo 'Telefon po zmianie: ';
echo $jane -> getPhoneNumber();

echo $jane -> getInfo();

echo "<br>" ;

$john = new Osoba('John', 'Doe','m', '1999-12-11', 13456789);
echo $john -> getInfo();

echo 'Nazwisko przed zmianą: ';
echo $john -> getSurname();
$john -> setSurname('DoeNobody');
echo "<br>" ;
echo 'Nazwisko po zmianie: ';
echo $john -> getSurname();

echo $john -> getInfo();
?>