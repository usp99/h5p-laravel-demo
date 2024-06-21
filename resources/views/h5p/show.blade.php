<!DOCTYPE html>
<html>
    <head>
        <title>{{ $content['title'] }}</title>
        <link rel="stylesheet" href="{{ asset('h5p/h5p-core/styles/application.css') }}">
        <link rel="stylesheet" href="{{ asset('h5p/h5p-core/styles/h5p.css') }}">
    </head>
    <body>

        <div class="h5p-content">
            {!! $embedCode !!}
        </div>

        <script src="{{ asset('h5p/h5p-core/js/h5p.js') }}"></script>
        <script src="{{ asset('h5p/h5p-core/js/h5p-event-dispatcher.js') }}"></script>
        <script src="{{ asset('h5p/h5p-core/js/h5p-x-api-event.js') }}"></script>
        <script src="{{ asset('h5p/h5p-core/js/h5p-x-api.js') }}"></script>
        <script src="{{ asset('h5p/h5p-core/js/h5p-content-type.js') }}"></script>
        <script src="{{ asset('h5p/h5p-core/js/h5p-confirmation-dialog.js') }}"></script>
        <script src="{{ asset('h5p/h5p-core/js/h5p-action-bar.js') }}"></script>

    </body>
</html>
