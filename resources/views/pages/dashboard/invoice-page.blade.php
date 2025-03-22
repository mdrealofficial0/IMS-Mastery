@extends('layouts.sidenav-layout')

@section('content')
    
@include('components.invoice.invoice-list')
@include('components.invoice.invoice-create')
@include('components.invoice.invoice-update')
@include('components.invoice.invoice-delete')

@endsection