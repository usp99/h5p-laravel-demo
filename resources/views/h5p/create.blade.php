<!DOCTYPE html>
<html>
    <head>
        <title>Create Content</title>
        <link rel="stylesheet" href="{{ asset('h5p/h5p-core/styles/h5p-confirmation-dialog.css') }}"></link>
        @foreach ($settings['editor']['assets']['css'] as $style)
            <link rel="stylesheet" href="{{ $style }}">
        @endforeach
    </head>

    <body>
        <div class="h5p-editor" data-settings="{{ json_encode($settings) }}">
        </div>

        @foreach ($settings['editor']['assets']['js'] as $script)
            <script src="{{ $script }}"></script>
        @endforeach

        <script>
            H5PEditor.init({
                containerSelector: 'h5p-editor',
                baseUrl: '{{ url('/') }}',
                uploadUrl: '{{ url('/h5p/upload') }}'
            });
        </script>
    </body>
</html>
