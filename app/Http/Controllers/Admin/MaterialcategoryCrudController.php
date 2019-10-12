<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\MaterialcategoryRequest as StoreRequest;
use App\Http\Requests\MaterialcategoryRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class MaterialcategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MaterialcategoryCrudController extends CrudController
{
    public function setup()
    {
        if  (backpack_user()->hasRole(\App\Role::GUDANG) or backpack_user()->hasRole(\App\Role::ADMIN)) {
        } else {
            return abort(403);
        }
        $this->crud->setModel('App\Models\Materialcategory');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/materialcategory');
        $this->crud->setEntityNameStrings('materialcategory', 'materialcategories');
        $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
         $this->crud->enableExportButtons();
        $this->crud->addColumn([
           'name' => "quantity",
           'label' => "Jumlah Bahan Baku /Kg",
           'type' => "model_function",
           'decimals' => 3,
           'function_name' => 'getMaterialsQuantity'
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
