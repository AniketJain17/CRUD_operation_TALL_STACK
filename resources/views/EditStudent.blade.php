@extends('layouts.app')

@section('content')
    <livewire:student-editing-form :studentId="Request::get('studentId')"/>
@endsection


