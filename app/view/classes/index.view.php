<?php 
view("components/heading.view.php");
?>

<div class="container mx-auto px-4 mt-6">
    <!-- Add Classes Button -->
    <div class="flex justify-end mb-6">
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Add Classes
        </a>
    </div>

    <!-- Classes Section -->
    <?php foreach ($classes as $class): ?>
        <div class="mb-8 p-6 border border-gray-300 rounded-lg bg-white shadow-lg">
            <!-- Class Header -->
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-gray-700">
                    Class ID: <?php echo htmlspecialchars($class['classes_id']); ?>
                </h2>
                <a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Edit Class
                </a>
            </div>

            <!-- Class Details -->
            <p class="text-lg text-gray-600 mb-4">
                <?php foreach ($teachers_name as $teacher): ?>
                    <?php if ($teacher['id'] == $class['classes_id']): ?>
                        <span>
                            Class Name: <span class="font-bold"><?php echo htmlspecialchars($teacher['class_name']); ?></span>
                        </span>
                        <br>
                        <span>
                            Teacher: <span class="font-bold"><?php echo htmlspecialchars($teacher['teacher_name']); ?></span>
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
                            ID: <?php echo htmlspecialchars($user_id); ?>
                        </p>
                        <p class="text-gray-700">
                            Name: <?php echo htmlspecialchars($user_names[$index] ?? 'Unknown'); ?>
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
