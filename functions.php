<?php
$yandexMapApiKey = '79df2c92-3e66-4b0e-a9b9-5f9c936363ec';
wp_enqueue_script('yandexmap-api', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey='.$yandexMapApiKey);
wp_enqueue_script('yandex-map', get_template_directory_uri() . '/assets/js/yandex_map.js');
wp_enqueue_script('burger-menu', get_template_directory_uri() . '/assets/js/burger_menu.js',array( 'jquery'));

wp_enqueue_script(
    'jquery-validate',
    get_template_directory_uri() . '/assets/js/lib/jquery.validate.min.js',
    array( 'jquery' ),
    false,
    true
);
wp_enqueue_script('contact-form',
    get_template_directory_uri() . '/assets/js/contact_form.js',
    array( 'jquery','jquery-validate')
);