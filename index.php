<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function LocalStorage1() {
            let group = document.getElementById("group").value;
            let result = localStorage.getItem(group);
            document.getElementById("ls").innerHTML = result;
        }

        function LocalStorage2() {
            let teacher = document.getElementById("teacher").value;
            let disciple = document.getElementById("disciple").value;
            let key = teacher + " " + disciple;
            let result = localStorage.getItem(key);
            document.getElementById("ls").innerHTML = result;
        }

        function LocalStorage3() {
            let auditorium = document.getElementById("auditorium").value;
            let result = localStorage.getItem(auditorium);
            document.getElementById("ls").innerHTML = result;
        }
    </script>
</head>

<body>
    <h3>Алейник Д.С. КІУКІ-19-1, Вар №1</h3>
    <form method="get" action="action.php">
        <p>Вывести расписание лабораторных работ группы 
            <select name="group" id="group" onchange="LocalStorage1()">
                <?php
                    include 'connection.php';
                    $group = $collection->distinct("group");
                    foreach ($group as $document) {
                        echo "<option>";
                        print($document);
                        echo "</option>";
                    }
                    echo '</select>';
                ?>
            <input type="submit" name="SubmButtonGroup" value="Ок"></p>
    </form>

    <form method="get" action="action.php">
        <p>Вывести расписание занятий преподавателя по дисциплине 
            <select name="teacher" id=teacher onchange="LocalStorage2()">
                <?php
                    include 'connection.php';
                    $group = $collection->distinct("teacher");
                    foreach ($group as $document) {
                        echo "<option>";
                        print($document);
                        echo "</option>";
                    }
                    echo '</select>';
                ?>
                дисциплина
                <select name="disciple" id="disciple" onchange="LocalStorage2()">
                <?php
                    include 'connection.php';
                    $group = $collection->distinct("disciple");
                    foreach ($group as $document) {
                        echo "<option>";
                        print($document);
                        echo "</option>";
                    }
                    echo '</select>';
                ?>
            <input type="submit" value="Ок"></p>
    </form>

    <form method="get" action="action.php">
        <p>Вывести расписание аудитории 
            <select name="auditorium" id="auditorium" onchange="LocalStorage3()">
                <?php
                    include 'connection.php';
                    $auditorium = $collection->distinct("auditorium");
                    foreach ($auditorium as $document) {
                        echo "<option>";
                        print($document);
                        echo "</option>";
                    }
                    echo '</select>';
                ?>
            <input type="submit" value="Ок"></p>
        <p id="ls"></p>
    </form>
</body>

</html>