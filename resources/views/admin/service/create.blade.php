@extends('admin.layouts.crud')
@section('title', 'Add '.$meta['label'])
@section('page_title', 'Add '.$meta['label'])
@section('content')
<div class="page-head"><div><h1 class="page-h1">Add {{ $meta['label'] }}</h1></div></div>
@include('admin.partials.crud-form', ['slug'=>$slug,'meta'=>$meta,'action'=>url('admin/'.$slug),'options'=>$options])
@endsection

