@extends('User.Layouts.app')
@section('content')
{{-- {{$search}} --}}
@livewire('User.Filter.Product',['search'=>$search])
@endsection