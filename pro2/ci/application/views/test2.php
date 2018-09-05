<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title></title>
    <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.js"></script>
</head>
<style>
    .allTd {
        width: 150px;
        height: 150px;
    }
</style>
<body>
<center>
    <div dataType="abc">1</div>
    <div>2</div>
    <table border="1" cellpadding="0" cellspacing="0" id="tab">
        <tr id="first">
            <td class="allTd"></td>
        </tr>
    </table>
    <button onclick="lie()">加一列</button>
    <button onclick="hang()">加一行</button>
</center>
<script type="text/javascript">
    function hang() {
        var tdLength = $('#first').children().length;
        var newTd = '';
        for (var i = 1;i <= tdLength;i++) {
            newTd += "<td class='allTd'></td>";
        }
        $('#tab').append("<tr>"+newTd+"</tr>");
    }

    function lie() {
        $('#tab').children().children().append('<td class="allTd"></td>');
        console.log($('div').attr("dataType"))
    }
</script>
</body>
</html>