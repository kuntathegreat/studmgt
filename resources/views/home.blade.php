<div  style="background: url(https://42796r1ctbz645bo223zkcdl-wpengine.netdna-ssl.com/wp-content/uploads/2020/08/Ivory-blog-feature-image.jpg);"> 
    <h1>{{ $user }}</h1>
@extends('layouts.app')

    

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
