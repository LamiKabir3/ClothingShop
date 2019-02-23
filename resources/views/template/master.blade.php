<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            @yield('styles');
        </style>
         <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h1>New Navy</h1>
        {{-- <nav>
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="@yield('boys')" href="boys">Boys</a>
                </li>
                <li class="nav-item">
                    <a class="@yield('girls')" href="girls">Girls</a>
                </li>
                <li class="nav-item">
                    <a class="@yield('unisex')" href="unisex">Unisex</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
        </nav> --}}
        {{-- <form enctype="multipart/form-data" class="pure-form" method="POST" action="{{action ('ArticlesController@store')}}">
                <input type="hidden" name="_token"
                       value="{{ csrf_token() }}">
                <fieldset class="pure-group">
                    <input name="title" type="text" class="pure-input-1" placeholder="Blog Title">
                    <input name="author" type="text" class="pure-input-1" placeholder="Your name">
                    <input name="catId" type="text" class="pure-input-1" placeholder="category (1 = physical, 2 = Mental, 3 = Spiritual, 4 = Life tips and advice)">
                    <input name="pinned" type="text" class="pure-input-1" placeholder="is it pinned? yes/no">
                    Upload Side bar picture:<input name="sidePic" type="file" class="pure-input-1" placeholder="Your name">
                    Upload opening picture/video:<input name="openingPic" type="file" class="pure-input-1" placeholder="Your name">
                    Upload Closing picture/video:<input name="closingPic" type="file" class="pure-input-1" placeholder="Your name">
                    <textarea name="body" class="pure-input-1" placeholder="Description"></textarea>
                </fieldset>

                <button type="submit" class="pure-button pure-input-1 pure-button-primary">Create</button>
            </form> --}}

                <div class="container">
                    <h3>Filter</h3>
                    <select onChange="typeOfProduct()" name="name" id="select" style="width: 250px;" class="custom-select">
                   
                    @foreach ($categories as $category)
                    <option><a href="{{route('category', ['category' => $category->id] )}}">{{ $category->name }}</a></option>
                    @endforeach
                   
                    
                    </select>
                    <select id="select" style="width: 250px;" class="custom-select">
                    <option selected>Gender</option>
                    <option value="1">Boy</option>
                    <option value="2">Girl</option>
                    <option value="3">Unisex</option>
                    </select>
                    <select id="select" style="width: 250px;" class="custom-select">
                    <option selected>Size</option>
                    <option value="1">small</option>
                    <option value="2">medium</option>
                    <option value="3">Thlargeree</option>
                    </select>
                </div>
                
        @yield('content')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/filter.js" ></script>
    </body>
</html>
