@extends('admin.layouts.crud')
@section('title', $meta['label'] ?? '')
@section('page_title', $meta['label'] ?? '')
@section('content')
<div class="page-head"><div><h1 class="page-h1">{{ $meta['label'] ?? '' }}</h1><p class="page-sub">Manage records</p></div><a href="{{ url('admin/'.$slug.'/create') }}" class="btn btn-accent">+ Add</a></div>
@include('admin.partials.crud-table', ['slug'=>$slug,'meta'=>$meta,'rows'=>$rows])
<div class="table-footer">{{ $rows->links() }}</div>
@endsection

