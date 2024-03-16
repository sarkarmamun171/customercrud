@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Book</h1>
    <hr />
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
            </div>
            <div class="col">
                <textarea class="form-control" name="address" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
