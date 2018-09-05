// pages/image/image.js
const app = getApp()
var plugin = requirePlugin("WechatSI")
let manager = plugin.getRecordRecognitionManager()
Page({

  /**
   * 页面的初始数据
   */
  data: {
    hotSearch:null,
    hisSearch:null,
    searchStr:null,
    buttonName:'提交',
    scrollHeight:null
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var _this = this;

    // 搜索页
    wx.request({
      url: 'http://quanyuantang.com/index.php/search/search_view',
      data: { 'id': app.globalData.customer_id},
      success:function(res){
        _this.setData({
          // 热门搜索
          hotSearch: res.data.hot_search,
          // 历史搜索
          hisSearch: res.data.his_search
        })
      } 
    })
  },

// 监听搜索的内容
  voteSearchStr:function(e){
    this.setData({
      searchStr:e.detail.value
    })
  },

// 图片识别
  choose:function(){
    wx.chooseImage({
      count:1,
      success: function(res) {
        // 上传图片
        wx.uploadFile({
          url: 'http://quanyuantang.com/index.php/search/search_image',          //仅为示例，非真实的接口地址
          filePath: res.tempFilePaths[0],
          header: { 'content-type': 'application/json' },
          name: 'file',
          success: function (res) {
            // 数据转换成json格式
            var data = JSON.parse(res.data);

            wx.setStorage({
              key: "imageUrl",
              data: data,
              success:function(){
                // 跳转至列表页
                wx.navigateTo({
                  url: 'searchList?type=image'
                })
              }
            }) 
          }
        })
      },
    })
  },
  ////////////////////////////// 以下是调用同声传译插件的方式
  //手指按下
  touchdown_plugin: function () {
    var plugin = requirePlugin("WechatSI")
    let manager = plugin.getRecordRecognitionManager()
    manager.onRecognize = function (res) {
      // console.log("current result", res.result)
    }
    manager.onStop = function (res) {
      // console.log("record file path", res.tempFilePath)
      console.log("result", res.result)
      console.log(res)
      wx.setStorage({
        key: "str",
        data: res.result,
        success: function () {
          // 跳转至列表页
          wx.navigateTo({
            url: 'searchList?type=voice'
          })
        }
      }) 
    }
    manager.onError = function (res) {
      console.error("error msg", res.msg)
    }
    manager.start({ duration: 30000, lang: "zh_CN" })
  },
  //手指松开
  touchup_plugin: function () {
    manager.stop();
    wx.showToast({
      title: '正在识别……',
      icon: 'loading',
      duration: 2000
    })
  },

  sub:function (){
    wx.navigateTo({
      url: 'searchList'
    })
  }
})