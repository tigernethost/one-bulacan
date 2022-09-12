@php
  if(backpack_user() && (Str::startsWith(\Request::path(), config('backpack.base.route_prefix'))))
  {
    $extends = 'errors.layout';
  }
  else {
    $extends = Auth::guard('business-portal')->user() && (Str::startsWith(\Request::path(), 'one-portal')) ? 'errors.layout' : 'errors.v2_layout';
  }
@endphp

@extends($extends)
{{-- @extends('errors.layout') --}}

@php
  $error_number = 503;
@endphp

@section('title')
  It's not you, it's me.
@endsection

@section('description')
  @php
    $default_error_message = "The server is overloaded or down for maintenance. Please try again later.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?e($exception->getMessage()):$default_error_message): $default_error_message !!}
@endsection
