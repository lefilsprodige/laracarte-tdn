@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container">
        <h2>What is laracarte?</h2>
        <p>Laracarte is clone of <a href="https://laramap.com">laramap.com</a></p>
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                <strong>
                <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
                This app has been built by <a href="https://twitter.com/etsmo">@etsmo</a>  learning purpose.
                </strong>
                </p>
            </div>
        </div>

        <p>Feel free to help to improve the <a href="https://github.com/lefilsprodige/laracarte-tdn">source code</a></p>

        <hr>

        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which Laracarte was inspired</p>
        <p>More info <a href="https://laramap.com/p/about">here.</a></p>

        <hr>
        <h2>Which tools and services are used in laracarte?</h2>
        <p>Basically it's built on laravel &amp; bootstrap. But there is a bunch of services used for email and others sections.</p>
        <ul>
            <li>Laravel</li>
            <li>Amazone</li>
            <li>Bootstrap</li>
            <li>Google Maps</li>
            <li>Heroku</li>
            <li>Mandrill</li>
        </ul>
    </div>
@stop
