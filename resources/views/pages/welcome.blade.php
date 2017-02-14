@extends('main')

@section('title','| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p>Welcome to My Blog</p>
                <p clas="lead">Thank you for visiting. This is my test website built with Laravel. Please read my popular post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
            </div>
        </div>
    </div><!-- end of header .row -->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
              <h3>Post Tittle</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sunt odio voluptas dicta amet voluptate laborum assumenda, vitae ducimus dolorum similique, animi neque porro doloremque vel quibusdam aliquid distinctio. Doloremque!</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
              <h3>Post Tittle</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sunt odio voluptas dicta amet voluptate laborum assumenda, vitae ducimus dolorum similique, animi neque porro doloremque vel quibusdam aliquid distinctio. Doloremque!</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
              <h3>Post Tittle</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sunt odio voluptas dicta amet voluptate laborum assumenda, vitae ducimus dolorum similique, animi neque porro doloremque vel quibusdam aliquid distinctio. Doloremque!</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
              <h3>Post Tittle</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sunt odio voluptas dicta amet voluptate laborum assumenda, vitae ducimus dolorum similique, animi neque porro doloremque vel quibusdam aliquid distinctio. Doloremque!</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection