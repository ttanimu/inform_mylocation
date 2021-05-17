# inform_mylocation
Send the location from Android app and view it on web browser.

自分の位置情報をサーバに通知するAndroidアプリケーションとその情報を見るウェブアプリケーション。

---

## Preparation of server
Copy all files in "/server/var/www/html/mylocation/" directory to "/var/www/html/mylocation/" directory on the server and adjust their permissions.

## Preparation of Android application
Choice "android4.4/"(for Android 4.4) or "android5/"(for Android 5).
Open "sendmylocation" on its directory as project by [Android Studio].
Replace the string "<server name>" to server name(or IP address) made on the previous section(you can't use "http:" because of Android security).
Build APK file.
Install its APK to Android device.
Allow the getting location permission to its app manually by [Setting] app on Android device.

## How to use
When you start the app on the previous section, it send its location to the server.
You can browse it by opening the following URL.
<pre>
http://&lt;server name&gt;/mylocation/
</pre>

---

## サーバの準備
標準的には"/server/var/www/html/mylocation/"ディレクトリ内のファイルをサーバの"/var/www/html/mylocation/"ディレクトリにコピーし、パーミッションを整える。

## Androidアプリケーションの準備
"android4.4/"(Android 4.4向け)か"android5/"(Android 5向け)のどちらかを選び、
その下の"sendmylocation"をAndroid Studioでプロジェクトとして開く。
"<server name>"を先に準備したサーバのサーバ名(またはIPアドレス)に置き換える
(Android側のセキュリティ設定のため"http:"は使えない)。
apkファイルをビルドする。
そのapkファイルをAndroidデバイスにインストールする。
Androidデバイスの[設定]アプリケーションでインストールしたアプリケーションに位置情報取得の権限を手動で許可する。

## 使い方
前節でインストールしたアプリケーションを起動していると位置情報をサーバに送信するので、
ウェブブラウザで以下のURLを開いて地図で確認できる。
<pre>
http://&lt;サーバ名&gt;/mylocation/
</pre>
