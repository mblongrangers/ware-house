<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Backpack\CRUD\CrudPanel;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\PackingRequest as StoreRequest;
use App\Http\Requests\PackingRequest as UpdateRequest;

class PackingCrudController extends CrudController
{
    public function setup()
    {
        if (backpack_user()->hasRole(\App\Role::PACKING) or backpack_user()->hasRole(\App\Role::ADMIN)) {
        } else {
            return abort(403);
        }
        $this->crud->setModel('App\Models\Packing');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/packing');
        $this->crud->setEntityNameStrings('packing', 'packings');
        // $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->enableExportButtons();
        $this->crud->addFilter([ // daterange filter
           'type' => 'date_range',
           'name' => 'created_at',
           'label'=> 'Date range'
         ],
         false,
         function($value) {
           $dates = json_decode($value);
           $this->crud->addClause('where', 'created_at', '>=', $dates->from);
           $this->crud->addClause('where', 'created_at', '<=', $dates->to);
         });
        $this->crud->addField([
           'name' => 'created_at',
           'label' => 'Tanggal Hari Ini',
           'type' => 'date_picker',
               'datetime_picker_options' => [
                   'todayBtn' => true,
                   'format' => 'D MMM YYYY',
                   'language' => 'en'
               ],
               'allows_null' => true,
        ]);
        $this->crud->addField([
            'name' => 'shift',
            'type' => 'select2_from_array',
            'options' => [
                1 => '1',
                2 => '2'
              ],
            'default' => 1,
        ]);
        $this->crud->addField([
            'label' => 'Nama Mesin',
            'name' => 'machine',
            'type' => 'select2_from_array',
            'options' => [
                '1' => 'Manual',
                '2' => 'Vertikal',
                '3' => 'Horizontal',
              ],
            'default' => 1,
        ]);
        $this->crud->addField([
            'label' => 'No Mesin',
            'name' => 'jenis',
            'type' => 'select2_from_array',
            'options' => [
                '1' => 'M1',
                '2' => 'M2',
                '3' => 'M3',
                '4' => 'M4',
                '5' => 'M5',
                '6' => 'M6',
                '7' => 'M7',
                '8' => 'M8',
                '9' => 'M9',
                '10' => 'M10',
                '11' => 'M11',
              ],
            'default' => 1,
        ]);
        $this->crud->addField([
           'type' => 'select2',
           'name' => 'product_id',
           'label' => 'Kode Produk',
           'entity' => 'product',
           'attribute' => 'code',
           'model' => "App\Models\Product"
        ]);
        $this->crud->addField([
           'label' => "Produk / Material",
           'type' => 'select2',
           'name' => 'product_id',
           'entity' => 'product',
           'attribute' => 'name',
           'model' => "App\Models\Product"
        ]);
        // $this->crud->addField([
        //    'label' => "Nama Produk",
        //    'type' => 'product_show',
        //    'name' => 'product.show',
        // ]);
        // $this->crud->addField([
        //    'label' => "Product Name",
        //    'type' => 'product_show',
        //    'name' => 'product.show',
        // ]);
        $this->crud->addField([
           'name' => 'start',
           'label' => 'Jam Mulai',
           'type' => 'datetime_picker',
               'datetime_picker_options' => [
                   'format' => 'HH:mm',
                   'language' => 'en'
               ],
               'allows_null' => true,
        ]);
        $this->crud->addField([
           'name' => 'finish',
           'label' => 'Jam Selesai',
           'type' => 'datetime_picker',
               'datetime_picker_options' => [
                   'format' => 'HH:mm',
                   'language' => 'en'
               ],
               'allows_null' => true,
        ]);
        $this->crud->addField([
           'name' => 'carton',
           'label' => 'Karton /Kg',
           'type' => 'number',
           'attributes' => ["step" => "any"], // allow decimals
        ]);
        $this->crud->addField([
           'name' => 'counter',
           'label' => 'Counter',
           'type' => 'number',
           'attributes' => ["step" => "any"], // allow decimals
        ]);
        $this->crud->addField([
           'name' => 'iner',
           'label' => 'BS Iner (pcs)',
           'type' => 'number',
           'attributes' => ["step" => "any"], // allow decimals
        ]);
        $this->crud->addField([
           'name' => 'bs',
           'label' => 'BS Bahan (kg)',
           'type' => 'number',
           'attributes' => ["step" => "any"], // allow decimals
        ]);
        $this->crud->addField([
           'name' => 'person',
           'label' => 'Jumlah Orang',
           'type' => 'number',
        ]);
        $this->crud->addField([
           'name' => 'description',
           'label' => 'Keterangan',
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Tanggal Hari Ini',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'shift',
            'type' => 'select2_from_array',
            'options' => [
                1 => '1',
                2 => '2'
              ],
        ]);
        $this->crud->addColumn([
            'label' => 'Nama Mesin',
            'name' => 'machine',
            'type' => 'select2_from_array',
            'options' => [
                '1' => 'Manual',
                '2' => 'Vertikal',
                '3' => 'Horizontal',
              ],
        ]);
        $this->crud->addColumn([
            'label' => 'No Mesin',
            'name' => 'jenis',
            'type' => 'select2_from_array',
            'options' => [
                '1' => 'M1',
                '2' => 'M2',
                '3' => 'M3',
                '4' => 'M4',
                '5' => 'M5',
                '6' => 'M6',
                '7' => 'M7',
                '8' => 'M8',
                '9' => 'M9',
                '10' => 'M10',
                '11' => 'M11',
              ],
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
        $this->crud->addColumn([
           'name' => 'start',
           'label' => 'Jam Mulai',
           'type' => 'datetime_picker',
        ]);
        $this->crud->addColumn([
           'name' => 'finish',
           'label' => 'Jam Selesai',
           'type' => 'datetime_picker',
        ]);
        $this->crud->addColumn([
           'name' => 'carton',
           'label' => 'Karton /Kg',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
           'name' => 'counter',
           'label' => 'Counter',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
           'name' => 'iner',
           'label' => 'BS Iner (pcS)',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
           'name' => 'bs',
           'label' => 'BS Bahan (KG)',
           'type' => 'number',
           'decimals' => 2,
        ]);
        // $this->crud->addColumn([
        //    'name' => 'total',
        //    'label' => 'Total Bahan Wip (kg)',
        //    'type' => 'number',
        //    'decimals' => 2,
        // ]);
        $this->crud->addColumn([
           'name' => 'person',
           'label' => 'Jumlah Orang',
           'type' => 'number',
        ]);
        $this->crud->addColumn([
           'name' => 'description',
           'label' => 'Keterangan',
           'limit' => 250,
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
