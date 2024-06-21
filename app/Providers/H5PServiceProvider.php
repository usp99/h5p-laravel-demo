<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use H5PCore;
use H5PEditor;
use H5PEditorAjax;
use H5PFileStorage;
use H5peditorStorage;
use H5PFrameworkInterface;
use App\Services\H5PFrameworkLaravel;
use App\Services\H5PFileStorageLaravel;
use App\Services\H5PEditorStorageLaravel;

class H5PServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(H5PFrameworkInterface::class, H5PFrameworkLaravel::class);
        $this->app->bind(H5PFileStorage::class, H5PFileStorageLaravel::class);
        $this->app->bind(H5PEditorStorage::class, H5PEditorStorageLaravel::class);

        $this->app->singleton(H5PCore::class, function ($app) {
            $h5pFramework = $app->make(H5PFrameworkInterface::class);
            $h5pFileStorage = $app->make(H5PFileStorage::class);
            $path = public_path('h5p/content');
            return new H5PCore($h5pFramework, $h5pFileStorage, $path, url('h5p/content'));
        });

        $this->app->singleton(H5PEditor::class, function($app) {
            $framework = $app->make(H5PFrameworkInterface::class);
            $path = public_path('h5p/editor');
            $core = $app->make(H5PCore::class);
            $storage = $app->make(H5peditorStorage::class);
            $editor = new H5PEditor($framework, $core, $storage, $path, url('h5p/editor'));
            return $editor;
        });

        $this->app->singleTon(H5PEditorAjax::class, function ($app) {
            $h5pFramework = $app->make(H5PFrameworkInterface::class);
            $h5pCore = $app->make(H5PCore::class);
            $h5pEditor = $app->make(H5PEditor::class);
            $storage = $app->make(H5peditorStorage::class);
            $h5pFileStorage = $app->make(H5PFileStorage::class);
            $h5pEditorAjax = new H5PEditorAjax($h5pCore, $h5pEditor, $storage);
            return $h5pEditorAjax;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
