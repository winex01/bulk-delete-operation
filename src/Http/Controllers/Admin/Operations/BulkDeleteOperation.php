<?php

namespace Winnie\BulkDeleteOperation\Http\Controllers\Admin\Operations;

use Illuminate\Support\Facades\Route;

trait BulkDeleteOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupBulkDeleteRoutes($segment, $routeName, $controller)
    {
        Route::post($segment.'/bulk-delete', [
            'as'        => $routeName.'.bulkDelete',
            'uses'      => $controller.'@bulkDelete',
            'operation' => 'bulkDelete',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupBulkDeleteDefaults()
    {
        $this->crud->allowAccess('bulkDelete');

        $this->crud->operation('bulkDelete', function () {
            $this->crud->loadDefaultOperationSettingsFromConfig();
        });

        $this->crud->operation('list', function () {
            $this->crud->enableBulkActions();
            $this->crud->addButton('bottom', 'bulk_delete', 'view', 'winnie.bulk-delete-operation::buttons.bulk_delete');
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
    public function bulkDelete()
    {
        $this->crud->hasAccessOrFail('bulkDelete');

        $entries = request()->input('entries', []);
        $deletedEntries = [];

        foreach ($entries as $key => $id) {
            if ($entry = $this->crud->model->find($id)) {
                $deletedEntries[] = $entry->delete();
            }
        }

        return $deletedEntries;
    }
}