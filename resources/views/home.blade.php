@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Home Section -->
<div class="home">

    <div class="topinfo">
        <h4>Veldhoven, Netherlands</h4>
        <a class="email-link" href="mailto:siemvahoof@gmail.com">siemvahoof@gmail.com</a>
    </div>

    <div class="hero">
        <div class="title">
            <h1>Lorem ipsum</h1>
        </div>
    </div>

</div>

<style>
    .home {
        position: absolute;
        top: 10px;
        left: 75px;
        right: 10px;
        bottom: 10px;
    }

    .hero {
        margin-top: 2rem;
        display: flex;
        flex-direction: column;
    }

    .topinfo {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .hero .title {
        margin-top: 0rem;
        margin-bottom: 1rem;
        display: flex;
        justify-content: center;
    }

    .hero p {
        width: 50%;
        display: flex;
        justify-content: center;
    }
</style>

@endsection