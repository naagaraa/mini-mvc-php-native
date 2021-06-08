<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gambar</title>
</head>

<body>
    <h1>gambar</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate quia dolore iusto rerum aperiam quam illum fugiat nesciunt blanditiis enim ipsum explicabo quas, quaerat vel laboriosam. Dolor animi earum delectus!</p>


    <form action="<?= url("gambar/upload") ?>" method="post" enctype="multipart/form-data">
        <label for="name">name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="gambar">gambar : </label><br>
        <input type="file" id="gambar" name="gambar"><br>

        <button type="submit" >save</button>
    </form>
</body>

</html>