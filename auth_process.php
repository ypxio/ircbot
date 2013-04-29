<?php

$handle = fopen('log.txt', "r");
echo $contents = fread($handle, filesize("log.txt"));