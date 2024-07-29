@extends('User.Layouts.app')
@section('content')
@livewire('user.cart.index',['product_id'=>$product])
@endsection