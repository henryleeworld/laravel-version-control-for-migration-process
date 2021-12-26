# Laravel 8 遷移過程的版本控制

引入 dragon-code 的 laravel-migration-actions 套件來擴增遷移過程的版本控制，可以讓你的團隊輕易修改與共享應用程式的可操作架構。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate:actions__ 來執行所有遷移過程動作。
```sh
$ php artisan migrate:actions
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```

----

## 畫面截圖
![](https://i.imgur.com/byGcc0Z.png)
> 每個遷移過程動作的檔名會包含時間戳，可以讓 Laravel 確定遷移過程的順序