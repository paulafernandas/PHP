<?php

/*for ($i=1; $i<=10; $i++) {
    echo $i;
}*/

/*for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}*/


$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
