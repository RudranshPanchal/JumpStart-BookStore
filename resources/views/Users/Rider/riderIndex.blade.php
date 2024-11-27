@section('title')
    Rider Dashboard
@endsection

@extends('Users.Rider.layouts.app')

@section('content')
<br><br><br><br><br><br>
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('rider#index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Rider Dashboard</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<div class="container">
    <div class="card mt-4 mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" >

            <thead>
              <tr>
                <th>No.</th>
                <th>User Id</th>
                <th>Admin Id</th>
                <th>Member Id</th>
                <th>Product Id</th>
                <th>Delivery Address</th>
                <th>Payment Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($order as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->admin_id }}</td>
                        <td>{{ $item->member_id }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->delivery_address }}</td>
                        <td>{{ $item->payment_method }}</td>
                        <td>
                            <a href="{{ route('rider#riderDetails', $item->id) }}">
                                <button type="button" class="btn btn-outline-primary" > Track Order</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>


@endsection
