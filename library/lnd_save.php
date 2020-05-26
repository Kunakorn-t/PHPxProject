<?php 
require('mysql/config.php'); 

if(isset($_POST['mid'])) {
    $mid = $_POST['mid'];
} else {
    $mid = "";
}

if(isset($_POST['bid'])) {
    $bid = $_POST['bid']; 
} else {
    $bid = "";
}

$msg = "";
$v1 = 0;

$sql = "SELECT COUNT(bid) FROM books WHERE bid='$bid'";
require('mysql/connect.php');
$record = mysqli_fetch_array($result);
$bookrow = $record[0];
require('mysql/unconn.php');

$sql = "SELECT COUNT(bid) FROM transections WHERE bid='$bid' AND mid='$mid' AND tstat='1'";
require('mysql/connect.php');
$record = mysqli_fetch_array($result);
$lending = $record[0];
require('mysql/unconn.php');

$sql = "SELECT COUNT(mid) FROM transections WHERE mid='$mid' AND tstat='1'";
require('mysql/connect.php');
$record = mysqli_fetch_array($result);
$holding = $record[0];
require('mysql/unconn.php');

if($bookrow < 1) {
    $msg = "รหัสหนังสือไม่ถูกต้อง";
    $V1 = 0;
} else if($lending > 0) {
    $msg = "หนังสือเล่มนี้ท่านสมาชิกได้ยืมอยู่แล้ว";
    $v1 = 0;
} else if($holding >= 3) {
    $msg = "ท่านสมาชิกยืมหนังสือครบจำนวนจำกัดแล้ว";
    $v1 = 0;
} else {
    $sql = "INSERT INTO transections(mid, bid, tlend, tstat) VALUES('$mid', '$bid', NOW(), '1')";
    require('mysql/connect.php');
    if($result == 1) {
        $msg = "การยืมหนังสือเสร็จสิ้น";
        $v1 = 1;
    } else {
        $msg = "การยืมหนังสือไม่สำเร็จ";
        $v1 = 0;
    }
    require('mysql/unconn.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การยืมหนังสือ</title>
</head>
<body>

<script language="javascript">
    var v1 = <?php echo($v1); ?>;
    alert('<?php echo($msg); ?>');
    if(v1 == 1) {
        window.location.replace("mbr_detail.php?mid=<?php echo($mid); ?>");
    } else {
        window.history.back();
    }
</script>
    
</body>
</html>