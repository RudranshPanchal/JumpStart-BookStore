@section('title')
Member Dashboard
@endsection

@extends('Users.Member.layouts.app')

@section('content')
<br><br>
<br><br>
<br><br>
<br><br>
<!-- Start breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('member#index') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Member Dashboard</li>
    </ol>
</nav>

<!-- END breadcrumb -->

<div class="container" style="background-color: rgba(0, 0, 0, 0.362)">
<div class="card mt-4 mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" >

        <thead>
          <tr>
            <th  style="color: black">Admin Id</th>
            <th  style="color: black">User Id</th>
            <th  style="color: black">Product Name</th>
            <th  style="color: black">Product Type</th>
            <th  style="color: black">Product Price</th>
            <th  style="color: black">Product Image</th>
            <th  style="color: black">Action</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($order as $item)
                <tr>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->admin_id }}</td>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->user_id }}</td>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->product_name }}</td>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->product_type }}</td>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->product_price }}</td>
                    <td  style="color: rgb(0, 0, 0)">  <img src="{{ asset('uploads/product/' . $item->product_image) }}" class="img-thumbnail" width="150px" height="150px"  alt="Images"></td>
                    <td  style="color: rgb(0, 0, 0)">
                        <a href="{{ route('member#memberDetails', $item->id) }}">
                            <button type="button" class="btn btn-outline-primary" >Details</button>
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
