<?php

namespace App\Admin\Controllers;

use App\Models\selling\Products;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Products());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'));
        $grid->column('size', __('Size'));
        $grid->column('materials', __('Materials'));
        $grid->column('country', __('Country'));
        $grid->column('description', __('Description'));
        $grid->column('color', __('Color'));
        $grid->column('image', __('Image'));
        $grid->column('active', __('Active'));

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
        $show = new Show(Products::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
        $show->field('size', __('Size'));
        $show->field('materials', __('Materials'));
        $show->field('country', __('Country'));
        $show->field('description', __('Description'));
        $show->field('color', __('Color'));
        $show->field('image', __('Image'));
        $show->field('active', __('Active'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Products());

        $form->text('name', __('Name'));
        $form->decimal('price', __('Price'));
        $form->decimal('size', __('Size'));
        $form->text('materials', __('Materials'));
        $form->text('country', __('Country'));
        $form->text('description', __('Description'));
        $form->color('color', __('Color'));
        $form->image('image', __('Image'));
        $form->switch('active', __('Active'));

        return $form;
    }
}
