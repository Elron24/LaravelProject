<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5" style="width: 500px;">
        <a href="" class="btn btn-success mb-5">Back</a>
        <div class="card p-5">
            <form action="{{ route('update', ['item' => $item]) }}"method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for=product-name class="form-label">Product Name</label>
                    <input type="text" name="productName" class="form-control" id="product-name" value="{{ $item->product_name }}"></input>
                    <div class="mb-4">
                        <label for="product-brand" class="form-label">Product Brand</label>
                        <input type="text" name="productBrand" class="form-control" id="product-brand" value="{{ $item->product_brand }}"></input>
                        <div class="mb-5">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" name="Quantity" class="form-control" id="quantity" value="{{ $item->quantity }}"></input>
                            <div class="mb-6">
                                <label for="product_price" class="form-label">Product Price</label>
                                <input type="text" name="productPrice" class="form-control" id="product-price" value="{{ $item->product_price }}"></input>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Update Product</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </body>
</html>
