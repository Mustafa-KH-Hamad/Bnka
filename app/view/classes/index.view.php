<?php

use App\Class\Session;

view("components/heading.view.php");
?>

<?php if (Session::get('is_admin')): ?>
    <div class="container mx-auto px-4 mt-6">
        <!-- Add Classes Button -->
        <div class="flex justify-end mb-6 space-x-6">
            <a href="/classes/show" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add Classes
            </a>
            <form action="/dashbord" method="POST">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Distribute Users BY thier Date Of Birth
                </button>
            </form>
        </div>
    </div>

<?php endif; ?>
<!-- search bar  -->
<form action="/search" method="GET">
<div class="flex justify-center items-center my-6">
    <div class="relative w-96">
        <!-- Search Bar Input -->
        <input type="text" name="q" placeholder="Search..." class="w-full p-3 pl-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <!-- Search Icon -->
        <svg class="absolute left-3 top-3 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
    </div>
</div>
</form>


<!-- Classes Section -->
<?php foreach ($classes as $class): ?>
    <div class="mb-8 p-6 border border-gray-300 rounded-lg bg-white shadow-lg">
        <!-- Class Header -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-semibold text-gray-700">
                Class ID: <?= htmlspecialchars($class['classes_id']); ?>
            </h2>
            <?php if (Session::get('is_admin')): ?>
            <a href="/classes/edit?id=<?= $class['classes_id'] ?>" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Edit Class
            </a>
            <?php endif; ?>
        </div>

        <!-- Class Details -->
        <p class="text-lg text-gray-600 mb-4">
            <?php foreach ($teachers_name as $teacher): ?>
                <?php if ($teacher['id'] == $class['classes_id']): ?>
                    <span>
                        Class Name: <span class="font-bold"><?= htmlspecialchars($teacher['class_name']); ?></span>
                    </span>
                    <br>
                    <span>
                        Teacher: <span class="font-bold"><?= htmlspecialchars($teacher['teacher_name']); ?></span>
                    </span>
                <?php endif; ?>
            <?php endforeach; ?>
        </p>

        <!-- User Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            $user_ids = explode(',', $class['user_ids']);
            $user_names = explode(',', $class['user_names']);
            ?>
            <?php foreach ($user_ids as $index => $user_id): ?>
                <div class="p-4 border border-gray-200 rounded-lg bg-gray-50 shadow-md text-center">
                    <p class="text-lg font-medium text-blue-600">
                        ID: <?= htmlspecialchars($user_id); ?>
                    </p>
                    <p class="text-gray-700">
                        Name: <?= htmlspecialchars($user_names[$index] ?? 'Unknown'); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>
</div>
<div class="mt-5">‎ </div>

<?php
view("components/footer.view.php");
?>