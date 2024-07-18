<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Page</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
  <style>
    /* Custom styles for Red Velvet theme */
    .bg-red-velvet {
      background-color: #A52A2A; /* Brownish red */
    }
    .text-red-velvet {
      color: #A52A2A;
    }
    .border-red-velvet {
      border-color: #A52A2A;
    }
    .hover\:bg-red-velvet:hover {
      background-color: #A52A2A;
    }
    .hover\:text-red-velvet:hover {
      color: #A52A2A;
    }
    .placeholder-red-velvet::placeholder {
      color: #D2691E; /* Lighter red for placeholder */
    }

    .about-container {
        top: 50%;
        left: 50%;
        width: 90%; /* Adjust as needed for responsiveness */
        max-width: 600px; /* Maximum width for larger screens */
        padding: 30px;
        background: #FFFFFF;
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
        margin: 50px auto; /* Centering with margin instead of absolute positioning */
    }

    .circle {
        width: 200px;
        height: 200px;
        background: url('https://i.ibb.co/JyNwM2D/image.jpg');
        border-radius: 50%;
        background-size: cover;
        float: left;
        shape-outside: circle();
        margin: 30px 30px 30px 0;
    }

    p {
        margin: 0;
        padding: 0;
        line-height: 22px;
        text-align: justify;
    }

    h1 {
        margin: 0;
        padding: 0;
        font-size: 30px;
    }

  </style>
</head>
<body>

    <header id="header" class="w-full h-16 bg-white px-4 md:px-8 flex justify-between items-center shadow-md fixed z-50">
        <img src="https://i.imgur.com/NmiMYcQ.png" alt="Logo" width="35" id="header-img">
        <nav id="nav-bar">
            <ul class="flex flex-row flex-no-wrap justify-around font-normal text-red-velvet">
            <li class="p-2 mx-2 md:mx-4 cursor-pointer"><a href="#overview" class="nav-link">Overview</a></li>
            <li class="p-2 mx-2 md:mx-4 cursor-pointer"><a href="#beta-test" class="nav-link">Beta test</a></li>
            </ul>
        </nav>
    </header>


    <div id="overview" class="w-11/12 md:w-4/5 mx-auto py-24 flex flex-col md:flex-row flex-no-wrap">
        <div id="landing-text" class="w-full md:w-1/2 flex flex-col">
            <h4 class="font-medium text-red-velvet">The Ultimate Snack Experience</h4>
            <h2 class="font-bold text-3xl md:text-5xl text-red-velvet leading-tight mt-3 mb-6">Basreng: Crispy, Tasty, Addictive!</h2>
            <span class="font-normal text-gray-600">Indulge in the deliciousness of Basreng, the perfect snack for any time of the day. Crispy on the outside, savory on the inside, it's a flavor explosion in every bite!</span>
            <div id="buttons" class="font-medium flex flex-col md:flex-row mt-6">
            <div class="mr-3 pl-0 p-2 cursor-pointer hover:underline"><a href="#watch-video">Watch Video</a></div>
            <div class="mx-4 p-2 px-4 border-2 text-red-velvet border-red-velvet rounded-lg hover:text-white hover:bg-red-velvet cursor-pointer">Order Now</div>
        </div>
    </div>

    <div id="landing-image" class="w-full md:w-1/2 mt-6 md:mt-0">
        <div class="glide">
          <div class="glide__track m-4" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <img src="https://akcdn.detik.net.id/community/media/visual/2022/01/06/bakso-gorengbasreng_43.jpeg?w=700&q=90" alt="Image 1">
              </li>
              <li class="glide__slide">
                <img src="https://cdn.idntimes.com/content-images/community/2023/06/pexels-meggy-kadam-aryanto-13609022-5f33a6106b7b2abdfec00ff311918826-a247ba1a3d023e869726457d37e62ded_600x400.jpg" alt="Image 2">
              </li>
              <li class="glide__slide">
                <img src="https://akcdn.detik.net.id/visual/2020/03/10/30a6a3fe-6553-4d1e-a987-e53dc03e8d8d_169.jpeg?w=700&q=90" alt="Image 3">
              </li>
            </ul>
          </div>
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left bg-red-velvet text-white rounded-full p-2 mr-2 focus:outline-none" data-glide-dir="<">Prev</button>
            <button class="glide__arrow glide__arrow--right bg-red-velvet text-white rounded-full p-2 ml-2 focus:outline-none" data-glide-dir=">">Next</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="watch-video" class="bg-red-velvet py-24">
    <h2 class="text-center text-4xl font-bold text-white mb-6">Watch Our Latest Video</h2>
    <iframe id="video" class="mx-auto shadow-2xl w-full md:w-3/4" height="315" src="https://www.youtube.com/embed/G2RMhivFEf4?si=P8hOKLbIjPMPv7lA" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="about-container">
    <div class="circle"></div>
    <h1 class="text-red-velvet">About Us</h1>
    <p class="text-red-velvet">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
  </div>


  <div id="contact-us" class="bg-red-velvet py-24">
    <h2 class="text-center text-4xl font-bold text-white">Contact Us</h2>
    <form id="form" action="https://www.freecodecamp.com/email-submit">
      <div class="w-11/12 md:w-1/3 mt-12 mx-auto flex flex-col flex-no-wrap shadow-xl">
        <input class="flex-grow bg-transparent py-4 px-6 placeholder-white bg-red-velvet border border-white rounded-t-lg text-white outline-none" type="email" id="email" name="email" placeholder="Enter your email address" required>
        <textarea class="flex-grow bg-transparent py-4 px-6 mt-4 placeholder-white bg-red-velvet border border-white text-white outline-none" id="message" name="message" placeholder="Enter your message" required></textarea>
        <input class="py-2 px-4 mt-4 text-white bg-red-velvet border border-white rounded-b-lg text-white cursor-pointer" type="submit" id="submit" value="Submit">
      </div>
    </form>
  </div>


  <div id="download" class="bg-black py-16">
    <h2 class="text-center text-4xl font-bold text-white">Hit us on</h2>
    <div class="flex justify-center mt-6">
      <div class="flex items-center justify-center space-x-8">
        <a href="#" target="_blank" rel="noopener noreferrer">
          <img src="https://i.imgur.com/kXIDjcQ.png" alt="Shopee" class="w-40">
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <img src="https://i.imgur.com/J0KKGzf.png" alt="Instagram" class="w-40">
        </a>
      </div>
    </div>
    <footer class="text-center text-gray-400 text-sm mt-6">&copy; 2024 Your Company Name. All rights reserved.</footer>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script>
    new Glide('.glide', {
      type: 'carousel',
      startAt: 0,
      perView: 1,
      autoplay: 3000, // Auto play interval in milliseconds (3 seconds)
      hoverpause: true, // Pause autoplay on hover
      gap: 0, // Gap between slides
      breakpoints: {
        768: {
          perView: 1
        }
      }
    }).mount();
  </script>

</body>
</html>
