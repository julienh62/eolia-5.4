<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mk', array (
  'validators' => 
  array (
    'This value should be false.' => 'Оваа вредност треба да биде лажна.',
    'This value should be true.' => 'Оваа вредност треба да биде вистинита.',
    'This value should be of type {{ type }}.' => 'Оваа вредност треба да биде од типот {{ type }}.',
    'This value should be blank.' => 'Оваа вредност треба да биде празна.',
    'The value you selected is not a valid choice.' => 'Вредноста што ја одбравте не е валиден избор.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Мора да одберете најмалку {{ limit }} избор.|Мора да одберете најмалку {{ limit }} изброи.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Може да одберете најмногу {{ limit }} избор.|Мора да одберете најмногу {{ limit }} избори.',
    'One or more of the given values is invalid.' => 'Една или повеќе од дадените вредности не се валидни.',
    'This field was not expected.' => 'Ова поле не беше очекувано.',
    'This field is missing.' => 'Ова поле недостига.',
    'This value is not a valid date.' => 'Оваа вредност не е валиден датум.',
    'This value is not a valid datetime.' => 'Оваа вредност не е валиден датум и време.',
    'This value is not a valid email address.' => 'Оваа вредност не е валидна адреса за е-пошта.',
    'The file could not be found.' => 'Датотеката не е најдена.',
    'The file is not readable.' => 'Датотеката не може да биде прочитана.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Датотеката е премногу голема ({{ size }} {{ suffix }}). Максималната дозволена големина е {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Миме типот на датотеката не е валиден ({{ type }}). Дозволените миме типови се {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Оваа вредност треба да биде {{ limit }} или помалку.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Оваа вредност е предолга. Треба да содржи {{ limit }} карактер или помалку.|Оваа вредност е предолга. Треба да содржи {{ limit }} карактери или помалку.',
    'This value should be {{ limit }} or more.' => 'Оваа вредност треба да е {{ limit }} или повеќе.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Оваа вредност е прекратка. Треба да содржи {{ limit }} карактер или повеќе.|Оваа вредност е прекратка. Треба да содржи {{ limit }} карактери или повеќе.',
    'This value should not be blank.' => 'Ова поле не може да биде празно.',
    'This value should not be null.' => 'Оваа вредност не може да биде ништо (null).',
    'This value should be null.' => 'Оваа вредност треба да е ништо (null).',
    'This value is not valid.' => 'Оваа вредност не е валидна.',
    'This value is not a valid time.' => 'Оваа вредност не е валидно време.',
    'This value is not a valid URL.' => 'Оваа вредност не е валиден URL.',
    'The two values should be equal.' => 'Двете вредности треба да се еднакви.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Датотеката е премногу голема. Максималната дозволена големина е {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Датотеката е премногу голема.',
    'The file could not be uploaded.' => 'Датотеката не може да биде подигната.',
    'This value should be a valid number.' => 'Оваа вредност треба да е валиден број.',
    'This file is not a valid image.' => 'Оваа датотека не е валидна слика.',
    'This is not a valid IP address.' => 'Ова не е валидна IP адреса.',
    'This value is not a valid language.' => 'Оваа вредност не е валиден јазик.',
    'This value is not a valid locale.' => 'Оваа вредност не е валидна локализација.',
    'This value is not a valid country.' => 'Оваа вредност не е валидна земја.',
    'This value is already used.' => 'Оваа вредност веќе се користи.',
    'The size of the image could not be detected.' => 'Големината на сликата не може да се детектира.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширината на сликата е преголема ({{ width }}px). Максималната дозволена ширина е {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширината на сликата е премала ({{ width }}px). Минималната дозволена ширина е {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Висината на сликата е преголема ({{ height }}px). Максималната дозволена висина е {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Висината на сликата е премала ({{ height }}px). Минималната дозволена висина е {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Оваа вредност треба да биде сегашната лозинка на корисникот.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Оваа вредност треба да има точно {{ limit }} карактер.|Оваа вредност треба да има точно {{ limit }} карактери.',
    'The file was only partially uploaded.' => 'Датотеката е само делумно подигната.',
    'No file was uploaded.' => 'Датотеката не е подигната.',
    'No temporary folder was configured in php.ini.' => 'Ниту една привремена папка не е конфигурирана во php.ini.',
    'Cannot write temporary file to disk.' => 'Не може да се напише привремена датотека на дискот.',
    'A PHP extension caused the upload to fail.' => 'PHP екстензијата предизвика подигнувањето да биде неуспешно.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Оваа колекција треба да содржи {{ limit }} елемент или повеќе.|Оваа колекција треба да содржи {{ limit }} елементи или повеќе.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Оваа колекција треба да содржи {{ limit }} елемент или помалку.|Оваа колекција треба да содржи {{ limit }} елементи или помалку.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Оваа колекција треба да содржи точно {{ limit }} елемент.|Оваа колекција треба да содржи точно {{ limit }} елементи.',
    'Invalid card number.' => 'Бројот на картичката не е валиден.',
    'Unsupported card type or invalid card number.' => 'Неподдржан тип на картичка или бројот на картичката не е валиден.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ова не е валиден број на меѓународна банкарска сметка (IBAN).',
    'This value is not a valid ISBN-10.' => 'Оваа вредност не е валиден ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Оваа вредност не е валиден ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Оваа вредност не е ниту валиден ISBN-10 ниту валиден ISBN-13.',
    'This value is not a valid ISSN.' => 'Оваа вредност не е валиден ISSN.',
    'This value is not a valid currency.' => 'Оваа вредност не е валидна валута.',
    'This value should be equal to {{ compared_value }}.' => 'Оваа вредност треба да биде еднаква на {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Оваа вредност треба да е поголема од {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Оваа вредност треба да е поголема или еднаква на {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Оваа вредност треба да е идентична на {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Оваа вредност треба да е помала од {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Оваа вредност треба да е помала или еднаква на {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Оваа вредност треба да не биде еднаква на {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Оваа вредност треба да не биде идентична со {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Соодносот на сликата е преголем ({{ ratio }}).Максималниот дозволен сооднос е {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Соодносот на сликата е премал ({{ ratio }}). Минималниот дозволен сооднос е {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Сликата е квадратна ({{ width }}x{{ height }}px). Квадратни слики не се дозволени.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Сликата е ориентирана кон пејзаж ({{ width }}x{{ height }}px). Сликите ориентирани кон пејзаж не се дозволени.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Сликата е ориентирана кон портрет ({{ width }}x{{ height }}px). Сликите ориентирани кон портрет не се дозволени.',
    'An empty file is not allowed.' => 'Празна датотека не е дозволена.',
    'The host could not be resolved.' => 'Хостот е недостапен.',
    'This value does not match the expected {{ charset }} charset.' => 'Оваа вредност не се совпаѓа со очекуваниот {{ charset }} сет на карактери (charset).',
    'This is not a valid Business Identifier Code (BIC).' => 'Ова не е валиден бизнис идентификациски код (BIC).',
    'Error' => 'Грешка',
    'This is not a valid UUID.' => 'Ова не е валиден универзален уникатен идентификатор (UUID).',
    'This value should be a multiple of {{ compared_value }}.' => 'Оваа вредност треба да биде повеќекратна од {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Овој бизнис идентификациски код (BIC) не е поврзан со IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Оваа вредност треба да биде валиден JSON.',
    'This collection should contain only unique elements.' => 'Оваа колекција треба да содржи само уникатни елементи.',
    'This value should be positive.' => 'Оваа вредност треба да биде позитивна.',
    'This value should be either positive or zero.' => 'Оваа вредност треба да биде или позитивна или нула.',
    'This value should be negative.' => 'Оваа вредност треба да биде негативна.',
    'This value should be either negative or zero.' => 'Оваа вредност треба да биде или негативна или нула.',
    'This value is not a valid timezone.' => 'Оваа вредност не е валидна временска зона.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Оваа лозинка е компромитирана и не смее да биде користена. Ве молиме употребете друга лозинка.',
    'This value should be between {{ min }} and {{ max }}.' => 'Оваа вредност треба да е помеѓу {{ min }} и {{ max }}.',
    'This value is not a valid hostname.' => 'Оваа вредност не е валидно име за мрежниот сметач (hostname).',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Бројот на елементи во оваа колекција треба да биде повеќекратен од {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Оваа вредност треба да задоволува најмалку едно од следните ограничувања:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Секој елемент од оваа колекција треба да задоволува сопствен сет на ограничувања.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Оваа вредност не е важечки меѓународен идентификациски број за хартии од вредност (ISIN).',
    'This value should be a valid expression.' => 'Оваа вредност треба да биде валиден израз.',
    'This value is not a valid CSS color.' => 'Оваа вредност не е валидна CSS боја.',
    'This value is not a valid CIDR notation.' => 'Оваа вредност не е валидна CIDR ознака.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Вредноста на мрежната маска (netmask) треба да биде помеѓу {{ min }} и {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Името на датотеката е предолго. Треба да има {{ filename_max_length }} карактер има помалку.|Името на датотеката е предолго. Треба да има {{ filename_max_length }} карактери или помалку.',
    'The password strength is too low. Please use a stronger password.' => 'Оваа лозинка е премногу едноставна. Ве молиме користете посилна лозинка.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Оваа вредност содржи карактери кои не се дозволени од тековното ниво на ограничување.',
    'Using invisible characters is not allowed.' => 'Користењето на невидливи знаци не е дозволено.',
    'Mixing numbers from different scripts is not allowed.' => 'Не е дозволено мешање на броеви од различни скрипти.',
    'Using hidden overlay characters is not allowed.' => 'Не е дозволено користење на скриени знаци за преклопување.',
    'This form should not contain extra fields.' => 'Оваа форма не треба да содржи дополнителни полиња.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Датотеката што се обидовте да ја подигнете е преголема. Ве молиме обидете се со помала датотека.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Вашиот CSRF токен е невалиден. Ве молиме испратете ја формата одново.',
    'This value is not a valid HTML5 color.' => 'Оваа вредност не е валидна HTML5 боја.',
    'Please enter a valid birthdate.' => 'Ве молиме внесете валидна дата на раѓање.',
    'The selected choice is invalid.' => 'Избраната опција е невалидна.',
    'The collection is invalid.' => 'Колекцијата е невалидна.',
    'Please select a valid color.' => 'Ве молиме одберете валидна боја.',
    'Please select a valid country.' => 'Ве молиме одберете валидна земја.',
    'Please select a valid currency.' => 'Ве молиме одберете валидна валута.',
    'Please choose a valid date interval.' => 'Ве молиме одберете валиден интервал помеѓу два датума.',
    'Please enter a valid date and time.' => 'Ве молиме внесете валиден датум и време.',
    'Please enter a valid date.' => 'Ве молиме внесете валиден датум.',
    'Please select a valid file.' => 'Ве молиме одберете валидна датотека.',
    'The hidden field is invalid.' => 'Скриеното поле е невалидно.',
    'Please enter an integer.' => 'Ве молиме внесете цел број.',
    'Please select a valid language.' => 'Ве молиме одберете валиден јазик.',
    'Please select a valid locale.' => 'Ве молиме одберете валидна локализација.',
    'Please enter a valid money amount.' => 'Ве молиме внесете валидна сума на пари.',
    'Please enter a number.' => 'Ве молиме внесете број.',
    'The password is invalid.' => 'Лозинката е погрешна.',
    'Please enter a percentage value.' => 'Ве молиме внесете процентуална вредност.',
    'The values do not match.' => 'Вредностите не се совпаѓаат.',
    'Please enter a valid time.' => 'Ве молиме внесете валидно време.',
    'Please select a valid timezone.' => 'Ве молиме одберете валидна временска зона.',
    'Please enter a valid URL.' => 'Ве молиме внесете валиден униформен локатор на ресурси (URL).',
    'Please enter a valid search term.' => 'Ве молиме внесете валиден термин за пребарување.',
    'Please provide a valid phone number.' => 'Ве молиме внесете валиден телефонски број.',
    'The checkbox has an invalid value.' => 'Полето за штиклирање има неважечка вредност.',
    'Please enter a valid email address.' => 'Ве молиме внесете валидна адреса за е-пошта.',
    'Please select a valid option.' => 'Ве молиме одберете валидна опција.',
    'Please select a valid range.' => 'Ве молиме одберете важечки опсег.',
    'Please enter a valid week.' => 'Ве молиме внесете валидна недела.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Настана грешка во автентикацијата.',
    'Authentication credentials could not be found.' => 'Акредитивите за автентикација не се пронајдени.',
    'Authentication request could not be processed due to a system problem.' => 'Барањето за автентикација не можеше да биде процесуирано заради системски проблем.',
    'Invalid credentials.' => 'Невалидни акредитиви.',
    'Cookie has already been used by someone else.' => 'Колачето е веќе користено од некој друг.',
    'Not privileged to request the resource.' => 'Немате привилегии за да го побарате ресурсот.',
    'Invalid CSRF token.' => 'Невалиден CSRF токен.',
    'No authentication provider found to support the authentication token.' => 'Не е пронајден провајдер за автентикација кој го поддржува токенот за автентикација.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесијата е недостапна, или е истечена, или колачињата не се овозможени.',
    'No token could be found.' => 'Токенот не е најден.',
    'Username could not be found.' => 'Корисничкото име не е најдено.',
    'Account has expired.' => 'Корисничката сметка е истечена.',
    'Credentials have expired.' => 'Акредитивите се истечени.',
    'Account is disabled.' => 'Корисничката сметка е деактивирана.',
    'Account is locked.' => 'Корисничката сметка е заклучена.',
    'Too many failed login attempts, please try again later.' => 'Премногу неуспешни обиди за најавување, ве молиме обидете се повторно подоцна.',
    'Invalid or expired login link.' => 'Неважечка или истечена врска за најавување.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Премногу неуспешни обиди за најавување, обидете се повторно за %minutes% минута.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Премногу неуспешни обиди за најавување, обидете се повторно за %minutes% минути.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini, ou le répertoire configuré n\'existe pas.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This value should be a valid expression.' => 'Cette valeur doit être une expression valide.',
    'This value is not a valid CSS color.' => 'Cette valeur n\'est pas une couleur CSS valide.',
    'This value is not a valid CIDR notation.' => 'Cette valeur n\'est pas une notation CIDR valide.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'La valeur du masque de réseau doit être comprise entre {{ min }} et {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Le nom du fichier est trop long. Il doit contenir au maximum {{ filename_max_length }} caractère.|Le nom de fichier est trop long. Il doit contenir au maximum {{ filename_max_length }} caractères.',
    'The password strength is too low. Please use a stronger password.' => 'La force du mot de passe est trop faible. Veuillez utiliser un mot de passe plus fort.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Cette valeur contient des caractères qui ne sont pas autorisés par le niveau de restriction actuel.',
    'Using invisible characters is not allowed.' => 'Utiliser des caractères invisibles n\'est pas autorisé.',
    'Mixing numbers from different scripts is not allowed.' => 'Mélanger des chiffres provenant de différents scripts n\'est pas autorisé.',
    'Using hidden overlay characters is not allowed.' => 'Utiliser des caractères de superposition cachés n\'est pas autorisé.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir de champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minutes.',
  ),
  'messages' => 
  array (
    'phone' => 'Téléphone',
    'full_name' => 'Nom complet',
    'Password' => 'Mot de passe',
    'name' => 'Nom',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
