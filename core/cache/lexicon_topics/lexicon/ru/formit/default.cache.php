<?php  return array (
  'formit' => 'FormIt',
  'formit.desc' => 'Посмотреть все заполненные формы',
  'area_formit' => 'FormIt',
  'area_formit_recaptcha' => 'FormIt reCaptcha',
  'formit.form' => 'форму',
  'formit.forms' => 'Формы',
  'formit.forms_desc' => 'Просмотреть все формы',
  'formit.form_view' => 'Посмотреть форму',
  'formit.form_remove' => 'Удалить форму',
  'formit.form_remove_confirm' => 'Вы уверены, что хотите удалить эту форму?',
  'formit.forms_remove' => 'Удалить формы',
  'formit.forms_remove_confirm' => 'Вы уверены, что хотите удалить все формы?',
  'formit.forms_clean' => 'Очистить формы',
  'formit.forms_clean_confirm' => 'Вы уверены, что хотите очистить все старые формы?',
  'formit.forms_export' => 'Экспорт Формы',
  'formit.form_encrypt' => 'Зашифровать форму(ы)',
  'formit.form_encrypt_confirm' => 'Вы уверены, что хотите зашифровать форму(ы)?',
  'formit.form_decrypt' => 'Отменить шифрование формы',
  'formit.form_decrypt_confirm' => 'Вы уверены, что хотите отменить шифрование формы?',
  'formit.view_ip' => 'Посмотреть все формы с этого IP',
  'formit.encryption' => 'Зашифрованная форма',
  'formit.encryptions' => 'Зашифрованные формы',
  'formit.encryptions_desc' => 'Посмотреть все зашифрованные и не зашифрованные формы.',
  'formit.label_form_name' => 'Название',
  'formit.label_form_name_desc' => 'Название формы.',
  'formit.label_form_values' => 'Значения',
  'formit.label_form_values_desc' => 'Значения формы.',
  'formit.label_form_ip' => 'IP адрес',
  'formit.label_form_ip_desc' => 'IP адрес посетителей, которые отправляли формы.',
  'formit.label_form_date' => 'Дата',
  'formit.label_form_date_desc' => 'Дата отправления формы',
  'formit.label_form_encrypted' => 'Зашифрована',
  'formit.label_form_encrypted_desc' => '',
  'formit.label_form_decrypted' => 'Не зашифрована',
  'formit.label_form_decrypted_desc' => '',
  'formit.label_form_total' => 'Всего',
  'formit.label_form_total_desc' => '',
  'formit.label_clean_label' => 'Удалить формы старше',
  'formit.label_clean_desc' => 'дней',
  'formit.label_export_form' => 'Форма',
  'formit.label_export_form_desc' => 'Выберите формы, которые необходимо экспортировать.',
  'formit.label_export_start_date' => 'От',
  'formit.label_export_start_date_desc' => 'Выберите дату, с которой будут экспортироваться формы.',
  'formit.label_export_end_date' => 'До',
  'formit.label_export_end_date_desc' => 'Выберите дату, до которой будут экспортироваться формы.',
  'formit.label_export_delimiter' => 'CSV разделитель',
  'formit.label_export_delimiter_desc' => 'Разделитель для столбцов в CSV. По умолчанию ";".',
  'formit.filter_form' => 'Выберите форму',
  'formit.filter_start_date' => 'Выберите начальную дату',
  'formit.filter_end_date' => 'Выберите конечную дату',
  'formit.encryption_unavailable' => 'Функции PHP OpenSSL openssl_encrypt и openssl_decrypt недоступны. Пожалуйста, установите PHP OpenSSL на вашем сервере. Смотрите http://www.php.net/manual/en/openssl.requirements.php для более подробной информации.',
  'formit.encryption_unavailable_warning' => '<strong>Внимание</strong>: Функции PHP OpenSSL openssl_encrypt и openssl_decrypt недоступны. Это означает, что вы не можете использовать шифрование в ваших формах. Пожалуйста, установите PHP OpenSSL на вашем сервере. Посетите <a href="http://www.php.net/manual/en/openssl.requirements.php" target="_blank">эту страницу</a> для более подробной информации.',
  'formit.forms_clean_desc' => 'Европейский <a href="https://ec.europa.eu/commission/priorities/justice-and-fundamental-rights/data-protection/2018-reform-eu-data-protection-rules_en" target="_blank">Общий регламент по защите данных (GDPR)</a> требует, чтобы личные данные, которые больше не используются, были удалены. Этот инструмент позволяет удалять сохраненные формы старше указанных ниже дней. Это действие не может быть отменено!',
  'formit.forms_clean_executing' => 'Очистка форм',
  'formit.forms_clean_success' => 'Удалено форм: [[+amount]].',
  'formit.export_failed' => 'Не удалось экспортировать формы, пожалуйста, попробуйте еще раз.',
  'formit.export_dir_failed' => 'Произошла ошибка при экспорте формы, не удалось создать папку экспорта.',
  'formit.contains' => 'Поле должно содержать фразу "[[+value]]".',
  'formit.email_invalid' => 'Пожалуйста, введите правильный адрес электронной почты.',
  'formit.email_invalid_domain' => 'Ваш адрес электронной почты не является допустимым именем домена.',
  'formit.email_no_recipient' => 'Пожалуйста, укажите получателя или получателей электронной почты.',
  'formit.email_not_sent' => 'Произошла ошибка при попытке отправить почту.',
  'formit.email_tpl_nf' => 'Пожалуйста, укажите шаблон письма.',
  'formit.field_not_empty' => 'Это поле должно быть пустым.',
  'formit.field_required' => 'Это поле обязательно для заполнения.',
  'formit.math_incorrect' => 'Неправильный ответ!',
  'formit.math_field_nf' => '[[+field]] поле ввода не указано в форме.',
  'formit.max_length' => 'Это поле не может быть длиннее, чем [[+length]] символов.',
  'formit.max_value' => 'Это поле не может быть больше, чем [[+value]].',
  'formit.min_length' => 'Это поле должно быть не меньше [[+length]] символов.',
  'formit.min_value' => 'Это поле не может быть меньше, чем [[+value]].',
  'formit.not_date' => 'Это поле должно быть действительной датой.',
  'formit.not_lowercase' => 'Все символы в этом поле должны быть в нижнем регистре.',
  'formit.not_number' => 'Это поле должно быть допустимым числом.',
  'formit.not_uppercase' => 'Все символы в этом поле должны быть заглавными.',
  'formit.password_dont_match' => 'Пароли не совпадают.',
  'formit.password_not_confirmed' => 'Пожалуйста, подтвердите свой пароль',
  'formit.prioritized_group_text' => 'Постоянные посетители',
  'formit.range_invalid' => 'Неверный диапазон.',
  'formit.range' => 'Ваше значение должно быть между [[+min]] и [[+max]].',
  'formit.recaptcha_err_load' => 'Невозможно загрузить класс reCaptcha.',
  'formit.spam_blocked' => 'Ваше сообщение было заблокировано спам фильтром: ',
  'formit.spam_marked' => ' - помечено как спам.',
  'formit.username_taken' => 'Имя пользователя уже занято. Пожалуйста, выберите другое.',
  'formit.not_regexp' => 'Ваше значение не совпадает с предполагаемым форматом.',
  'formit.all_group_text' => 'Все страны',
  'formit.storeAttachment_mediasource_error' => 'Источник медиа не найден! Id источник: ',
  'formit.storeAttachment_access_error' => 'Папка не доступна для загрузки! Проверьте права на папку: ',
  'formit.migrate' => 'Перенос данных с зашифрованных форм',
  'formit.migrate_desc' => 'Обновление до FormIt 3.0 также обновит метод шифрования, используемый для шифрования отправленных данных форм. FormIt 2.x использует mcrypt для шифрования и дешифрования, а в 3.0 использует методы openssl. Для правильной работы зашифрованные в настоящее время формы необходимо перенести из mcrypt в openssl.',
  'formit.migrate_alert' => 'FormIt успешно обновлен, но отправленные вами зашифрованные формы необходимо перенести. Нажмите сюда, чтобы начать перенос.',
  'formit.migrate_status' => 'Статус',
  'formit.migrate_running' => 'В настоящее время выполняется процесс переноса данных в фоновом режиме. Пожалуйста, держите эту страницу открытой в вашем браузере. НЕ ЗАКРЫВАЙТЕ ЭТУ СТРАНИЦУ!',
  'formit.migrate_success' => 'Перенос завершен',
  'formit.migrate_success_msg' => 'Все ваши зашифрованные формы были успешно перенесены.',
);