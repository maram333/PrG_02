@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customers</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Add New Customer</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->title }}</td>
                    <td><img src="{{ asset('storage/' . $customer->image) }}" alt="" width="100"></td>
                    <td>{{ $customer->description }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
