<?php
require("mysql/config.php");
$mid = $_GET['mid'];
require("mbr_select.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System.</title>
</head>
<body>
    
    <table border="1" cellspacing="0" cellpadding="2">
     <tr>
        <td colspan="2">Member Detail.</td>
     </tr>

     <tr>
        <td align="right">ID:</td>
        <td align="left"><?php echo($mid); ?></td>
     </tr>

     <tr>
        <td align="right">Name:</td>
        <td align="left"><?php echo($mname); ?></td>
     </tr>

     <tr>
        <td align="right">Department:</td>
        <td align="left"><?php echo($mdep); ?></td>
     </tr>

     <tr>
        <td colspan="2" align="center"><a href="mbr_list.php">Back</a></td>
     </tr>
    </table>

    <br/><br/>

<?php require("brw_form.php"); ?><br/>
<?php require("brw_list.php"); ?><br/>
<?php require("fne_list.php"); ?><br/>

</body>
</html>