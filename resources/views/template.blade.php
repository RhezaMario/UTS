<?php
 use App\Models\Category;
$cat = Category::all();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>{{$title}}</title>

    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Giant Book Supplier</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{($title === "Home")? 'active' : ''}}" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{($title === "Category")? 'active' : ''}}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  @foreach ($cat as $c)
                  <li><a class="dropdown-item" href="{{url('view.category/'.$c->name)}}">{{$c->name}}</a></li>
                  @endforeach

                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === "Publisher")? 'active' : ''}}" href="/Publisher">Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === "Contact")? 'active' : ''}}" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
        @yield('contents')
        <div class="footer">
            @include('footer')
        </div>
    </body>
</html>
