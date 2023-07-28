<?php
function foo(string $name, string $email = "Email not Found", string|int $age = "Age Not Found")
{
    return <<<DATA
        Name : $name
        Email : $email
        Age : $age
    DATA;
}

$arg = ["name" => "Jhon Doe", "age" => 19, "email" => "jhon@example.com"];
echo nl2br(foo(...$arg));
