<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <!-- Styles -->
        <style>
            body{
    padding: 50px;
}
.modal-dialog {
    width: 300px;
}
.modal-footer {
    height: 70px;
    margin: 0;
}
.modal-footer .btn {
    font-weight: bold;
}
.modal-footer .progress {
    display: none;
    height: 32px;
    margin: 0;
}
.input-group-addon {
    color: #fff;
    background: #3276B1;
}
</style>

    </head>
    <body class="container">
        <div class="row-4">
            <form role="form">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="uLogin" placeholder="Login">
                        <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" id="uPassword" placeholder="Password">
                        <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
                    </div> <!-- /.input-group -->
                </div> <!-- /.form-group -->

                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me

                    </label>
                </div> <!-- /.checkbox -->
                <div class="checkbox">
                    <label>
                        <a href="{{ url('/auth/redirect-github')}}"> 
                            <i class="icons-github"></i>github
                            </a>
                            <a href="{{ url('/auth/redirect-twitter')}}"> 
                                <i class="icons-twitter"></i>twitter
                                </a>
                                <a href="{{ url('/auth/redirect-facebook')}}"> 
                                    <i class="icons-facebook"></i>facebook
                                    </a>
                        
                    </label>
                </div> 
                {{-- <div class="flex justify-center items-center gap-7">
                @foreach(\App\Enums\Provider::values() as $provider)
                    <a
                        href="{{url('auth/redirect', ['provider' => $provider]) }}"
                        class="bg-indigo-50 p-2 rounded-full"
                    >
                        <x-dynamic-component :component="'icon-' . $provider" class="text-stone-700" style="width: 40px;height:40px;"/>
                    </a>
                @endforeach
                </div > --}}
            </form>
        </div>
    </body>
</html>
