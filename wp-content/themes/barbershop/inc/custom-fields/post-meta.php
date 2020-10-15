<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_post_meta');
function crb_attach_post_meta()
{

    // Страницы
    Container::make('post_meta', __('Настройка шапки'))
        ->show_on_page('2')
        ->add_fields(array(
            Field::make('image', 'crb_land_baner', __('Банер для главной страницы'))->set_value_type('url')->set_width(25),
            Field::make('text', 'crb_land_logo', __('Логотип'))->set_width(25),
            Field::make('text', 'crb_land_phone', __('Телефон'))->set_width(25),
            Field::make('text', 'crb_land_whatsapp', __('Ватсап'))->set_width(25),
            Field::make('rich_text', 'crb_land_adress', __('Адрес'))->set_width(50),
            Field::make('rich_text', 'crb_land_rasp', __('Расписание'))->set_width(50),
            Field::make('text', 'crb_land_insta', __('Инстаграмм название'))->set_width(50),
            Field::make('text', 'crb_land_insta_link', __('Инстаграмм ссылка'))->set_width(50),
        ));

    Container::make('post_meta', __('Настройка сервиса'))
        ->show_on_page('2')
        ->add_fields(array(
            Field::make('text', 'crb_land_s_heading', __('Заголовок блока')),
            Field::make('textarea', 'crb_land_s_desc', __('Описание'))->set_width(25),
            Field::make('complex', 'crb_land_s_icon', __('Иконки блока'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'crb_land_s_icon_text', __('Вид услуги')),
                ))
        ));

    Container::make('post_meta', __('Настройка прайса'))
        ->show_on_page('2')
        ->add_fields(array(
            Field::make('text', 'crb_land_p_heading', __('Заголовок блока')),
            Field::make('complex', 'crb_land_p_block', __('Блок прайса'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'crb_land_p_text', __('Вид услуги')),
                    Field::make('text', 'crb_land_p_price', __('Цена')),
                ))
        ));

    Container::make('post_meta', __('Настройка блока скидки'))
        ->show_on_page('2')
        ->add_fields(array(
            Field::make('rich_text', 'crb_land_sl_desc', __('Описание блока'))->set_width(75),
            Field::make('image', 'crb_land_sl_bg', __('Банер для блока со скидкой'))->set_value_type('url')->set_width(25),
        ));



    Container::make('post_meta', __('Настройка Продукции'))
        ->show_on_page('2')
        ->add_fields(array(
            Field::make('text', 'crb_land_pr_heading', __('Заголовок блока')),
            Field::make('complex', 'crb_land_pr_block', __('Блок продукции'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'crb_land_pr_text', __('Продукция')),
                    Field::make('text', 'crb_land_pr_price', __('Цена')),
                ))
        ));


    Container::make('post_meta', __('Подвал'))
        ->show_on_page('2')
        ->add_fields(array(
            Field::make('text', 'crb_land_f_about', __('Блок о нас')),
            Field::make('rich_text', 'crb_land_f_adress', __('Адрес в подвале')),
        ));
    // Страницы

}
