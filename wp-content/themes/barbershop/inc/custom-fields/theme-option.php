<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_tab(__('Шапка'), array(

            Field::make('separator', 'social_line', __('Ссылки на социальные сети')),
            Field::make('text', 'social_link1', 'Ссылка VK')->set_width(25),
            Field::make('text', 'social_link2', 'Ссылка OK')->set_width(25),
            Field::make('text', 'social_link3', 'Ссылка INSTA')->set_width(25),
            Field::make('text', 'social_link4', 'Ссылка FACEBOOK')->set_width(25),
            Field::make('text', 'social_link5', 'Ссылка YOUTUBE')->set_width(25),
            Field::make('text', 'social_link6', 'Ссылка Какая то иконка')->set_width(25),
            Field::make('text', 'social_link7', 'Ссылка EMAIL')->set_width(25),
            Field::make('separator', 'contact_header_line', __('Почта и телефон')),
            Field::make('text', 'contact1', 'Почта')->set_width(25),
            Field::make('text', 'contact2', 'Телефон 1')->set_width(25),
            Field::make('text', 'contact3', 'Телефон 2')->set_width(25),
            Field::make('separator', 'slide_line', __('Слайдер на главной странице')),
            Field::make('complex', 'crb_slides', '')
                ->add_fields(array(
                    Field::make('text', 'title_first', 'Верхний заголовок')->set_width(50),
                    Field::make('text', 'title_home', 'Главный заголовок')->set_width(50),
                    Field::make('text', 'title_desc1', 'Описание первый блок')->set_width(50),
                    Field::make('text', 'title_desc2', 'Описание второго блока')->set_width(50),
                )),
        ))

        ->add_tab(__('Подвал'), array(

            Field::make('text', 'crb_facebook', __('Facebook URL')),
            Field::make('textarea', 'crb_footer', __('Footer Text'))
        ))
        ->add_tab(__('Партнеры'), array(
            Field::make('complex', 'crb_slide_theme_partner', '')
                ->add_fields(array(
                    Field::make('text', 'crb_theme_partner_title', __('Заголовок')),
                    Field::make('image', 'crb_theme_partner_image', __('Логотип'))->set_value_type('url'),
                    Field::make('text', 'crb_theme_partner_link', __('Ссылка на страницу партнера'))
                ))
        ));
}
