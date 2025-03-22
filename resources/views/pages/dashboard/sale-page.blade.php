@extends('layouts.sidenav-layout')

@section('content')
    
@include('components.sale.sale-list')
@include('components.sale.sale-create')
@include('components.sale.sale-update')
@include('components.sale.sale-delete')


@endsection