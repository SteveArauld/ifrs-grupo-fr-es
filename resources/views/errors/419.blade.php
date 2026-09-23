@extends('layouts.app')

@section('title', __('pages.errors.419.title'))
@section('description', __('pages.errors.419.desc'))

@section('content')
    @include('errors.partial', ['code' => '419'])
@endsection
