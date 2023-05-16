 
<?php include 'template.php';

?>
 

<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    </head>
    <body class="antialiased">
        <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Form</h3>
            <form method ="POST" action = 'test.php'>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline"> 
                  	<label class="form-label" for="bookname" >Keyword</label>
                    <input type="text"  id="bookname" name ="bookname" class="form-control form-control-lg" />
                   
                  </div>

                </div>
                 
              </div>

               

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline"> 
                  	<label class="form-label" for="age">Age</label>
                    <input type="number" id="age" name="age" class="form-control form-control-lg" />
                   
                  </div>

                </div>
                 
              </div>
 
 

              <div class="col-md-6 mb-4">
 

                  <h6 class="mb-2 pb-1">Book Type: </h6>

                    <input type="radio" name="booktype" value="male" checked > <b  >Science </b>
                      <input type="radio" name="booktype" value="Drama"><b  > Drama </b>
                       <input type="radio" name="booktype" value="Novel"><b  > Novel </b>
            </div>

              
              <button type='submit'>search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>

</body>
</html>