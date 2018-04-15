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
header("Content-type: text/html; charset=utf8");
?>

<div id="height_select_if_top"></div>
<div id='title_table'>上海小分队专用投票通道</div>
<table id='table_a'>
    <form action=vote_handle.php method=post name=vote>
        <tr id='tr'>
            <td>我是谁</td>
            <td>选择类型</td>
            <td>操作类型</td>
        </tr>
        <tr>
            <td>
                <select name="id">
<?php
@require_once "conn.php";
// Find
$sql = "select id, name from allvote order by id;";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    list($id, $name) = $row;
?>
                    <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
<?php
};
?>
                </select>
            </td>
            <td>
                <select name="voteid">
<?php
$sql = "select voteid, name as tname from votetype order by voteid;";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    list($voteId, $voteName) = $row;
?>
                    <option value="<?php echo $voteId; ?>"><?php echo $voteName; ?></option>
<?php
};
?>
                </select>
            </td>
            <td>
                <input type=reset value=' 清 空 '> |
                <input type=submit value=' 投 票 ' onclick='return check_bonus(this.form)'>
            </td>
        </tr>
    </form>
</table>
<div id='hint'><span>%提示：</span>投票成功后查询页面画出饼状统计图需要稍微等待！</div>
<div id="height_select_if_bottom"></div>

    </body>
</html>
