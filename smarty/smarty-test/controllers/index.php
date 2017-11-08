<?php
require '../smartylibs/smarty.class.php';
$smarty = new Smarty();
$smarty->setTemplateDir('../view');
$smarty->setCompileDir('../view/view_c');
$smarty->assign('name','heyuran');
$smarty->display('test.tpl');