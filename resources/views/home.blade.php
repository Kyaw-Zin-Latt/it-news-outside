@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <i class="fas fa-home"></i>
                    {{ __('You are logged in!') }}
                    <button class="test btn btn-primary">test</button>
                        <br>
                        <br>
                        <br>
                        <br>


                        {{ route('article.show',[3,'page'=>5,'go'=>13]) }}

                        <br>
                        <br>
                        <br>


                        {{ \App\User::all()->random()->id }}

                        <br>
                        <br>
                        <br>
                    {{ Request::url() }}

                        <br>
                        <br>
                        <br>
                        <br>



                        <br>
                        <br>
                        <br>

                    {{ \App\Base::showName() }}

                        <br>
                        <br>
                        <br>
                        <br>
                    {{ env("APP_NAME") }}

                        <br>
                        <br>
                        <br>
                        <br>

                    {{ env("APP_DEV") }}

                        <br>
                        <br>
                        <br>
                        <br>

                    {{ date("y - m - d | h : i : s a") }}

                        <br>
                        <br>
                        <br>

                    {{ $categories }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('foot')
    <script>
        $(".test").click(function (){
            alert("hello");
        })
    </script>
@endsection
