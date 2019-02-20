@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-2"><passport-clients></passport-clients></div>
    <div class="mb-2"><passport-authorized-clients></passport-authorized-clients></div>
    <div class="mb-2"><passport-personal-access-tokens></passport-personal-access-tokens></div>
</div>
@endsection
