//map.js
Page({
    data: {},

    onLoad: function () {
        // 这是因为this作用域指向问题 ，success函数实际是一个闭包 ， 无法直接通过this来setData
        // 那么需要怎么修改呢？
        // 我们通过将当前对象赋给一个新的对象
        // var _this = this;
        // 然后使用_this 来setData就行了
        var _this = this;
        wx.getLocation({
            type: 'wgs84',
            altitude: true,
            success: function (res) {
                var lati = res.latitude;
                var longi = res.longitude;
                _this.setData({
                    lati: lati,
                    longi: longi
                });
            },
            fail: function (res) {
            },
            complete: function (res) {
            },
        })
    }
})
    