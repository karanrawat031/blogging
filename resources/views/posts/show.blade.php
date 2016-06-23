@extends('base')

@section('title', '| Created Post')

@section('stylesheets')

{!! Html::style('css/styles.css') !!}

@endsection

@section('content')
 
<div class="row"> 
 <div class="col-md-8">    
<br><br><hr>
@include('partials._message')
<br>
<h1>{{ $post->title }}</h1>
<p class="lead">{{$post->body}}</p>
</div>

<div class="col-md-4" style="padding-top: 55px;">
<div class="well">
<dl class="dl-horizontal">
 <dt>Created At:</dt>
 <dd>{{date('M j, Y H:i ',strtotime($post->created_at))}}</dd>
</dl>
<dl class="dl-horizontal">
 <dt>Updated At:</dt>
 <dd>{{date('M j, Y H:i ',strtotime($post->updated_at))}}</dd>
</dl>
<hr>
<div class="row">
 <div class="col-sm-6">
  <a href="#" class="btn btn-primary btn-block">Edit</a>
 </div>
  <div class="col-sm-6">
  <a href="#" class="btn btn-danger btn-block">Delete</a>
 </div>
</div>
</div>
</div>
</div>
@endsection