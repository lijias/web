// pages/verificationCode/verificationCode.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    buttonName:'发送验证码',
    disabledStatus:false,
    mobile:null,
    time:5,
    verification:null,
    code:null
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
  
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
  
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
  
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
  
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
  
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
  
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
  
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
  
  },

  sendVerif: function () {
    var _this = this;
    var mobile = this.data.mobile;
    var my_moblie = /^(13[0-9]|14[0-9]|15[0-9]|17[0-9]|18[0-9])\d{8}$/i;

    if (mobile == null) {
      wx.showToast({
        title: '输入的手机号为空',
        icon: 'none',
        duration: 1500
      })
      return false;
    }
    if (mobile.length != 11) {
      wx.showToast({
        title: '手机号长度有误！',
        icon: 'none',
        duration: 1500
      })
      return false;
    }
    if (!my_moblie.test(mobile)) {
      wx.showToast({
        title: '手机号有误！',
        icon: 'none',
        duration: 1500
      })
      return false;
    }

//  提交数据
    wx.request({
      url: 'http://quanyuantang.com/index.php/login/verificationCode',
      data: {mobile:mobile},
      method: 'POST',
      header: { 'content-type': 'application/x-www-form-urlencoded' },
      success: function (res) {
        if (res.data.code == '0') {
          wx.showToast({
            title: '失败',
            icon: 'none',
            duration: 1500
          })
          return false;
        } else {
          _this.setData({
            'verification': res.data.verification
          })
          _this.runTime();
        }
      }
    })
  },

  runTime:function(){
      var _this = this;
      var time = this.data.time;  //倒计时5秒
      this.setData({
        'buttonName': '发送验证码',
        'disabledStatus': true
      })
      var inter = setInterval(function () {
        _this.setData({
          'buttonName': time + 's后重新发送'
        })
        time--
        if (time < 0) {
          clearInterval(inter)
          _this.setData({
            'buttonName': '重新发送验证码',
            'disabledStatus': false,//倒计时结束能够重新点击发送的按钮
            'time': 5
          })
        }
      }, 1000)
    },

  // 监听mobile，获取手机号码
  voteMobile: function (e) {
    this.setData({
      'mobile': e.detail.value
    })
  },

  // 监听code，获取验证码
  voteCode: function (e) {
    this.setData({
      'code': e.detail.value
    })
  },

// 提交
  sub: function () {
    if (this.data.verification == null){
      wx.showToast({
        title: '验证码不能为空',
        icon: 'none',
        duration: 1500
      })
      return false;
    }

    if (this.data.code != this.data.verification) {
      wx.showToast({
        title: '验证码错误',
        icon: 'none',
        duration: 1500
      })
      return false;
    }

    wx.showToast({
      title: '绑定成功',
      icon: 'success',
      duration: 1500,
      success:function(){
        wx.navigateTo({
          url: '../index/index',
        })
      }
    })
  }
})