<!DOCTYPE html>
<html>
<head>
  <title>ajouter PFE</title>
 
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
<body>
<a href='/logout'>logout</a>
 
<div class="container mt-5">
 
 
 
  <div class="card">
 
    <div class="card-header text-center font-weight-bold">
      <h2>ajouter un niveau</h2>
    </div>
 
    <div class="card-body">
     
        <form method="POST" class="form-group" id="add specialité" action="/addSpecialite" enctype="multipart/form-data" >
          <?php echo csrf_field(); ?>
      
                       
                        <div class="row mb-3">
                            <label for="specialite" class="col-md-4 col-form-label text-md-end"><?php echo e(__('ajouter une specialite')); ?></label>

                            <div class="col-md-6">
                                <input id="specialite" type="specialite" class="form-control" name="specialite" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="year" class="col-md-4 col-form-label text-md-end"><?php echo e(__('ajouter un niveau associé')); ?></label>

                            <div class="col-md-6">
                                <input id="year" type="year" class="form-control" name="year" >
                            </div>
                        </div>
                   
                   
            <div class="row">
 
        
               
                   
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
<?php /**PATH C:\xampp\htdocs\laravel\firstapp\resources\views/addSpecialite.blade.php ENDPATH**/ ?>