# thinkphp6_0-ide-helper

新版的thinkphp6.0 对IDE不是很友好，这里把相关的门面类(包括Db类)整理成一个IDE助手文件。
是把相关类的public function 全部整理到一起，让IDE起到自动完成和代码提示的作用。
官方可能会在后续版本进行更新，所以这个只是一个临时的解决方法，没有对方法进行筛选。

thinkphp6.0 在IDE中的自动完成、代码提示助手。
## IDE助手
将文件`_ide_helper.php` 放到项目根目录中即可生效，效果如下。

门面类提示：

![提示](https://github.com/liuwave/thinkphp6_0-ide-helper/blob/master/static/images/1.png?raw=true)




模型提示：

![提示](https://github.com/liuwave/thinkphp6_0-ide-helper/blob/master/static/images/3.png?raw=true)

Db类提示：

![提示](https://github.com/liuwave/thinkphp6_0-ide-helper/blob/master/static/images/4.png?raw=true)


## 模型IDE助手

部分模型方法(inc、dec)不能提示，需要按以下方法处理。

需要在 `\vendor\topthink\think-orm\src\Model.php` 类注释末尾中添加以下内容：
```php

 * @mixin \think\db\Query
 * @method \think\db\Query inc(string $field, float $step = 1) static 字段值增长
 * @method \think\db\Query dec(string $field, float $step = 1) static 字段值减少
 * @method \think\db\Query where($field, $op = null, $condition = null) static 指定AND查询条件

```

