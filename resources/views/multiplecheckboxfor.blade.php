
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h6 class="text-white">Order list</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-right mb-3">
                            <a href="{{ route('items.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Items</th>
                            <th>Creation date</th>
                        </tr>
                        @foreach($items as $item)
                            <tr>
                                <td>
                                    @foreach($item->name as $value)
                                        {{$value}},
                                    @endforeach
                                </td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
