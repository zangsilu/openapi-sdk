<?php

require './Hashids.php';
$hashids = new Hashids('wdHMh83fQTvQGaLRhClBLq6eQKISeJpk', 16);
list($id) = $hashids->decode('6GYa21Y00oKz2O9j');

var_dump($id);