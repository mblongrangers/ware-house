<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ProductRequest as StoreRequest;
use App\Http\Requests\ProductRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ProductCrudController extends CrudController
{

    public function setup()
    {
        if (backpack_user()->hasRole(\App\Role::FINANCE) or backpack_user()->hasRole(\App\Role::ADMIN)) {
        } else {
            return abort(403);
        }
        $this->crud->setModel('App\Models\Product');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/product');
        $this->crud->setEntityNameStrings('product', 'products');
        $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->removeFields(['quantity']);
        $this->crud->removeColumns(['quantity']);
        $this->crud->removeFields(['price']);
        $this->crud->removeColumns(['price']);
        $this->crud->enableExportButtons();
        $this->crud->addField([
           'label' => "Category",
           'type' => 'select2',
           'name' => 'category_id',
           'entity' => 'category',
           'attribute' => 'name',
           'model' => "App\Models\Category"
        ]);
        $this->crud->addColumn([
            'type' => "select",
            'id' => 'product',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => "name",
            'model' => "App\Models\Category",
        ]);
    }

    public function store(StoreRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }
}
