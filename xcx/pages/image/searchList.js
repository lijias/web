// pages/image/searchList.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    scrollHeight:null,
    imageUrl:null,
    searchType:'str',
    pages: 1,
    limit:2,
    offset: 0,
    listInfo: null,
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var _this = this;

//   这里要注意，微信的scroll-view必须要设置高度才能监听滚动事件，所以，需要在页面的onLoad事件中给scroll-view的高度赋值
    wx.getSystemInfo({
      success: function (res) {
        var height = res.windowHeight;
        _this.setData({
          scrollHeight: height
        });
      }
    });

//  图片识别
    if (options.type=='image'){
      wx.getStorage({
        key: 'imageUrl',
        success: function (res) {
          _this.setData({
            imageUrl: res.data,
            searchType: 'image',
          })
          wx.request({
            url: 'http://quanyuantang.com/index.php/search/search_list',
            data:{
              type: 'image',
              file_path: res.data,
              limit: _this.data.limit,
              offset: _this.data.offset
            },
            success:function(res2){
              console.log(res2)
              var pages = _this.data.pages+1
              // 重新赋值
              _this.setData({
                pages: pages,
                offset: (pages - 1) * _this.data.limit,
                listInfo: res2.data
              })
            }
          })
        }
      })
    }else{
      wx.getStorage({
        key: 'str',
        success: function (res) {
          console.log(res)
          _this.setData({
            str: res.data,
            searchType: 'str',
          })
          wx.request({
            url: 'http://quanyuantang.com/index.php/search/search_list',
            data: {
              type: 'image',
              str: res.data,
              limit: _this.data.limit,
              offset: _this.data.offset
            },
            success: function (res2) {
              var pages = _this.data.pages + 1
              // 重新赋值
              _this.setData({
                pages: pages,
                offset: (pages - 1) * _this.data.limit,
                listInfo: res2.data
              })
              console.log(res2)
            }
          })
        }
      })
    }
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
  
  }
})