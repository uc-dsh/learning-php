<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th,
        table tr td {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check No.</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction) : 
                $textColor = $transaction["amount"] < 0 ? "red" : "green";
                ?>
                <tr>
                    <td><?= FormatDate($transaction["date"]); ?></td>
                    <td><?= $transaction["check_no"]; ?></td>
                    <td><?= $transaction["description"]; ?></td>
                    <td>
                        <span style="color:<?= $textColor; ?>;">
                            <?= FormatAmount($transaction["amount"]); ?>
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Total Expense</th>
                <td><?= FormatAmount($totals["expense"]) ?? 0; ?></td>
            </tr>
            <tr>
                <th>Total Income</th>
                <td><?= FormatAmount($totals["income"]) ?? 0; ?></td>
            </tr>
            <tr>
                <th>Net Total</th>
                <td><?= FormatAmount($totals["netTotal"]) ?? 0; ?></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>