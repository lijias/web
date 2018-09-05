// pages/asr/asr.js
var plugin = requirePlugin("WechatSI")
const manager = plugin.getRecordRecognitionManager()
const recorderManager = wx.getRecorderManager()
Page({

  /**
   * 页面的初始数据
   */
  data: {
  
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    recorderManager.onStart(() => {
      console.log('recorder start')
    })
    recorderManager.onPause(() => {
      console.log('recorder pause')
    })
    recorderManager.onStop((res) => {
      console.log('recorder stop', res)
      const { tempFilePath } = res
    })
    recorderManager.onFrameRecorded((res) => {
      const { frameBuffer } = res
      console.log('frameBuffer.byteLength', frameBuffer.byteLength)
    })

    var options = {
      duration: 10000,
      sampleRate: 44100,
      numberOfChannels: 1,
      encodeBitRate: 192000,
      format: 'aac',
      frameSize: 50
    }

    recorderManager.start(options)
    recorderManager.onError((res) => {
      console.log(res)
    })
   
  },
  ////////////////////////////// 以下是调用同声传译插件的方式
  //手指按下
  touchdown_plugin: function () {
    // var plugin = requirePlugin("WechatSI")
    // let manager = plugin.getRecordRecognitionManager()
    console.log(manager)
    manager.onRecognize = function (res) {
      console.log("current result", res.result)
    }
    manager.onStop = function (res) {
      console.log("record file path", res.tempFilePath)
      console.log("result", res.result)
      console.log(res)
    }
    manager.onStart = function (res) {
      console.log("成功开始录音识别", res)
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
})