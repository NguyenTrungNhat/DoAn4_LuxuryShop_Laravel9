@extends('layout')



@section('content')

<!-- Begin Error 404 Area -->
<div class="error-404-area section-space-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-404-content">
                    <h1 class="title mb-5">404</h1>
                    <h2 class="sub-title mb-4">Page Cannot Be Found!</h2>
                    <p class="short-desc mb-7">Seems like nothing was found at this location. Try something else or you can go back to the homepage following the button below!</p>
                    <div class="button-wrap">
                        <a class="btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" href="index.html">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Error 404 Area End Here -->

@endsection