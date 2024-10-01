<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Глеба Максим Миколайович</h1>
        <div class="photo-placeholder">?</div>
        <p>Вік: 18</p>
        <p>Місце народження: Запоріжжя</p>
        <p>Номер телефону: 0932223333</p>
    </div>

    <?php
    $students = [
        ["Мирослав", "Бєлєв Сергійович", 18, "Запоріжжя", "0932223333"],
        ["Олексій", "Борзенко Максимович", 18, "Київ", "0931111111"],
        ["Юлія", "Борисенко Анатоліївна", 18, "Львів", "0932222222"],
        ["Максим", "Борцов Олександрович", 18, "Одеса", "0933333333"],
        ["Денис", "Войцещук Геннадійович", 18, "Харків", "0934444444"],
        ["Аліна", "Портна Сергіївна", 18, "Полтава", "0935555555"]
    ];
    ?>

    <table>
        <tr>
            <th>Ім'я</th>
            <th>Прізвище</th>
            <th>Вік</th>
            <th>Місце народження</th>
            <th>Номер телефону</th>
        </tr>

        <?php
        foreach ($students as $student) {
            echo "<tr>";
            foreach ($student as $info) {
                echo "<td>$info</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
