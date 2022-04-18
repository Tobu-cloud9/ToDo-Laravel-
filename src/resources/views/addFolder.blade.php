@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('フォルダを追加する') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                        <form method="post" action="{{route('storeFolder')}}">
                            <p><input type="text" name="name" size="30"></p>
                            <button type="submit">作成する</button>
                        @csrf
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

