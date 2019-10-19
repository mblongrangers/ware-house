<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\MaterialcategoryscheduleRequest as StoreRequest;
use App\Http\Requests\MaterialcategoryscheduleRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

class ScheduleCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel('App\Models\Schedule');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/schedule');
        $this->crud->setEntityNameStrings('schedule', 'schedules');
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->addColumn('created_at');
        $this->crud->addColumn(
            [
               'type' => "select",
               'name' => 'formulation_id',
               'entity' => 'formulation',
               'attribute' => "name",
               'model' => "App\Formulation",
            ]
        );
        $this->crud->addColumn('batch');
        $this->crud->addButtonFromView('line', 'schedule_detail', 'schedule_detail', 'beginning');

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
