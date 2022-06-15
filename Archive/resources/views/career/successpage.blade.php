<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>da mahir Travel</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }
    </style>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container bg-light w-75 py-4 border border-warning rounded">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">

                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif

                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif

                        <div class="row">
                            <h2 class="text-center">Thanks a lot for devoting your precious time to us</h2><br>
                        </div>
                        <div class="row">
                            <a  class="btn btn-success w-50 mx-auto py-2 my-2" href="{{route('career.create')}}">
                                Click here to apply more
                        </a>
                        </div>
                        <div class="row">
                            <a  class="btn btn-warning w-50 mx-auto py-2 my-2" href="https://www.youtube.com/">
                                Follow Us
                        </a>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
