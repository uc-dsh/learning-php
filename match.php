<?php
function test(){
    echo "Executed <br />";
    sleep(1);
    return "2";
}

$result = match(test()){
    1, "1" => "Amount Paid",
    2 => "Payment Failed",
    3 => "Access Denied",
    default => "Something Went Wrong"
};

echo $result;