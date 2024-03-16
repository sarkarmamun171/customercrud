@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Customer</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $customer->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $customer->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ $customer->phone }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Address" readonly>{{ $customer->address }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $customer->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $customer->updated_at }}" readonly>
        </div>
    </div>
@endsection
