# 環境構築
1. 任意のディレクトリの作成しそのディレクトリに移動
2. curl -s "https://laravel.build/example-app?with=pgsql" | bashコマンドで雛形の作成(example-appの部分がlaravelディレクトリ名)
3. vi ~/.zshrcでvi開き今回はsailのalias設定しているのでartisan系のコマンドはsail artisanと打てばディレクトリ問題は解決している
4. sail artisan migrateでmigration通す
5. sail up -dでdocker起動できる（docker compose up -dでも同様）
6. sail downでコンテナの停止（docker compose downも同様）