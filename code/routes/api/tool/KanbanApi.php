<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\httpControllers\tools\KanbanController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class KanbanApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        // Variables
        private const route = 'kanban';

        private const create_route = ACTION_CREATE;
        private const delete_route = ACTION_DELETE;
        private const read_route   = ACTION_READ;
        private const update_route = ACTION_UPDATE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( KanbanController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'create' );
                    Route::delete( self::delete_route, 'delete' );
                    Route::get( self::read_route, 'read' );
                    Route::patch( self::update_route, 'update' );
                }
            );
        }
    }


    /**
     * @return void
     */
    function MakeKanbanApi(): void
    {
        $api = new KanbanApi();
        $api->run();
    }
?>