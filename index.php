<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Smart Campus App</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Typed.js -->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <!-- Particles.js -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

  <!-- Lottie Files -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
    }

    #particles-js {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
  </style>
</head>
<body class="relative bg-gray-900 text-white">

  <!-- Particles Background -->
  <div id="particles-js"></div>

  <!-- 🔵 Header with logo -->
  <header class="absolute top-0 w-full px-6 py-4 flex items-center justify-center gap-4 z-10">
    <!-- Logo -->
    <img src="https://www.seventhsensetalent.com/s/store/courses/5ead92e70cf297d98c593cb8/cover.jpg?v=1"
         alt="AJU Logo"
         class="h-12 w-12 md:h-14 md:w-14 rounded-full" />

    <!-- Heading Text -->
    <div class="text-center">
      <h2 class="text-xl md:text-2xl font-bold bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-500 text-transparent bg-clip-text">
        🎓 Arka Jain University
      </h2>
      <p class="text-lg text-white tracking-wide">Smart Campus</p>
    </div>
  </header>

  <!-- 🌟 Main Content -->
  <div class="flex flex-col justify-center items-center h-screen text-center px-4 pt-20">
    <h1 class="text-4xl md:text-6xl font-extrabold mb-4">
      <span id="typed-text" class="whitespace-nowrap"></span>
    </h1>

    <p class="text-lg md:text-xl text-gray-300 max-w-xl mb-6">
      Revolutionizing campus life with smart digital tools for students and staff.
    </p>

    <!-- Lottie Animation -->
    <lottie-player 
      src="https://assets4.lottiefiles.com/packages/lf20_puciaact.json"
      background="transparent"
      speed="1"
      style="width: 300px; height: 300px;"  
      loop autoplay>
    </lottie-player>

    <!-- 🚀 Explore Services Button -->
    <a href="services.html" class="mt-8">
      <button class="bg-pink-600 hover:bg-pink-700 text-white font-semibold text-lg px-8 py-3 rounded-full shadow-lg transition duration-300">
        🚀 Explore Services
      </button>
    </a>
  </div>

  <!-- 🔠 Typed.js Animation -->
  <script>
    const typed = new Typed('#typed-text', {
      strings: ['Smart Campus App', 'Smart C'],
      typeSpeed: 100,
      backSpeed: 50,
      loop: true,
    });
  </script>

  <!-- ✨ Particles.js Background -->
  <script>
    particlesJS("particles-js", {
      particles: {
        number: { value: 70 },
        size: { value: 3 },
        color: { value: "#ffffff" },
        line_linked: {
          enable: true,
          distance: 150,
          color: "#ffffff",
          opacity: 0.4,
          width: 1
        },
        move: {
          enable: true,
          speed: 2
        }
      },
      interactivity: {
        events: {
          onhover: { enable: true, mode: "repulse" },
          onclick: { enable: true, mode: "push" }
        },
        modes: {
          repulse: { distance: 100 },
          push: { particles_nb: 4 }
        }
      },
      retina_detect: true
    });
  </script>
</body>
</html>
