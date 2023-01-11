<form method="post" enctype="multipart/form-data">
    @csrf
    <!-- поле для загрузки файла -->
    <input type="file" name="userfile">

    <input type="submit">
</form>
