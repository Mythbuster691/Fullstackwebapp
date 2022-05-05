<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                da mahir Travels
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item d-flex">
                        <label for="loginwithid" class="form-label align-self-center text-white px-2 mt-1">Login</label>
                        <input type="text" class="form-control" placeholder="Login with id">

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white mx-1" href=" {{route('career.create')}} ">Career</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</div>
<style>
    .navbar{
        background-image: linear-gradient(to right, #147eea, #a866c1, #cb5d8a, #c46b5f, #a97e50);
    }
</style>
