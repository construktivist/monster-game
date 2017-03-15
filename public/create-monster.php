<!DOCTYPE html>
<html>
<!-- Head view -->
<?php require "../views/head.php" ?>
<!-- Body -->
  <body>
    <div class="container">
      <!-- Nav view -->
      <?php require "../views/nav.php" ?>

      <div class="row">
        <form method="get" action="build-monster.php">
          <fieldset class="form-group">
            <label for="monster-name">Monster's Name</label>
            <input class="form-control" name="monster-name" placeholder="Bill" required>
          </fieldset>

          <fieldset class="form-group">
            <label for="monster-name">Attack</label>
            <input class="form-control" name="monster-name" placeholder="Claws, Fangs, Kick, etc. "required>
          </fieldset>

          <div class="input-group">
              <input type="radio" name="type" aria-label="...">Fire<br />
              <input type="radio" name="type" aria-label="...">Water<br />
              <input type="radio" name="type" aria-label="...">Nature<br />
          </div>

          <input type="submit" value="Submit">
        </form>
      </div>


    </div>
    <!-- Script dependecies -->
    <?php require "../views/scripts.php" ?>
  </body>
</html>
