<?php 

// display_name = Українська

function e2l_load_strings () {

  return array (
  // engine
  'e2--vname-aegea' => 'Егея',
  'e2--release' => 'реліз',
  'e2--powered-by' => 'Рушій —',
  'e2--default-blog-title' => 'Мій блог',
  'e2--default-blog-author' => 'Автор блогу',
  
  // installer
  'pt--install' => 'Встановлення Егеї',
  'gs--user-fixes-needed' => 'Хвилинку, треба дещо виправити.',
  'gs--following-folders-missing' => 'Не знайдено наступні теки із дистрибутиву рушія:',
  'gs--could-not-create-them-automatically' => 'Створити їх автоматично не вдалося через нестачу прав. Завантажте на сервер повний дистрибутив.',
  'gs--and-reload-installer' => 'І перезавантажте встановлювач',
  'fb--begin' => 'Розпочати блог',
  'fb--retry' => 'Спробувати ще раз',
  'gs--db-parameters' => 'Параметри бази даних, які надав хостер',
  'gs--ask-hoster-how-to-create-db' => 'Уточніть у хостера, як створити базу, якщо її немає',
  'er--double-check-db-params' => 'Перевірте ще раз реквізити бази',
  'gs--instantiated-version' => 'Інстанційована версія',
  'pt--installer-loading' => 'Завантаження...',
  'gs--database' => 'База даних',
  'gs--password-for-blog' => 'Пароль для доступу до блогу',
  'gs--data-exists' => 'В цій базі вже є блог. Встановлювач просто підключиться до неї.',
  'er--db-data-incomplete' => 'В цій базі вже є частина даних блогу, та вони неповні. Можливо, з нею використовувалась інша версія Егеї. Встановіть Егею тієї версії, від якої дані у базі, а потім оновіть, якщо потрібно. Для чистого встановлення надайте чисту базу.',

  // diags
  'et--fix-permissions-on-server' => 'Налаштуйте права на сервері',
  'gs--enable-write-permissions-for-the-following' => 'Будь ласка, надайте права на запис тут:',
  
  // sign in
  'pt--sign-in' => 'Вхід',
  'er--cannot-write-auth-data' => 'Не вдається записати дані автентификації',

  // archive
  'pt--nth-year' => '$[year]-й рік',
  'pt--nth-month-of-nth-year' => '$[month.monthname] $[year] року',
  'pt--nth-day-of-nth-month-of-nth-year' => '$[day] $[month.monthname.genitive] $[year]-го',
  'gs--nth-month-of-nth-year' => '$[month.monthname] $[year]',
  'gs--nth-day-of-nth-month-of-nth-year' => '$[day] $[month.monthname.genitive] $[year]',
  'gs--everything' => 'Все',
  'gs--part-x-of-y' => 'частина $[part] з $[of]',
  
  // posts
  'ln--new-post' => 'Новий',
  'bt--close-comments-to-post' => 'Закрити коментарі до допису',
  'bt--open-comments-to-post' => 'Відкрити коментарі до допису',
  'pt--new-post' => 'Новий допис',
  'pt--edit-post' => 'Редагування допису',
  'er--post-must-have-title-and-text' => 'У допису мають бути назва і текст',
  'er--error-updating-post' => 'Помилка під час змінення допису',
  'er--error-deleting-post-tag-info' => 'Помилка під час видалення даних про теги допису',
  'er--wrong-datetime-format' => 'Неправильний формат дати-часу. Має бути: «ДД.ММ.РРРР ГГ:ХХ:СС»',
  'er--cannot-get-post-from-db' => 'Не вдалося отримати допис із бази',
  'er--images-only-supported' => 'Підтримуються лише зображення',
  'er--cannot-create-thumbnail' => 'Не вдалося створити зменшене зображення',
  'er--cannot-upload' => 'Не вдалося завантажити файл',
  'ff--title' => 'Назва',
  'ff--text' => 'Текст',
  'ff--text-formatting' => 'Форматування тексту',
  'ff--saving' => 'Збереження...',
  'ff--save' => 'Зберегти',
  'ff--tags' => 'Теги',
  'ff--alias' => 'Посилання',
  'ff--change-time' => 'Змінити час',
  'ff--delete' => 'Видалити',
  'ff--will-get-address' => 'Отримає адресу',
  'ff--is-at-address' => 'Опублікований за адресою',
  'gs--no-notes' => 'Дописів немає.',

  'ff--gmt-offset' => 'Різниця з Грінвічем',
  'ff--with-dst' => '+1 влітку',
  'ff--post-time' => 'Час публікації',
  
  'pt--post-deletion' => 'Видалення допису',
  'gs--post-will-be-deleted' => 'Допис «$[post]» буде видалений разом зі всіма коментарями.',

  // frontpage 
  'er--cannot-show-latest-notes' => 'Неможливо відобразити останні дописи',
  'nm--posts' => 'Дописи',
  'gs--next-posts' => 'наступні',
  'gs--prev-posts' => 'попередні',
  
  // drafts
  'ln--drafts' => 'Чернетки',
  'pt--drafts' => 'Чернетки',
  'wd--draft' => 'чернетка',
  'pt--draft-deletion' => 'Видалення чернетки',
  'pt--edit-draft' => 'Редагування чернетки',
  'gs--no-drafts' => 'Чернеток немає.',
  'gs--draft-will-be-deleted' => 'Чернетка «$[draft]» буде видалена.',
  
  // comments
  'pt--new-comment' => 'Новий коментар',
  'pt--edit-comment' => 'Редагування коментаря',
  'pt--reply-to-comment' => 'Відповідь на коментар',
  'pt--edit-reply-to-comment' => 'Редагування відповіді на коментар',
  'pt--unsubscription-done' => 'Вдалося!',
  'pt--unsubscription-failed' => 'Не вдалося',
  'gs--you-are-not-subscribed' => 'Схоже, що ви й так не підписані на коментарі до цього допису',
  'gs--you-are-no-longer-subscribed' => 'Ви більше не підписані на коментарі до допису',
  'gs--unsubscription-didnt-work' => 'Чогось відписка не спрацювала',          
  'gs--comment-not-found' => 'Коментар не знайдено',
  'gs--post-not-found' => 'Допис не знайдено',
  'gs--comment-too-long' => 'Надто довгий коментар',
  'gs--comment-too-long-description' => 'Ви надіслали надто довгий коментар, тому його не збережено.',
  'gs--comment-double-post' => 'Повторний коментар',
  'gs--comment-double-post-description' => 'Ви надіслали коментар двічі, збережено лише один.',
  'gs--comment-spam-suspect' => 'Коментар схожий на спам',
  'gs--comment-spam-suspect-description' => 'Шкода, та робот вирішив, що це спам, тому коментар не було надіслано.',
  'gs--you-are-already-subscribed' => 'Ви підписані на коментарі. Посилання для відписки надходить з кожним листом з новим коментарем.',
  'er--post-not-commentable' => 'Цей допис неможна коментувати',
  'er--name-email-text-required' => 'Імʼя, ел. адреса та текст коментаря мають бути обовʼязково',
  'ff--notify-subscribers' => 'Відправити поштою коментаторові та іншим підписникам',
  'gs--your-comment' => 'Ваш коментар',
  'ff--full-name' => 'Імʼя та прізвище',
  'ff--email' => 'Ел. пошта',
  'gs--email-wont-be-published' => 'адресу не буде опубліковано',
  'gs--no-html' => 'ХТМЛ не працює',
  'ff--subscribe-to-others-comments' => 'Отримувати поштою інші коментарі',
  'ff--text-of-your-comment' => 'Текст вашого коментаря',
  'gs--n-comments' => '$[number.cardinal]',
  'gs--no-comments' => 'жодного коментаря',
  'gs--comments-all-one-new' => 'новий',
  'gs--comments-all-new' => 'нові',
  'gs--comments-n-new' => '$[number.cardinal]',
  
  // tags
  'pt--tags' => 'Теги',
  'pt--posts-tagged' => 'Дописи з тегом',
  'tt--edit-tag' => 'Редагувати параметри і опис тега',
  'gs--tagged' => 'з тегом',
  'pt--tag-edit' => 'Змінення тега',
  'pt--tag-delete' => 'Видалення тега',
  'pt--posts-without-tags' => 'Дописи без тегів',
  'gs--no-posts-without-tags' => 'Дописів без тегів немає.',
  'er--bad-tag-urlname' => 'Обрану адресу використати неможливо',
  'er--cannot-rename-tag' => 'Таке імʼя або адреса вже використовується іншим тегом',
  'ff--tag-name' => 'Назва',
  'ff--tag-urlname' => 'В адресному рядку',
  'ff--tag-description' => 'Опис',
  'gs--tag-will-be-deleted-notes-remain' => 'Тег «$[tag]» буде вилучений із дописів, але самі дописи залишаться.',
  'gs--see-also-tag' => 'Див. також тег',
  'gs--tags-important' => 'важливі',
  'gs--tags-all' => 'всі',
  'gs--tags' => 'Теги',
  
  // most commented and favourites
  'pt--most-commented' => 'Найбільш коментовані за $[period.periodname]',
  'nm--most-commented' => 'Обговорюване',
  'pt--most-read' => 'Найбільш читані за $[period.periodname]',
  'nm--most-read' => 'Популярне',
  'pt--favourites' => 'Уподобане',
  'nm--favourites' => 'Уподобане',
  'gs--no-favourites' => 'Уподобаного немає.',
  
  // generic posts pages
  'nm--pages' => 'Сторінки',
  'gs--next-page' => 'наступна',
  'gs--prev-page' => 'попередня',
  'gs--earlier' => 'Раніше',
  'gs--later' => 'Пізніше',
  'pt--n-posts' => '$[number.cardinal]',
  'pt--no-posts' => 'Немає дописів',

  // search
  'pt--search' => 'Пошук',
  'pt--search-query-empty' => 'Нічого шукати',
  'pt--search-query-too-short' => 'Надто короткий текст',
  'gs--found-for-query' => 'за запитом',
  'gs--search-query-empty' => 'Нічого шукати, напишіть що-небудь',
  'gs--search-query-too-short' => 'Надто короткий текст, напишіть хоча б 4 літери.',
  'gs--nothing-found' => 'Нічого не знайдено.',
  'gs--many-posts' => 'Багато дописів',
  'pt--search-results' => 'Результати пошуку',
  
  // password, sessions, settings
  'pt--password' => 'Пароль',
  'pt--password-for-blog' => 'Пароль для доступу до блогу',
  'ff--old-password' => 'Старий пароль',
  'ff--new-password' => 'Новий пароль',
  'fb--change' => 'Змінити',
  'gs--password-changed' => 'Пароль змінено',
  'er--could-not-change-password' => 'Не вийшло змінити пароль',
  'er--no-password-entered' => 'Ви не ввели пароль',
  'er--wrong-password' => 'Неправильний пароль',
  'ff--displayed-as-plain-text' => 'відображається під час введення',
  'er--settings-not-saved' => 'Налаштування не збережено',

  'pt--sessions' => 'Відкриті сесії',
  'gs--sessions-description' => 'Коли ви заходите під своїм паролем на декількох пристроях або за допомогою декількох браузерів, тут відображається список усіх таких сеансів. Якщо якись з них викликає підозру, завершіть усі сесії окрім поточної, а потім змініть пароль від блогу.',
  'gs--sessions-browser-or-device' => 'Браузер чи пристрій',
  'gs--sessions-when' => 'Коли',
  'gs--sessions-from-where' => 'Звідки',
  'gs--locally' => 'локально',
  'gs--unknown' => 'невідомий',
  'fb--end-all-sessions-but-this' => 'Завершити всі сеанси окрім поточного',
  'gs--ua-iphone' => 'Айфон',
  'gs--ua-ipad' => 'Айпад',
  'gs--ua-opera' => 'Опера',
  'gs--ua-firefox' => 'Фаєрфокс',
  'gs--ua-chrome' => 'Хром',
  'gs--ua-safari' => 'Сафарі',
  'gs--ua-unknown' => 'Невід.',
  'gs--ua-for-mac' => 'на Маці',

  'pt--settings' => 'Налаштування',
  'ff--language' => 'Мова',
  'ff--theme' => 'Оформлення',
  'ff--theme-how-to' => 'Як створити свою тему?',
  'ff--theme-selector-wants-js' => 'Для выбору теми оформлення, увімкніть у браузері підтримку скриптів (JavaScript).',
  'ff--posts' => 'Дописи',
  'ff--items-per-page-after' => 'на сторінці',
  'ff--show-sharing-buttons' => 'Показувати кнопки надсилання в соцмережі',
  'ff--comments' => 'Коментарі',
  'ff--comments-enable' => 'Дозволяти',
  'ff--only-for-recent-posts' => 'тільки до свіжих дописів',
  'ff--send-to-address' => 'надсилати поштою на адресу:',
  'ff--administration' => 'Адміністрування:',
  'gs--password' => 'пароль',
  'gs--db-connection' => 'зʼєднання з базою',

  'ff--blog-title' => 'Назва блогу',
  'ff--blog-description' => 'Коротко про блог',
  'ff--blog-author' => 'Автор',

  'pt--database' => 'База даних',
  'ff--db-host' => 'Сервер',
  'ff--db-username-and-password' => 'Імʼя користувача і пароль',
  'ff--db-name' => 'Назва бази',
  'fb--connect-to-this-db' => 'Підключитися з цими параметрами',
  'er--cannot-save-data' => 'Не вдається зберегти відомості',
  
  'ff--changing-sidebar' => 'Як змінити цю колонку?',
  
  // welcome
  'pt--welcome' => 'Готово!',
  'pt--welcome-text-pre' => 'Блог створений. ',
  'pt--welcome-text-href-write' => 'Напишіть',
  'pt--welcome-text-or' => ' чи ',
  'pt--welcome-text-href-settings' => 'налаштуйте що-небудь',
  'pt--welcome-text-post' => '.',

  // need for password
  'gs--need-password' => 'Увійдіть зі своїм паролем',
  'ff--public-computer' => 'Чужий компʼютер',
  'gs--need-password-for-action' => 'Щоб $[action], увійдіть зі своїм паролем',
  'gs--np-action-write' => 'створити допис',
  'gs--np-action-note-edit' => 'редагувати допис',
  'gs--np-action-comment-edit' => 'редагувати цей коментар',
  'gs--np-action-comment-reply' => 'відповісти на цей коментар',
  'gs--np-action-drafts' => 'відкрити чернетки',
  'gs--np-action-draft' => 'відкрити цю чернетку',
  'gs--np-action-tag-edit' => 'редагувати цей тег',
  'gs--np-action-settings' => 'налаштовувати блог',
  'gs--np-action-password' => 'змінювати пароль',
  'gs--np-action-database' => 'змінювати параметри бази даних',
  'gs--np-action-sessions' => 'переглядати сеанси',
  'gs--frontpage' => 'Головна сторінка',
  
  // form buttons
  'fb--submit' => 'Надіслати',
  'fb--save-changes' => 'Зберегти зміни',
  'fb--save-and-preview' => 'Зберегти та переглянути',
  'fb--publish' => 'Опублікувати',
  'fb--publish-draft' => 'Опублікувати допис',
  'fb--select' => 'Обрати',
  'fb--apply' => 'Застосувати',
  'fb--delete' => 'Видалити',
  'fb--sign-in' => 'Увійти',
  'fb--sign-out' => 'Вийти',
  
  // time
  'pt--default-timezone' => 'Стандартний часовий пояс',
  'gs--e2-stores-each-posts-timezone' => 'Е2 зберігає часовий пояс окремо для кажного допису.',
  'gs--e2-autodetects-timezone' => 'Під час публікації часовий пояс зазвичай визначається автоматично. А у разі невдачі використовується обраний тут часовий пояс.',

  'tt--from-the-future' => 'Із майбутнього',
  'tt--just-published' => 'Тільки-но',
  'tt--one-minute-ago' => 'Хвилину тому',
  'tt--minutes-ago' => '$[minutes.cardinal] тому',
  'tt--one-hour-ago' => 'Годину тому',
  'tt--hours-ago' => '$[hours.cardinal] тому',
  'tt--today' => 'Сьогодні',
  'tt--today-at' => 'Сьогодні о $[time]',
  'tt--date' => '$[day] $[month.monthname.genitive]',
  'tt--date-and-time' => '$[day] $[month.monthname.genitive], $[time]',
  'tt--date-year-and-time' => '$[day] $[month.monthname.genitive] $[year], $[time]',

  'tt--zone-pt' => 'Тихоокеанський час',
  'tt--zone-mt' => 'Гірський час',
  'tt--zone-ct' => 'Центральний час',
  'tt--zone-et' => 'Східний час',
  'tt--zone-gmt' => 'Час за Гринвічем',
  'tt--zone-cet' => 'Центрально-європейский час',
  'tt--zone-eet' => 'Східно-європейский час',
  'tt--zone-msk' => 'Московский час',
  'tt--zone-ekt' => 'Челябінський час',
  'gs--timezone-offset-hours' => 'г',
  'gs--timezone-offset-minutes' => 'хв',
  
  // mail
  'em--comment-new-to-author-subject' => '$[commenter] коментує $[note-title]',
  'em--comment-new-to-public-subject' => '$[commenter] коментує $[note-title]',
  'em--comment-reply-to-public-subject' => '$[blog-author] відповідає на коментар',
  'em--comment-reply' => '$[note-title] ($[blog-author] відповів)',
  'em--created-automatically' => 'Листа створено автоматчно.',
  'em--unsubscribe' => 'Відписатися від обговорення',
  'em--reply' => 'Відповісти',
  'em--comment-replied-at' => 'Коментар, на який відповів автор',
  
  // rss
  'nf--comments-on-this-post' => 'Коментар до цього допису',
  'gs--comments-on-post' => 'коментарі до допису',
  'gs--comment-on-post' => 'коментар до допису',
  'gs--posts-tagged' => 'дописи з тегом',
  'gs--search-results' => 'результати пошуку',
  
  // social networks
  'sn--twitter-verb' => 'Твітнути',
  'sn--facebook-verb' => 'Поділитися',
  'sn--gplus-verb' => 'Плюсанути',
  'sn--vkontakte-verb' => 'Поділитися',
  'sn--telegram-verb' => 'Надіслати',
  'sn--pinterest-verb' => 'Запінити',

  // umacros
  'um--month' => '$[month.monthname]',
  'um--month-short' => '$[month.monthname.short]',
  'um--month-g' => '$[month.monthname.genitive]',
  
  // more strings
  'gs--no-such-notes' => 'Таких дописів немає.',
  'pt--page-not-found' => 'Сторінку не знайдено',
  'gs--page-not-found' => 'Сторінку не знайдено.',
  
  'er--cannot-find-db' => 'Не можу знайти базу даних',
  'er--cannot-connect-to-db' => 'Не можу зʼєднатися з базою даних',
  'er--error-in-query' => 'Помилка під час запиту',
  'er--error-occurred' => 'Сталася помилка',
  'er--too-many-errors' => 'Надто багато помилок',
  'gs--rss' => 'РСС',
  
  'gs--pgt' => 'Час генерації',
  'gs--seconds-contraction' => 'с',
  'gs--updated-successfully' => 'Виконано оновлення з версії $[from] до версії $[to]',
  'gs--good-blogs' => 'Хороші блоги та сайти',
  
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
      'груд.', 'січ.', 'лют.', 'берез.', 'квіт.', 'трав.', 'черв.',
      'лип.', 'серп.', 'верес.', 'жовт.', 'листоп.', 'груд.', 'січ.'
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
  /**/if ('year' == $period) return 'рік';
  elseif ('month' == $period) return 'місяць';
  elseif ('week' == $period) return 'тиждень';
  elseif ('day' == $period) return 'день';
  else return 'всю історію';
}


function e2lstr_cardinal ($number, $modifier = '', $string_id) {

  $what = $number;
  if ($string_id == 'pt--n-posts') $what = $number .' допи(с,си,сів)';
  if ($string_id == 'tt--minutes-ago') $what = $number .' хвилин(у,и,)';
  if ($string_id == 'tt--hours-ago') $what = $number .' годин(а,и,)';
  if ($string_id == 'gs--n-comments') $what = $number .' комента(р,рі,рів)';
  if ($string_id == 'gs--comments-n-new') $what = $number .' нови(й,х,х)';

  return e2_decline_for_number ($what);
  
}



?>
