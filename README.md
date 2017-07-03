#### 要求

* composer方式组件管理

* psr2风格编码

* 支持php5.2+

* 由于php5.2 不支持composer，因此需要配合 xrstf/composer-php52 一块使用，具体composer.json配置如下：

```
        "require": {
            "xrstf/composer-php52": "1.*"
        },  
        "scripts": {
            "post-install-cmd": [
                "xrstf\\Composer52\\Generator::onPostInstallCmd"
            ],  
            "post-update-cmd": [
                "xrstf\\Composer52\\Generator::onPostInstallCmd"
            ],  
            "post-autoload-dump": [
                "xrstf\\Composer52\\Generator::onPostInstallCmd"
            ]   
        },
```

#### 实现功能点

* 支持restful 风格api调用

* app_id app_secret base_url 以及版本方便配置

* 支持对返回数据遍历和数组方式获取

* 各个服务进行封装，方便其他应用便捷使用

* 错误抛异常
