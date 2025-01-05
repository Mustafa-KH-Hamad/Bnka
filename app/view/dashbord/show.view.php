<?php

use App\Class\Session;

view('components/heading.view.php');
?>

<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">User Details</h1>

    <!-- User Details Form -->
    <form action="/dashbord" method="POST" class="bg-white shadow-md rounded-lg px-8 py-6">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="<?= htmlspecialchars($user['name']); ?>" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                >
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <div class="bg-gray-100 text-gray-700 px-3 py-2 rounded w-full border">
                <?= htmlspecialchars($user['email']); ?>
            </div>
        </div>

        <div class="mb-4">
            <label for="is_admin" class="block text-gray-700 text-sm font-bold mb-2">Role (Is Admin):</label>
            <select 
                id="is_admin" 
                name="is_admin" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="0" <?= !$user['is_admin'] ? 'selected' : ''; ?>>No</option>
                <option value="1" <?= $user['is_admin'] ? 'selected' : ''; ?>>Yes</option>
            </select>
        </div>

        <div class="mb-4">
            <p class="text-red-500"><?= Session::get('errors')[0] ?? '' ?></p>
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
    <form action="/dashbord" method="POST" class="mt-5">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">
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
