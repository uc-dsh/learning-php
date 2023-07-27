<?php

function x()
{
    sleep(1);
    echo "Executed <br />";
    return 3;
}

## If statement Executes Function Repeatedly Till condition is met
echo "if else conditions<br />";
if (x() == 1) {
    echo "One";
} elseif (x() == 2) {
    echo "two";
}elseif(x() == 3){
    echo "three";
}else{
    echo "Unknown Status";
}

echo "<br /><br />Switch case<br />";
switch (x()) {
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    default:
        echo "Unknown Status";
}
