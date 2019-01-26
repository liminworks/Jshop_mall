# Jshop小程序商城


#### 项目介绍
Jshop小程序商城，是一款开源的电商系统，为中小企业提供移动电子商务解决方案。后台采用Thinkphp5.1框架开发，执行效率、扩展性、稳定性值得信赖，前台H5采用VUE开发，增加用户体验。

#### 关于开源
这不是一款免费的系统，商用记得授权哦，当然了，我们目前也不会强制授权，代码没有任何限制。

之所以不彻底免费，一方面是可以让我们有持续维护下去的动力和资源，另外一方面也是不想让您有后顾之忧，避免后期尴尬。

我们的团队水平有限，没有大牛，只有菜鸟，我们也是在探索中学习，在改进。之所以开源，就是为了方便大家，也是为了提升下该项目的质量，我们相信有您的参与，可以使我们的系统更加完善和健壮。

#### 功能介绍

 + 商品管理，单规格、多规格商品管理，品牌、分类管理、商品评价
 + 订单管理，订单支付、发货、取消、售后等
 + 会员管理，会员列表，消息管理等
 + 运营管理，广告管理、文章管理
 + 微信管理，小程序管理、微信公众号管理、模板列表、公众号菜单管理
 + 促销管理，商品促销、订单促销、优惠券、团购秒杀
 + 财务管理，支付单、退款单管理、提现管理、账户资金管理
 + 控制面板，计划任务、插件、图片、地区、消息、店铺配置、支付方式、配送方式、物流公司管理。信任登录插件、阿里云OSS插件、阿里云短信插件、微信消息模板插件、分销功能
 + 门店管理，门店列表。门店核销、店员管理、提货单管理。

#### H5端说明
H5端采用Vue开发，数据和页面分离，可以使前端页面访问效果更好，封装APP时体验效果也更好。H5端可以放在任意地方，比如单独服务器、电脑桌面、PAD、手机、广告机等，没有任何约束。


