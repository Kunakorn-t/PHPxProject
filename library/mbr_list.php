<?php
require("mysql/config.php");
$sql = "SELECT mid, mname, mdep FROM members";
if(isset($_GET['kw'])) {
    $kw = $_GET['kw'];
    $sql .= " WHERE mid='$kw' OR mname LIKE '%$kw%'";
} else {
    $kw = "";
    $sql .= " WHERE mid IS NULL";
}
require('mysql/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System.</title>
</head>
<body>
    <form action="mbr_list.php" method="get" target="_self">
        Search:
        <input type="text" name="kw" id="kw" value="<?php echo($kw); ?>">
        <input name="submit" type="submit" value="OK">
    </form>

    <br/>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Department</td>
        </tr>

        <?php
        while($record = mysqli_fetch_array($result)) { ?>

        <tr>
            <td><a href="mbr_detail.php?mid=<?php echo($record[0]); ?>"><?php echo($record[0]); ?></a></td>
            <td><?php echo($record[1]); ?></td>
            <td><?php echo($record[2]); ?></td>
        </tr>

        <?php
        }
        require('mysql/unconn.php');
        ?>
    </table>
</body>
</html>