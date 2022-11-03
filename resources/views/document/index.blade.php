@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Document</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{ old('description') }}">
                </div>
                <div class="form-group">
                    <label for="classification_id">Classification</label>
                    <select class="form-control" id="classification_id" name="classification_id">
                        @foreach ($classifications as $classification)
                            <option value="{{ $classification->id }}">{{ $classification->description }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="customer_id">Customer</label>
                    <select class="form-control" id="customer_id" name="customer_id">
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="filename">File</label>
                    <input type="file" class="form-control-file" id="filename" name="filename">
                  </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>

            <br>
            
            <table class="display compact" style="width:100%" id="table-document">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Classification</th>
                    <th scope="col">Upload date</th>
                    <th scope="col">View</th>
                    <th scope="col">Update</th>
                  </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Classification</th>
                        <th scope="col">Upload date</th>
                        <th scope="col">View</th>
                        <th scope="col">Update</th>
                    </tr>
                </tfoot>
              </table>
        </div>
    </div>
</div>
@endsection
