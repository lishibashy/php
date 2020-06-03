<?php 

require_once "TestMembers.php";
$report = new TestMembers;
$report->run()->render();

?>