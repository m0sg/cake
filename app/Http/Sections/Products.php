<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;


use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class Products
 *
 * @property \App\Products $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Products extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->setColumns([
            AdminColumn::text('title', 'Название продукта'),
            AdminColumn::text('desc', 'Краткое описание'),
            AdminColumn::text('text', 'Текст'),
            AdminColumn::text('price', 'Цена'),



            AdminColumn::custom('Категория', function(\Illuminate\Database\Eloquent\Model $model) {




                return $model->category_id;
            }),
            AdminColumn::text('alias', 'Ссылка'),
            AdminColumn::image('img', 'Картинка'),
            AdminColumn::text('home', 'Вывести на главную?'),
        ])->paginate(10);
        // remove if unused
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Название продукта')->required(),
            AdminFormElement::ckeditor('desc', 'Краткое описание')->required(),
            AdminFormElement::ckeditor('text', 'Текст')->required(),
            AdminFormElement::text('price', 'Цена')->required(),
            AdminFormElement::select('category_id', 'Категория', \App\Categories::class, 'title')->required(),
            AdminFormElement::text('alias', 'Ссылка')->required(),
            AdminFormElement::image('img', 'Фото')->required(),
            AdminFormElement::select('home', 'Вывести на главную?',[0=>'Нет',1=>'Да']),

        ]);


        // remove if unused
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Название продукта')->required(),
            AdminFormElement::ckeditor('desc', 'Краткое описание')->required(),
            AdminFormElement::ckeditor('text', 'Текст')->required(),
            AdminFormElement::text('price', 'Цена')->required(),
            AdminFormElement::text('alias', 'Ссылка')->required(),
            AdminFormElement::select('category_id', 'Категория', \App\Categories::class, 'title')->required(),
            AdminFormElement::image('img', 'Фото')->required(),
            AdminFormElement::select('home', 'Вывести на главную?',[0=>'Нет',1=>'Да']),
        ]);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
