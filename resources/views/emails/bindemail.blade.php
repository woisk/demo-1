<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
<table background="http://picturepath" width="675px" height="570px" style="font-size:14px;margin:0 auto;">
    <tr><td style="padding:90px 64px 0px;font-size:16px">HI,{{$data['username']}}</td></tr>
    <tr><td style="padding:10px 64px 10px;font-size:14px">感谢你注册woisk.com。</td></tr>
    <tr><td style="padding:0px 64px;font-size:14px"> 请点击下面的链接验证您的帐号，完成绑定<br><a href="{{ URL('api/auth/email?token='.$data['token'])}}" target="_blank" style="cursor:pointer;text-decoration:none;color:#0082cb">{{ URL('api/auth/email?token='.$data['token']) }}</a><br>（如果点击链接没反应，请复制激活链接，粘贴到浏览器地址栏后访问）</td></tr>
    <tr><td style="padding:30px 64px 10px;color:#959393;font-size:14px">激活邮件48小时内有效，超过48小时请重新绑定。<br>激活邮件将在您激活一次后失效。</td></tr>
    <tr><td style="padding:30px 0px 10px 400px;font-size:14px">{{date('Y-m-d h:m:s')}}</td></tr>
    <tr><td style="padding:10px 60px 80px;border-top:1px solid #ededed;color:#959393;font-size:14px">如您错误的收到了此邮件，请不要点击验证按钮，该帐号将不会被绑定。<br/>这是一封系统自动发出的邮件，请不要直接回复，如您有任何疑问，请联系 <a href="#" style="color:#0082cb;cursor:pointer;text-decoration:none;">help@woisk.com</a></td></tr>
</table>
</body>
</html>
