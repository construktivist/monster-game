<!DOCTYPE html>
<html>
<!-- Head view -->
<?php require "./views/head.php" ?>
<!-- Body -->
  <body>
    <div class="container">
      <!-- Nav view -->
      <?php require "./views/nav.php" ?>

      <hr />

      <!-- Display all monsters -->
      <?php require "./app/get-monsters.php" ?>

    </div>
    <!-- Script dependecies -->
    <?php require "./views/scripts.php" ?>
  </body>
</html>
