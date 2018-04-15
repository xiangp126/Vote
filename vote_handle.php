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

$id = $_POST['id'];
$voteid = $_POST['voteid'];

$table = 'allvote';
$sql = "update allvote set voteid = '$voteid' where id = '$id';";
$result = mysql_query($sql);
if ($result = mysql_query($sql)) {
    echo "<script>alert('恭喜，投票信息更新成功！'); location.href='vote_print.php';</script>";
} else {
    echo "<script>alert('抱歉，投票信息更新失败！'); location.href='vote.php';</script>";
}
?>
    <body>
</html>

<?php
@require_once "vote_print.php";
?>
