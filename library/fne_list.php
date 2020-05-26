Fine.<br/>

<table border="1" cellspacing="0" cellpadding="2">
    <tr>
        <td>Book ID</td>
        <td>Title</td>
        <td>Lend Date</td>
        <td>Dead Line</td>
        <td>Restore Date</td>
        <td>Late</td>
        <td>Fine</td>
        <td>Keep</td>
    </tr>

    <?php
    $sql = "SELECT books.bid, books.btitle, transections.tlend, 
    DATE_ADD(transections.tlend, INTERVAL 7 DAY) AS deadline, transections.trest,
    DATEDIFF(transections.trest, transections.tlend) - 7 AS late
    FROM books, transections
    WHERE books.bid = transections.bid
    AND transections.mid = '$mid'
    AND transections.tstat = '2'";
    //echo($sql);
    require('mysql/connect.php');
    while($record = mysqli_fetch_array($result)) {
    ?>

    <tr>
        <td><?php echo($record[0]); ?></td>
        <td><?php echo($record[1]); ?></td>
        <td><?php echo date_format(date_create($record[2]), "d/m/Y"); ?></td>
        <td><?php echo date_format(date_create($record[3]), "d/m/Y"); ?></td>
        <td><?php echo date_format(date_create($record[4]), "d/m/Y"); ?></td>
        <td><?php echo($record[5]); ?></td>
        <td><?php echo((int)$record[5] * 3); ?></td>
        <td><a href="javascript:fnekeep('<?php echo($record[0]); ?>','<?php echo($record[2]); ?>')">Keep</a></td>
    </tr>

    <?php
    }
    require('mysql/unconn.php');
    ?>
</table>

<script language="javascript">
    function fnekeep(v1, v2) {
        var url = "fne_keep.php?mid=<?php echo($mid);?>&bid=" + v1 + "&tlend=" + v2;
        if(confirm("Keep this transections fine ?") == true) {
            window.location.href = url;
        }
    }
</script>