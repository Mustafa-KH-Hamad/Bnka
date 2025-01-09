<?php

use App\Class\Session;

view('components/heading.view.php');
?>

<div class="mb-5">
    <button
        onclick="window.history.back()"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-200">
        Go Back
    </button>
</div>

<?php if (empty($classes)) : ?>
    <h2 class="text-2xl font-semibold text-gray-700 mb-2">
        No Users found
    </h2>
<?php else: ?>
    <h2 class="text-2xl font-semibold text-gray-700 mb-2">
        User "<?= $user ?>" Is located In these Classes
    </h2>
<?php endif; ?>
<?php foreach ($classes as $class): ?>
    <div class="mb-8 p-6 border border-gray-300 rounded-lg bg-white shadow-lg">
        <!-- Class Header -->
        <div class="flex items-center justify-between mb-4">

            <h2 class="text-2xl font-semibold text-gray-700">
                Class ID: <?= htmlspecialchars($class['id']); ?>
            </h2>
            <?php if (Session::get('is_admin')): ?>
                <a href="/classes/edit?id=<?= $class['id'] ?>" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Edit Class
                </a>
            <?php endif; ?>
        </div>

        <!-- Class Details -->
        <p class="text-lg text-gray-600 mb-4">

            <span>
                Class Name: <span class="font-bold"><?= htmlspecialchars($class['class_name']); ?></span>
            </span>
            <br>
            <span>
                Teacher: <span class="font-bold"><?= htmlspecialchars($class['teacher_name']); ?></span>
            </span>

        </p>
    </div>
<?php endforeach; ?>
</div>
<div class="mt-5">‎ </div>

<?php
view('components/footer.view.php');
?>