<x-shop-layout>
    <style>
        .blog-posts {
            /*padding: 20px 0;*/
        }

        .sidebar-item {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-heading h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .content {
            margin-top: 15px;
        }

        .contact-form input[type="number"],
        .contact-form button {
            padding: 10px;
            /*border: none;*/
            background-color: #adadad;
            color: #111111;
            cursor: pointer;
            border-radius: 5px;

        }

        .contact-form input[type="number"] {
            width: 100px;
            margin-right: 10px;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #d4edda;
            color: #155724;
        }
        </style>

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div>
              <img src="{{ asset('uploads/product/' . $products->image) }}" alt="" style="max-width: 100%; max-height: 100%;">

          </div>


        </div>

        <div class="col-md-5">
          <div class="sidebar-item recent-posts">
            <div class="sidebar-heading">
              <h2>Info</h2>
                <h2>{{$products->name}}</h2>
            </div>
<h3>{{$products->price}}</h3>
            <div class="content">
              <p>{{$products->description}}</p>
            </div>
          </div>

          <br>
          <br>
{{--product add success msg--}}
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
          <div class="contact-us">
            <div class="sidebar-item contact-form">
              <div class="sidebar-heading">
                <h2>Add to Cart</h2>
              </div>

              <div class="content">

                  <form action="{{ route('cart.add', $products->id) }}" method="POST">
                      @csrf
                      <input type="number" name="quantity" value="1" min="1">
                      <button type="submit">Add to Cart</button>
                  </form>
              </div>
            </div>
          </div>

          <br>
        </div>
      </div>
    </div>
  </section>


</x-shop-layout>
