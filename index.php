<?php
require_once "classes.php";

$students = [
    new Student("Անի", "Սահակյան", "AN1234567", "+37491222333", 20, 18.5, "Ինֆորմատիկա", 2),
    new Student("Գագիկ", "Պետրոսյան", "AA0099887", "+37493887766", 21, 17.2, "Ֆիզիկա", 3),
    new Student("Մարիա", "Գևորգյան", "AM5566778", "+37494556677", 19, 19.1, "Կենսաբանություն", 1),
];
?>
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f1f1f1;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #777;
            text-align: left;
        }
        th {
            background: #444;
            color: white;
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>

</head>
<body>

<h2>Ուսանողների տվյալներ</h2>

<table>
    <tr>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Անձնագրի համար</th>
        <th>Հեռախոս</th>
        <th>Տարիք</th>
        <th>ՄՈԳ</th>
        <th>Ֆակուլտետ</th>
        <th>Կուրս</th>
    </tr>

    <?php foreach ($students as $s): ?>
        <tr>
            <td><?= $s->getFirstName() ?></td>
            <td><?= $s->getLastName() ?></td>
            <td><?= $s->getPassportId() ?></td>
            <td><?= $s->getPhone() ?></td>
            <td><?= $s->age ?></td>
            <td><?= $s->gpa ?></td>
            <td><?= $s->faculty ?></td>
            <td><?= $s->course ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>