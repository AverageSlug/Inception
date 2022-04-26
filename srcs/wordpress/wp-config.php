<?php
define( 'DB_NAME', 'WordPress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'pass' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('AUTH_KEY',         '+2V[[M{A2vjz5f0Us<6ahg`Pd?3Fj99j&%^IMz4+o</;]Nttd2s1+)A=Cesevz%Q');
define('SECURE_AUTH_KEY',  'T=ktv%# <4aeDZwUi0-.0]!F5AMJ4{aZiY}W_ /]]|:qUzQ~;yX{=G||mvnW_+M|');
define('LOGGED_IN_KEY',    '4L#111Kw@M5+UX8@O-w#D#`Sks~:W+Gg;23o~;_7$9*}>mLN*T8xWr(QI!^X3D_5');
define('NONCE_KEY',        'B$2Tk4b|begk{GkGxGATamP)/ ;SeSndJ$i?0HD,{;2B9iYn.U8M#oA_aR/ Q-F/');
define('AUTH_SALT',        'RV.e!-lujw?bT8A.]p9VacckSun|vE0*PmIW=?@o0:6vJ-(Qk&-N[O[[|o.(oAWo');
define('SECURE_AUTH_SALT', 'ue ekjV},mBjA5fM9[xAJ CyIbB<.cdmu/ptJF%K@+#1YON<DBh!X68]0q>1-BDZ');
define('LOGGED_IN_SALT',   ';-C0KO 3Vt&XfKL,lMH~V!yd:fL1NGaBd1%e$GI@ANkH-}>Y#Gs-cV(+,-nHRE$*');
define('NONCE_SALT',       ')#5%6lCm{RV!-TkN2C8q&1PB*b5<u_LwLF@!w{;l`F}Ds=ma.)`^^W3vYjt99/r(');
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __FILE__ . '/' );
	}
require_once( ABSPATH . 'wp-settings.php' );
?>