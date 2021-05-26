<?php

namespace App\Admin\Controllers;

use App\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());


        $grid->column('category_id', __('Category id'));

        $grid->column('slug', __('Slug'));
        $grid->column('title', __('Title'));
        $grid->column('excerpt', __('Excerpt'));
        $grid->column('content_raw', __('Content raw'));
        $grid->column('is_published', __('Is published'));
        $grid->column('published_at', __('Published at'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));


        $show->field('category_id', __('Category id'));

        $show->field('slug', __('Slug'));
        $show->field('title', __('Title'));
        $show->field('excerpt', __('Excerpt'));
        $show->field('content_raw', __('Content raw'));

        $show->field('is_published', __('Is published'));
        $show->field('published_at', __('Published at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->number('category_id', __('Category id'));
        $form->number('user_id', __('User id'));
        $form->text('slug', __('Slug'));
        $form->text('title', __('Title'));
        $form->textarea('excerpt', __('Excerpt'));
        $form->textarea('content_raw', __('Content raw'));

        $form->switch('is_published', __('Is published'));
        $form->datetime('published_at', __('Published at'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
