<?php 

// Display_name = Українська

function e2l_load_strings () {

  return array (
  // Engine
  'e2--vname-aegea' => 'Егея',
  'e2--release' => 'версія',
  'e2--powered-by' => 'Рушій -',
  'e2--default-blog-title' => 'Мій блоґ',
  'e2--default-blog-author' => 'Автор блоґу',
  
  // Installer
  'pt--install' => 'Встановлення Егеї',
  'gs--user-fixes-needed' => 'Так, потрібно дещо поправити.',
  'gs--following-folders-missing' => 'Не знайдені такі теки з дистрибутиву рушія:',
  'gs--could-not-create-them-automatically' => 'Створити їх автоматично не вдалося через нестачу прав. Завантажте на сервер повний дистрибутив.',
  'gs--and-reload-installer' => 'І перезавантажте установник',
  'fb--begin' => 'Розпочати блоґ',
  'fb--retry' => 'Спробувати ще раз',
  'er--double-check-db-params' => 'Перевірте реквізити бази',
  'gs--instantiated-version' => 'Інстанційована версія',
  'pt--installer-loading' => 'Завантаження ...',
  'gs--database' => 'База даних',
  'gs--password-for-blog' => 'Пароль для доступу до блоґу',
  'ff--just-connect' => 'Дані в моїй базі вже є, потрібно просто підключитися до неї',
  'ff--prefix-occupied' => 'вже зайнятий',
  'ff--tables-not-found' => 'таблиць не знайдено',

  // Diags
  'et--fix-permissions-on-server' => 'Налаштуйте права на сервері',
  'gs--enable-write-permissions-for-the-following' => 'Будь ласка, дайте права на запис тут:',
  
  // Sign in
  'pt--sign-in' => 'Вхід',
  'er--can not-write-auth-data' => 'Не вдається записати дані аутентифікації',

  // Archive
  'pt--nth-year' => '$[year] -й рік',
  'pt--nth-month-of-nth-year' => '$[month.monthname] $[year] року',
  'pt--nth-day-of-nth-month-of-nth-year' => '$[day] $[month.monthname.genitive] $[year] -го',
  'gs--nth-month-of-nth-year' => '$[month.monthname] $[year]',
  'gs--nth-day-of-nth-month-of-nth-year' => '$[day] $[month.monthname.genitive] $[year]',
  'gs--everything' => 'Усе',
  'gs--part-x-of-y' => 'частина $[part] з $[of]',
  
  // Posts
  'ln--new-post' => 'Новий',
  'bt--close-comments-to-post' => 'Закрити коментарі до допису',
  'bt--open-comments-to-post' => 'Відкрити коментарі до допису',
  'pt--new-post' => 'Новий допис',
  'pt--edit-post' => 'Редагування допису',
  'er--post-must-have-title-and-text' => 'У дописа повинні бути назва і текст',
  'er--error-updating-post' => 'Помилка під час зміни допису',
  'er--error-deleting-post-tag-info' => 'Помилка під час видалення даних про теґи допису',
  'er--wrong-datetime-format' => 'Неправильний формат дати-часу. Має бути: «ДД.ММ.РРРР ГГ:ХХ:СС» ',
  'er--can not-get-post-from-db' => 'Не вдалося витягти допис з бази',
  'er--images-only-supported' => 'Підтримуються тільки зображення',
  'er--can not-create-thumbnail' => 'Не вдалося створити зменшене зображення',
  'er--can not-upload' => 'Не вдалося завантажити файл',
  'ff--title' => 'Назва',
  'ff--text' => 'Текст',
  'ff--text-formatting' => 'Форматування тексту',
  'ff--saving' => 'Збереження ...',
  'ff--save' => 'Зберегти',
  'ff--tags' => 'Теґи',
  'ff--alias' => 'Посилання',
  'ff--change-time' => 'Змінити час',
  'ff--delete' => 'Видалити',
  'ff--will-get-address' => 'Отримає адресу',
  'ff--is-at-address' => 'Опублікований за адресою',

  'ff--gmt-offset' => 'Різниця з Гринвічем',
  'ff--with-dst' => '+1 влітку',
  'ff--post-time' => 'Час публікації',
  
  'pt--post-deletion' => 'Вилучення допису',
  'gs--post-will-be-deleted' => 'Допис «$[post]" буде вилучений разом з усіма коментарями.',

  // Frontpage 
  'er--can not-show-latest-notes' => 'Неможливо показати останні дописи',
  'nm--posts' => 'Дописи',
  'gs--next-posts' => 'наступні',
  'gs--prev-posts' => 'попередні',
  
  // Drafts
  'ln--drafts' => 'Чернетки',
  'pt--drafts' => 'Чернетки',
  'wd--draft' => 'чернетка',
  'pt--draft-deletion' => 'Видалення чернетки',
  'pt--edit-draft' => 'Правка чернетки',
  'gs--draft-will-be-deleted' => 'Чернетка «$[draft]» буде видалена.',
  
  // Comments
  'pt--new-comment' => 'Новий коментар',
  'pt--edit-comment' => 'Правка коментарю',
  'pt--reply-to-comment' => 'Відповідь на коментар',
  'pt--edit-reply-to-comment' => 'Правка відповіді на коментар',
  'pt--unsubscription-done' => 'Вийшло!',
  'pt--unsubscription-failed' => 'Не вийшло',
  'gs--you-are-not-subscribed' => 'Здається, ви і так не підписані на коментарі до цього допису',
  'gs--you-are-no-longer-subscribed' => 'Ви більше не підписані на коментарі до допису',
  'gs--unsubscription-didnt-work' => 'Чомусь відписка не спрацювала',          
  'gs--comment-not-found' => 'Коментар не знайдений',
  'gs--post-not-found' => 'Допис не знайдений',
  'gs--comment-too-long' => 'Занадто довгий коментар',
  'gs--comment-too-long-description' => 'Ви надіслали занадто довгий коментар, тому він не був збережений.',
  'gs--comment-double-post' => 'Повторний коментар',
  'gs--comment-double-post-description' => 'Ви надіслали коментар двічі, збережений був тільки один.',
  'gs--comment-spam-suspect' => 'Коментар схожий на спам',
  'gs--comment-spam-suspect-description' => 'Вибачте, але робот вирішив, що це спам, тому коментар не було надіслано.',
  'gs--you-are-already-subscribed' => 'Ви підписані на коментарі. Посилання для відписки приходить у кожному листі з новим коментарем.',
  'er--post-not-commentable' => 'Цей допис можна коментувати',
  'er--name-email-text-required' => 'Ім’я, ел. адреса та текст коментарю обов’язкові ',
  'ff--notify-subscribers' => 'Надіслати поштою коментатору та іншим підписникам',
  'gs--your-comment' => 'Ваш коментар',
  'ff--full-name' => 'Ім’я та прізвище',
  'ff--email' => 'Ел. пошта ',
  'gs--email-wont-be-published' => 'адреса не буде опублікована',
  'gs--no-html' => 'ХТМЛ не працює',
  'ff--subscribe-to-others-comments' => 'Отримувати коментарі інших поштою',
  'gs--comment-restore' => 'Повернути',
  'ff--text-of-your-comment' => 'Текст вашого коментарю',
  'gs--n-comments' => '$[number.cardinal]',
  'gs--no-comments' => 'немає коментарів',
  'gs--comments-all-one-new' => 'новий',
  'gs--comments-all-new' => 'нові',
  'gs--comments-n-new' => '$[number.cardinal]',
  
  // Tags
  'pt--tags' => 'Теґи',
  'pt--posts-tagged' => 'Дописи з теґом',
  'tt--edit-tag' => 'Правити параметри і опис теґа',
  'gs--tagged' => 'з теґом',
  'pt--tag-edit' => 'Зміна теґа',
  'pt--tag-delete' => 'Видалення теґа',
  'pt--posts-without-tags' => 'Дописи без теґів',
  'gs--no-posts-without-tags' => 'Дописів без теґів немає.',
  'er--bad-tag-urlname' => 'Такий вигляд в адресному рядку не може бути використаний',
  'er--can not-rename-tag' => 'Таке ім’я або вигляд в адресному рядку вже використовуються іншим теґом',
  'ff--tag-name' => 'Назва',
  'ff--tag-urlname' => 'В адресному рядку',
  'ff--tag-description' => 'Опис',
  'gs--tag-will-be-deleted-notes-remain' => 'Теґ «$[tag]» буде вилучений із дописів, але самі дописи залишаться.',
  'gs--see-also-tag' => 'Див. також теґ ',
  'gs--tags-important' => 'важливі',
  'gs--tags-all' => 'все',
  'gs--tags' => 'Теґи',
  
  // Most commented and favourites
  'pt--most-commented' => 'Найбільше коментують за $[period.periodname]',
  'nm--most-commented' => 'Обговорюване',
  'pt--most-read' => 'Найчастіше прочитані за $[period.periodname]',
  'nm--most-read' => 'Популярне',
  'pt--favourites' => 'Обране',
  'nm--favourites' => 'Обране',
  'gs--no-favourites' => 'Обраного немає.',
  
  // Generic posts pages
  'nm--pages' => 'Сторінки',
  'gs--next-page' => 'наступна',
  'gs--prev-page' => 'попередня',
  'gs--earlier' => 'Раніше',
  'gs--later' => 'Пізніше',
  'pt--n-posts' => '$[number.cardinal]',
  'pt--no-posts' => 'Немає дописів',

  // Search
  'pt--search' => 'Пошук',
  'pt--search-query-empty' => 'Текст для пошуку порожній',
  'pt--search-query-too-short' => 'Занадто короткий текст',
  'gs--found-for-query' => 'за запитом',
  'gs--search-query-empty' => 'Текст для пошуку порожній, напишіть що-небудь',
  'gs--search-query-too-short' => 'Занадто короткий текст, напишіть хоча б 4 літери.',
  'gs--nothing-found' => 'Нічого не знайдено.',
  'gs--many-posts' => 'Багато дописів',
  'pt--search-results' => 'Результати пошуку',
  
  // Password, sessions, settings
  'pt--password' => 'Пароль',
  'pt--password-for-blog' => 'Пароль для доступу у блоґ',
  'ff--old-password' => 'Старий пароль',
  'ff--new-password' => 'Новий пароль',
  'fb--change' => 'Змінити',
  'gs--password-changed' => 'Пароль змінено',
  'er--could-not-change-password' => 'Не вийшло змінити пароль',
  'er--no-password-entered' => 'Ви не ввели пароль',
  'er--wrong-password' => 'Неправильний пароль',
  'ff--displayed-as-plain-text' => 'видимий під час введення',
  'er--settings-not-saved' => 'Налаштування не збереглись',

  'pt--sessions' => 'Відкриті сесії',
  'gs--sessions-description' => 'Коли ви заходите під своїм паролем на декількох пристроях або за допомогою декількох браузерів, тут показується список всіх таких сесій. Якщо якась із них викликає підозри, завершіть всі сесії крім поточної, а потім змініть пароль від блоґу.',
  'gs--sessions-browser-or-device' => 'Браузер або пристрій',
  'gs--sessions-when' => 'Коли',
  'gs--sessions-from-where' => 'Звідки',
  'gs--locally' => 'локально',
  'gs--unknown' => 'невідомий',
  'fb--end-all-sessions-but-this' => 'Завершити всі сесії крім поточної',
  'gs--ua-iphone' => 'Айфон',
  'gs--ua-ipad' => 'Айпад',
  'gs--ua-opera' => 'Опера',
  'gs--ua-firefox' => 'Фаєрфокс',
  'gs--ua-chrome' => 'Хром',
  'gs--ua-safari' => 'Сафарі',
  'gs--ua-unknown' => 'Невід.',
  'gs--ua-for-mac' => 'на Маку',

  'pt--settings' => 'Налаштування',
  'ff--language' => 'Мова',
  'ff--theme' => 'Оформлення',
  'ff--theme-how-to' => 'Як створити свою тему?',
  'ff--theme-selector-wants-js' => 'Щоб обрати тему оформлення, включіть у браузері підтримку скриптів (JavaScript).',
  'ff--posts' => 'Дописи',
  'ff--items-per-page-before' => 'Показувати по',
  'ff--items-per-page-after' => 'на сторінці',
  'ff--show-sharing-buttons' => 'Показувати кнопки надсилання у соцмережі',
  'ff--comments' => 'Коментарі',
  'ff--comments-enable' => 'Дозволяти',
  'ff--only-for-recent-posts' => 'тільки до свіжих дописів',
  'ff--show-hot' => 'показувати блок «Обговорюване»',
  'ff--send-to-address' => 'присилати поштою на адресу:',
  'ff--administration' => 'Адміністрування:',
  'gs--password' => 'пароль',
  'gs--db-connection' => 'з’єднання з базою',

  'pt--name-and-author' => 'Назва та автор',
  'ff--blog-title' => 'Назва блоґу',
  'ff--blog-description' => 'Коротко про блоґ',
  'ff--blog-author' => 'Автор',

  'pt--database' => 'База даних',
  'ff--db-host' => 'Сервер',
  'ff--db-username-and-password' => 'Ім’я користувача та пароль',
  'ff--db-name' => 'Назва бази',
  'ff--db-prefix' => 'Префікс таблиць',
  'fb--connect-to-this-db' => 'Підключитися з цими параметрами',
  'er--can not-save-data' => 'Не вдається зберегти дані',
  
  'pt--diagnostics' => 'Діагностика',

  'ff--changing-sidebar' => 'Як змінити цю колонку?',
  
  // Welcome
  'pt--welcome' => 'Готово!',
  'pt--welcome-text-pre' => 'Блоґ створений. ',
  'pt--welcome-text-href-write' => 'Напишіть допис',
  'pt--welcome-text-or' => ' або ',
  'pt--welcome-text-href-settings' => 'налаштуйте що-небудь',
  'pt--welcome-text-post' => '.',

  // Need for password
  'gs--need-password' => 'Увійдіть під своїм паролем',
  'ff--public-computer' => 'Чужий комп’ютер',
  'gs--need-password-for-action' => 'Щоб $[action], увійдіть під своїм паролем',
  'gs--np-action-write' => 'написати допис',
  'gs--np-action-note-edit' => 'редагувати допис',
  'gs--np-action-comment-edit' => 'редагувати цей коментар',
  'gs--np-action-comment-reply' => 'відповісти на цей коментар',
  'gs--np-action-drafts' => 'відкрити чернетки',
  'gs--np-action-draft' => 'відкрити цю чернетку',
  'gs--np-action-tag-edit' => 'змінити цей теґ',
  'gs--np-action-name-and-author' => 'змінювати назву блоґу',
  'gs--np-action-settings' => 'налаштовувати блоґ',
  'gs--np-action-password' => 'змінювати пароль',
  'gs--np-action-database' => 'змінювати параметри бази даних',
  'gs--np-action-sessions' => 'переглядати сесії',
  'gs--frontpage' => 'Головна сторінка',
  
  // Form buttons
  'fb--submit' => 'Надіслати',
  'fb--save-changes' => 'Зберегти зміни',
  'fb--save-and-preview' => 'Зберегти та переглянути',
  'fb--publish' => 'Опублікувати',
  'fb--publish-draft' => 'Опублікувати допис',
  'fb--select' => 'Обрати',
  'fb--apply' => 'Застосувати',
  'fb--delete' => 'Видалити',
  'fb--edit' => 'Редагувати',
  'fb--sign-in' => 'Увійти',
  'fb--sign-out' => 'Вийти',
  
  // Time
  'pt--default-timezone' => 'Часовий пояс за замовчуванням',
  'gs--e2-stores-each-posts-timezone' => 'Е2 зберігає часовий пояс окремо для кожної дописи.',
  'gs--e2-autodetects-timezone' => 'Під час публікації часовий пояс зазвичай визначається автоматично. А в разі невдачі використовується обраний тут часовий пояс.',

  'tt--from-the-future' => 'З майбутнього',
  'tt--just-published' => 'Щойно',
  'tt--one-minute-ago' => 'Хвилину тому',
  'tt--minutes-ago' => '$[minutes.cardinal] тому',
  'tt--one-hour-ago' => 'Годину тому',
  'tt--hours-ago' => '$[hours.cardinal] тому',
  'tt--today-at' => 'Сьогодні о $[time]',
  'tt--date-and-time' => '$[day] $[month.monthname.genitive], $[time]',
  'tt--date-year-and-time' => '$[day] $[month.monthname.genitive] $[year], $[time]',

  'tt--zone-pt' => 'Тихоокеанський час',
  'tt--zone-mt' => 'Гірський час',
  'tt--zone-ct' => 'Центральний час',
  'tt--zone-et' => 'Східний час',
  'tt--zone-gmt' => 'Час за Гринвічем',
  'tt--zone-cet' => 'Центрально-європейський час',
  'tt--zone-eet' => 'Східно-європейський час',
  'tt--zone-msk' => 'Московський час',
  'tt--zone-ekt' => 'Челябінський час',
  'gs--timezone-offset-hours' => 'ч',
  'gs--timezone-offset-minutes' => 'хв',
  
  // Mail
  'em--comment-new-to-author-subject' => '$[commenter] коментує $[note-title]',
  'em--comment-new-to-public-subject' => '$[commenter] коментує $[note-title]',
  'em--comment-reply-to-public-subject' => '$[blog-author] відповідає на коментар',
  'em--comment-reply' => '$[note-title] ($[blog-author] відповів)',
  'em--created-automatically' => 'Лист створено автоматично.',
  'em--unsubscribe' => 'Відписатися від цього обговорення',
  'em--reply' => 'Відповісти',
  'em--comment-replied-at' => 'Коментар, на який відповів автор',
  
  // Rss
  'nf--comments-on-this-post' => 'Коментарі до цього допису',
  'gs--comments-on-post' => 'коментарі до допису',
  'gs--comment-on-post' => 'коментар до допису',
  'gs--posts-tagged' => 'дописи з теґом',
  'gs--search-results' => 'результати пошуку',
  
  // Social networks
  'sn--twitter-verb' => 'Твітнути',
  'sn--facebook-verb' => 'Поділитися',
  'sn--vkontakte-verb' => 'Поділитися',
  'sn--pinterest-verb' => 'Запінити',

  // Umacros
  'um--month' => '$[month.monthname]',
  'um--month-short' => '$[month.monthname.short]',
  'um--month-g' => '$[month.monthname.genitive]',
  
  // More strings
  'gs--no-such-notes' => 'Таких дописів немає.',
  'pt--page-not-found' => 'Сторінка не знайдена',
  'gs--page-not-found' => 'Сторінка не знайдена.',
  
  'er--can not-find-db' => 'Не можу знайти базу даних',
  'er--can not-connect-to-db' => 'Не можу з’єднатися з базою даних',
  'er--error-in-query' => 'Помилка під час запиту',
  'er--error-occurred' => 'Сталася помилка',
  'er--too-many-errors' => 'Занадто багато помилок',
  'gs--rss' => 'РСС',
  
  'gs--pgt' => 'Час генерації',
  'gs--seconds-contraction' => 'з',
  'gs--updated-successfully' => 'Виконано оновлення з версії $[from] до версії $[to]',
  'gs--good-blogs' => 'Хороші блоґи та сайти',
  
  );
  
}


