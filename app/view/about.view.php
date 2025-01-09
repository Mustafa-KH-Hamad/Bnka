<?php
require "components/heading.view.php";
?>

<div class="flex flex-col items-center min-h-max p-6">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-40 w-auto" src="resources/images/bnka.png" alt="Your Company">
    </div>

    <p class="text-xl mb-2 text-center">Welcome to HawlerBnka, a special center dedicated to helping individuals memorize the Quran.</p>
    <p class="text-xl mb-2 text-center">Our mission is to provide an environment where students can learn and memorize the Quran effectively.</p>

    <p class="text-xl mb-4 text-center">Our center is located at
        <a href="https://maps.app.goo.gl/VYc9N8vtGUq9a5PL9" target="_blank" class="text-blue-500 hover:underline">Hawler, Iraq</a>.
    </p>

    <div class="flex space-x-6 mb-4">
        <a href="https://www.facebook.com/bnkay.hawler" target="_blank" class="text-blue-600 hover:text-blue-800 flex items-center space-x-2">
            <img src="<?= RESOURCES ?>/images/facebook.png" alt="Facebook" class="w-6 h-6">
            <span class="hidden md:inline">Facebook</span>
        </a>

        <a href="#" target="_blank" class="text-pink-600 hover:text-pink-800 flex items-center space-x-2">
            <img src="<?= RESOURCES ?>/images/instagram.png" alt="Instagram" class="w-6 h-6">
            <span class="hidden md:inline">Instagram</span>
        </a>
    </div>

    <a href="/class" class="mt-3 text-xl font-bold border border-black rounded-md px-4 py-2 bg-gray-800 text-white hover:bg-white hover:text-black">
        Browse class
    </a>

    <section class="mt-8 p-4 border-t-2 border-gray-300 text-center">
        <h2 class="text-2xl font-bold text-gradient bg-clip-text text-transparent bg-gradient-to-r from-teal-500 to-blue-600 mb-4">
            Why Choose HawlerBnka?
        </h2>
        <p class="text-lg mb-2">We provide personalized guidance for every student, ensuring that each person has the tools and support they need to succeed in their Quran memorization journey.</p>
        <p class="text-lg mb-2">Join us and be a part of a growing community committed to preserving the words of Allah.</p>
    </section>
</div>



<?php
require "components/footer.view.php";

?>