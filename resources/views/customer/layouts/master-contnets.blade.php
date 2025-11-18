<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>@yield('title', 'HRM Project')</title>

    @include('customer.layouts.head-tag-content')

 

</head>

<body class="bg-of-body">

    <div id="particles-js" class="style-particles"></div>

    @include('customer.layouts.header-content')

    <main class="hero-section">
        @yield('content')
    </main>

    @include('customer.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80
                },
                "color": {
                    "value": "#90A4C7"
                },
                "shape": {
                    "type": "circle"
                },
                "opacity": {
                    "value": 0.3,
                    "random": false
                },
                "size": {
                    "value": 3
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#90A4C7",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2
                }
            },
            "interactivity": {
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    }
                }
            }
        });
    </script>
    <script>
        const startBtn = document.getElementById('start');

        startBtn.addEventListener('click', function() {
            console.log(123);
            const infoSection = document.getElementById('info');
            const offset = 50; // ارتفاع هدر یا فاصله بالای صفحه
            const topPos = infoSection.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({
                top: topPos,
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>
