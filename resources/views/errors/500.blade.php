@extends('layouts.app')

@section('title', __('pages.errors.500.title'))
@section('description', __('pages.errors.500.desc'))

@section('content')
    @include('errors.partial', ['code' => '500'])
@endsection
