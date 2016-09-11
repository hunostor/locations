<?php
require 'list.php';
$template = file_get_contents(__DIR__ . '/view/home/home.html');



$template = str_replace('{{ list }}', $list, $template);