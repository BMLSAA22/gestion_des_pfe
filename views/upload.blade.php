<form action="/upload" method="POST" enctype="multipart/form-data" >
    @csrf    
    <div>
            <label for="file">Upload</label>
            <input type="file" name="file">
        </div>
        <button type="submit">submit</button>
</form>