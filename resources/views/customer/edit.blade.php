@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Customer</h1>
    <hr />
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $customer->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $customer->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ $customer->phone }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address" placeholder="Address" >{{ $customer->address }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
