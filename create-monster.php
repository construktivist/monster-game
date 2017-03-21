<!DOCTYPE html>
<html>
<!-- Head view -->
<?php require "./views/head.php" ?>
<!-- Body -->
  <body>
    <div class="container">
      <!-- Nav view -->
      <?php require "./views/nav.php" ?>

      <div class="row">
        <form method="get" action="../app/store-monster.php">
          <fieldset class="form-group">
            <label for="monster-name">Monster's Name</label>
            <input class="form-control" name="monster-name" placeholder="Bill" required>
          </fieldset>

          <fieldset class="form-group">
            <label for="monster-name">Attack</label>
            <input class="form-control" name="monster-attack" placeholder="Claws, Fangs, Kick, etc. "required>
          </fieldset>

          <div class="input-group">
              <input type="radio" name="monster-type" value="fire" aria-label="...">Fire<br />
              <input type="radio" name="monster-type" value="water" aria-label="...">Water<br />
              <input type="radio" name="monster-type" value="nature" aria-label="...">Nature<br />
          </div>

          <input type="submit"">
        </form>
      </div>

      <hr />

      <!-- Display all monsters -->
      <?php require "./app/get-monsters.php" ?>


    </div>
    <!-- Script dependecies -->
    <?php require "./views/scripts.php" ?>
  </body>
</html>
