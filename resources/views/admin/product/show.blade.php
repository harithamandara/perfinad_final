



<x-admin-layout>
    <style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </style>
  <div class="container">

  <a href="{{ url('create') }}" class="btn btn-primary">Add Product</a>
 <!-- msg -->
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

    <table class="table">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>image</th>

          <th>Total</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>

        @foreach($products as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->quantity }}</td>
          <td>{{ $item->image }}</td>
        <td> {{ $item->descreption }}</td>
        <td>Rs. {{ $item->price }}</td>
        <td>
            <a href="{{ url('edit', $item->id) }}" class="btn btn-primary">
                <i class="fa fa-edit"></i> Edit
            </a>
          <form action="{{ url('destroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-danger">
                  <i class="fa fa-trash"></i> Delete
              </button>
          </form>
      </tr>

    @endforeach
      </tbody>
    </table>


  </div>
</x-admin-layout>
