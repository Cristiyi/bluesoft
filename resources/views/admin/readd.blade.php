<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>资源添加</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{URL::asset('admin/css/font.css')}}">
	<link rel="stylesheet" href="{{URL::asset('admin/css/xadmin.css')}}">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="{{URL::asset('admin/lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/xadmin.js')}}"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="{{url('admin/index')}}">后台首页</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="">个人信息</a></dd>
              <dd><a href="{{url('admin/logout')}}">切换帐号</a></dd>
              <dd><a href="{{url('admin/logout')}}">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item"><a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
          <div id="side-nav">
            <ul id="nav">
                <li class="list" current>
                    <a href="{{url('admin/index')}}">
                        <i class="iconfont">&#xe761;</i>
                        欢迎页面
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        会员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li class="current">
                            <a href="member-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                会员列表
                            </a>
                        </li>
                        <li>
                            <a href="member-del.html">
                                <i class="iconfont">&#xe6a7;</i>
                                会员删除
                            </a>
                        </li>
                        <li>
                            <a href="member-level.html">
                                <i class="iconfont">&#xe6a7;</i>
                                等级管理
                            </a>
                        </li>
                        <li>
                            <a href="member-kiss.html">
                                <i class="iconfont">&#xe6a7;</i>
                                积分管理
                            </a>
                        </li>
                        <li>
                            <a href="member-view.html">
                                <i class="iconfont">&#xe6a7;</i>
                                浏览记录
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        分类管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="./category.html">
                                <i class="iconfont">&#xe6a7;</i>
                                分类列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        轮播管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        管理员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统统计
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./echarts1.html">
                                <i class="iconfont">&#xe6a7;</i>
                                拆线图
                            </a>
                        </li>
                        <li>
                            <a href="./echarts2.html">
                                <i class="iconfont">&#xe6a7;</i>
                                柱状图
                            </a>
                        </li>
                        <li>
                            <a href="./echarts3.html">
                                <i class="iconfont">&#xe6a7;</i>
                                地图
                            </a>
                        </li>
                        <li>
                            <a href="./echarts4.html">
                                <i class="iconfont">&#xe6a7;</i>
                                饼图
                            </a>
                        </li>
                        <li>
                            <a href="./echarts5.html">
                                <i class="iconfont">&#xe6a7;</i>
                                k线图
                            </a>
                        </li>
                        <li>
                            <a href="./echarts6.html">
                                <i class="iconfont">&#xe6a7;</i>
                                仪表图
                            </a>
                        </li>
                        <li>
                            <a href="http://echarts.baidu.com/examples.html">
                                <i class="iconfont">&#xe6a7;</i>
                                更多案例
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统设置
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="" enctype="multipart/form-data" file="true" method="post">

								{{csrf_field()}}
                <div class="layui-form-item">
                    <label for="re_name" class="layui-form-label">
                        <span class="x-red">*</span>资源名称
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cate_name" name="re_name" required=""
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="re_link" class="layui-form-label">
                        <span class="x-red">*</span>资源连接
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cate_link" name="re_link" required=""
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="re_password" class="layui-form-label">
                        <span class="x-red">*</span>资源密码
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cate_link" name="re_password" required=""
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                  <label for="re_cate" class="layui-form-label">
                      <span class="x-red">*</span>资源分类
                  </label>
                  <div class="layui-input-inline">
                    <select name="re_cate">
                      @foreach($pcatename as $p)
                        @if($p -> cate_pid != 0)
                          <option value="{{$p->cate_name}}">{{$p->_cate_name}}</option>
                          @else<option value="{{$p->cate_name}}" disabled="">{{$p->_cate_name}}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                </div>
                <!-- <div class="layui-form-item">
                    <label for="re_count" class="layui-form-label">
                        <span class="x-red">*</span>下载数量
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cate_link" name="re_count" required=""
                        autocomplete="off" class="layui-input">
                    </div>
                </div> -->
                <div class="layui-form-item">
                    <label for="re_score" class="layui-form-label">
                        <span class="x-red">*</span>资源积分
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cate_link" name="re_score" lay-verify="number"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="re_status" class="layui-form-label">
                        <span class="x-red">*</span>资源状态
                    </label>
                    <div class="layui-input-inline">
                        <select class="" name="re_status">
														<option value="1">启用</option>
														<option value="0">停用</option>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="re_capture" class="layui-form-label">
                        <span class="x-red">*</span>资源图片
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" name="re_capture" class="">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="re_qcode" class="layui-form-label">
                        <span class="x-red">*</span>资源二维码
                    </label>
                    <div class="layui-input-inline">
                      <input type="file" name="re_qcode" class="">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit lay-filter="add">
                        增加
                    </button>
                </div>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <script>
		// $(function  () {
		// 	layui.use('form', function(){
		//  	  var form = layui.form();
		//  	 //监听提交
		//  	 form.on('submit(add)', function(data){
		//  		 $.ajax({
		// 			 async:false,
		//  			 url: "{{url('admin/cateadd')}}",
		//  			 type: "post",
		//  			 dataType: "json",
		// 			 data: {'cate_name': data.field.cate_name, 'cate_link': data.field.cate_link, 'cate_status':data.field.cate_status,'cate_pid':data.field.cate_pid},
		//  			 success: function(result) {
		//  				 if(result.status=='true') {
		// 					 alert('xx');
		// 					 window.opener.location.href = window.opener.location.href;
  	// 				 	 window.close();
		//  				 } else {
		// 					 //  layer.msg(result.msg);
		//  				 }
		//  			 },error:function(xhr){alert(xhr.responseText)}
		//  		 })
		//
		//  	 });
		//   });
		// })


		//百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>
</html>
