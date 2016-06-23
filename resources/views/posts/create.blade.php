@extends('base')

@section('title', '| Create Post')

@section('content')
 
<br> 
@include('partials._message')

<style type="text/css">

/*
 * Globals
 */

body {
  font-family: Georgia, "Times New Roman", Times, serif;
  color: #555;
}

h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6 {
  margin-top: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: normal;
  color: #333;
}


/*
 * Override Bootstrap's default container.
 */

/*@media (min-width: 1200px) {
  .container {
    width: 970px;
  }
}*/
@media (max-width: 480px) {
  .blog-masthead {
    letter-spacing: 0px;
    font-size: 10px;
  }
}

.fullscreen-bg {
    position: relative;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
@media (min-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    width: 100%;
    height: auto;
  }
}

@media (max-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    width: auto;
    height: 100%;
  }
}

/*
 * Masthead for nav
 */

.blog-masthead {
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
          box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);        
}

/* Nav links */
.blog-nav-item {
  position: relative;
  display: inline-block;
  padding: 10px;
  font-weight: 500;
  color: #cdddeb;
}
.blog-nav-item:hover,
.blog-nav-item:focus {
  color: #fff;
  text-decoration: none;
}

/* Active state gets a caret at the bottom */
.blog-nav .active {
  color: #fff;
}
.blog-nav .active:after {
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 0;
  margin-left: -5px;
  vertical-align: middle;
  content: " ";
  border-right: 5px solid transparent;
  border-bottom: 5px solid;
  border-left: 5px solid transparent;
}


/*
 * Blog name and description
 */

.blog-header {
  padding-top: 20px;
  padding-bottom: 20px;
}
.blog-title {
  margin-top: 30px;
  margin-bottom: 0;
  font-size: 60px;
  font-weight: normal;
}
.blog-description {
  font-size: 20px;
  color: #999;
}


/*
 * Main column and sidebar layout
 */

.blog-main {
  font-size: 18px;
  line-height: 1.5;
}

/* Sidebar modules for boxing content */
.sidebar-module {
  padding: 15px;
  margin: 0 -15px 15px;
}
.sidebar-module-inset {
  padding: 15px;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.sidebar-module-inset p:last-child,
.sidebar-module-inset ul:last-child,
.sidebar-module-inset ol:last-child {
  margin-bottom: 0;
}


/* Pagination */
.pager {
  margin-bottom: 60px;
  text-align: left;
}
.pager > li > a {
  width: 140px;
  padding: 10px 20px;
  text-align: center;
  border-radius: 30px;
}


/*
 * Blog posts
 */

.blog-post {
  margin-bottom: 60px;
}
.blog-post-title {
  margin-bottom: 5px;
  font-size: 40px;
}
.blog-post-meta {
  margin-bottom: 20px;
  color: #999;
}

 </style>


        <div class="col-sm-8 blog-main">
    <br>
    <h1>Create A New Post</h1>
    <hr>

     {!! Form::open(array('route' => 'posts.store')) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class'=>'form-control'))}}

        {{ Form::label('body', 'Post Body:') }}
        {{ Form::textarea('body', null, array('class'=>'form-control'))}}

        {{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px;'))}}
     {!! Form::close() !!}

 <!-- <form>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
   <textarea class="form-control" rows="15" id="body" placeholder=""></textarea>
  </div>
  
  <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
</form> -->
        </div><!-- /.blog-main -->
<br>
 

<div class="col-sm-3 col-sm-offset-1 blog-sidebar" >

          <div class="sidebar-module sidebar-module-inset" style="margin-right:15px; ">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>CRUD Operations</h4>
            <ol class="list-unstyled">
              <li><a href="{{route('posts.create')}}">Create</a></li>
              <li><a href="{{route('posts.index')}}">Read</a></li>
              <li><a href="#">Update</a></li>
              <li><a href="#">Delete</a></li>  
            </ol>
          </div>
          
           </div><!-- /.blog-sidebar -->


@endsection