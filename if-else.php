<?php
$obt = rand(50, 200);
$total = 200;
$percentile = $obt / $total * 100;
?>

<p>Obtained Marks : <?= $obt; ?> / <?= $total ?></p>
<p>Percentile : <?= $percentile ?></p>

<?php if ($percentile >= 95) : ?>
    <strong style="color: green;">A+</strong>
<?php elseif ($percentile >= 90) : ?>
    <strong>A</strong>
<?php elseif ($percentile >= 80) : ?>
    <strong>B</strong>
<?php elseif ($percentile >= 70) : ?>
    <strong>C</strong>
<?php elseif ($percentile >= 60) : ?>
    <strong>D</strong>
<?php else : ?>
    <strong style="color: red;">E</strong>
<?php endif; ?>