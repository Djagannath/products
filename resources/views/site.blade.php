<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div class="container">
            <h1 class="tect-center text-uppercase">Shop</h1>

            <ul class="nav">
                @forelse($categories as $category)
                <li class="nav-item">
                    <a href="#" onclick="select('{{ $category->getTag() }}')" class="nav-link" >
                        {{ $category->getName() }} ({{ $category->getProductsCount() }})
                    </a>
                </li>
                @empty
                <li>
                    <span class="nav-link">No categories</span>
                </li>
                @endforelse
            </ul>

            <div class="row">

                @forelse ($products as $product)
                <div class="product col-4 mt-4 w3-grayscale" data-tag="{{ $product->category->getTag() }}">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $product->getImage() }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->getTitle() }}</h5>
                            <p class="card-text">
                                <div>Price: {{ $product->getPrice() }}</div>
                                <div>Category: {{ $product->category->getName() }}</div>
                            </p>
                        </div>
                    </div>
                </div>
                @empty
                    <p>No products</p>
                @endforelse
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    <script>
        function select(tag)
        {
            // let elms = document.querySelectorAll(`[data-tag="${tag}"]`);

            $('.product').each(function() {
                $(this).addClass('w3-grayscale');
            });

            $(`[data-tag="${tag}"]`).each(function() {
                $(this).removeClass('w3-grayscale');
            });

            return false;
        }
    </script>
    </body>
</html>
