<?php include_once("./includes/header.php"); 
?>
<body>
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form method="POST">
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
        <input type="email" name="guest" id="guest" placeholder="e-mailadres" class="formbold-form-input" />
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          Hoeveel gasten neem je mee?
        </label>
        <input type="number" name="guest" id="guest" placeholder="2" class="formbold-form-input" />
      </div>

      <div class="formbold-mb-5">
        <label for="guest" class="formbold-form-label">
          Selecteer accomodatie
        </label>
        <select class="formbold-form-input" id="accomodatie" name="accomodatie">
            <option value="caravan">Staanplaats caravan</option>
            <option value="camper">Staanplaats camper</option>
            <option value="tent">Staanplaats tent</option>
            <option value="Stacaravan">Stacaravan</option>
  </select>
      </div>
      
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label"> Aankomst datum </label>
            <input type="date" name="date" id="date" class="formbold-form-input" />
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="time" class="formbold-form-label"> Geschatte aankomst tijd </label>
            <input type="time" name="time" id="time" class="formbold-form-input" />
          </div>
        </div>
      </div>
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label"> Vertrek datum </label>
            <input type="date" name="date" id="date" class="formbold-form-input" />
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="time" class="formbold-form-label"> Geschatte vertrek tijd </label>
            <input type="time" name="time" id="time" class="formbold-form-input" />
          </div>
        </div>
      </div>

      <div>
        <button class="formbold-btn">Verzenden</button>
      </div>
    </form>
  </div>
</div>

    <?php include_once("./includes/footer.php"); ?>

</body>
</html>
