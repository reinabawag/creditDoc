@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            
            <table id="table_id" class="display compact" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Customer</th>
                        <th>Classification</th>
                        <th>Uploaded by</th>
                        <th>Upload date</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Customer</th>
                        <th>Classification</th>
                        <th>Uploaded by</th>
                        <th>Upload date</th>
                        <th>Options</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
