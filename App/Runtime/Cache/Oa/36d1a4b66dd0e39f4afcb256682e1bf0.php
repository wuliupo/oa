<?php if (!defined('THINK_PATH')) exit();?><div class="easyui-panel" data-options="fit:true,title:'后台首页',border:false,onResize:function(){$('#index-main-portal').portal({border:false,fit:true});}">
	<div id="index-main-portal">
		<div style="width:50%">
			<div title="我的个人信息" collapsible="true" style="padding:8px;line-height:1.8">
				您好，wangdong<br />
				所属角色：超级管理员 <br />
				最后登录时间：2015-03-10 16:07:32<br />
				最后登录IP：192.168.1.96 <br />
			</div>

			<div title="近期登录" collapsible="true" style="padding:8px;line-height:1.8">
				[2015-03-10 16:07:32] 登录IP：192.168.1.96<br/>[2015-03-10 15:55:40] 登录IP：116.24.239.117<br/>[2015-03-10 15:51:23] 登录IP：115.192.238.108<br/>[2015-03-10 15:43:34] 登录IP：123.139.21.254<br/>[2015-03-10 15:25:10] 登录IP：106.39.86.98<br/>			</div>

			<div title="改动日志" collapsible="true" style="padding:8px;line-height:1.8">
				[2015-03-05]
<br/>1.增加了邮件模版功能
<br/>2.邮件类增加了发送附件方法
<br/>
<br/>[2015-02-27]
<br/>1.更新easyui版本到1.4.1，同时修复升级后部分兼容性问题
<br/>2.内容管理有些功能进行了重构（废除了之前的news表所有操作）
<br/>3.修复了一些mac系统上的样式问题
<br/>
<br/>[2015-02-08]
<br/>				......			</div>
		</div>

		<div style="width:50%">
			<div title="安全提示" collapsible="true" style="padding:8px;line-height:1.8">
								网站上线后建议关闭DEBUG调试模式 <br />				建议开启后台日志记录功能<br />				建议开启单点登录功能<br />			</div>

			<div title="系统说明" collapsible="true" style="padding:8px;line-height:1.8">
				版本号：1.0.150305[开发版] （联系QQ：531381545）<br />
				本系统采用ThinkPHP 3.2.2 + jQuery easyUI 1.4.1 开发<br/><br/>

				二次开发参考手册：<br/>
				http://doc.thinkphp.cn/<br/>
				http://jeasyui.com/documentation/<br/>
			</div>

			<div title="支付宝捐赠" collapsible="true" style="padding:8px;line-height:1.8">
				<img src="/Public/static/img/alipay.jpg"  alt="捐赠我们" height="185" /><br />
				<b style="margin-left:24px">用手机扫描二位码支付</b><br />
			</div>
		</div>
	</div>

</div>