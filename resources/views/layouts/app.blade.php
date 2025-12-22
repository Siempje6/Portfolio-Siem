<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white relative">
    <div id="dot"></div>
    <div id="ring"></div>
    <!-- Home section -->
    <div class="main">
        @yield('content')
    </div>

    <div class="menu-trigger">
        <div class="bars">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <p>MENU</p>

        <div class="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <a class="dribbble-link" href="https://dribbble.com/siem-va-hoof" target="_blank">
        <i class="fab fa-dribbble"></i>
    </a>

    <style>
        * {
            box-sizing: border-box;
        }

        h1 {
            color: #F39C12;
            font-family: "Titan One", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: calc(45px + 4vw);
            margin: 0;
            transform: scaleY(1.1);
        }

        h4 {
            font-size: 1.6rem;
            color: #f9f9ed;
            margin: 0;
            text-transform: uppercase;
        }

        .email-link {
            color: #f9f9ed;
            opacity: 0.4;
            font-size: 0.9rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        p {
            color: #f9f9ed;
            font-size: 1.2rem;
        }

        body {
            width: 100vw;
            height: 100vh;
            font-family: 'Abel', Helvetica, sans-serif;
            margin: 0;
        }

        #dot {
            position: fixed;
            width: 17px;
            height: 17px;
            background: #F39C12;
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            z-index: 10000;
            transition: background-color 0.3s ease-in-out;
        }

        #ring {
            position: fixed;
            width: 50px;
            height: 50px;
            border: 1px solid #F39C12;
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            z-index: 9999;
            transition: width 0.3s ease-in-out, height 0.3s ease-in-out;
        }

        :hover {
            cursor: none;
        }

        .main {
            background: #222;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .home>p {
            color: #fff;
            font-size: 2rem;
            text-transform: uppercase;
        }

        .menu-trigger {
            position: fixed;
            top: 0;
            left: 0;
            width: 50px;
            height: 100%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
            background: #222;
        }

        .menu-trigger p {
            color: #aaa;
            font-weight: bold;
            letter-spacing: .12rem;
            font-size: .9rem;
            position: absolute;
            top: 49%;
            left: 5px;
            transform: translateY(60px) rotate(-90deg);
            opacity: 0;
            transition: all .4s ease;
            pointer-events: none;
            z-index: 10;
        }

        .menu-trigger:hover p {
            opacity: 1;
        }

        .bars {
            display: flex;
            width: 50%;
            align-items: center;
            justify-content: space-between;
            z-index: 10;
        }

        .bars>span {
            width: 4px;
            height: 40px;
            background: #666;
            transition: all .4s ease;
        }

        .menu-trigger:hover .bars>span:first-of-type,
        .menu-trigger:hover .bars>span:last-of-type {
            transform: translateY(-5px);
            opacity: 0;
        }

        .menu-trigger:hover .bars>span:nth-of-type(2) {
            transform: scaleY(1.2);
            transform-origin: center bottom;
        }

        .menu {
            position: absolute;
            top: 0;
            left: 0;
            background: #222;
            height: 100%;
            width: 200px;
            border-right: 1px solid #444;
            transform: translateX(calc(-100% + 51px));
            transition: all .8s cubic-bezier(0.785, 0.135, 0.15, 0.86);
            padding: 50px 20px;
        }

        .menu-trigger:hover .menu {
            transform: translateX(50px);
        }

        .menu ul {
            display: flex;
            flex-direction: column;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu ul li {
            margin: 20px 0;
        }

        .menu ul li a {
            color: #f9f9ed;
            text-decoration: none;
            font-family: 'Abel', Helvetica, sans-serif;
            font-weight: 700;
            font-size: 1rem;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .menu ul li a:hover {
            color: #F39C12;
        }

        .dribbble-link {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #F39C12;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .dribbble-link>i {
            color: #fff;
            font-size: 1.8rem;
        }
    </style>

    <script>
        const clickableElements = ['A', 'BUTTON', 'INPUT', 'TEXTAREA', 'SELECT', 'LABEL'];
        const dot = document.getElementById('dot');
        const ring = document.getElementById('ring');

        let mouseX = 0;
        let mouseY = 0;

        let ringX = 0;
        let ringY = 0;

        const speed = 0.3;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;

            dot.style.left = mouseX + 'px';
            dot.style.top = mouseY + 'px';
        });

        document.addEventListener('mouseover', (e) => {
            if (e.target.closest(clickableElements)) {
                isHovering = true;
            }
        });
        document.addEventListener('mouseout', (e) => {
            if (e.target.closest(clickableElements)) {
                isHovering = false;
            }
        });

        function animate() {
            ringX += (mouseX - ringX) * speed;
            ringY += (mouseY - ringY) * speed;

            ring.style.left = ringX + 'px';
            ring.style.top = ringY + 'px';

            if (isHovering) {
                ring.style.width = '70px';
                ring.style.height = '70px';
                dot.style.backgroundColor = '#F39C12';
            } else {
                ring.style.width = '50px';
                ring.style.height = '50px';
                dot.style.backgroundColor = '#F39C12';
            }

            requestAnimationFrame(animate);
        }

        let isHovering = false;



        animate();
    </script>
</body>

</html>