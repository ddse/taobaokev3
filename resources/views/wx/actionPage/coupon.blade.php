@extends('wx.layouts.master')
@section('title')
  @include('wx.layouts._title_category')
@stop
@section('headcss')

@stop
@section('content')
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left lbd-all-kinds-nav"></a>
    <h1 class="mui-title">领淘宝优惠券</h1>
</header>
@include('wx.layouts._footer_tab')

<div class="mui-content">
		<div id="slider" class="mui-slider lbd-coupon-take-box">
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item mui-active" href="#item1mobile">淘口令方式</a>
        @if($showClient)
				<a class="mui-control-item" href="#item2mobile">链接方式</a>
        @endif
        <a class="mui-control-item" href="#item3mobile">龙琴时代APP</a>
			</div>
      @if($showClient)
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4" style="background-color: #ED2A7A;"></div>
      @else
      <div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-6" style="background-color: #ED2A7A;"></div>
      @endif
			<div class="mui-slider-group">
				<div id="item1mobile" class="mui-slider-item mui-control-content mui-active" style="min-height: 400px; background-color: #fff;">
					<div id="scroll1" class="mui-scroll-wrapper-bak">
						<div class="mui-scroll-bak">
							<ul class="mui-table-view">
								<li class="mui-table-view-cell">
									<textarea rows="3" id="lbd-tpwd" style="margin-bottom: 0px;">淘口令：{{ $tpwd }}</textarea>
								    <div class="mui-button-row">
								        <button type="button" id="lbd-tpwd-copy" data-clipboard-action="copy" data-clipboard-target="#lbd-tpwd" class="mui-btn mui-btn-yellow lbdTpwdCopy" >复制淘口令</button>
								    </div>
								    <p id="lbd-tips" style="margin-top: 10px; color: red; display: none;">复制失败，请手动复制淘口令</p>
								</li>
								<li class="mui-table-view-cell">
									<h5>淘口令使用说明：</h5>
									<p>
										1.如果手机有淘宝APP，则可以直接复制口令领券。手机没有淘宝APP，请先安装再复制淘口令领券。<br />
										2.领券步骤：<br>
										&nbsp;&nbsp;&nbsp;&nbsp;a.点击【复制淘口令】按钮<br />
										&nbsp;&nbsp;&nbsp;&nbsp;b.打开手机淘宝APP<br />
										&nbsp;&nbsp;&nbsp;&nbsp;c.在淘宝APP内领券下单<br />
										3.优惠券有使用期限，过期作废，请尽快下单。
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
        @if($showClient)
				<div id="item2mobile" class="mui-slider-item mui-control-content" style="min-height: 400px; background-color: #fff;">
					<div id="scroll2" class="mui-scroll-wrapper-bak">
						<div class="mui-scroll-bak">
							<ul class="mui-table-view">
								<li class="mui-table-view-cell">
								    <div class="mui-button-row" id="lbd-coupon-take-link">
								        <button  class="mui-btn mui-btn-yellow mui-btn-block">立即领券</button>
								    </div>
								</li>
								<li class="mui-table-view-cell">
									<h5>链接方式领券使用说明：</h5>
									<p>
										1.此方法是通过浏览器领券下单购物。<span style="color: #ed2a7a;">由于通过浏览器抢券的成功率低于淘口令方式并且操作复杂，所以<strong>强烈建议</strong>使用淘口令方式领取优惠券</span>。<br />
										2.领券步骤：<br>
										&nbsp;&nbsp;&nbsp;&nbsp;a.点击【立即领券】按钮<br />
										&nbsp;&nbsp;&nbsp;&nbsp;b.在出现的登录页面输入账号和密码<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;c.登录淘宝后在淘宝领券页面领取优惠券<br />
										&nbsp;&nbsp;&nbsp;&nbsp;d.淘宝下单的时候就可以使用优惠券享受优惠了<br />
										3.优惠券有使用期限，过期作废，请尽快下单。
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
        @endif
        <div id="item3mobile" class="mui-slider-item mui-control-content" style="min-height: 400px; background-color: #fff;">
					<div id="scroll2" class="mui-scroll-wrapper-bak">
						<div class="mui-scroll-bak">
							<ul class="mui-table-view">
                <li class="mui-table-view-cell">
                    <div class="mui-row">
                        <div class="mui-col-xs-3" style="padding-right: 5px;">
                            <img src="http://placehold.it/400x400" alt="" style="width: 100%;">
                        </div>
                        <div class="mui-col-xs-7">
                            <h5 style="margin-top: 0px; margin-bottom: 3px;"><strong>龙琴时代（安卓版）</strong></h5>
                            <p style="font-size: 12px;"><span style="color: #ed2a7a;">☆☆☆☆☆</span> | <span>时尚购物</sapn> | <span>3.5M<span></p>
                        </div>
                        <div class="mui-col-xs-2 mui-text-center">
                            <a class="mui-btn mui-btn-primary" rel="nofollow" href="https://m.52010000.cn/download/52010000.cn.apk">下载</a>
                        </div>
                        <div class="mui-col-xs-9">
                          <p style="font-size: 12px;">龙琴时代APP是一个时尚购物的APP，免费分享全网最全最优的淘宝天猫优惠券。</p>
                        </div>
                    </div>
                </li>
                <li class="mui-table-view-cell">
                    <div class="mui-row">
                        <div class="mui-col-xs-3" style="padding-right: 5px;">
                            <img src="http://placehold.it/400x400" alt="" style="width: 100%;">
                        </div>
                        <div class="mui-col-xs-7">
                            <h5 style="margin-top: 0px; margin-bottom: 3px;"><strong>龙琴时代（IOS版）</strong></h5>
                            <p style="font-size: 12px;"><span style="color: #ed2a7a;">☆☆☆☆☆</span> | <span>时尚购物</sapn> | <span>3.5M<span></p>
                        </div>
                        <div class="mui-col-xs-2 mui-text-center">
                            <a class="mui-btn mui-btn-primary" rel="nofollow" href="https://m.52010000.cn/download/52010000.cn.ipa">下载</a>
                        </div>
                        <div class="mui-col-xs-9">
                          <p style="font-size: 12px;">龙琴时代APP是一个时尚购物的APP，免费分享全网最全最优的淘宝天猫优惠券。</p>
                        </div>
                    </div>
                </li>
								<li class="mui-table-view-cell">
									<h5>龙琴时代APP领券使用说明：</h5>
									<p>
										1.通过龙琴时代APP抢优惠券的成功率最高<br/>
										2.优惠券每天24小时实时更新，保证优惠券的时效性<br />
                    3.商品种类涉及上百个大类，上千个小分类，总能找到自己喜欢的宝贝<br />
                    4.独家分享上千家合作的淘宝天猫店铺的大额优惠券，领券最低一折购物<br />
										5.优惠券有使用期限，过期作废，请尽快下单。
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
@stop
@section('footJs')
<script src="/wxstyle/js/clipboard.min.js"></script>
<script type="text/javascript" charset="utf-8">
  mui.init();
  @if($showClient)
  var a = '{{ $linkPara[0] }}';
  var b = '{{ $linkPara[1] }}';
  var c = '{{ $linkPara[2] }}';
  var d = '{{ $linkPara[3] }}';
  mui('#lbd-coupon-take-link').on('tap', 'button', function() {
    document.location.href = a+b+c+d
  });
  @endif
  // 复制淘口令的操作
      var clipboard = new ClipboardJS('.lbdTpwdCopy');

      clipboard.on('success', function(e) {
        document.getElementById('lbd-tpwd-copy').innerHTML = '复制成功！'
        document.getElementById('lbd-tpwd-copy').style.backgroundColor = 'green'
          console.log(e);
      });

      clipboard.on('error', function(e) {
        document.getElementById('lbd-tpwd-copy').innerHTML = '复制失败！'
        document.getElementById('lbd-tpwd-copy').style.backgroundColor = 'red'
        document.getElementById('lbd-tips').style.display = ''
          console.log(e);
      });
</script>
@stop
