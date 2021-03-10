<?php
require __DIR__.'/vendor/autoload.php';

print("input arguments :");

$args = fgets(STDIN);

print("/vendor/bin/phinx ${args}");