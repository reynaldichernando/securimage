<?php
require_once dirname(__FILE__) . '/securimage.php';

$img = new Securimage();
if (!empty($_GET['namespace'])) $img->setNamespace($_GET['namespace']);

echo $img->getCode();
