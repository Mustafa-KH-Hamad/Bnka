<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNKA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
           <img class="h-10 w-auto rounded-md" src="resources/images/bnka.png" alt="bnka logo">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class=" <?= $_SERVER['REQUEST_URI'] == '/' ? 'rounded-md bg-gray-900 text-white' : '' ?> px-3 py-2 text-sm font-medium text-gray-300" aria-current="page">Home</a>
            <a href="/class" class=" <?= $_SERVER['REQUEST_URI'] == '/class' ? 'rounded-md bg-gray-900 text-white' : '' ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">class</a>
            <a href="/about" class="<?= $_SERVER['REQUEST_URI'] == '/about' ? 'rounded-md bg-gray-900 text-white' : '' ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">about</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div class="flex space-x-4">
          <a href="/session" class="<?= $_SERVER['REQUEST_URI'] == '/session' ? 'rounded-md bg-gray-900 text-white' : '' ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">login</a>
          <a href="/register" class="<?= $_SERVER['REQUEST_URI'] == '/register' ? 'rounded-md bg-gray-900 text-white' : '' ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">register</a>
        </div>  
      <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="size-8 rounded-full" src="resources/images/bnka.png" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<div class="m-3">