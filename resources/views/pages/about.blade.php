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
            <h1>About</h1>
        </div>
    </div>

    <div class="head-about">
        <div class="text">
            <h3>About <span>Me,</span></h3>
            <p>
                Hello, I am Siem, I am a 18 year old <span>Creative Front-End Developer</span> from the Netherlands.
                I have a passion for building accessible and user-friendly websites.
                I especially enjoy <span>designing websites</span> and then bringing them to life myself,
                because I love thinking about how a website should look and feel.
                I also enjoy learning new coding techniques,
                and I prefer to explore new web technologies whenever I can.
                <br><br>
                I like experimenting with different design concepts and finding creative solutions to challenges.
                Working collaboratively with others motivates me,
                but I also enjoy working independently on projects to fully develop my ideas.
                I also make sure that my work is <span>visually appealing and user-friendly.</span>
            </p>
        </div>
        <div class="image">

        </div>
    </div>

    <div class="bottomtext">
        <div class="left">
            <div class="text">
                <h3>Skills & Core Values</h3>
                <p>
                    I combine creativity with practical solutions and am always striving to improve my skills.
                    Here’s an overview of my key strengths and qualities: </p>

                <ul>
                    <li>
                        <p>Creativity & Innovation</p>
                    </li>
                    <li>
                        <p>Teamwork & Collaboration</p>
                    </li>
                    <li>
                        <p>Problem Solving & Adaptability</p>
                    </li>
                    <li>
                        <p>Continuous Learning</p>
                    </li>
                    <li>
                        <p>Passion for Web Development</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <h3>Learn More <span>About Me</span></h3>
            <p>
                Curious about my projects, hobbies, and fun facts? 
                Expand the sections below to discover more about who I am, 
                both professionally and personally.
            </p>
            <div class="custom-accordion">
                <div class="accordion-item">
                    <h3 class="accordion-title">Projects</h3>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                <p><span>Portfolio Site:</span> I have made this portfolio site</p>
                            </li>
                            <li>
                                <p><span>Statement Carwrap site</span> I have made a website for a carwrap company in the netherlands</p>
                            </li>
                            <li>
                                <p><span>Wordpress Theme:</span> In my intership i have made a wordpress theme for learning purposes</p>
                            </li>
                            <a href="#">See more Projects</a>
                        </ul>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-title">Hobbies & Interests</h3>
                    <div class="accordion-content">
                        <p>Content van item 2. Wordt automatisch gesloten als een ander item opent.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<style>
    .head-about {
        grid-column: 1/4;
        grid-row: 3/4;
        display: grid;
        grid-template-columns: 50% 50%;
    }

    .bottomtext {
        grid-column: 1/4;
        grid-row: 4/5;
        display: grid;
        grid-template-columns: 50% 50%;
    }

    .bottomtext .left {
        margin: 20px;
    }

    .bottomtext .right {
        margin: 30px;
    }

    .head-about .text {
        margin: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    h1 {
        color: #f39c12;
    }

    h3 span {
        color: #f39c12;
    }

    p span {
        color: #f39c12;
        font-weight: bold;
    }

    ul {
        color: #f39c12;
    }

    ul li p {
        color: #fff;
    }

    .head-about .image {
        background: #333;
        margin: 20px;
        border-radius: 50px;
    }

    .home {
        position: absolute;
        top: 20px;
        left: 60px;
        right: 10px;
        bottom: 10px;
        display: grid;
        grid-template-rows: 8% 12% 35% 41%;
        grid-template-columns: 20% 60% 20%;
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

    .custom-accordion {
        max-width: 100%;
        background-color: #222;
        border-radius: 6px;
        overflow: hidden;
    }

    .accordion-title {
        width: 100%;
        padding: 1rem 1.25rem;
        text-align: left;
        background: #222;
        cursor: pointer;
        outline: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background 0.3s ease;
    }

    .accordion-title:hover {
        background: #333;
        border-bottom: #f39c12 1px solid;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        color: #fff;
        padding: 0 1.25rem;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .accordion-content p {
        margin: 10px 0;
    }

    .accordion-item.active .accordion-content {
        max-height: 500px;
        padding: 1rem 1.25rem;
    }
</style>

<script>
    const items = document.querySelectorAll('.accordion-item');

    items.forEach(item => {
        const title = item.querySelector('.accordion-title');

        title.addEventListener('click', () => {
            items.forEach(i => i !== item && i.classList.remove('active'));

            item.classList.toggle('active');
        });
    });
</script>


@endsection