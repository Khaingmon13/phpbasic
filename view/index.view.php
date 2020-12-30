<?php require "view/partial/heading.php" ?>
<h1>User Name</h1>
<?php foreach ($users as $user) :?>
  <li><?=  $user->name ;?></li>
<?php endforeach; ?>

    <h1>Submit your name</h1>
    <form action="/names" method="POST">
      <input type="text" name="name">
      <input type="submit" name="submit">
    </form>
<?php require "view/partial/footer.php" ?>