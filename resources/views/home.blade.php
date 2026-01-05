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
            <h3>Hello, I’m Siem – <span>Web Developer</span></h3>
            <p>
                I craft modern, user-friendly websites that combine functionality and aesthetics. 
                My goal is to help businesses connect with their audience through clean design and smooth performance.
            </p>
            <div class="buttongroup">
                <a href="{{ route('projects') }}" class="btn-full">Projects</a>
                <a href="{{ route('contact') }}" class="btn-open">Contact</a>
            </div>
        </div>
    </div>

    <div class="homefooter">
        <style>
            .buttongroup {
                margin-top: 2rem;
                display: flex;
                flex-direction: row; 
                gap: 20px;
                align-items: center;
            }
            .buttongroup .btn-full {
                padding: 10px 30px;
                color: #fff;
                background: #f39c12;
                border-radius: 50px;
                text-decoration: none;
                font-weight: bold;
            }
            .buttongroup .btn-open {
                border: #f39c12 2px solid;
                padding: 8px 28px;
                border-radius: 50px;
                color: #f39c12;
                text-decoration: none;
                font-weight: bold;
            }
            .content-text h3 span {
                color: #f39c12;
            }
            .undertext {
                grid-row: 2/3;
            }

            .iconsbar-hidden {
                visibility: hidden;
            }

            .iconsbar {
                display: flex;
                justify-content: center;
                align-items: end;
                white-space: nowrap;
                overflow: hidden;
                width: 100%;
            }

            .iconsbar i {
                font-size: 1rem;
                display: inline-block;
                margin: 20px 40px;
                letter-spacing: 0.1rem;
            }

            .iconsbar a {
                color: #f39c12;
                opacity: 0.7;
            }

            .iconsbar a:hover {
                opacity: 1;
            }
        </style>

        <!--
        <div class="undertext">
            <h4>Used in website</h4>
            <div class="iconsbar">
                <a href="https://laravel.com/" target="_blank">
                    <i class="fab fa-laravel"> Laravel</i>
                </a>
                <a href="https://web.dev/html" target="_blank">
                    <i class="fa-brands fa-html5"> Html</i>
                </a>
                <a href="https://web.dev/css" target="_blank">
                    <i class="fa-brands fa-css3"> Css</i>
                </a>
                <a href="https://www.php.net/" target="_blank">
                    <i class="fa-brands fa-php"> Php</i>
                </a>
                <a href="https://web.dev/javascript" target="_blank">
                    <i class="fa-brands fa-square-js"> Js</i>
                </a>
            </div>
        </div>
        -->

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