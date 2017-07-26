# 开发Laravel扩展教程

[![Build Status](https://travis-ci.org/jiezeal/hasher.svg?branch=master)](https://travis-ci.org/jiezeal/hasher)

### 用法
```
composer require jiezeal/hasher
```
或者在你的 `composer.json` 的require部分中添加：
```
"jiezeal/hasher": "~1.0.1"
```
下载完毕之后，直接配置 `config/app.php` 的providers:
```
Jiezeal\Hasher\MD5HasherProvider::class
```
