<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\SellRequest as StoreRequest;
use App\Http\Requests\SellRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

class SellCrudController extends CrudController
{
    public function setup()
    {
        if (backpack_user()->hasRole(\App\Role::ADMIN)) {
        } else {
            return abort(403);
        }
        $this->crud->setModel('App\Models\Sell');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/sell');
        $this->crud->setEntityNameStrings('sell', 'sells');
        // $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->addField([
           'label' => "Nama Produk",
           'type' => 'select2',
           'name' => 'product_id',
           'entity' => 'product',
           'attribute' => 'name',
           'model' => "App\Models\Product"
        ]);
        $this->crud->addField([
           'name' => 'pcs',
           'label' => 'Jumlah Pcs',
           'type' => 'number',
        ]);
        $this->crud->addField([
            'name' => 'sku',
            'type' => 'select2_from_array',
            'options' => [
                1 => '4',
                2 => '5',
                3 => '6',
                4 => '7'
              ],
            'allows_null' => false,
            'default' => 1,
        ]);
        $this->crud->addField([
           'name' => 'total',
           'label' => 'Total Rupiah',
           'type' => 'number',
        ]);
        $this->crud->addColumn([
           'name' => 'pcs',
           'label' => 'Jumlah Karton',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
           'name' => 'Total',
           'label' => 'Total Rupiah',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
            'name' => 'sku',
            'type' => 'select2_from_array',
            'options' => [
                1 => '4',
                2 => '5',
                3 => '6',
                4 => '7'
              ],
            'allows_null' => false,
            'default' => 1,
        ]);
        $this->crud->addColumn([
           'id' => 'product',
           'type' => 'select',
           'name' => 'product_id',
           'entity' => 'product',
           'attribute' => 'name',
           'model' => "App\Models\Product"
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
