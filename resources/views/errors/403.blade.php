@extends('layouts.app')

@section('title', __('pages.errors.403.title'))
@section('description', __('pages.errors.403.desc'))

@section('content')
    @include('errors.partial', ['code' => '403'])
@endsection
