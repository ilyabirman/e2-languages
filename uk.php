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
  'gs--user-fixes-needed' => 'Стоп, треба дещо виправити.',
  'gs--following-folders-missing' => 'Не знайдено ці папки із дистрибутиву рушія:',
  'gs--could-not-create-them-automatically' => 'Їх не вдалося створити автоматично, оскільки у вас недостатньо прав. Завантажте на сервер повний дистрибутив.',
  'gs--and-reload-installer' => 'І перезавантажте встановлювач',
  'fb--begin' => 'Почати блог',
  'fb--retry' => 'Спробувати ще раз',
  'gs--db-parameters' => 'Параметри бази даних від хостера',
  'gs--ask-hoster-how-to-create-db' => 'Якщо у вас немає бази даних, уточніть у хостера, як її створити',
  'er--double-check-db-params' => 'Перевірте реквізити бази ще раз',
  'gs--instantiated-version' => 'Інстанційована версія',
  'pt--installer-loading' => 'Завантаження...',
  'gs--database' => 'База даних',
  'gs--password-for-blog' => 'Пароль для доступу до блогу',
  'gs--data-exists' => 'У цій базі вже є блог. Встановлювач просто підключиться до неї.',
  'er--db-data-incomplete' => 'У цій базі вже є блог, але його дані неповні. Можливо, вона використовувалась в іншій версії Егеї. Встановіть відповідну версію Егеї та оновіть, якщо потрібно. Для чистого встановлення потрібна чиста база.',

  // diags
  'et--fix-permissions-on-server' => 'Налаштуйте права на сервері',
  'gs--enable-write-permissions-for-the-following' => 'Будь ласка, надайте права на запис до:',
  
  // sign in
  'pt--sign-in' => 'Вхід',
  'er--cannot-write-auth-data' => 'Не вдається записати дані автентифікації',

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
  'bt--close-comments-to-post' => 'Заборонити коментування допису',
  'bt--open-comments-to-post' => 'Дозволити коментування допису',
  'pt--new-post' => 'Новий допис',
  'pt--edit-post' => 'Редагування допису',
  'er--post-must-have-title-and-text' => 'У допису мають бути назва й текст',
  'er--error-updating-post' => 'Не вдалося змінити допис',
  'er--error-deleting-post-tag-info' => 'Не вдалося видалити дані про теги допису',
  'er--wrong-datetime-format' => 'Неправильний формат дати й часу. Має бути: «ДД.ММ.РРРР ГГ:ХХ:СС»',
  'er--cannot-get-post-from-db' => 'Не вдалось отримати допис із бази',
  'er--images-only-supported' => 'Підтримуються лише зображення',
  'er--cannot-create-thumbnail' => 'Не вдалося створити ескіз зображення',
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

  'ff--gmt-offset' => 'Різниця з Гринвічем',
  'ff--with-dst' => '+1 влітку',
  'ff--post-time' => 'Час публікації',
  
  'pt--post-deletion' => 'Видалення допису',
  'gs--post-will-be-deleted' => 'Буде видалено допис «$[post]» і всі коментарі до нього.',

  // frontpage 
  'er--cannot-show-latest-notes' => 'Не вдалося завантажити останні дописи',
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
  'gs--draft-will-be-deleted' => 'Чернетку «$[draft]» буде видалено.',
  
  // comments
  'pt--new-comment' => 'Новий коментар',
  'pt--edit-comment' => 'Редагування коментаря',
  'pt--reply-to-comment' => 'Відповідь на коментар',
  'pt--edit-reply-to-comment' => 'Редагування відповіді на коментар',
  'pt--unsubscription-done' => 'Вдалося!',
  'pt--unsubscription-failed' => 'Не вдалося',
  'gs--you-are-not-subscribed' => 'Схоже, ви не підписані на коментарі до цього допису',
  'gs--you-are-no-longer-subscribed' => 'Ви більше не підписані на коментарі до цього допису',
  'gs--unsubscription-didnt-work' => 'Чомусь не вдалося скасувати підписку',
  'gs--comment-not-found' => 'Коментаря не знайдено',
  'gs--post-not-found' => 'Допису не знайдено',
  'gs--comment-too-long' => 'Задовгий коментар',
  'gs--comment-too-long-description' => 'Ваш коментар не збережено, оскільки він задовгий.',
  'gs--comment-double-post' => 'Повторний коментар',
  'gs--comment-double-post-description' => 'Ви надіслали цей коментар двічі, тому збережено лише один.',
  'gs--comment-spam-suspect' => 'Коментар схожий на спам',
  'gs--comment-spam-suspect-description' => 'На жаль, коментар не надіслано, оскільки робот вирішив, що це спам.',
  'gs--you-are-already-subscribed' => 'Ви вже підписані на коментарі. Ви можете будь-коли скасувати підписку, перейшовши за посиланням у листі про коментар.',
  'er--post-not-commentable' => 'Цей допис не можна коментувати',
  'er--name-email-text-required' => 'Імʼя, ел. адреса та текст коментаря обовʼязкові',
  'ff--notify-subscribers' => 'Повідомити коментатора й інших підписників',
  'gs--your-comment' => 'Ваш коментар',
  'ff--full-name' => 'Імʼя та прізвище',
  'ff--email' => 'Ел. адреса',
  'gs--email-wont-be-published' => 'адресу не буде опубліковано',
  'gs--no-html' => 'ХТМЛ не працює',
  'ff--subscribe-to-others-comments' => 'Отримувати коментарі інших поштою',
  'ff--text-of-your-comment' => 'Текст вашого коментаря',
  'gs--n-comments' => '$[number.cardinal]',
  'gs--no-comments' => 'немає коментарів',
  'gs--comments-all-one-new' => 'новий',
  'gs--comments-all-new' => 'нові',
  'gs--comments-n-new' => '$[number.cardinal]',
  
  // tags
  'pt--tags' => 'Теги',
  'pt--posts-tagged' => 'Дописи з тегом',
  'tt--edit-tag' => 'Редагувати параметри й опис тегу',
  'gs--tagged' => 'з тегом',
  'pt--tag-edit' => 'Редагування тегу',
  'pt--tag-delete' => 'Видалення тегу',
  'pt--posts-without-tags' => 'Дописи без тегів',
  'gs--no-tags' => 'Тегів немає.',
  'gs--no-posts-without-tags' => 'Немає дописів без тегів.',
  'er--cannot-rename-tag' => 'Така назва чи посилання вже використовуються з іншим тегом',
  'ff--tag-name' => 'Назва',
  'ff--tag-urlname' => 'В адресному рядку',
  'ff--tag-description' => 'Опис',
  'gs--tag-will-be-deleted-notes-remain' => 'Тег «$[tag]» буде вилучено із дописів, але самі дописи залишаться.',
  'gs--see-also-tag' => 'Див. також тег',
  'gs--tags-important' => 'важливі',
  'gs--tags-all' => 'усі',
  'gs--tags' => 'Теги',
  
  // most commented and favourites
  'pt--most-commented' => 'Найбільш обговорювані за $[period.periodname]',
  'nm--most-commented' => 'Найбільш обговорюване',
  'pt--most-read' => 'Найпопулярніше за $[period.periodname]',
  'nm--most-read' => 'Популярне',
  'pt--favourites' => 'Обране',
  'nm--favourites' => 'Обране',
  'gs--no-favourites' => 'Нічого не обрано.',
  
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
  'pt--search-query-empty' => 'Напишіть що-небудь',
  'pt--search-query-too-short' => 'Запит закороткий',
  'gs--found-for-query' => 'за запитом',
  'gs--search-query-empty' => 'Напишіть що-небудь',
  'gs--search-query-too-short' => 'Закороткий запит, напишіть хоча б 4 літери.',
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
  'er--could-not-change-password' => 'Не вдалося змінити пароль',
  'er--no-password-entered' => 'Ви не ввели пароль',
  'er--wrong-password' => 'Неправильний пароль',
  'ff--displayed-as-plain-text' => 'відображається під час введення',
  'er--settings-not-saved' => 'Налаштування не збережено',

  'pt--sessions' => 'Відкриті сесії',
  'gs--sessions-description' => 'Коли ви входите зі своїм паролем на кількох пристроях або в кількох браузерах, тут відображається список усіх цих сесій. Якщо якась із них здається вам підозрілою, завершіть усі сесії окрім поточної, а потім змініть свій пароль.',
  'gs--sessions-browser-or-device' => 'Браузер або пристрій',
  'gs--sessions-when' => 'Коли',
  'gs--sessions-from-where' => 'Звідки',
  'gs--locally' => 'локально',
  'gs--unknown' => 'невідомо',
  'fb--end-all-sessions-but-this' => 'Завершити всі сесії крім поточної',
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
  'ff--theme-selector-wants-js' => 'Щоб вибрати тему, увімкніть у браузері підтримку скриптів (JavaScript).',
  'ff--posts' => 'Дописи',
  'ff--items-per-page-after' => 'на сторінку',
  'ff--show-sharing-buttons' => 'Показувати кнопки поширення в соцмережах',
  'ff--comments' => 'Коментарі',
  'ff--comments-enable' => 'Дозволяти',
  'ff--only-for-recent-posts' => 'тільки до нових дописів',
  'ff--send-to-address' => 'надсилати на ел. адресу:',
  'ff--administration' => 'Адміністрування:',
  'gs--password' => 'пароль',
  'gs--db-connection' => 'з’єднання з базою',

  'ff--blog-title' => 'Назва блогу',
  'ff--blog-description' => 'Коротко про блог',
  'ff--blog-author' => 'Автор',

  'pt--database' => 'База даних',
  'ff--db-host' => 'Сервер',
  'ff--db-username-and-password' => 'Імʼя користувача й пароль',
  'ff--db-name' => 'Назва бази',
  'fb--connect-to-this-db' => 'Під’єднатися з цими параметрами',
  'er--cannot-save-data' => 'Не вдалося зберегти дані',
  
  'gs--drag-userpic-here' => 'Перетягніть сюди своє фото',
  
  // welcome
  'pt--welcome' => 'Готово!',
  'pt--welcome-text-pre' => 'Блог створено. ',
  'pt--welcome-text-href-write' => 'Напишіть',
  'pt--welcome-text-or' => ' або ',
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
  'gs--np-action-sessions' => 'переглядати сесії',
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
  'pt--default-timezone' => 'Часовий пояс за замовчуванням',
  'gs--e2-stores-each-posts-timezone' => 'Е2 зберігає часовий пояс окремо для кожного допису.',
  'gs--e2-autodetects-timezone' => 'Під час публікації часовий пояс має визначитись автоматично, але якщо не вдасться, буде використано пояс за замовчуванням.',

  'tt--from-the-future' => 'Із майбутнього',
  'tt--just-published' => 'Щойно',
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
  'tt--zone-cet' => 'Центрально-європейський час',
  'tt--zone-eet' => 'Київський час',
  'tt--zone-msk' => 'Московський час',
  'tt--zone-ekt' => 'Челябінський час',
  'gs--timezone-offset-hours' => 'год',
  'gs--timezone-offset-minutes' => 'хв',
  
  // mail
  'em--comment-new-to-author-subject' => '$[commenter] коментує $[note-title]',
  'em--comment-new-to-public-subject' => '$[commenter] коментує $[note-title]',
  'em--comment-reply-to-public-subject' => '$[blog-author] відповідає на коментар',
  'em--comment-reply' => '$[note-title] ($[blog-author] відповідає)',
  'em--created-automatically' => 'Листа створено автоматично.',
  'em--unsubscribe' => 'Відписатися від обговорення',
  'em--reply' => 'Відповісти',
  'em--comment-replied-at' => 'Коментар, на який відповів автор',
  
  // rss
  'nf--comments-on-this-post' => 'Коментарі до цього допису',
  'gs--comments-on-post' => 'коментарі до допису',
  'gs--comment-on-post' => 'коментар до допису',
  'gs--posts-tagged' => 'дописи з тегом',
  'gs--search-results' => 'результати пошуку',
  
  // social networks
  'sn--twitter-verb' => 'Твітнути',
  'sn--facebook-verb' => 'Поділитись',
  'sn--gplus-verb' => 'Плюсанути',
  'sn--vkontakte-verb' => 'Поділитись',
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
  'er--too-many-errors' => 'Забагато помилок',
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
      'гру', 'січ', 'лют', 'бер', 'кві', 'тра', 'чер',
      'лип', 'сер', 'вер', 'жов', 'лис', 'гру', 'січ'
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
