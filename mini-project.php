<?php
$TrFiles = scandir("./transactions");
unset($TrFiles[0], $TrFiles[1]);
$cvs_array = array_values($TrFiles);
$tr_data = [];
$expense = 0;
$income = 0;
foreach ($cvs_array as $csv) {
    $file = fopen("./transactions/" . $csv, "r");
    while (($line = fgetcsv($file)) !== false) {
        $tr_data[] = $line;
    }
    fclose($file);
}
?>
<table border="1">
    <thead>
        <tr>
            <th>Date</th>
            <th>Check Id</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($tr_data as $transaction) :
            if (str_contains($transaction[3], "-")) {
                $amount = str_replace("-$", "", $transaction[3]);
                $amount = str_replace(",", "", $amount);
                $expense += (int) $amount;
            } else {
                $amount = str_replace("$", "", $transaction[3]);
                $amount = str_replace(",", "", $amount);
                $income += (int) $amount;
            }
        ?>
            <tr>
                <td><?= @$transaction[0] ?></td>
                <td><?= @$transaction[1] ?></td>
                <td><?= @$transaction[2] ?></td>
                <td><?= @$transaction[3] ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<br />
<p>Income : <?= $income; ?></p>
<p>Expenses : <?= $expense; ?></p>
<p>Net Total : <?= $income - $expense ?></p>