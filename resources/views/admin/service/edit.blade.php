@extends('admin.layouts.crud')
@section('title', 'Edit '.$meta['label'])
@section('page_title', 'Edit '.$meta['label'])
@section('content')
<div class="page-head"><div><h1 class="page-h1">Edit {{ $meta['label'] }}</h1></div></div>
@include('admin.partials.crud-form', ['slug'=>$slug,'meta'=>$meta,'model'=>$model,'action'=>url('admin/'.$slug.'/'.$model->id),'options'=>$options])
@endsection

