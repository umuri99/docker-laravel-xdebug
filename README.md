### このリポジトリについて
このリポジトリではlaravel + docker + vscodeでxdebugを使用する環境構築をしました。


### 使い方
1. リポジトリをクローンする。
2. docker-compose.ymlがあるディレクトリで下記のコマンドを実行
<pre>
docker-compose up -d --build
</pre>

3. 下記のコマンドでphp-apacheのサービスコンテナに入る
<pre>
docker-compose exec php-apache bash
</pre>

4. サービスコンテナの中で下記のコマンド実行
<pre>
composer install
</pre>
5. サービスコンテナの中で下記のコマンドを使用してlaravelのマイグレーションファイル実行
<pre>
php artisan migrate:fresh --seed
</pre>

6. http://localhost:8080/にアクセスするとlaravelが動いてる


7. 下記のvscode拡張をインストール
https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug

8. .vscodeディレクトリにあるlaunch.jsonの下記の部分を修正。
例:"Dockerコンテナのドキュメントルート"："ホスト環境のドキュメントルートまでのフルパス"
<pre>
      "pathMappings": {
        "/var/www/laravel_docker": "/Users/private/Documents/programming/xdebug_tutorial/laravel_docker/src"
      },
</pre>

9. コントローラークラスにブレークポイントを適当に置いて。vscodeのサイドバーの「実行とデバッグ」を開いてから、リッスン開始ボタンを押してxdebug実行



### 参考

DockerとLaravelを使って開発してみよう
https://www.twilio.com/ja/blog/get-started-docker-laravel-jp

【Laravel】Docker環境にXdebug3を導入&VSCodeでデバッグ(M1対応)
https://yutaro-blog.net/2021/07/08/laravel-docker-xdebug-vscode/

php-apacheコンテナでphp.iniを使用する
https://pointsandlines.jp/server-side/php/docker-php-ini-enable

Docker 環境で xdebug を使う方法 - php.ini, Dockerfile, launch.json の設定
https://zenn.dev/aono/articles/40be14b1753897
