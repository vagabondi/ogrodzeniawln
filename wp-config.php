<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'ogrodzeniawln_cba_pl');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'vagabondi');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'Kamilka01');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'mysql.cba.pl');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~*_n$=MqH8ZDa06 ;rk.O{(Yu&W(NpXnGr#07+._u?=RS7yoNE%+Y*n?r0LW#i^k');
define('SECURE_AUTH_KEY',  '%|_b&log]E|`7g6TYqDnde0+gbJ]FZ#mCxa&8R{fM)B:`Pp2fDZ=L^I%XI78Ui<W');
define('LOGGED_IN_KEY',    '(|J]rHt]mC.Q@6E3iEuB{B52no8+*$Cbn~Ib$t3>R4v/cB+ACp 84e?3_O#98%YK');
define('NONCE_KEY',        'h81~.G88=S~i{cdipJ59#L]]{Q`e j{o9Pu<74;R5qOuox,<~nVM4WeB<((~G_i2');
define('AUTH_SALT',        'Iy_-K/9fpGZsj.68OP Xm@<j7Dlzr 0bTyA.1UF_[u3y:o>Q{QxSji#7SMyEVT:N');
define('SECURE_AUTH_SALT', '^_`c7tq^W+22CHTzA*|iml^k)?6H;1VbJ}IUT=f/Gy+lb;fMXOK|N/bOS_GgjBfA');
define('LOGGED_IN_SALT',   '|-EAe.mm]NG8?+6o2}41[&x>R!|^2)t%wZ9J*[$r.(~*295braKuIdA>W`W{]oud');
define('NONCE_SALT',       '2l6`^3eKBckYjzTKeac]iR<S?_N0Ol>Da634MjN||x-Wq7eoYKZ%b<2&c[Cqz0>t');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'w_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
