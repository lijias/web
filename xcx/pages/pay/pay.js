Page({
  onLoad: function (options) {
    console.log(options)
    this.getData(options)
  },
  getData: function ($data) {
    var that = this
    wx.request({
      url: 'getData_api',
      method: 'POST',
      data: $data,
      success: (res) => {
        console.log(res)
        that.pay(res.data.data)
      }
    })
  },
  pay: function ($data) {
    console.log($data)
    var that = this
    wx.requestPayment({
      timeStamp: $data.timeStamp,
      nonceStr: $data.nonceStr,
      package: $data.package,
      signType: 'MD5',
      paySign: $data.paySign,
      success: function (res) {
        // 支付成功  
        that.navback()
      },
      fail: function (res) {
        if (res.errMsg === "requestPayment:fail cancel") {
          // 用户取消支付  
          that.navback()
          return
        }
        if (res.errMsg === "requestPayment:fail") {
          console.log(res.err_desc) // 错误信息  
          that.navback()
          return
        }
      }
    })
  },
  navback: () => {
    setTimeout(function () {
      wx.navigateBack({ delta: 1 })
    }, 1000)
  }
})  