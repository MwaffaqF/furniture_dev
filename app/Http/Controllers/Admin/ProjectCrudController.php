<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProjectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Project::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/project');
        CRUD::setEntityNameStrings('project', 'projects');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('name');
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Images',
            'type' => 'image',
        ]);
        $this->crud->addColumn([
            'name'  => 'name', // The db column name
            'label' => 'Tag Name', // Table column heading
            'type'  => 'video',
        ]);
        CRUD::column('created_at');
        CRUD::column('updated_at');
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProjectRequest::class);

        CRUD::field('name');
        CRUD::field('description');
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Banner Image',
            'type' => 'upload_multiple',
            'upload' => true,
        ]);        CRUD::field('images_description');
        $this->crud->addField([
                'name'            => 'video',
                'label'           => 'Link for A Youtube video',
                'type'            => 'video',
                'youtube_api_key' => 'AIzaSyB38tqfh2U3xqR7lR5WEVrJYU6YEuaOadA',
            ]
        );
        CRUD::field('video_description');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

//    protected function setupShowOperation()
//    {
//        // by default the Show operation will try to show all columns in the db table,
//        // but we can easily take over, and have full control of what columns are shown,
//        // by changing this config for the Show operation
//        $this->crud->set('show.setFromDb', false);
//
////        $this->crud->addColumn([
////            'name'  => 'name', // The db column name
////            'label' => 'Tag Name', // Table column heading
////            'type'  => 'video',
////        ]);
//
//    }
}
