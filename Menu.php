<?php
require_once 'tag.php';
require_once 'Link.php';


echo (new Link())->setAttr('href', '1.php')->setText('1')->show();
echo '<br>';
echo (new Link())->setAttr('href', '2.php')->setText('2')->show();
echo '<br>';
echo (new Link())->setAttr('href', '3.php')->setText('3')->show();
echo '<br>';
echo (new Link())->setAttr('href', '4.php')->setText('4')->show();
echo '<br>';
echo (new Link())->setAttr('href', '5.php')->setText('5')->show();

?> 
