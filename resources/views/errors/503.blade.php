@extends('layouts.app')

@section('title', __('pages.errors.503.title'))
@section('description', __('pages.errors.503.desc'))

@section('content')
    @include('errors.partial', ['code' => '503'])
@endsection
