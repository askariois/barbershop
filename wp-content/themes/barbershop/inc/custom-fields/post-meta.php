<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_post_meta');
function crb_attach_post_meta()
{

    // Посты

    // Друзья фонда
    Container::make('post_meta', 'Друзья фонда')
        ->show_on_category('druzya-fonda')
        ->add_fields(array(
            Field::make('text', 'crb_druzya_fonda_title', __('Заголовок')),
            Field::make('textarea', 'crb_druzya_fonda_video', __('Iframe с ютуба')),
        ));
    // Друзья фонда

    // Программа
    Container::make('post_meta', __('Программа'))
        ->show_on_category('programm')
        ->add_fields(array(
            Field::make('complex', 'crb_post_content', __('Контент'))
                ->add_fields(array(
                    Field::make('text', 'crb_post_pansion_icon', __('Иконка заголовка')),
                    Field::make('text', 'crb_post_title', __('Заголовок')),
                    Field::make('rich_text', 'crb_post_redaktor', __('Внутренняя информация')),
                ))
        ));
    // Программа


    //Пансионаты
    Container::make('post_meta', __('Пансионаты'))
        ->show_on_category('pansionaty')
        ->add_fields(array(
            Field::make('complex', 'crb_post_pansion_content', __('Контент Пансионаты'))
                ->set_layout('tabbed-horizontal')
                ->add_fields('crb_post_pansion_content_1', 'Обычные блоки', array(
                    Field::make('text', 'crb_post_pansion_icon', __('Иконка заголовка')),
                    Field::make('text', 'crb_post_pansion_title', __('Заголовок')),
                    Field::make('rich_text', 'crb_post_pansion_redaktor', __('Внутренняя информация')),
                ))
                ->add_fields('crb_post_pansion_content_2', 'Блок со слайдером', array(
                    Field::make('text', 'crb_post_pansion_icon', __('Иконка заголовка')),
                    Field::make('text', 'crb_post_pansion_title', __('Заголовок')),
                    Field::make('rich_text', 'crb_post_pansion_redaktor', __('Внутренняя информация')),
                    Field::make('media_gallery', 'crb_media_gallery', __('Media Gallery'))
                ))
                ->add_fields('crb_post_pansion_content_3', 'Блок Отзыв', array(
                    Field::make('text', 'crb_post_pansion_icon', __('Иконка заголовка')),
                    Field::make('text', 'crb_post_pansion_title', __('Имя')),
                    Field::make('complex', 'crb_post_pansion_review', __('Контент Пансионаты'))
                        ->add_fields(array(
                            Field::make('text', 'crb_post_pansion_review_title', __('Имя')),
                            Field::make('text', 'crb_post_pansion_data', __('Дата публикации')),
                            Field::make('rich_text', 'crb_post_pansion_redaktor', __('Текст отзыва'))
                        ))
                ))
        ));
    //Пансионаты


    //Новости
    Container::make('post_meta', __('Загрузка контента на страницу Новости'))
        ->show_on_category('proekt')
           ->add_fields(array(
            Field::make('complex', 'crb_post_content', __('Контент'))
                ->add_fields(array(
                    Field::make('text', 'crb_post_pansion_icon', __('Иконка заголовка')),
                    Field::make('text', 'crb_post_title', __('Заголовок')),
                    Field::make('rich_text', 'crb_post_redaktor', __('Внутренняя информация')),
                ))
        ));
    //Новости

	    //Проекты
    Container::make('post_meta', __('Загрузка контента на страницу Проекты'))
        ->show_on_category('news')
        ->add_fields(array(
            Field::make('complex', 'crb_post_news_content', __('Отзывы'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('image', 'crb_post_news_image', __('Картинка'))->set_value_type('url'),
                    Field::make('rich_text', 'crb_post_news_redaktor', __('Внутренняя информация')),
                )),

            Field::make('complex', 'crb_post_news_slide', __('Слайдер'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('image', 'crb_post_news_slide_image', __('Картинка'))->set_value_type('url'),
                    Field::make('rich_text', 'crb_post_news_slide_redaktor', __('Внутренняя информация')),
                ))
        ));
    //Проекты
    // Посты


    // Страницы
    Container::make('post_meta', __('Загрузка на страницу Фонда'))
        ->show_on_page('141')
        ->add_fields(array(
            Field::make('complex', 'crb_page_fond', __('Контент'))
                ->add_fields(array(
                    Field::make('text', 'crb_page_div_fond', __('Блок название')),
                    Field::make('text', 'crb_page_t_fond', __('Заголовок')),
                    Field::make('separator', 'crb_page_fond_cont_line', __('Сотрудники')),
                    Field::make('complex', 'crb_page_fond_cont', __('Сотрудники'))
                        ->set_layout('tabbed-horizontal')
                        ->add_fields(array(
                            Field::make('image', 'crb_page_image_fond', __('Изображение'))->set_value_type('url'),
                            Field::make('text', 'crb_page_name_fond', __('ФИО')),
                            Field::make('text', 'crb_page_duration_fond', __('Должность')),
                        )),
                    Field::make('separator', 'crb_page_fond_prot_line', __('Протоколы')),

                    Field::make('complex', 'crb_page_fond_prot', __('Протоколы'))
                        ->set_layout('tabbed-horizontal')
                        ->add_fields(array(
                            Field::make('file', 'crb_page_filepro_fond', __('Файлы'))->set_value_type('url'),
                            Field::make('date', 'crb_page_datepro_fond', __('Дата протокола')),
                        ))
                ))
        ));

    // Страницы

}
