<?php 
view('components/heading.view.php');
?>
<div class="container mx-auto mb-10">
    <div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold mb-5">User Dashboard</h1>
    <form action="/dashbord" method="POST">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Distribute Users BY thier Date Of Birth
        </button>
    </div>
    </form>
    <div >
    <table class="table-auto w-full bg-white shadow-md rounded-lg pb-5 mb-5">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">classes_id</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">DOB</th>
                <th class="px-4 py-2">Is Admin</th>
            </tr>
        </thead>
        <tbody >
            <?php foreach ($users as $user): ?>
                <tr class="text-center border-b">
                    <td class="px-4 py-2">
                        <a href="/dashbord/show?id=<?= $user['id'] ?>">
                            <?= $user['id'] ?>
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="/dashbord/show?id=<?= $user['id'] ?>">
                            <?= ($user['classes_id'] ?? 'N/A') ?>
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="/dashbord/show?id=<?= $user['id'] ?>">
                            <?= htmlspecialchars($user['name']); ?>
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="/dashbord/show?id=<?= $user['id'] ?>">
                            <?= htmlspecialchars($user['email']); ?>
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="/dashbord/show?id=<?= $user['id'] ?>">
                            <?= htmlspecialchars($user['DOB']); ?>
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="/dashbord/show?id=<?= $user['id'] ?>">
                            <?= $user['is_admin'] ? 'Yes' : 'No'; ?>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
<div class="mt-5">‎ </div>
<?php 
view('components/footer.view.php'); 
?>
