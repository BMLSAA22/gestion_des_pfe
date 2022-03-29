<!DOCTYPE html>
<html>
<head>
  <title>ajouter PFE</title>
 
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
<body>
<a href='/logout'>logout</a>
 
<div class="container mt-5">
 
 
 
  <div class="card">
 
    <div class="card-header text-center font-weight-bold">
      <h2>ajouter un pfe</h2>
    </div>
 
    <div class="card-body">
     
        <form method="POST" class="form-group" id="upload-image" action="/ajouterPFE" enctype="multipart/form-data" >
          @csrf
        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="title" class="form-control" name="title" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="description" class="form-control" name="description" >
                            </div>
                        </div>
                   
            <div class="row">
 
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="file" placeholder="Choose image" id="file " >
                  
                    </div>
                </div>
               
                   
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>     
        </form>
 
    </div>
 
  </div>
 
</div>  
</body>
</html>
