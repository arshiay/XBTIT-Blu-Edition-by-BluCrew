<?php
// Language File for Sypex Dumper 2
$LNG = array(

// Информация о файле локализации
'ver'				=> 20005, // Для какой версии предназначен файл
'translated'		=> 'sympler (http://www.kaliningrad.unibix.ru/)', // Контакты переводчика
'name'				=> 'Беларуская', // Название языка

// Панель инструментов
'tbar_backup'		=> 'Экспарт',
'tbar_restore'		=> 'Імпарт', 
'tbar_files'		=> 'Файлы',
'tbar_services'		=> 'Сэрвісы',
'tbar_options'		=> 'Опцыі',
'tbar_createdb'		=> 'Стварыць БД',
'tbar_connects'		=> 'Злучэнне',
'tbar_exit'			=> 'Выхад',

// Названия объектов в дереве
'obj_tables'		=> 'Табліцы',
'obj_views'			=> 'Спектаклі',
'obj_procs'			=> 'Працэдуры',
'obj_funcs'			=> 'Функцыі',
'obj_trigs'			=> 'Тріггеры',
'obj_events'		=> 'Падзеі',

// Экспорт
'zip_max'			=> 'максімум',
'zip_min'			=> 'мінімум',
'zip_none'			=> 'Без сціскання',
'default'			=> 'па змоўчванні',
'combo_db'			=> 'База даных:', 
'combo_charset'		=> 'Кадыроўка:', 
'combo_zip'			=> 'Сціск:', 
'combo_comments'	=> 'Каментарый:',
'del_legend'		=> 'Аўтовыдаленне, калі:',
'del_date'			=> 'файлам больш за %s дзён',
'del_count'			=> 'колькасць файлаў больш за %s',
'tree'				=> 'Калі ласка, пазначце аб екты:',
'no_saved'			=> '* Няма захаваных задач',
'btn_save'			=> 'Захаваць',
'btn_exec'			=> 'Выканаць',

// Импорт	
'combo_file'		=> 'Файл:',
'combo_strategy'	=> 'Стратэгія аднаўлення:',
'ext_legend'		=> 'Дадатковыя опцыі:',
'correct'			=> 'Карэкцыя кадыроўкі',
'autoinc'			=> 'абнуліць AUTO_INCREMENT',

// Лог
'status_current'	=> 'Бягучы статус:',
'status_total'		=> 'Агульны статус:',
'time_elapsed'		=> 'Прайшло:',
'time_left'			=> 'Засталося:',
'btn_stop'			=> 'Скасаваць',
'btn_pause'			=> 'Паўза',
'btn_resume'		=> 'Працягнуць',
'btn_again'			=> 'Паўтарыць',
'btn_clear'			=> 'Ачысьціць лог',

// Файлы
'btn_delete'		=> 'Выдаліць',
'btn_download'		=> 'Запампаваць',
'btn_open'			=> 'Адкрыць',

// Сервисы
'opt_check'			=> 'Опцыі для Праверыць:',
'opt_repair'		=> 'Опцыі для адрамантаваць:',
'btn_delete_db'		=> 'Выдаліць БД',
'btn_check'			=> 'Праверыць',
'btn_repair'		=> 'адрамантаваць',
'btn_analyze'		=> 'аналізаваць',
'btn_optimize'		=> 'аптымізаваць',

// Опции
'cfg_legend'		=> 'Асноўныя наладкі:',
'cfg_time_web'		=> 'Час выканання ў web (сек.):',
'cfg_time_cron'		=> 'Час выканання ў cron (сек.):',
'cfg_backup_path'	=> 'Шлях да каталогу backup:',
'cfg_backup_url'	=> 'URL да каталогу backup:',
'cfg_globstat'		=> 'Глабальная статыстыка:',
'cfg_extended'		=> 'Пашыраныя наладкі:',
'cfg_charsets'		=> 'Фільтр для кадыровак:',
'cfg_only_create'	=> 'Бэкап толькі структуры:',
'cfg_auth'			=> 'ланцужок аўтарызацыі:',
'cfg_confirm'		=> 'Пытацца пацвярджэнне для:',
'cfg_conf_import'	=> 'імпарту БД',
'cfg_conf_file'		=> 'выдалення файла',
'cfg_conf_db'		=> 'выдалення БД',

// Соединение
'con_header'		=> 'Параметры злучэння',
'connect'			=> 'злучэнне',
'my_host'			=> 'Хост:',
'my_port'			=> 'Порт:',
'my_user'			=> 'Карыстальнік:',
'my_pass'			=> 'Пароль:',
'my_pass_hidden'	=> 'Пароль не паказаны',
'my_comp'			=> 'Пратакол з выкарыстаннем кампрэсіі',
'my_db'				=> 'Базы дадзеных:',
'btn_cancel'		=> 'Адмена',

// Сохранение задания
'sj_header'			=> 'Захаванне заданні',
'sj_job'			=> 'Заданне',
'sj_name'			=> 'Імя (па-ангельску):',
'sj_title'			=> 'Апісанне:',

// Создание БД
'cdb_header'		=> 'Стварэнне базы дадзеных',
'cdb_detail'		=> 'Дэталі',
'cdb_name'			=> 'Назва:',
'combo_collate'		=> 'Параўнанне',
'btn_create'		=> 'Стварыць',

// Авторизация
'js_required'		=> 'JavaScript павінен быць уключаны',
'auth'				=> 'Аўтарызацыя',
'auth_user'			=> 'Карыстальнік:',
'auth_remember'		=> 'Запомніць',
'btn_enter'			=> 'Увайсці',
'btn_details'		=> 'Дэталі',

// Сообщения в логе
'not_found_rtl'		=> 'Няма RTL-файла',
'backup_begin'		=> 'Пачатак экспарту БД `%s`',
'backup_TC'			=> 'Экспарт табліцы `%s`',
'backup_VI'			=> 'Экспарт прадстаўлення `%s`',
'backup_PR'			=> 'Экспарт працэдуры `%s`',
'backup_FU'			=> 'Экспарт функцыі `%s`',
'backup_EV'			=> 'Экспарт падзеі `%s`',
'backup_TR'			=> 'Экспарт тріггера `%s`',
'continue_from'		=> 'з пазіцыі %s',
'backup_end'		=> 'рэзервовая копія БД `%s` створана.',
'autodelete'		=> 'Аўтовыдаленне старых файлаў:',
'del_by_date'		=> '- `%s` - выдалены (па даце)',
'del_by_count'		=> '- `%s` - выдалены (па даце)',
'del_fail'			=> '- `%s` -выдаліць не ўдалося',
'del_nothing'		=> '- няма файлаў для выдалення',
'set_names'			=> 'Установлена кадзіроўка злучэння: `%s`',
'restore_begin'		=> 'Пачатак імпарту БД `%s`',
'restore_TC'		=> 'Імпарт табліцы `%s`',
'restore_VI'		=> 'Імпарт прадстаўлення `%s`',
'restore_PR'		=> 'Імпарт працэдуры `%s`',
'restore_FU'		=> 'Імпарт функцыі `%s`',
'restore_EV'		=> 'Імпарт падзеі `%s`',
'restore_TR'		=> 'Імпарт тріггера `%s`',
'restore_keys'		=> 'Уключэнне індэксаў',
'restore_end'		=> 'БД `%s` адноўлена з рэзервовай копіі.',
'stop_1'			=> 'Выкананне спынена карыстальнікам', 
'stop_2'			=> 'Выкананне спынена карыстальнікам',
'stop_3'			=> 'Выкананне спынена па таймеру',
'stop_4'			=> 'Выкананне спынена па таймаўту',
'stop_5'			=> 'Выкананне спыненае з-за памылкі',
'job_done'			=> 'Заданне паспяхова выканана',
'file_size'			=> 'Памер файла',
'job_time'			=> 'Часу затрачана',
'seconds'			=> 'сек.',
'job_freeze'		=> 'Працэс не абнаўляўся больш за 30 секунд. Націсніце Працягнуць',
'stop_job'			=> 'Запыт на прыпынак',

// Надписи в JS
'js' => array(

	// Названия вкладок
	'backup'		=> 'Экспарт базы дадзеных',
	'restore'		=> 'Імпарт базы дадзеных',
	'log'			=> 'Лог дзеянняў',
	'result'		=> 'Вынік выканання',
	'files'			=> 'Файлы рэзервовых копій',
	'services'		=> 'Сэрвісы',
	'options'		=> 'Опцыі',

	// Заголовки таблиц
	'dt'			=> 'Дата і час',
	'action'		=> 'Дзеянне',
	'db'			=> 'База дадзеных',
	'type'			=> 'Тып',
	'tab'			=> 'Табл.',
	'records'		=> 'Запісаў',
	'size'			=> 'Памер',
	'comment'		=> 'Каментарый',
	
	// Статусы
	'load'			=> 'Загрузка',
	'run'			=> 'Выкананне...',
	'sdb'			=> 'Стварэнне базы дадзеных',
	'sc'			=> 'Захаванне злучэння',
	'sj'			=> 'Захаванне заданні',
	'so'			=> 'Захаванне опцый',

	// Сообщения
	'pro'			=> 'Опцыя даступная толькі ў Pro-версіі',
	'err_fopen'		=> 'Не ўдаецца адкрыць файл',
	'err_sxd2'		=> 'Прагляд змесціва файла даступны толькі для файлаў створаных Sypex Dumper 2',
	'err_empty_db'	=> 'База дадзеных пустая',
	'fdc'			=> 'Вы сапраўды жадаеце выдаліць файл?',
	'ddc'			=> 'Вы сапраўды жадаеце выдаліць базу дадзеных?',
	'fic'			=> 'Вы сапраўды жадаеце імпартаваць файл?',

	// Сокращения размеров файла
	'sizes'			=> array('Б', 'КБ', 'МБ', 'ГБ'),
)
);
?>
