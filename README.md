# Laravel 学習用簡易環境

## 必要なもの

- Docker
  - `docker` グループに、実行するユーザーを追加する必要があります。（例： `sudo usermod -aG docker {{あなたのユーザー名}}`
- Docker Compose

## インストール

1. [11.x インストール](https://readouble.com/laravel/11.x/ja/installation.html) に従って、sailをインストールします。
2. 別のディレクトリにこのリポジトリをクローン（`git clone`）します。
3. 1. で作成されたディレクトリに、クローンしたディレクトリを上書きします。
4. `sail` に実行の権限を与えます。 （例： `chmod u+x sail`）
5. `./sail up -d` でサーバーを起動します。
6. `./sail artisan migrate` でデータベースの初期データを設定します。

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
