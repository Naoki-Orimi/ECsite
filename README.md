## 本プロジェクトに関して

簡易型 ECサイト

登録した商品を購入→決済→発送まで行えるようにする。

会員制にする.


## 開発の際には
npm run dev でVITEを起動して、自動ビルドし、
php artisan serve でブラウザ起動する。
その後はファイル変更を保存するだけで自動でブラウザに更新がかかる。
## アピール機能
- ログイン機能
- ユーザー登録
- 商品登録
- デザイン（bladeとTailwindCssを使っていく）


## ログイン機能
- Laravel Breeze
  - ログイン、登録、パスワードのリセット、電子メール検証、パスワード確認を含む、Laravel のすべての認証機能の最小限でシンプルな実装を可能とする

```
composer require laravel/breeze --dev

php artisan breeze:install react
```
