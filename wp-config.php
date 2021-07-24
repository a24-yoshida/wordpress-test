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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'seiuchi' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'sanma0609' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{Y=gzZUjl>I&*W= e+m,|$an:Di%bH+H{(u5Ckp!%j>/+!x_8n^:X2}U+l0SqG3o' );
define( 'SECURE_AUTH_KEY',  '&ZY.Y&G0MSq<J*3$Bf}NBNvz{A1n#xY&)HX%l!+xh(G(_{^:Q}|P :F<U:/u@Pa-' );
define( 'LOGGED_IN_KEY',    '%x^NQTq(|R>KT_MHs:wF:1(H8u#Q>!EZhf_bHu#4{(7)bl]U$mh::w2,/XCP{L+N' );
define( 'NONCE_KEY',        'o<uKVOW=4J a0PX|Va/rY-s2~Qz>qZvW]c&$j 35`)VqT;ZvF$G4wE1)b+o)RP<A' );
define( 'AUTH_SALT',        '+DMV1@AO26YUJSU ,%whCS]3-5U%8e/$Q`]fp)A^3=~X7YU^F$#[}tK]hC!*noH0' );
define( 'SECURE_AUTH_SALT', ',FB]#0n@O8o@QSQSLNZ6W|`Uq;,+<P?d3&kcw;}ZrdOwv=.d{/&dR3#(Q2%`q[0=' );
define( 'LOGGED_IN_SALT',   '-gV~((ga.e8RFyfn][:rC~?+AM^Gw{,ybXcToy =K~?Y[]00so9)?_}0Z$0]d<3^' );
define( 'NONCE_SALT',       'hlGBt]aOJU91H|Lw_gRMwjaq-Fn0QB0foOU7dmb~#SBCD[2f|P??C7DU={=q7_xA' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
