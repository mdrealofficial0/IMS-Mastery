@extends('layouts.sidenav-layout')

@section('content')

@include('components.report.report-list')
@include('components.report.report-create')
@include('components.report.report-update')
@include('components.report.report-delete')
    
@endsection