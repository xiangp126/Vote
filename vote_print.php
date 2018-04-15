<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title>上海小分队专用投票通道</title>
    </head>
    <body>
<?php
@require_once "conn.php";

$sql = "select id, all.name, type.name as tname from allvote as `all`, votetype as type where all.voteid = type.voteid order by all.id;";
$result = mysql_query($sql);
if($row = mysql_fetch_array($result)) {
    echo "<div id='title_table'>上海小分队专用投票通道</div>";
    echo "<table id='table_c'>";
    echo "<tr id='tr'>";
    echo "<td>投票编号</td>";
    echo "<td>姓名</td>";
    echo "<td>选择类型</td>";
    echo "</tr>";
    do {
        list($id, $name, $typeName) = $row;
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td>$typeName</td>";
        echo "</tr>";
    } while($row = mysql_fetch_array($result));
}

$sql = "select type.name as tname, count(all.voteid) as count from allvote as `all`, votetype as type where type.voteid = all.voteid group by all.voteid;";
$result = mysql_query($sql);
if($row = mysql_fetch_array($result)) {
    do {
        list($typeName, $count) = $row;
        $drawArray[$typeName] = $count;
    } while($row = mysql_fetch_array($result));
}
?>
    </body>
</html>

<?php
@require_once "vote_draw.php";
?>
