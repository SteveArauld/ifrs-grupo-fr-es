@extends('layouts.app')

@section('title', __('pages.errors.404.title'))
@section('description', __('pages.errors.404.desc'))

@section('content')
    @include('errors.partial', ['code' => '404'])
@endsection
