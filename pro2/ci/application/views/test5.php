<!doctype html>
<html lang="zh-CN">

<head>
    <!-- 原始地址：//webapi.amap.com/ui/1.0/ui/misc/PoiPicker/examples/index.html -->
    <!--    <base href="//webapi.amap.com/ui/1.0/ui/misc/PoiPicker/examples/" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.js"></script>
    <title>输入框选择POI点</title>
    <style>
        html,
        body,
        #container {
            width: 500px;
            height: 500px;
            margin: 0px;
            font-size: 13px;
        }

        #pickerBox {
            position: absolute;
            z-index: 9999;
            top: 50px;
            right: 30px;
            width: 300px;
        }

        #pickerInput {
            width: 200px;
            padding: 5px 5px;
        }

        #poiInfo {
            background: #fff;
        }

        .amap_lib_placeSearch .poibox.highlight {
            background-color: #CAE1FF;
        }

        .amap_lib_placeSearch .poi-more {
            display: none !important;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
<div id="container" class="map" tabindex="0"></div>
<div id="pickerBox">
    <input id="pickerInput" placeholder="输入关键字选取地点"/>
    <div id="poiInfo"></div>
</div>
<?php
foreach ($add as $k => $v) { ?>
    <span lon="113.273805" lat="23.095454"
          onclick="goMap(<?php echo $v['localtion']['lon']; ?>,<?php echo $v['localtion']['lat']; ?>,'<?php echo $v['title']; ?>')"> <?php echo $v['title']; ?> </span>
<?php } ?>
<span id="getLonLat">获取经纬度</span>
<span id="lonLat"></span>

<script type="text/javascript"
        src='//webapi.amap.com/maps?v=1.4.8&key=5fdcfa43e57aadd89203137e4712d62f&plugin=AMap.Geocoder'></script>
<!-- UI组件库 1.0 -->
<script src="//webapi.amap.com/ui/1.0/main.js?v=1.0.11"></script>
<script type="text/javascript">
    var map = new AMap.Map('container', {
        zoom: 15,
        center: [113.274276, 23.096436]
    });

    //    设置图标
    var address = <?php echo $address; ?>;
    var addressList = [];
    $.each(address, function () {
//        状态不同图标不同
        if (this.status == 1) {
            var marker = new AMap.Marker({
                position: new AMap.LngLat(this.localtion.lon, this.localtion.lat),   // 经纬度对象，也可以是经纬度构成的一维数组[116.39, 39.9]
                title: this.title
            });
        } else {
            var marker = new AMap.Marker({
                position: new AMap.LngLat(this.localtion.lon, this.localtion.lat),   // 经纬度对象，也可以是经纬度构成的一维数组[116.39, 39.9]
                title: this.title,
                icon: 'https://vdata.amap.com/icons/b18/1/2.png'
            });
        }
        addressList.push(marker);
    })

    // 将创建的点标记添加到已有的地图实例：
    map.add(addressList);

    //    点击地址移动到地图的中心
    function goMap(lon, lat, title) {
        var lon = lon;
        var lat = lat;
        var title = title;

        var marker = new AMap.Marker({
            position: new AMap.LngLat(lon, lat),   // 经纬度对象，也可以是经纬度构成的一维数组[116.39, 39.9]
            title: title
        });

        // 设置缩放级别和中心点
        map.setZoomAndCenter(15, [lon, lat]);

        var infoWindow = new AMap.InfoWindow({
            offset: new AMap.Pixel(0, -20)
        });

        infoWindow.setMap(map);
        infoWindow.setPosition(lon + ',' + lat);
        infoWindow.setContent('<a href="http://abc.pro2.com/index.php/Gaodeditu/gaode/shuju?title=' + title + '">' + title + '</a>');
        infoWindow.open(map, marker.getPosition());
    };

    //    获取经纬度
    $('#getLonLat').click(function () {
        var str2 = '广东省广州市海珠区江南东路与江南西路交叉口西50米';

        var geocoder = new AMap.Geocoder({
//            city: "010", //城市，默认：“全国”
            radius: 1000 //范围，默认：500
        });
        //地理编码,返回地理编码结果
        geocoder.getLocation(str2, function (status, result) {
            if (status === 'complete' && result.info === 'OK') {
                geocoder_CallBack(result);
            }
        });
    });

    function geocoder_CallBack(data) {
        console.log(data);
    }

    //    搜索框
    AMapUI.loadUI(['misc/PoiPicker'], function (PoiPicker) {

        var poiPicker = new PoiPicker({
            //city:'北京',
            input: 'pickerInput'
        });

        //初始化poiPicker
        poiPickerReady(poiPicker);
    });

    function poiPickerReady(poiPicker) {

        window.poiPicker = poiPicker;

        var marker = new AMap.Marker();

        var infoWindow = new AMap.InfoWindow({
            offset: new AMap.Pixel(0, -20)
        });

        //选取了某个POI
        poiPicker.on('poiPicked', function (poiResult) {
            var source = poiResult.source,
                poi = poiResult.item,
                urls = '<a href="http://abc.pro2.com/index.php/Gaodeditu/gaode/shuju?id=' + poi.id + '"',
                infos = 'source: ' + source + '<br>id: ' + poi.id + '<br>name: ' + poi.name + '<br>location: ' + poi.location.toString() + '<br>address: ' + poi.address + '</a>',
                strs = urls + infos;

            console.log(poi);
            marker.setMap(map);
            infoWindow.setMap(map);

            marker.setPosition(poi.location);
            infoWindow.setPosition(poi.location);

            infoWindow.setContent(strs);
            infoWindow.open(map, marker.getPosition());

            //map.setCenter(marker.getPosition());
        });

        poiPicker.onCityReady(function () {
            poiPicker.suggest('富力海珠城');
        });

    }

</script>
</body>

</html>