function e2lstr_monthname ($number, $modifier = '') {
  if ($modifier == 'genitive') {
    $tmp = array (
      'грудня', 'січня', 'лютого', 'березня', 'квітня', 'травня', 'червня',
      'липня', 'серпня', 'вересня', 'жовтня', 'листопада', 'грудня', 'січня'
    );
  } elseif ($modifier == 'short') {
    $tmp = array (
      'груд', 'січ', 'лют', 'берез', 'квіт', 'трав', 'черв',
      'лип', 'серп', 'верес', 'жовт', 'лис', 'груд', 'січ'
    );
	  
  } else {
    $tmp = array (
      'Грудень', 'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень',
      'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень', 'Січень'
    );
  }
  return $tmp[(int) $number];
}

function e2lstr_periodname ($period) {
  /**/ if ('year' == $period) return 'рік';
  elseif ('month' == $period) return 'місяць';
  elseif ('week' == $period) return 'тиждень';
  elseif ('day' == $period) return 'день';
  else return 'всю історію';
}


function e2lstr_cardinal ($number, $modifier = '', $string_id) {

  $what = $number;  
  if ($string_id == 'pt--n-posts') $what = $number .' доп(ис,иси,исів)';
  if ($string_id == 'tt--minutes-ago') $what = $number .' хвилин(у,и,)';
  if ($string_id == 'tt--hours-ago') $what = $number .' годи(на,н)';
  if ($string_id == 'gs--n-comments') $what = $number .' комента(р,рі,рів)';
  if ($string_id == 'gs--comments-n-new') $what = $number .' нови(й,х,х)';

  return e2_decline_for_number ($what);
  
}



?>
