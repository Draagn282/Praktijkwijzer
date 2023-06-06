<?php include_once("./includes/header.php"); 
?>
<body>
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="php/reserveren.php" method="POST">
        <h2>Reserveer hier</h2>
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="fName" class="formbold-form-label"> Voornaam </label>
            <input type="text" name="fName" id="fName" placeholder="Voornaam" class="formbold-form-input" />
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="lName" class="formbold-form-label"> Achternaam </label>
            <input type="text" name="lName" id="lName" placeholder="Achternaam" class="formbold-form-input" />
          </div>
        </div>
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          E-mailadres
        </label>
        <input type="email" name="email" id="guest" placeholder="e-mailadres" class="formbold-form-input" />
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          Hoeveel gasten neem je mee?
        </label>
        <input type="number" name="guest" id="guest" placeholder="" class="formbold-form-input" />
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          Selecteer accomodatie
        </label>
        <select class="formbold-form-input" id="accomodatie" name="accomodation">
            <option value="caravan">Staanplaats caravan</option>
            <option value="camper">Staanplaats camper</option>
            <option value="tent">Staanplaats tent</option>
            <option value="Stacaravan">Stacaravan</option>
  </select>
      </div>
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="date" class="formbold-form-label">Aankomst datum</label>
            <input type="date" name="arrivalDate" id="arrivalDate" class="formbold-form-input" />
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="date" class="formbold-form-label">Vertrek datum</label>
            <input type="date" name="departureDate" id="departureDate" class="formbold-form-input" />
          </div>
        </div>
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
