<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel</title>
  </head>
  <body>

    <div class="container">
      <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="main.css" />
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Inventory Management</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">More Info</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <div class="heading">
          <h1>
            Inventory Manager
            <button type="button" onclick="clearAll()" class="btn btn-danger">
              Clear All
            </button>
          </h1>
        </div>
        <div class="tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="home-tab"
                data-bs-toggle="tab"
                data-bs-target="#home-tab-pane"
                type="button"
                role="tab"
                aria-controls="home-tab-pane"
                aria-selected="true"
              >
                Current Inventory
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="profile-tab"
                data-bs-toggle="tab"
                data-bs-target="#profile-tab-pane"
                type="button"
                role="tab"
                aria-controls="profile-tab-pane"
                aria-selected="false"
              >
              
              <div class="heading">
              </button>
              </div>
              <div class="add-item">
                <form action="{{ route('add') }}" method="POST" class="form">
                  @csrf
                  @method('post')
                  <div class="mb-3">
                    <label class="form-label">
                      Product Name:
                      <input
                        id="current_order_product_name"
                        class="form-control"
                        type="text"
                        name="productName"
                        required
                      />
                    </label>
                    <label class="form-label">
                      Product Brand:
                      <input
                        id="current_order_product_brand"
                        class="form-control"
                        type="text"
                        name="productBrand"
                        required
                      />
                    </label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">
                      Quantity:
                      <input
                        id="current_order_product_quantity"
                        class="form-control"
                        type="number"
                        name="Quantity"
                        required
                      />
                    </label>
                    <label class="form-label">
                      Product Price:
                      <input
                        id="current_order_product_price"
                        class="form-control"
                        type="number"
                        name="productPrice"
                        required
                      />
                    </label>
                  </div>
                  <div class="mb-3">
                    <input
                      class="btn btn-success"
                      type="submit"
                    </input>
                    <button class="btn btn-danger" type="reset">Reset</button>
                  </div>
                </form>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody id="incoming_inventory_list">
                  @foreach ($items as $item)
                  <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->product_name}}</td>
                    <td>{{ $item->product_brand}}</td>
                    <td>{{ $item->quantity}}</td>
                    <td>{{ $item->product_price}}</td>
                    <td><a href="{{ route('edit', ['item' => $item]) }}" class="btn btn-success">Update</a></td>
                    <td>
                    <form method="POST" action="{{ route('delete', ['item' => $item]) }}">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            <div
              class="tab-pane fade"
              id="profile-tab-pane"
              role="tabpanel"
              aria-labelledby="profile-tab"
              tabindex="0"
            >
                  </div>
                </form>
              </div>
              
            </div>
            <div
              class="tab-pane fade"
              id="contact-tab-pane"
              role="tabpanel"
              aria-labelledby="contact-tab"
              tabindex="0"
            >
              <div class="heading">
                
                >
                </button>
              </div>
             
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody id="outgoing_inventory_list">
                  <tr>
                    <th scope="row">1</th>
                    <td>Acer Nitro 7</td>
                    <td>Acer</td>
                    <td>5</td>
                    <td>Rs 15000</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Asus Rog 17</td>
                    <td>Asus</td>
                    <td>10</td>
                    <td>Rs 25000</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>HP Rog 17</td>
                    <td>HP</td>
                    <td>15</td>
                    <td>Rs 22500</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="main.js"></script>
  </body>
</html>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
    </html>