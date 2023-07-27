<?php

$var = 1;

// Heredoc
$heredoc = <<<Text
        This is some text
        "Double Quotes"
        'Single Quotes'
        $var
    Text;

echo nl2br($heredoc);
echo "<br /><br />";
// Nowdoc
$nowdoc = <<<'Text'
    This is some text
    "Double Quotes"
    'Single Quotes'
    $var
    Text;

echo nl2br($nowdoc);
