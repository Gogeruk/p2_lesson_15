<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div><div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
        <link rel="icon" href="{{ URL::asset('/css/png/003-sandbox.png') }}" type="image/x-icon"/>
        <title>Test</title>
    </head>
    <body>
        <div class="m-2 bg-white">
            <div class="mb-12 d-flex justify-content-center">
                <div class="border border-danger mb-12">
                    <h5 class="text-center">Navigation</h5>
                    <div class="jumbotron vertical-center">
                        <div class="text-center mb-4">
                            <button onclick="location.href='{{ route('home') }}'" type="submit" class="btn btn-sm btn-danger m-3" name="button">HOME</button>
                            @guest
                                <button onclick="location.href='{{ route('login') }}'" type="submit" class="btn btn-sm btn-danger m-3" name="button">LOGIN</button>
                            @endguest
                            @auth
                                <button onclick="location.href='{{ route('logout') }}'" type="submit" class="btn btn-sm btn-danger m-3" name="button">LOGOUT</button>
                                <p class="mb-3">Welcome {{ Auth::user()->name }}!</p>
                            @endauth
                        </div>
                    </div>
                </div>
                @yield('home-display')
                @yield('id-display')
                @yield('form-ad')
                @yield('form-login')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script type="text/javascript">
            @include('scripts.js.iconDisplay')
        </script>
    </body>
</html>