#### 项目演示
- 前台H5演示：[https://b2c.jihainet.com/](https://b2c.jihainet.com/)
- 后台演示：[https://b2c.jihainet.com/manage/](https://b2c.jihainet.com/manage/)
- QQ交流群：823732583（开发手册、接口文档、操作手册请进群查看哦~）
- 交流社区：[https://bbs.jihainet.com/](https://bbs.jihainet.com/)
- 小程序体验二维码

![输入图片说明](https://images.gitee.com/uploads/images/2018/1018/184408_a1c0d706_8503.jpeg "gh_03bc4364b4dc_344.jpg")

- 安卓APP体验二维码

![输入图片说明](https://images.gitee.com/uploads/images/2018/1026/163026_31132341_8503.png "1540542519.png")



#### 项目截图
![输入图片说明](https://images.gitee.com/uploads/images/2018/1019/104933_383a7831_8503.png "img(1).png")
#### 后台截图
![输入图片说明](https://images.gitee.com/uploads/images/2018/1019/104952_d154e8b4_8503.png "首页.png")
![输入图片说明](https://images.gitee.com/uploads/images/2018/1019/105206_a2dfa9e2_8503.png "商品列表.png")
![输入图片说明](https://images.gitee.com/uploads/images/2018/1019/105222_7caa99b6_8503.png "添加商品.png")
![输入图片说明](https://images.gitee.com/uploads/images/2018/1019/105317_82da6a34_8503.png "添加优惠券.png")


#### 目录结构
初始的目录结构如下：
~~~
wwwroot  WEB部署目录（或者子目录）
├─addons                应用插件目录
├─application           应用目录
│  ├─api                api接口模块目录
│  ├─b2c                前台模块
│  ├─common             公共模块目录
│  ├─crontab            定时任务目录
│  ├─job                任务队列目录
│  ├─manage             后台管理目录
│  ├─wechat             接收微信消息目录
│  ├─command.php        命令行工具配置文件
│  ├─common.php         公共函数文件
│  ├─tags.php           应用行为扩展定义文件
│
├─config                配置文件目录
├─h5                    前台H5源码
├─public                WEB目录（对外访问目录）
│  ├─install            自动安装目录
│  ├─static             前台静态文件
│  ├─wap                前台手机端运行目录
│  ├─index.php          入口文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              thinkphp框架系统目录
├─update                版本升级包
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─wechat_app            微信小程序源码
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
├─crontab               定时任务命令行入口文件
~~~

#### 更新说明

2019-01-26 V1.1.2
1. 修复后台顶部个人中心按钮无法点击的bug
2. 修复H5端订单列表页滚动加载的bug
3. 增加阿里云短信插件给卖家发送短信
4. 修复H5端商品详情评论加载bug
5. 修复H5端登陆密码次数过多，输入验证码bug
6. 修复提货单鱼添加商品分类bug
7. 增加用户提现服务费
8. 修复商品促销bug，指定商品条件的时候，只有一个商品生效，后面的不生效的问题
9. 修复指定分类时的bug
10. 增加订单导出
11. 增加统计报表功能，财务收款，收款单、订单收款、订单退款、充值单以及提现的统计，增加商品销量排行的统计，增加订单销量的统计
12. 我已领优惠券可用状态bug修复
13. 后台列表时间段搜索分隔符统一调整，”~“统一成”到“
14. 优化接口返回空列表的时候，状态位false的问题，空列表有额是true
15. 小程序增加广告url打开页面功能，在微信公众平台指定业务域名之后，可以直接跳转到网页了
16. 后台首页优化操作日志列表，增加”更多“按钮
17. 广告，广告位控制器名称修改，再也不会让浏览器插件屏蔽了
18. 后台各种弹出页面的样式优化
19. 后台需要时间段搜索的一些页面，增加上时间段搜索，使后台表单搜索更友好，功能更强大
20. 后台用户列表积分和余额细节优化
21. 定时任务增加url触发方式，使定时任务执行更灵活，可使用我们的taskPHP方式，现在也可自己配置crontab或计划任务来执行
22. 修复小程序端退换货时快递公司不能输入的bug
23. 修复后台退款单退款方式保存表的bug
24. 优化售后流程，在小程序端订单详情可以查看所对应的售后单了
25. 后台增加操作日志导出
26. 修复添加商品创建时间（ctime）为空的bug
27. 在后台，图片管理的地方，增加图片删除的功能
28. 小程序端商品分类接口优化，只需要一次请求就可以了，切换分类不会再此请求
29. 后台商品批量导入功能优化
30. 后台列表页面优化，高度调整统一
31. 小程序端，优化搜索框、用户邀请和用户提现页面
32. 后台促销列表增加启用/禁用按钮
33. 页面的一些细节调整和优化


2019-01-10 新年好，jshop给大家拜年了。
1. 商品详情页显示购物车数量
2. h5端文章列表页优化，文章分类接口优化，修复排序不生效的问题
3. 微信支付增加二维码扫码支付功能（单纯接口上支持，为PC端微信扫码支付做准备）
4. 支付宝增加PC端支付的功能（单纯接口上支持，为PC端功能做准备）
5. 支付回调优化，增加回调价格校验，增强安全性
6. 后台上传图片bug修复
7. 后台用户列表优化，增加会员导入功能
8. 首页优惠券样式修改
9. 修复小程序端微信地址取过来之后，没有判断默认地址的bug
10. H5端微信分享添加图片
11. 小程序端图片的模式添加，保证图片不拉伸扭曲和变形
12. 商品分类优化
13. 后台新建商品的时候商品编码和货品编码为空的时候没有自动生成的bug
14. 后台订单页面，订单详情页面优化
15. 后台退款单增加单号查询
16. 修复生成订单的时候，商品成本价没有保存到订单详情的bug
17. 统一了店铺配置接口，小程序端和H5端统一用此接口获取店铺配置信息
18. H5端团购秒杀详情页微信分享
19. H5端优惠券列表页面优化
20. 小程序端优惠券列表页面优化
21. 商品列表接口增加商品编码查询功能（可以通过商品编码查询到商品，为首页扫一扫做准备）
22. H5端登陆流程优化，需要token的接口会在请求前拦截并跳转到登陆页面
23. 小程序端商品列表排序优化，感谢QQ群网友@General提供的建议
24. 商品详情页分享功能优化，修复微信分享二维码不出来的bug


2018-12-29 更新内容。更新请先备份数据库。本次更新后，以后版本为不定时更新。
1. 商品详情页增加返回首页操作
2. 购物车显示效果优化
3. 订单详情优化
4. 优化小程序评价评分
5. H5微信jsapi支付修复
6. 商品评价后台显示样式优化
7. 修复未登录生成海报昵称为null问题
8. 微信授权登录增加判断是否微信浏览器
9. 优化个人信息填写
10. 小程序收货地址校检手机号信息
11. 邀请优化
12. 优化unionid登录
13. 促销商品数量bug修复
14. 小程序页面样式优化
15. 创建订单接口bug修复
16. 修复后台添加用户头像问题
17. 导出优化。
18. 库存问题修复
19. 购物车增加店铺名显示
20. 小程序端登录优化
21. 优惠券接口优化
22. 修复提货单店铺名称问题
23. 修复支付单接口查看bug
24. 支付单表优化字段
25. 库存单位优化
26. 优化商品参数显示
27. 增加店员所属门店筛选
28. 更改管理员控制器名称
29. 小程序会员中心订单小标状态优化
30. 小程序充值优化
31. 修复H5购物车点击结算bug

2018-12-21 更新内容
1. 优化后台首页导航菜单
2. 短信验证码优化
3. H5用户收藏优化
4. 商品库存机制优化
5. 小程序物流信息详情页面优化
6. 商品分享出现空白页面问题修复
7. 返利增加直推和次推对自己返利的检查
8. 修复订单自动完成bug
9. 优化售后问题
10. 优化后台订单支付时订单列表问题
11. 模板消息调整，完善发货提醒消息模板
12. 小程序支付页面优化
13. 修复促销订单金额为负数的bug
14. 修复销量问题
15. 警戒库存优化，调整为只要货品库存小于警戒库存设置即提醒
16. 余额明细增加筛选
17. 订单返积分bug修复
18. 修复小程序浏览记录移除bug
19. 优化小程序登录时事件点击问题
20. 优化小程序首次选择地址回调价格计算问题
21. 优化订单倒计时
22. 优化商品促销时购物车未选择价格变动的问题
23. 增加卖家短信提醒
24. 小程序商品详情页增加快捷方式，方便返回首页和详情页
非常感谢Black~wizard好友的意见和建议

2018-12-14 更新内容
1. 修复默认情况下，安装后无法上传图片报错
2. 修复IOS端微信JSAPI支付报错
3. 修复添加门店地图错误
4. 物流信息查询修复
5. 修复getshell漏洞
6. 修复PHP7.2环境下错误问题
7. 修复添加和编辑配送方式错误
8. 增加操作日志
9. 修复默认货品问题
10. 修复库存问题
11. 团购秒杀增加浏览记录
12. 优化图文编辑
13. 修复编辑公告报错问题
14. 品牌logo优化，改为不是必填项
15. 修复优惠券导出报错
16. 修复分享和文章分类问题
17. 增加默认图设置、平台名称设置
18. 增加清除缓存功能
19. 优化添加银行卡提示语
20. 多规格优化
21. H5商品详情页评论图片增加点击放大
22. H5购物车闪烁问题优化
23. H5售后上传图片样式调整
24. 修复H5特殊情况下无法返回问题
25. 增加后台提现服务费率设置，H5已调整，小程序下次调整
26. 模板消息优化【需要配置定时任务，订单发货通知须下次更新】

2018-12-7 更新内容。请先备份数据库。本次属于重大更新，一定要更新哦~

1. 修复H5门店bug
2. 修复微信菜单问题
3. 修复签到日期和签到bug以及兼容性问题
4. 修复数据库兼容性问题
5. 修复订单积分
6. 下单流程bug修复
7. H5微信第三方绑定修复
8. H5提货单核销功能
9. 首页团购秒杀价格问题修复
10. 新增微信消息功能
11. H5增加团购秒杀
12. 提货单优化调整
13. 修复oss域名配置问题
14. 修复店铺设置店铺分类图片不显示问题
15. 小程序. H5增加余额支付. 退款功能
16. 增加后台添加会员. 编辑会员. 修改余额. 余额明细功能
17. 修复多个商品使用优惠券样式问题
18. 优化公众号配置
19. 商品主图增加拖拽排序
20. layui样式升级至2.4.5
21. 修复地区问题
22. 修复微信支付成功不提示问题
23. 优化配送方式选择地区
24. 接口修复XSS跨站脚本攻击问题
25. 小程序增加充值功能
26. 修复售后退货退款bug
27. 修复后台订单发货买家备注
28. 修复评价和订单描述
29. H5修复微信分享二维码位置bug
30. 订单列表增加售后状态

#### 环境要求
- Nginx/Apache/IIS
- PHP5.6+
- MySQL5.5+

建议使用环境：Linux + Nginx1.14 + PHP7 + MySQL5.6

#### 部署说明

[安装部署](https://gitee.com/hnjihai/jshop_mall/wikis/%E5%AE%89%E8%A3%85%E9%83%A8%E7%BD%B2?sort_id=881805)

#### nginx 伪静态配置
~~~
    location / {
        if (!-e $request_filename){
            rewrite  ^(.*)$  /index.php?s=$1  last;   break;
        }
    }
~~~
#### 安全&缺陷
如果你发现了一个安全漏洞或缺陷，请发送邮件到 jima@jihainet.com。所有的安全漏洞都将及时得到解决。


#### License

Jshop小程序商城遵循JPPL（吉海科技Jshop系列付费产品许可）协议。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2018 by 吉海科技 (https://www.jihainet.com)

All rights reserved。

吉海科技Jshop系列付费产品许可协议详情请参阅 [LICENSE.txt](LICENSE.txt)