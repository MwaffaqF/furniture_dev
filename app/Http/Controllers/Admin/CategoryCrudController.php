<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Library\Widget;
use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;
use Illuminate\Http\Request;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }

    public function store()
    {
//        dd($this->crud->getRequest()->request->get('sub_category'));
        if ($this->crud->getRequest()->request->get('sub_category') != null) {
            $this->crud->getRequest()->request->add(['parent_id' => $this->crud->getRequest()->request->get('sub_category')]);
//            $response = $this->traitStore();
//            return $response;
            return $this->traitStore();

        }else{
            return $this->traitStore();
        }
        // do something after save

    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings('category', 'categories');
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
        CRUD::column('parent_id');
        CRUD::addColumn(
            [
                'name'        => 'level',
                'label'       => "Level",
                'type'        => 'select_from_array',
                'options'     => [
                    0 => 'Level 0',
                    1 => 'Level 1',
                    2 => 'Level 2',
                ],
                'allows_null' => false,

            ]
        );
        CRUD::column('created_at');
        CRUD::column('updated_at');
//        CRUD::column('deleted_at');



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

        CRUD::setValidation(CategoryRequest::class);

        CRUD::field('name');

        $this->crud->addField([   // select_from_array
            'label' => 'Main Category', // Table column heading
            'type' => 'select',
            'name' => 'parent_id', // the column that contains the ID of that connected entity;
            'entity' => 'parent', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Category", // foreign key model
            'options' => (function ($query) {
                return $query->where('parent_id', null)->get();
            }),
            'wrapper' => [
                'id' => 'parent_id_wrapper'
            ],
            'attributes' => [
                'id' => 'parent_id',
            ],

        ]);

        CRUD::addField(
            [
                'name' => 'level',
                'label' => "Category Level",
                'type' => 'select_from_array',
                'options' => [
                    0 => 'Level 0',
                    1 => 'Level 1',
                    2 => 'Level 2'
                ],
                'allows_null' => false,
                'wrapper' => [
                    'class' => 'form-group col-md-12'
                ],
                'attributes' => [
                    'id' => 'category_level'
                ],

            ]
        );

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

    public function fetchChildren()
    {
        return $this->fetch(\App\Models\Category::class);
    }

    public function get_category_children(Request $request)
    {
//       dd($request['id']);
        if ($request['id'] != null) {
            $data = Category::where('parent_id', $request['id'])->get();

            return view('sub_category_select', compact('data'))->render();
        }

    }
}
