@extends('layouts.app')

@section('title', 'projects')

@section('content')

<div class="home">

    <div class="topinfo">
        <h4>Veldhoven, Netherlands</h4>
        <a class="email-link" href="mailto:siemvahoof@gmail.com">siemvahoof@gmail.com</a>
    </div>

    <div class="hero">
        <div class="title">
            <h1>Projects</h1>
        </div>
    </div>

    <div class="text-projects">
        <p>Browse through projects and filter by category to see what I’ve built over time, 
            highlighting my skills, creativity and growth as a developer.</p>
    </div>

    <div class="filterbar">
        <div class="filter-bar-background">
            <div class="filters-title">
                <h5>Filter:</h5>
            </div>
            <div class="filters">
                <div class="filter-btns">
                    <a href="#">Wordpress Sites</a>
                    <a href="#">Coded Sites</a>
                    <a href="#">Theme</a>
                </div>
            </div>
        </div>

    </div>


    <div class="projects-grid">
        <div class="projects">
            <div class="project">
                <div class="img">
                    <div class="cat">
                        <p><i class="fa-solid fa-circle"></i>wordpress</p>
                    </div>
                    <div class="link">
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="rating">
                    <div class="rtng">
                        <p><i class="fa-solid fa-star"></i> 4.5 / 5</p>
                    </div>
                </div>
                <div class="content">
                    <h6>Title</h6>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Consequatur recusandae pariatur ipsum</p>
                </div>
                <div class="contact">
                    <img src="#" alt="">
                    <p></p>
                    <a href="#"></a>
                </div>
            </div>
            <div class="project"></div>
            <div class="project"></div>
        </div>
    </div>
</div>

<style>
    .text-projects {
        grid-row: 3/4;
        grid-column: 2/3;
    }
    .contact img {
        height: 90%;
        background: #333;
    }
    .contact {
        display: flex;
        flex-direction: row;
    }
    .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .content h6{
        margin: 0 10px;
        font-size: 1.3rem;
        color: #f39c12;
        font-weight: bold;
    }
    .content p{
        margin-left: 10px;
    }
    .project {
        display: grid;
        grid-template-columns: 3% 94% 3%;
        grid-template-rows: 2.5% 40% 10% 30% 15% 2.5%;
    }
    .img {
        grid-column: 2/3;
        grid-row: 2/3;
        background: #222;
        border-radius: 40px;
        display: grid;
        grid-template-rows: 5% 70% 20% 5%;
        grid-template-columns: 3% 35% 47% 12% 3%;
    }
    .img .link {
        margin: 5px 5px;
        grid-column: 4/5;
        grid-row: 3/4;
        background: #ffddb5;
        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .img .link i {
        color: #f39c12;
        font-size: 0.8rem;
    }
    .img .cat {
        margin: 5px 5px;
        grid-column: 2/3;
        grid-row: 3/4;
        background: #ffddb5;
        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .img .cat i {
        margin-right: 5px;
        font-size: 0.8rem;
        color: #f39c12;
    }
    .img .cat p {
        color: #f39c12;
    }
    .rating {
        grid-column: 2/3;
        grid-row: 3/4;
        border-bottom: 1px solid #222;
        margin: 0 10px;
        display: flex;
        justify-content: end;
        align-items: center;
    }
    .rating .rtng {
        margin-right: 1rem;
    }
    .rating .rtng i {
        color: #f39c12;
        margin-right: 5px;
    }
    .content {
        grid-column: 2/3;
        grid-row: 4/5;
        border-bottom: 1px solid #222;
        margin-bottom: 10px;
        margin-left: 10px;
        margin-right: 10px;
    }
    .contact {
        grid-column: 2/3;
        grid-row: 5/6;
        border-radius: 40px;
        background: #222;
    }

    .home {
        position: absolute;
        top: 20px;
        left: 60px;
        right: 10px;
        bottom: 10px;
        display: grid;
        grid-template-rows: 8% 12% 7% 5% 3% 50% 15%;
        grid-template-columns: 20% 60% 20%;
    }

    .projects-grid {
        grid-column: 1/4;
        grid-row: 6/7;
        display: grid;
        grid-template-columns: 5% 90% 5%;
        grid-template-rows: 5% 90% 5%;
    }
    .projects {
        grid-column: 2/3;
        grid-row: 2/3;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 20px;
    }
    .project {
        background: #333;
        border-radius: 50px;
    }

    .filterbar {
        grid-column: 1/4;
        grid-row: 4/5;
        display: grid;
        grid-template-columns: 10% 10% 70% 10%;
    }

    .filter-bar-background {
        background: #333;
        grid-column: 2/4;
        height: 100%;
        border: 1px #444 solid;
        border-radius: 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .filters-title {
        grid-column: 2/3;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 3rem;
    }

    .filters {
        grid-column: 3/4;
        display: flex;
        margin-right: 1rem;
        justify-content: end;
        align-items: center;
    }

    .filters .filter-btns a {
        padding: 10px 25px;
        background-color: #f39c12;
        color: white;
        text-decoration: none;
        font-weight: bold;
        border-radius: 50px;
        margin-right: 5px;
        transition: background-color 0.5s ease;
    }

    .filters .filter-btns a:hover {
        padding: 10px 25px;
        background-color: white;
        color: #f39c12;
        text-decoration: none;
        font-weight: bold;
        border-radius: 50px;
        margin-right: 5px;
    }

    .hero {
        grid-row: 2/3;
        grid-column: 1/4;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .topinfo {
        grid-column: 2/3;
        grid-row: 1/2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
@endsection