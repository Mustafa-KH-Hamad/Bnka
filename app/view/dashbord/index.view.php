<?php 
view('components/heading.view.php');
?>
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">User Dashboard</h1>
    <table class="table-auto w-full bg-white shadow-md rounded-lg pb-5">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Is Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr class="text-center border-b">
                    <td class="px-4 py-2">
                        <a href="/show?id=<?= $user['id'] ?>">
                            <?= $user['id'] ?>
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="/show?id=<?= $user['id'] ?>">
                            <?= htmlspecialchars($user['name']); ?>
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="/show?id=<?= $user['id'] ?>">
                            <?= htmlspecialchars($user['email']); ?>
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="/show?id=<?= $user['id'] ?>">
                            <?= $user['is_admin'] ? 'Yes' : 'No'; ?>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php 
view('components/footer.view.php'); 
?>
