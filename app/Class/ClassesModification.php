<?php 

namespace App\Class;

class ClassesModification{

    protected $db ; 

    public function __construct(){

        $this->db =dbreturn() ; 

    }


public function handle()
{
    $users = $this->db->query('SELECT * FROM users ORDER BY DOB desc')->fetchAll();
    $classes = $this->db->query('SELECT * FROM classes')->fetchAll();

    $totalUsers = count($users);
    $totalClasses = count($classes);

    $usersPerClass = intdiv($totalUsers, $totalClasses); // Integer division
    $remainingUsers = $totalUsers % $totalClasses; // Remaining users after equal division

    $userChunks = array_chunk($users,$usersPerClass);
    
    if($remainingUsers > 0){
        $lastChunk = array_pop($userChunks);
        foreach ($lastChunk as $chunk) {
            $userChunks[count($userChunks) - 1][] = $chunk;
        }
    }
    

    foreach ($userChunks as $classIndex => $classUsers) {
        $classId = $classes[$classIndex]['id']; // Get class ID

        foreach ($classUsers as $user) {
            $this->db->query(
                'UPDATE users SET classes_id = :class_id WHERE id = :user_id',
                [
                    ':class_id' => $classId,
                    ':user_id' => $user['id']
                ]
            );
        }
    }

}

}