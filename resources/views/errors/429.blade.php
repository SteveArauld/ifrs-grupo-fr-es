@extends('layouts.app')

@section('title', __('pages.errors.429.title'))
@section('description', __('pages.errors.429.desc'))

@section('content')
    @include('errors.partial', ['code' => '429'])
@endsection
