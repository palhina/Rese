# 飲食店予約サービス Rese

## アプリケーション名  
**Rese(リーズ)**

### ①新規会員登録ページ  
正しく情報を入力し「会員登録」ボタンを押下すると、②のサンクスページに遷移します。  
バリデーションルールは以下の通りです。(名前、メールアドレス、パスワードはいずれも必須項目)  
+ 名前：191文字以内、文字列型。  
+ メールアドレス：191文字以内、文字列型（メールアドレス形式）。既に登録されているメールアドレスとの重複不可。  
+ パスワード：8文字以上191文字以内、文字列型。パスワードと確認用パスワードは同一のものが入力されていること。  
![一般ユーザー新規作成](https://github.com/palhina/Rese/assets/129643430/98751520-ea55-4d18-8926-9a610b91196d)
   
### ②サンクスページ(会員登録後)  
①の画面で正しく会員登録が完了すると、この画面が表示されます。  
「ログインする」ボタン押下で③のログインページへ遷移します。  
※画像追加！！  
  
### ③ログインページ  
②で「ログインする」を押すか、あるいはハンバーガーメニュー「Login」押下で表示されます。
登録した情報を正しく入力し「ログイン」ボタンを押下すると、⑤の飲食店一覧画面が表示されます。  
バリデーションルールは新規会員登録時と同じです。  
![一般ユーザーログイン](https://github.com/palhina/Rese/assets/129643430/25276e7c-9f93-4e19-b6f6-137072b378db)  
  
### ④ハンバーガーメニュー(未ログイン)  
ログインしていない状態で画面左上ハンバーガーメニューを押下すると、以下の画面が表示されます。 
「HOME」押下で⑤の飲食店一覧画面、「Registration」押下で①の新規会員登録画面、「Login」押下で③のログインページ、「Login(二段階認証機能使用)」押下でログインページ(二段階認証機能)、「店舗代表の方」押下で店舗代表者ログインページ、「管理メニュー」押下で管理者ログインページへそれぞれ遷移します。  
![ハンバーガーメニュー(未ログイン)](https://github.com/palhina/Rese/assets/129643430/34a21a10-e531-49d4-9522-22d2198f4048)  

### ⑤飲食店一覧ページ  
ログインしている場合は、店舗がお気に入り登録されている際にハートマークが赤く表示されます。  
赤いハートマークを押下すると灰色表示に変化し、お気に入りから削除されます。また、灰色のハートマーク押下で赤表示に変化し、お気に入り登録されます。    
未ログイン時はハートマークはすべて灰色表示となり、押下すると③のログインページへ遷移します。  
右上の検索バーに地域、ジャンル、飲食店名を入力し「Search」ボタン押下すると検索が可能です。  
「詳しく見る」ボタン押下で⑥の飲食店詳細ページへ遷移します。  
![HOME](https://github.com/palhina/Rese/assets/129643430/575aa906-b7e3-4e4d-bf59-cc52bf47f584)  

### ⑥飲食店詳細・新規予約ページ  
右側のメニューから、表示店舗の新規予約が可能です。
バリデーションルールは以下の通りです。  
+ 予約日：必須、明日以降。  
+ 予約時間、予約人数：選択必須。  
入力に応じて、フォーム下部に入力内容が反映されます。
「予約する」押下で正しく予約が完了すると、⑦のサンクスページへ遷移します。  
店舗名左にある「＜」ボタン押下で、⑤の飲食店一覧ページに戻ります。
![飲食店予約追加](https://github.com/palhina/Rese/assets/129643430/4697f689-1f9e-4e90-933d-ae9bff80c9ee)  
  
### ⑦サンクスページ(予約完了)  
正しく予約が完了すると、表示されるページです。 
「戻る」ボタン押下で⑤の飲食店一覧ページが表示されます。  
![サンクスページ（予約完了）](https://github.com/palhina/Rese/assets/129643430/a144145b-445b-4a70-aacf-bcb8acd92433)  

### ⑧ハンバーガーメニュー(一般ユーザーログイン)  
一般ユーザーとしてログイン時、左上のハンバーガーメニューを押すと表示されます。  
「HOME」押下で⑤の飲食店一覧ページ、「Mypage」押下で⑨のマイページへ遷移します。また、「Logout」押下で一般ユーザー権限からログアウトします。  
![ハンバーガーメニュー(一般ユーザーログイン)](https://github.com/palhina/Rese/assets/129643430/9b8ff2ff-afe2-4252-8ddc-4e9f3e009ad0)  

### ⑨マイページ  
左にはログイン中ユーザーが行った予約一覧が表示されます。
それぞれの予約右上の「×」ボタン押下で予約削除が可能です。  
「予約変更」ボタン押下で⑩の予約変更ページへ遷移します。  
また、予約日翌日以降に「店を評価する」ボタンが表示されるようになり、押下で⑪の評価ページへ遷移します。
右側には、ログイン中ユーザーがお気に入り登録している店舗一覧が表示されます。  
「詳しく見る」ボタン押下で⑥の飲食店詳細ページへ遷移します。  
また、赤いハートマークを押下するとお気に入りから消去され、画面に表示されなくなります。  
![マイページ](https://github.com/palhina/Rese/assets/129643430/cbd519c7-40b4-4921-876b-5d6ad53fff65)  

### ⑩予約変更ページ  
画面右フォームより、予約内容の変更ができます。  
バリデーションルールは⑥の飲食店新規予約時と同様です。  
![飲食店予約変更](https://github.com/palhina/Rese/assets/129643430/8afb1483-6d8a-478d-acbb-a8216680d39d)  

### ⑪評価ページ  
星1～5、およびコメントで店を評価することができます。  
バリデーションルールは以下の通りです。  
+ 5段階評価：必須。  
+ コメント：入力任意、1000文字以内、文字列型。    
「評価を送信」ボタンで⑫のサンクスページ(飲食店評価後)へ遷移します。
![飲食店評価](https://github.com/palhina/Rese/assets/129643430/f106ed50-7992-4746-a24f-05de97c69976)

### ⑫サンクスページ(飲食店評価後)  
正しく評価が送信されると表示されます。  
「戻る」ボタン押下で飲食店一覧ページへ遷移します。  
![サンクスページ（飲食店評価後）](https://github.com/palhina/Rese/assets/129643430/eccc6c16-6bd1-4c82-bbf0-f343f057ec34)  
  
### ⑬二段階認証ページ  
未ログイン時、ハンバーガーメニューの「Login(二段階認証機能使用)」押下で表示されます。  
ログイン情報入力が正しい場合、登録したメールアドレスに⑭のように認証メールが送信されます。    
認証メール送信後、画面は自動的に⑮二段階認証(メール送信後)に変化します。  
![一般ユーザーログイン(二段階認証機能使用)](https://github.com/palhina/Rese/assets/129643430/04c6a6cf-5fa0-40ed-80fa-43ac9d802efb)  

### ⑭認証メール画面  
二段階認証時、登録されたメールアドレスに送信されるメール画面です。  
なお、画像はMailtrapを使用し表示したものであり、実際のメール画面とは異なることがあります。  
![二段階認証メール](https://github.com/palhina/Rese/assets/129643430/8607d624-ecbf-4945-8a47-aa021ed2695f)  

### ⑮二段階認証ページ(メール送信後)  
⑭の認証メールにある4桁の数字を正しく入力することで認証は完了し、ログインされ店舗一覧画面が表示されます。  
![一般ユーザーログイン（二段階認証：メール送信後）](https://github.com/palhina/Rese/assets/129643430/a2203134-b152-454d-bd19-60aa9571823b)
  
### ⑯管理者ログインページ  
正しく入力するとログインされ、店舗代表者新規作成ページへ遷移します。  
![管理者ログイン](https://github.com/palhina/Rese/assets/129643430/7013fc16-c0b0-42a4-8cde-4a8f06bc5e60)  

### ⑰管理者新規作成ページ  
便宜上作成しております。バリデーションルールは一般ユーザー作成時と同じです。  
ローカル環境では、/localhost/register/adminで表示可能です。  
画像のせる！！  
  
### ⑱ハンバーガーメニュー(管理者ログイン)  
管理者としてログイン中に表示されるハンバーガーメニューです。  
「店舗代表者作成」で⑲の店舗代表者新規作成画面へ遷移し、「Logout」押下で管理者権限からログアウトします。  
![ハンバーガーメニュー(管理者ログイン)](https://github.com/palhina/Rese/assets/129643430/0ca3822a-9c0e-40a0-ae9c-39395b3ec8dd)  

### ⑲店舗代表者新規作成ページ
バリデーションルールは一般ユーザー作成時と同様です。  
![店舗代表者作成](https://github.com/palhina/Rese/assets/129643430/7cc0e592-bbeb-4931-b38e-87cd1868fd1a)　　

### ⑳店舗代表者ログインページ  
正しく入力するとログインされ、㉑の店舗代表者メニューへ遷移します。  
![店舗代表者ログイン](https://github.com/palhina/Rese/assets/129643430/493a59c6-21fa-4359-ae13-43bc07021ef7)  

### ㉑店舗代表者メニューページ  
「店舗情報の新規作成・更新画面」ボタン押下で㉒の店舗情報ページ、「予約確認」押下で㉕予約一覧画面が表示されます。    
![店舗代表者メニュー](https://github.com/palhina/Rese/assets/129643430/8e38915a-da9b-435d-ba94-c95ce42b2ee7)  
  
### ㉒店舗情報作成・更新ページ
ログイン中の店舗代表者が作成した店舗一覧が表示されます。  
右上の「店舗の新規作成」ボタン押下で、㉓店舗作成ページへ遷移します。  
「店舗情報更新」ボタン押下で、㉔店舗情報更新ページへ遷移します。  
![店舗情報作成・更新](https://github.com/palhina/Rese/assets/129643430/15d08d73-306b-4be6-9edf-bdecac96e73c)  

### ㉓店舗情報新規作成ページ  
作成中

### ㉔店舗情報更新ページ  
ページ右側のフォームから、店舗情報の更新ができます。  
バリデーションルールは以下の通りです。  
+ 店名：入力必須、100文字以下、文字列型。  
+ 地域・ジャンル：選択必須。
+ 店舗概要：入力必須、1000文字以内、文字列型。  
![店舗情報更新](https://github.com/palhina/Rese/assets/129643430/d28d4d50-0171-4c76-a109-524011f673d3)  

### ㉕予約一覧ページ  
ログイン中店舗代表者が作成した店舗一覧と、該当店舗の予約一覧が表示されます。  
「予約詳細」ボタン押下で、㉖予約詳細ページへ遷移します。  
![予約確認](https://github.com/palhina/Rese/assets/129643430/b27fc642-9bad-4ee1-bd0e-ff1a1e46978a)  

### ㉖予約詳細ページ  
該当予約の詳細が表示されます。  
「戻る」ボタン押下で㉕予約一覧ページへ遷移します。  
![予約詳細](https://github.com/palhina/Rese/assets/129643430/f5d9c938-7585-4912-b553-fa825037e427)  

### ㉗ハンバーガーメニュー(店舗代表者ログイン)
店舗代表者としてログイン中に表示されるハンバーガーメニューです。  
「店舗情報作成・更新」ボタンで㉒の店舗情報作成・更新ページへ遷移し、「予約確認」ボタンで㉕予約一覧ページへ遷移します。また、「Logout」押下で店舗代表者権限からログアウトします。 
![ハンバーガーメニュー(店舗代表者ログイン)](https://github.com/palhina/Rese/assets/129643430/8e8a394b-6819-4eb1-850a-dd2809a1e00f)  

  
## 作成した目的  
ある企業の人事評価のため、勤怠管理を行う  

## アプリケーションURL  
GithubURL：https://github.com/palhina/Atte.git  
http://atte-aws-app.xyz (別途設定が必要です：追記部分に後述)  

## ほかのレポジトリ  
今回はなし  

## 機能一覧  
新規会員登録  
ログイン機能  
メールによる二段階認証  
打刻（出勤開始・終了、休憩開始・終了）  
日付毎の(ユーザー全員の)勤怠履歴表示  
ユーザー一覧表示  
ユーザー毎の勤怠履歴表示    

## 使用技術(実行環境)  
Docker version 24.0.5  
Laravel 8.83.27  
認証機能はFortify使用  
Nginx 1.21.1  
MySQL 8.0.32  
PHP 8.1.2  
Composer 2.2.6  
MailHog  

## テーブル設計  
![テーブル仕様書](https://github.com/palhina/Atte/assets/129643430/a50519bd-6862-478f-aed5-b1362fcc23e0) 
 
## ER図  
![ER図](https://github.com/palhina/Atte/assets/129643430/0b810ea9-2b7e-49b2-96b7-6a49dc3bfec7)


## 環境構築  

* インストール手順

１．プロジェクトを保存したいディレクトリに移動し、その後Githubからリポジトリをクローンします：

        $git clone https://github.com/palhina/Atte.git
        
その後リポジトリのディレクトリに移動します：

        $cd Atte

２．Dockerを使用し、アプリケーションを起動します：
	
         $docker-compose up -d --build

３．Laravelのパッケージをインストールするために、phpコンテナ内にログインします：
	
          $ docker-compose exec php bash

４．コンテナ内でComposerをインストールします：
	
         $composer install

５．”.env”ファイルを作成し、データベース名、ユーザ名、パスワードなどの必要な環境変数を設定します：
	
         $cp .env.example .env

その後“.env”ファイルを編集し、必要な設定を追加、編集します。

６．アプリケーションキーを作成します：

        $php artisan key:generate

７．データベースのマイグレーションを実行します：

        $php artisan migrate
	
８．必要に応じて、ダミーデータの作成を行ってください：

        $php artisan db:seed

  
* アプリケーションはデフォルトで http://localhost:8000 でアクセスできます。

* MySQLはデフォルトで http://localhost:8080 でアクセスできます。

* ２段階認証において、テストメールの確認にMailHogを使用しています。デフォルトで http://localhost:8025 でアクセスできます。

* エラーが発生する場合、$ sudo chmod -R 777 *コマンドにて権限変更を行ってみてください。  

## 追記  
**日付をまたいだ場合の挙動について**
* 24時時点で勤務中の場合  
  当日23:59:59に勤務終了し、翌日00:00:00に勤務開始したと記録されます。  
  （翌日に「休憩開始」または「勤務終了」ボタンを押した時点で動作） 
* 24時時点で休憩中の場合  
  当日23:59:59に休憩終了・勤務終了し、翌日00:00:00に勤務開始・休憩開始したと記録されます。  
  （翌日に「休憩終了」ボタンを押した時点で動作）

**ダミーデータについて**  
* ユーザーデータ(パスワードはいずれも「1234567890」)  
 テスト太郎(メールアドレス、以下同様：111@mail.com)、テスト次郎(222@mail.com)、テスト三郎(333@mail.com)、テスト四郎(444@mail.com)、テスト五郎(555@mail.com)、テスト六郎(666@mail.com)を作成しています。  
* 出退勤記録  
  それぞれのユーザーについて、2021年11月1日の出勤・休憩記録を作成しています。  
* 初回ログイン時は二段階認証が必要になります。  

**AWS接続,ブラウザ上での閲覧について**  
以下の設定により、ブラウザ上でアプリケーションを閲覧することが可能です(HTTP接続のみ)。  
1. IAMユーザーでログイン  
  ユーザー名：study（権限：administration）アカウントID：973518952750、パスワード：dYfX58MBでログインしてください  
2. EC2インスタンス(atte-aws-app)とRDSインスタンス(atte-aws-app-db)を開始してください  
3. それぞれが正常に起動したことを確認し、EC2インスタンスのパブリックIPv4アドレス、あるいはパブリックIPv4DNSをブラウザに入力してください。  
4. URL (http://atte-aws-app.xyz) からアクセスする場合は、ElasticIPアドレスを発行しEC2インスタンスに紐づけた後、Route53のレコード名：atte-aws-app.xyzレコードタイプ：Aの値をElasticIPの値に変更してください。


**開発環境と本番環境について**
* 上記、EC2インスタンス(atte-aws-app)とRDSインスタンス(atte-aws-app-db)は開発環境を想定し大阪リージョンに作成しております。  
* 本番環境を想定したものは、開発環境と異なるVPC(atte-launch-vpc)およびリージョン(東京)で作成しております。EC2インスタンス名：atte-launch、RDSインスタンス名：atte-launch-dbとして作成しました。  
# Rese
