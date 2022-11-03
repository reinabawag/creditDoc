@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Classification</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <p>
                <a href="{{ route('classification.create') }}">Add new classification</a>
            </p>
            
            <table id="table" class="display compact" style="width:100%">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classifications as $classification)
                        <tr>
                            <td>{{ $classification->description }}</td>
                            <td><a href="{{ route('classification.edit', $classification->id) }}">Update</a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Description</th>
                        <th>Update</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
