<?php

require_once('Smarty-3.1.16/libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->assign('name', 'Shinta');
$smarty->assign('url', 'http://www.my-domain.com/');
$smarty->debugging = false;
$smarty->display('index.tpl');
