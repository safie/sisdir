@extends('template.base2')
@section('pageTitle', 'Sistem Direktori Staf')
@section('content')
<div class="container">
    <div class="row columns">
        <div class="column is-desktop">
            @include('index.list')
        </div>
    </div>
</div>

@endsection