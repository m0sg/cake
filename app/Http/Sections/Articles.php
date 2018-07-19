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
 * Class Articles
 *
 * @property \App\Articles $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Articles extends Section
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
     * Initialize class.
     */



    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->setColumns([
            AdminColumn::text('title', 'Заголовок'),
            AdminColumn::text('desc', 'Краткое описание'),
            AdminColumn::text('text', 'Текст'),
            AdminColumn::text('alias', 'Ссылка'),
            AdminColumn::image('img', 'Картинка'),
            AdminColumn::custom('Тег', function(\Illuminate\Database\Eloquent\Model $model) {
                return $model->tags_id;
            }),

        ])->paginate(5);
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
            AdminFormElement::text('title', 'Название поста')->required(),
            AdminFormElement::ckeditor('desc', 'Краткое описание')->required(),
            AdminFormElement::ckeditor('text', 'Текст')->required(),
            AdminFormElement::text('alias', 'Ссылка')->required(),
            AdminFormElement::image('img', 'Картинка')->required(),
//            AdminFormElement::select('Tag', 'Теги', \App\Tags::class, 'title')->required(),

        ]);

    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Название поста')->required(),
            AdminFormElement::ckeditor('desc', 'Краткое описание')->required(),
            AdminFormElement::ckeditor('text', 'Текст')->required(),
            AdminFormElement::text('alias', 'Ссылка')->required(),
            AdminFormElement::image('img', 'Картинка')->required(),
//            AdminFormElement::select('category_id', 'Категория', \App\Tags::class, 'title')->required(),
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
