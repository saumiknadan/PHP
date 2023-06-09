<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <section>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-4">Add New</h1>
                <form action="store.php" method="post" enctype ="multipart/form-data" >
                    <div class="mb-3 row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title: </label>
                        <div class="col-sm-10">
                        <input 
                                type="text" 
                                class="form-control" 
                                id="inputTitle"
                                name = "title"
                                value = " ">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>