<?php

ob_start();

include 'utils.mjs';
include 'module1.mjs';
include 'module2.mjs';
include 'module3.mjs';
$data = ob_get_clean();

$expressions = array(
  'MULTILINE_COMMENT'  => '\Q/*\E[\s\S]+?\Q*/\E',
  'SINGLELINE_COMMENT' => '(?:http|ftp)s?://(*SKIP)(*FAIL)|//.+',
  'WHITESPACE'         => '^\s+|\R\s*'
);

foreach ($expressions as $key => $expr) {
  $data = preg_replace('~' . $expr . '~m', '', $data);
}

echo $data;
