<!DOCTYPE html>
<html>
    <head>
        <title>Create Content</title>
        <link rel="stylesheet" href="{{ asset('h5p/h5p-core/styles/application.css') }}">
        @foreach ($settings['editor']['assets']['css'] as $style)
            <link rel="stylesheet" href="{{ asset('h5p/h5p-core/'.$style) }}">
        @endforeach
    </head>

    <body>
        <div class="h5p-editor" data-settings="{{ json_encode($settings) }}">
        </div>

        @foreach ($settings['editor']['assets']['js'] as $script)
            <script src="{{ asset('h5p/h5p-core/'.$script) }}"></script>
        @endforeach

        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-editor.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-file-uploader.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-av.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-boolean.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-coordinates.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-dimensions.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-file.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-form.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-fullscreen-bar.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-fullscreen-bar.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-group.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-html.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-image-popup.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-image.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-library-list-cache.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-library-selector.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-library.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-init.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-list-editor.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-semantic-structure.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-list.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-metadata-author-widget.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-metadata-changelog-widget.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-metadata.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-none.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-number.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-pre-save.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-select.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-selector-hub.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-selector-legacy.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-text.js') }}"></script>
        <script src="{{ asset('h5p/h5p-editor/scripts/h5peditor-textarea.js') }}"></script>

        <script>
            H5PEditor.init({
                containerSelector: 'h5p-editor',
                baseUrl: '{{ url('/') }}',
                uploadUrl: '{{ url('/h5p/upload') }}'
            });
        </script>
    </body>
</html>
