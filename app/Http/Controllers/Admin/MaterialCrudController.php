<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\MaterialRequest as StoreRequest;
use App\Http\Requests\MaterialRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class MaterialCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MaterialCrudController extends CrudController
{
    public function setup()
    {
        if  (backpack_user()->hasRole(\App\Role::GUDANG) or backpack_user()->hasRole(\App\Role::ADMIN)) {
        } else {
            return abort(403);
        }
        $this->crud->setModel('App\Models\Material');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/material');
        $this->crud->setEntityNameStrings('material', 'materials');
        // $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
         $this->crud->enableExportButtons();
        $this->crud->addField([
           'name' => 'code',
           'label' => 'Kode Bahan Baku',
        ]);
        $this->crud->addField([
           'name' => 'name',
           'label' => 'Nama Bahan Baku',
        ]);
        $this->crud->addField([
           'name' => 'quantity',
           'label' => 'Jumlah Bahan Baku /Kg',
           'type' => 'number',
           'attributes' => ["step" => "any"], // allow decimals
        ]);
        $this->crud->addField([
           'label' => "Kategori Bahan Baku",
           'type' => 'select2',
           'name' => 'materialcategory_id',
           'entity' => 'materialcategory',
           'attribute' => 'name',
           'model' => "App\Models\Materialcategory"
        ]);
        $this->crud->addColumn([
           'name' => 'code',
           'label' => 'Kode Bahan Baku',
        ]);
        $this->crud->addColumn([
           'name' => 'name',
           'label' => 'Nama Bahan Baku',
        ]);
        $this->crud->addColumn([
           'name' => 'quantity',
           'label' => 'Jumlah Bahan Baku /Kg',
           'type' => 'number',
           'decimals' => 3,
        ]);
        $this->crud->addColumn([
            'type' => "select",
            'id' => 'material',
            'name' => 'materialcategory_id',
            'label' => "Kategori Bahan Baku",
            'entity' => 'materialcategory',
            'attribute' => "name",
            'model' => "App\Models\Materialcategory",
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
