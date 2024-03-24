# Laravel 学習用簡易環境

## 必要なもの

- Docker
  - `docker` グループに、実行するユーザーを追加する必要があります。（例： `sudo usermod -aG docker {{あなたのユーザー名}}`
- Docker Compose

## インストール

1. このリポジトリをクローン（`git clone`）します。
2. クローンしたディレクトリに入って（`cd example-app`）、以下のコマンドを実行します。
  1. `./sail up -d`
  2. `./sail artisan migrate`

## 操作

`./sail` コマンドは、 [sail](https://readouble.com/laravel/11.x/ja/sail.html) へのショートカットになっています。

### サーバーを起動する

```sh
./sail up -d
```

### サーバーを停止する

```sh
./sail down
```

### [artisan](https://readouble.com/laravel/11.x/ja/artisan.html) コマンドを実行する

以下はコントローラーを新規作成する場合の例です。

```sh
./sail artisan make:controller MyController
```

## アクセス方法

### Webページへのアクセス

http://localhost

### MySQLへのアクセス

`.env` ファイルの `DB_HOST` などがMySQLに関する設定です。
デフォルトでは、以下の通りです。

- ホスト: `localhost`
- ポート番号: `3306`
- ユーザーID: `sail`
- パスワード: `password`
- データベース: `laravel`
