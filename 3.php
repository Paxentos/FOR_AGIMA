<?php
//($a == 1 && $a == 2 && $a == 3)
//Чему должен быть равен $a, чтобы условие вернуло true.

$a = true;
var_dump($a == 1 && $a == 2 && $a == 3);

//как я понял, поскольку здесь используется '==', а не '===' то PHP переводит значения в bool переменные, значит 1 он принимает как true,
//единственное что мне все же не понятно, почему $a == 2 && $a == 3