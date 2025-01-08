<?php 

$db = dbreturn();

$db->query('Delete from classes where id=?',[$_POST['id']]);

redirect('/classes');