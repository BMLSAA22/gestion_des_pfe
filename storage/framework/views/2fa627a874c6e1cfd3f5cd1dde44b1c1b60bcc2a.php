<form action="/upload" method="POST" enctype="multipart/form-data" >
    <?php echo csrf_field(); ?>    
    <div>
            <label for="file">Upload</label>
            <input type="file" name="file">
        </div>
        <button type="submit">submit</button>
</form><?php /**PATH C:\xampp\htdocs\laravel\firstapp\resources\views/upload.blade.php ENDPATH**/ ?>