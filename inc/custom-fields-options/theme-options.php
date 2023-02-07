<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


// Default options page
$basic_options_container = Container::make('theme_options', __('Настройка контента'))
  ->add_tab(__("Контактная информация на сайте"), array(
    Field::make('text', 'crb_phone', __('Телефон'))
      ->set_width(100),
    Field::make('text', 'crb_phone2', __('Дополнительный телефон'))
      ->set_help_text('Обображается на странице контактов')
      ->set_width(100),
    Field::make('text', 'crb_phone_whatsapp', __('Телефон для whatsapp'))
      ->set_help_text('Обображается на странице техподдержки')
      ->set_width(50),
    Field::make('text', 'crb_phone_whatsapp2', __('Телефон для whatsapp без +, пробелов и скобок'))
      ->set_help_text('Необходимо для корректной работы ссылки')
      ->set_width(50),
    Field::make('text', 'crb_mail', __('Email')),
    Field::make('text', 'crb_address', __('Адрес'))
      ->set_width(50),
    Field::make('text', 'crb_address_time', __('Время работы магазина'))
      ->set_help_text('Обображается в футере')
      ->set_width(50),
    Field::make('text', 'crb_support_time_from', __('Время работы технической поддержки c'))
      ->set_width(50),
    Field::make('text', 'crb_support_time_to', __('до'))
      ->set_width(50),
    Field::make('text', 'crb_youtube', __('youtube'))
      ->set_width(50),
    Field::make('text', 'crb_telegram', __('telegram'))
      ->set_width(50),
    Field::make('text', 'crb_whatsapp', __('whatsapp'))
      ->set_width(50),
    Field::make('text', 'crb_vk', __('VK'))
      ->set_width(50),
  ))
  ->add_tab(__("Подключение скриптов в футер сайта"), array(
    Field::make('footer_scripts', 'crb_footer_script', __('Footer Scripts'))
      ->set_help_text('скрипты необходимо добавлять в открывающем и закрывающем теге script'),
  ))
  ->add_tab(__("Логотип и favicon"), array(
    Field::make('image', 'crb_logo', __('Логотип'))
      ->set_value_type('url')
      ->set_help_text('Отображается в хедере и футере')
      ->set_width(50),
    Field::make('image', 'crb_favicon', __('Favicon'))
      ->set_value_type('url')
      ->set_help_text('Отображается во вкладке браузера')
      ->set_width(50),
  ));
