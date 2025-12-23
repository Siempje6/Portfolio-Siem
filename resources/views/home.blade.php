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

    <div class="hero-text-image">
        <div class="img"></div>
        <div class="content-text">
            <h3>Lorem ipsum dolor sit amet, consectetur:</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae excepturi enim suscipit neque exercitationem. Tenetur, repellendus? Laudantium aperiam cum animi porro officiis nemo, saepe asperiores nam natus quia praesentium autem?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum explicabo eligendi aliquam! Rem iste vitae, soluta error optio voluptates modi, placeat earum id aperiam commodi nostrum temporibus repellendus sit officiis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum hic maiores autem in.
            </p>
        </div>
    </div>

    <div class="homefooter">
        <h1>Lorem Ipsum Dolor</h1>

        <div class="undertext">
            <h4>Used in website</h4>
            <p>Laravel, Breeze</p>
        </div>

    </div>

</div>

<style>
    .bottomh1 {
        display: flex;
        justify-content: center;
        margin-top: 5rem;
    }

    .bottomh1 h1 span {
        color: #fff;
    }

    .hero-text-image {
        grid-column: 1/4;
        grid-row: 3/4;
        margin: 0 5%;
        display: grid;
        grid-template-columns: 47.5% 50%;
        gap: 2.5%;
    }

    .img {
        border-radius: 50px;
        margin: 20px;
        background: #333;
    }

    .content-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .home {
        position: absolute;
        top: 20px;
        left: 60px;
        right: 10px;
        bottom: 10px;
        display: grid;
        grid-template-rows: 10% 18% 35% 37%;
        grid-template-columns: 20% 60% 20%;
    }

    .homefooter {
        margin-top: 20px;
        display: grid;
        grid-template-rows: 40% auto;

        grid-column: 1/4;
        grid-row: 4/5;
    }

    .homefooter h1 {
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0.3;
    }

    .undertext {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .undertext p {
        margin: 0;
        opacity: 0.3;
    }

    .hero {
        margin-top: 1rem;
        grid-row: 2/3;
        grid-column: 1/4;
        display: flex;
        flex-direction: column;
    }

    .topinfo {
        grid-column: 2/3;
        grid-row: 1/2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .hero .title {
        margin-top: 0rem;
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .hero p {
        width: 50%;
        display: flex;
        justify-content: center;
    }
</style>

@endsection