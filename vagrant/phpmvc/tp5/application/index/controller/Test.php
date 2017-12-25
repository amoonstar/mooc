<?php
namespace app\index\controller;

class Test
{
    public function index()
    {//http://tp5.imooc.test  //tp5.imooc.test/index.php/index/index  //http://tp5.imooc.test/index.php/index/index/test
        return '<title>我是测试的-i12345</title><style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5。hello world<br/><span style="font-size:30px">十年磨一剑 ttt - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    public function test(){
        //http://tp5.imooc.test/index.php/index/index/test
        //http://tp5.imooc.test/index/index/test
        //http://tp5.topzrt.com/index.php/index/Test/test
        //http://tp5.topzrt.com/index.php/home/Test/test
        return 'hello , boy11111222';
//        $dbhost = 'localhost:3306';  // mysql服务器主机地址
//        $dbuser = 'root';            // mysql用户名
//        $dbpass = '123456';          // mysql用户名密码
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//        if(! $conn )
//        {
//            die('Could not connect: ' . mysqli_error());
//        }
//        echo '数据库连接成功！';
//        mysqli_close($conn);
    }
    public function info($id){
        //http://tp5.topzrt.com/index.php/index/Test/info
        echo url('Index/Test/info',['id'=>17]).'<br/>';
//        return "{$id}";
        return $id;
    }
}
