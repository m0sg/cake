<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Pages
 *
 * @property \App\Pages $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Pages extends Section
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
            AdminColumn::text('name', 'Имя страницы'),
            AdminColumn::text('text', 'Текст'),
            AdminColumn::text('alias', 'Ссылка'),
            AdminColumn::image('img', 'Изображение'),
            AdminColumn::text('parent', 'Родитель'),


        ])->paginate(20);
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
            AdminFormElement::text('name', 'Имя страницы')->required(),
            AdminFormElement::text('text', 'Текст')->required(),
            AdminFormElement::text('alias', 'Ссылка')->required(),
            AdminFormElement::image('img', 'Изображение')->required(),
            AdminFormElement::text('parent', 'Родитель')->required(),
        ]);

    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Имя страницы')->required(),
            AdminFormElement::text('text', 'Текст')->required(),
            AdminFormElement::text('alias', 'Ссылка')->required(),
            AdminFormElement::image('img', 'Изображение')->required(),
            AdminFormElement::text('parent', 'Родитель')->required(),
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
