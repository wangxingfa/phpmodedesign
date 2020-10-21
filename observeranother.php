<?php
include "vendor/autoload.php";

$emailRecord=new \phpdesignmode\observeranother\EmailRecord();
$txtRecord=new phpdesignmode\observeranother\TxtRecord();
$databaseRecord=new phpdesignmode\observeranother\DatabaseRecord;
\phpdesignmode\observeranother\RecordRegister::addRecord($emailRecord);
\phpdesignmode\observeranother\RecordRegister::addRecord($txtRecord);
\phpdesignmode\observeranother\RecordRegister::addRecord($databaseRecord);

$tt=\phpdesignmode\observeranother\RecordRegister::recordAll();
var_dump($tt);

