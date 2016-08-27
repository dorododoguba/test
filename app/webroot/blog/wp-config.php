<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'pma');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'aa090113');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aGV2o{b lp}0s}gP>AsN]U1~`eupiuCWVQI=U#oz{U%LOdKPmTmzj8wc2DnXCVk)');
define('SECURE_AUTH_KEY',  'YIK%Tet<Nc~dws)PB5yEn7Tbc0]#KbVzp#/=7tjtY*6)|a61PzG5}GZB>K$=m~x`');
define('LOGGED_IN_KEY',    'E}bcdKW3^SI!EP<c-9^GZ~gNysA=1x=<`H%s#!04{eSjEYjpUyvQ~Q0},_i9]SQh');
define('NONCE_KEY',        'Uq~{GQoF/GZ]Y~CS>a!EmMbo t2,J[?3%^wo^)cm%xRxQ+a0(jJau*gh/f,fXh%=');
define('AUTH_SALT',        'O9J]8:2<%r%3g&5<1F,Vm[wg,&}BK7F.OsaA8[dS8m2{YktQ-j% Z)Jh1&C%Gf>0');
define('SECURE_AUTH_SALT', 'TDdUSK~*ixsTANN1z)6gvA2ai$Ss655]EDf9-F@4P5FW6Brf78mIgN_q_T5Xr$0V');
define('LOGGED_IN_SALT',   '*0j2cAzq#Sf39N&3JD.NgkfSaNS@NT%o@+v9zZ*~v>A)iUG+{CjQ6$$J$B.Z4XYq');
define('NONCE_SALT',       'G7Tbo7CMS?YbtXU%4tPA*_Sr/bc%,g?XQYX[2$3{&{yG+Ak)aR7fVNYJs=4<a#cC');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
