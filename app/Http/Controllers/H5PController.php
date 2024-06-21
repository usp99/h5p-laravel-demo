<?php

namespace App\Http\Controllers;

use H5PCore;
use H5PEditor;
use H5PEditorAjax;
use H5PFrameworkInterface;
use Illuminate\Http\Request;
use App\Services\H5PFrameworkLaravel;
use App\Services\H5PFileStorageLaravel;

class H5PController extends Controller
{
    protected $h5pCore;
    protected $h5pEditor;
    protected $h5pFramework;
    protected $h5pEditorAjax;

    public function __construct(H5PCore $h5pCore, H5PEditor $h5pEditor, H5PFrameworkInterface $h5pFramework, H5PEditorAjax $h5pEditorAjax)
    {
        $this->h5pCore = $h5pCore;
        $this->h5pEditor = $h5pEditor;
        $this->h5pFramework = $h5pFramework;
        // $this->$h5pEditorAjax = $h5pEditorAjax;
    }

    public function index()
    {
        $h5pContent = '';
        return view('h5p.index', ['h5p_content' => $h5pContent]);
    }

    public function create() {
        $settings = $this->getEditorSettings();

        return view('h5p.create', ['settings' => $settings, 'content' => null]);
    }

    public function store(Request $request) {
        $content = $this->h5pEditor->saveContent($request->all());

        return redirect()->route('h5p.show', $content['id']);
    }

    public function show($id) {
        $content = $this->h5pCore->loadContent($id);

        if (!$content) {
            return abort(404, 'Content not found');
        }

        $embedCode = $this->h5pCore->filterParameters($content);

        return view('h5p.show', compact('content', 'embedCode'));
    }

    public function editorAjax(Request $request) {
        $response = $this->h5pEditorAjax->action($request->all());
        return response()->json($response);
    }

    private function getEditorSettings() {
        $editorPath = public_path('h5p/editor');
        $editorUrl = url('h5p/editor');

        $settings = [
            'baseUrl' => url('/'),
            'url' => $editorUrl,
            'language' => 'en',
            'filesPath' => url('h5p/editor'),
            'filecon' => [
                'path' => $editorUrl.'/images/binary-file.png',
                'width' => 50,
                'height' => 50,
            ],
            'ajaxPath' => url('/h5p/editor-ajax').'/',
            'libraryUrl' => $editorUrl.'/libraries',
            'libraries' => [],
            'contents' => [],
            'editor' => [
                'filesPath' => $editorUrl.'/content',
                'ajaxPath' => url('/h5p/editor-ajax').'/',
                'language' => 'en',
                'assets' => [
                    'css' => H5PCore::$styles,
                    'js' => H5PCore::$scripts,
                ],
                'apiVersion' => H5PCore::$coreApi,
            ]
        ];

        return $settings;
    }

    public function upload(Request $request)
    {

    }
}
