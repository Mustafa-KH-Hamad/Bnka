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

<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Class Details</h1>
    <form action="/classes" method="POST" class="bg-white shadow-md rounded-lg px-8 py-6">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $classes['id'] ?>">

        <div class="mb-4">
            <label for="class_name" class="block text-gray-700 text-sm font-bold mb-2">Class:</label>
            <input type="text" value="<?= htmlspecialchars($classes['class_name']) ?? ''; ?>" name="class_name" id="class_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>


        <div class="mb-4">
            <label for="teacher_name" class="block text-gray-700 text-sm font-bold mb-2">Class Teacher :</label>
            <input type="text" value="<?= htmlspecialchars($classes['teacher_name']) ?? ''; ?>" name="teacher_name" id="teacher_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>

        <div class="mb-4">
            <p class="text-red-500">
                <?php
                if (!empty(Session::get('errors'))) {
                    foreach (Session::get('errors') as $error) {
                        echo '<br>' . $error . '</br>' ?? '</br>';
                    }
                }
                ?>
            </p>
        </div>

        <div class="flex items-center justify-between">
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Save Changes
            </button>
        </div>
    </form>

    <!-- Delete User Button -->
    <form action="/classes" method="POST" class="mt-5">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $classes['id']; ?>">
        <button
            type="submit"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Delete User
        </button>
    </form>
</div>

<?php
view('components/footer.view.php');
?>