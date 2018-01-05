<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin1.1</title>
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
    <div class="login-logo"><h1>X-ADMIN V1.1</h1></div>
    <div class="login-box">
        <form class="layui-form layui-form-pane" action="">

            <h3>登录你的帐号</h3>
						<div class="lay-form-item">
							@if(!empty(session('msg')))
									<p class="login-title" style="color:red">{{session('msg')}}</p>
							@endif
						</div>
            <label class="login-title" for="username">帐号</label>
            <div class="layui-form-item">
								<input type="hidden" name="_token" value="csrf_token">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="admin_name" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input">
                </div>
            </div>
            <label class="login-title" for="password">密码</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe82b;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="admin_password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-warning pull-right" lay-submit lay-filter="login"  type="submit">登录</button>
                <div class="forgot"><a href="#" class="forgot">忘记帐号或者密码</a></div>
            </div>
        </form>
    </div>
	<div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/a.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/b.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/c.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/d.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/e.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/f.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/g.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/k.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/i.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/j.jpg')}}" alt=""></div>
                <div class="swiper-slide"><img class="item" src="{{URL::asset('admin/images/k.jpg')}}" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>
    </div>
    <script>
		// $(function  () {
		// 	layui.use('form', function(){
		//  	  var form = layui.form();
		//  	 //监听提交
		//  	 form.on('submit(login)', function(data){
		//  		 $.ajax({
		//  			 url: "{{url('admin/login')}}",
		//  			 type: "post",
		//  			 dataType: "json",
		//  			 data: {'admin_name': data.field.admin_name, 'admin_password': data.field.admin_password, '_token': data.field._token},
		//  			 success: function(result) {
		//  				 if(result.status=='true') {
		// 					 location.href = "{{url('admin/index')}}";
		//  				 } else {
		//  					 layer.msg(result.msg);
		//  				 }
		//  			 }
		//  		 })
		//
		//  	 });
		//   });
		// })


    </script>
    <script>
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
