<?php
$result = `ls -l`;
//print mb_convert_encoding($result, 'UTF-8', 'SJIS');
print $result;