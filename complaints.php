<?php include_once("./includes/header.php"); 
?>
<body>
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="php/klachten.php" method="POST">
        <h2>Voer hier uw klacht in</h2>
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="fName" class="formbold-form-label"> Voornaam </label>
            <input type="text" name="fName" id="fName" placeholder="Voornaam" class="formbold-form-input"  required>
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="lName" class="formbold-form-label"> Achternaam </label>
            <input type="text" name="lName" id="lName" placeholder="Achternaam" class="formbold-form-input"  required>
          </div>
        </div>
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          E-mailadres
        </label>
        <input type="email" name="email" id="guest" placeholder="e-mailadres" class="formbold-form-input" required>
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          Klacht beschrijven
        </label>
        <input type="text" name="complaint" id="guest" placeholder="Beschrijf hier uw klacht.." class="formbold-form-input" required>
      </div>

      <div>
        <input type="submit" name="Verzenden" value="verzenden" class="formbold-btn">
      </div>
    </form>
  </div>
</div>
    <?php include_once("./includes/footer.php"); ?>
</body>
</html>
