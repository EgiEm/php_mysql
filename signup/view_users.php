<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";



try{
    $pdo= new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected!!!";

//fetch all data fron the user table
$sql = "SELECT id, username, email, created_at FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);



}catch(PDOException $e){
    echo "ERROR!!". $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Registration Date</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <td> <?php echo htmlspecialchars($user['id']) ?></td>
                <td> <?php echo htmlspecialchars($user['username']) ?></td>
                <td> <?php echo htmlspecialchars($user['email']) ?></td>
                <td> <?php echo htmlspecialchars($user['created_at']) ?></td>
            </tr>
          <?php endforeach; ?>
       <?php else: ?>
        <tr>
            <td colspan = "4" class = "text-center">No user found</td>
       </tr>
       <?php endif; ?>
  </tbody>
</table>
</body>
</html>