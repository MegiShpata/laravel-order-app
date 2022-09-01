@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <h5 class="cart-header" style="margin-left: 20px">
                        <br>
                        <a href="{{route('items.index')}}" class="btn btn-sm btn-outline-primary">Go Back</a>
                    </h5>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table table-hover table-borderless">
                                <thead>
                                <th>Items</th>
                                <th>Order Date</th>
                                </thead>
                                <tbody>
                                @forelse($items as $item)
                                    <tr>
                                      <td>@foreach($values->values as $value)
                                              {{ json_decode($value) }}
                                          @endforeach
                                      </td>



                                      <td>{{$item->created_at}}</td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td>No Order</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
