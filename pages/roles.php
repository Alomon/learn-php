<h2>Роли пользователей</h2>

<?php
// Добавление (Форма добавления)
if (isset($_GET['do']) && ($_GET['do'] == 'add')) {
    echo '
    <form action="index.php?p=roles&do=create" method="POST">
        <input type="text" name="name" placeholder="Введите наименование роли"><br>
        <input type="text" name="code" placeholder="Введите код роли"><br>
        <button type="submit">Добавить роль</button>
    </form>
    ';

}

// Добавление данных (БД)
if (isset($_GET['do']) && ($_GET['do'] == 'create') && (isset($_POST['name']) || isset($_POST['code']))) {
    $sql = "INSERT INTO roles (name, code) VALUES ('" . $_POST['name'] . "', '" . $_POST['code'] . "')";
    mysqli_query($conn, $sql);
}


// Удаление
if ( isset($_GET['do']) && isset($_GET['id']) && !is_null($_GET['id'])
        && ($_GET['do'] == 'delete') && is_numeric($_GET['id']))  {
    $sql = "DELETE FROM roles WHERE id = " . $_GET['id'];
    mysqli_query($conn, $sql);
}

//Просмотр данных
if ( isset($_GET['do']) && isset($_GET['id']) && !is_null($_GET['id'])
        && ($_GET['do'] == 'view') && is_numeric($_GET['id']))  {

    echo '<a href="https://learn-php/index.php?p=roles">Назад</a>';

    $sql = "SELECT * FROM roles WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo '
        <h2> Просмотр роли:' . $row['name'] . '</h2>
        ID роли: ' . $row['id'] . '<br>
        Код роли: ' . $row['code'];

    exit();
}

// Редактирование (форма редактирования)

if ( isset($_GET['do']) && isset($_GET['id']) && !is_null($_GET['id'])
        && ($_GET['do'] == 'edit') && is_numeric($_GET['id'])) {

    echo '<a href="https://learn-php/index.php?p=roles">Назад</a>';

    echo'<h2>Редактирование роли с ID '. $_GET['id'] .'</h2>';
    $sql = "SELECT * FROM roles WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo'
        <form action="index.php?p=roles&do=update&id='.$row['id'].'" method="post">
            <label>
            Наименование роли
            <input type="text" name="name" value="'.$row['name'].'">
            </label>
            <br>
            <label>
            Код роли
            <input type="text" name="code" value="'.$row['code'].'">
            </label>
            <br>
            <button type="submit">Обновить</button>
        </form>
    ';
    exit();
}

// Обновление данных
if ( isset($_GET['do']) && isset($_GET['id']) && !is_null($_GET['id'])
        && ($_GET['do'] == 'update') && is_numeric($_GET['id']) && isset($_POST['name'])
        && isset($_POST['code'])) {

    $sql = "UPDATE roles SET name = '".$_POST['name']."', code = '".$_POST['code']."' WHERE id = " . $_GET['id'];
    mysqli_query($conn, $sql);
}

// Получение данных
echo '<a href="index.php?p=roles&do=add">Добавить роль</a>';

$sql = "SELECT * FROM roles";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Наименование роли</th>
        <th>Код роли</th>
        <th>Операции</th>
        </tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['code'] . "</td>";
    echo "<td> <a href='https://learn-php/index.php?p=roles&do=delete&id=". $row['id'] ."'>Удалить</a>";
    echo " <a href='https://learn-php/index.php?p=roles&do=view&id=". $row['id'] ."'>Просмотреть</a>";
    echo " <a href='https://learn-php/index.php?p=roles&do=edit&id=". $row['id'] ."'>Редактировать</a></td>";
    echo "</tr>";
}
echo "</table>";

