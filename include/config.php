<?
//Настройка сайта
$title = "Valor";
$description = "Примкните к тысячам могучих героев Азерота в мире магии и бесконечных приключений!";
$forum = "https://wowcommunity.dev";
$supportmail = "yourmail@mail.com";

//Итем отправки в игру
$monetacp = "38186";

//Старт локация
$pos_x = "5832.6";
$pos_y = "505.414";
$pos_z = "657.349";
$pos_map = "571";
$pos_orientation = "4.97857";
$pos_zone = "4395";

//Социальные ссылки
$discord = "123";
$youtube = "123";
$vk = "123";
$telegram = "123";

//Лич база
$lichdbip = "localhost";
$lichdbuser = "test";
$lichdbpass = "test";
$lichdbauth = "auth";
$lichdbchar = "characters";
$lichdbworld = "world";

//Форум
$forumdbip = "localhost";
$forumdbuser = "test";
$forumdbpass = "test";
$forumdb = "forumWS";



// ID магазина
$merchant_id = 191919;
// Секретный ключ ( в лк енот как "Секретный пароль" )
$secret_key1 = '000';
// Cекретный ключ 2 ( в лк енот как "Дополнительный ключ" )
$secret_key2 = '1111';
// Множитель баланса
$colbonus = 1;
$colvote = 2;
// Конфиг подключения к игровой бд для магаза
$config = [
	'dbhost' => 'localhost',
	'dbuser' => 'test',
	'dbpass' => 'test',
	'dbname' => 'auth',
	'dbport' => 3306
];

include 'mmotop_conf.php';
$mmotop_name = "$row[name]";
$mmotop_vote_count = "$row[bonus]";
$file_path_mmotop = "$row[file_stat]";
$mmotop_link = "$row[link]";
?>