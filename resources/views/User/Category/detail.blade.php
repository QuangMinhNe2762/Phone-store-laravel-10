@extends('User.Layouts.app')
@section('content')
@livewire('user.filter.product',['category_slug'=>$title])
@endsection