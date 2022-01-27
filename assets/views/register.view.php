<section class="bg-overlay">
  <div class="row">
  <div class="col space_above_items"></div>
  </div>

    <div class="container-xl">

      <div class="row ">
        <div  class="col-12 col-md-8">
          <form class="form_register px-3 py-3 rounded" method="POST" action="?page=register&function=store">
            
            <div class="text-center mb3"> 
              <h1 class="pb-4 text-white">Registreer formulier</h1>
            </div> 

            <div class="fw-bold fs-5">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Voornaam</label>
            <input type="text" name="first_name" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Achternaam</label>
            <input type="text" name="last_name" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Wachtwoord</label>
            <input type="password" name="password" class="form-control">
            </div>
      
            <p class="text-center">Al een account? Klik <a href="?page=login">hier</a> om in te loggen.</p>

            <div class="text-center mb3">
              <button  type="submit" value="Save" class="btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  <div class="row">
  <div class="col space_under_items"></div>
  </div>
</section>


