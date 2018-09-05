<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Echart_bar</title>
</head>
<body>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/echarts/echarts.js"></script>
<div id="main" style="width: 1000px;height:500px;"></div>
<?php $a = '20,55,66,87,45,9'; ?>
<script type="text/javascript">
    var dates = [], zss = [];
    function get_val() {
        $.ajax({
            url: "<?php echo site_url('/echart/echarts/bar_search');?>",
            type: "post",
            async: false,
            data: {},
            dataType: "json",
            success: function (result) {
                if (result) {
                    for (var i = 0; i < result.length; i++) {
                        dates.push(result[i].date);
                        zss.push(result[i].zs);
                    }
                }
            }
        });
        return dates, zss;
    }

    get_val();

    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '日活跃用户'
        },
        tooltip: {},
        legend: {
            data: ['当日登录次数']
        },
        xAxis: [{data: dates}],
        series: [{
            "name": "当日登录次数",
            "type": "bar",
            "data": zss
        }],
        yAxis: [{type: 'value'}]
    };
    //    var option = {
    //        title: {
    //            text: 'ECharts 入门示例'
    //        },
    //        tooltip: {},
    //        legend: {
    //            data: ['销量']
    //        },
    //            xAxis: {},
    //            series: [{
    //                name: '销量',
    //                type: 'bar',
    //                data: [<?php //echo $a;?>//]
    //            }],
    //            yAxis: {
    //                data: ["衬衫", "羊毛衫", "雪纺衫", "裤子", "高跟鞋", "袜子"]
    //            }
    //
    //    };
    myChart.setOption(option);
</script>
</body>
</html>