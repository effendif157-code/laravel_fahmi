@extends('layouts.app')

@section('content')
<div class="container">
    
            <div class="card">
                <div class="card-header">{{ ('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="padding:80px; margin:15px; text-align:center;">SELAMAT DATANG DI SITUS KAMI</p>

               
        </div>
    </div>
</div>
@endsection
