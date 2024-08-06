<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGF Applications</title>
    <!-- TailwindCSS File -->
    <link rel="stylesheet" href="./css/dist.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex flex-col min-h-screen">

<header id="top" class="w-full flex flex-col fixed sm:relative bg-white pin-t pin-r pin-l">
  <nav id="site-menu" class="flex flex-col sm:flex-row w-full justify-between items-center px-4 sm:px-6 py-1 bg-white shadow sm:shadow-none border-t-4 border-red-900">
    <div class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
      <a href="#" class="no-underline py-1">
        <h1 class="font-bold text-lg tracking-widest">LOGO</h1>
      </a>
      <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();">
        <span class="hamburger__top-bun"></span>
        <span class="hamburger__bottom-bun"></span>
      </button>
    </div>
    <div id="menu" class="w-full sm:w-auto self-end sm:self-center sm:flex flex-col sm:flex-row items-center h-full py-1 pb-4 sm:py-0 sm:pb-0 hidden">
      <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:pr-4 py-2 sm:py-1 sm:pt-2" href="https://ttntm.me/blog/tailwind-responsive-menu/" target="_blank">About</a>
      <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#bottom">Features</a>
    </div>
  </nav>
<div class="bg-white">
  <div class="flex justify-center items-center h-64">
        <h1 class="lg:text-5xl text-lg font-bold">Test responsive NavBar</h1>
  </div>
</div>

<script>
function navToggle() {
  var btn = document.getElementById('menuBtn');
  var nav = document.getElementById('menu');

  btn.classList.toggle('open');
  nav.classList.toggle('flex');
  nav.classList.toggle('hidden');
}
</script>

</body>
</html>