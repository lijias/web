//index.js
//获取应用实例
const app = getApp()

Page({
  data: {
    id:22,
    motto: '跳转到地图页',
    api: '跳转到API页',
    bind: '跳转到BIND页',
    arr: '跳转到数组页',
    views: '跳转到VIEWS页',
    orders: '跳转到ORDERS页',
    verificationCode:'跳转到验证码页',
    image: '搜索页',
    asr: '同声传译',
    tanChuang: '弹窗页',
    userInfo: {},
    hasUserInfo: false,
    canIUse: wx.canIUse('button.open-type.getUserInfo'),
    openSq:false,
    showModal: true
  },
  //事件处理函数
  bindDivTap: function() {
    wx.navigateTo({
      url: '../logs/logs'
    })
  },
  toMap: function () {
    wx.navigateTo({
      url: '../map/map'
    })
  },
  toBind: function () {
    wx.navigateTo({
      url: '../bind/bind'
    })
  },
  toRequest: function () {
    wx.navigateTo({
      url: '../api/api'
    })
  },
  toArr: function () {
    wx.navigateTo({
      url: '../arr/arr'
    })
  },
  toViews: function () {
    wx.navigateTo({
      url: '../views/views'
    })
  },
  toOrder: function () {
    wx.navigateTo({
      url: '../orders/orders'
    })
  },
  toVerificationCode: function () {
    wx.navigateTo({
      url: '../verificationCode/verificationCode'
    })
  },
  toImage: function () {
    wx.navigateTo({
      url: '../image/image'
    })
  }, 
  toAsr: function () {
    wx.navigateTo({
      url: '../asr/asr'
    })
  },
  toS: function () {
    wx.setStorage({
      key: "imageUrl",
      data: 1,
    }) 
  },
  toTanChuang: function () {
    wx.navigateTo({
      url: '../tanChuang/tanChuang'
    })
  },
  onShow:function(){
    wx.getSetting({
      success: (res) => {
        if (res.authSetting['scope.userInfo'] === true) {
          wx.getUserInfo({
            success: res => {
              this.setData({
                openSq: false,
                hasUserInfo: true,
                userInfo: res.userInfo
              })
            }
          })
        }
      }
    })
  },
  onLoad: function () {
    wx.request({
      url: 'https://171.221.203.106:8066/api/mall/getShopTypeTree',
      data: {},
      method: 'POST',
      header: { 'content-type': 'application/json' },
      success: function (res) {
        console.log(res)
      }
    })
    wx.getStorage({
      key: 'imageUrl',
      success: function (res) {
        console.log(res);
      }
    })
    if (app.globalData.userInfo) {
      this.setData({
        userInfo: app.globalData.userInfo,
        hasUserInfo: true
      })
    } else if (this.data.canIUse){
      // 由于 getUserInfo 是网络请求，可能会在 Page.onLoad 之后才返回
      // 所以此处加入 callback 以防止这种情况
      app.userInfoReadyCallback = res => {
        this.setData({
          userInfo: res.userInfo,
          hasUserInfo: true
        })
      }
    } else {
      // 在没有 open-type=getUserInfo 版本的兼容处理
      wx.getUserInfo({
        success: res => {
          app.globalData.userInfo = res.userInfo
          this.setData({
            userInfo: res.userInfo,
            hasUserInfo: true
          })
        }
      })
    }
  },
  getUserInfo: function(e) {
    if (e.detail.userInfo){
      app.globalData.userInfo = e.detail.userInfo
      this.setData({
        userInfo: e.detail.userInfo,
        hasUserInfo: true
      })
    }else{
      wx.getSetting({
        success: (res) => {
          if (res.authSetting['scope.userInfo'] === false){
            this.setData({
              openSq: true
            })
          }
        }
      })
    }
  },
})
