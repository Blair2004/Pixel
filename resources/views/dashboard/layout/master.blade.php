<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ isset( $pageTitle ) ? $pageTitle : 'Unnamed Page' }}</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- style -->
        <link rel="stylesheet" href="{{ asset( 'css/animate.css/animate.min.css' ) }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/glyphicons/glyphicons.css' ) }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/font-awesome/css/font-awesome.min.css' ) }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/material-design-icons/material-design-icons.css' ) }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/ionicons/css/ionicons.min.css' ) }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/simple-line-icons/css/simple-line-icons.css' ) }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/bootstrap/dist/css/bootstrap.min.css' ) }}" type="text/css" />

        <!-- build:css css/styles/app.min.css -->
        <link rel="stylesheet" href="{{ asset( 'css/styles/app.css' ) }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset( 'css/styles/style.css' ) }}" type="text/css" />
        <!-- endbuild -->
        <link rel="stylesheet" href="{{ asset( 'css/styles/font.css' ) }}" type="text/css" />
    </head>
    <body>
        <div class="app" id="app">
            @include( 'dashboard.layout.aside' )
            @include( 'dashboard.layout.content' )
        </div>
        @include( 'dashboard.layout.footer' )
    </body>
</html>