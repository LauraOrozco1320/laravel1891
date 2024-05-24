<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Crear product</h1>

<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    precio:
    <br>
    <input type="double" name="price">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="description">
</label>
<br>
<label>
cantidad:
<br>
<br>
    <input type="double" name="cant">
</label>
<br>
<label>
  <input type="date" name="date_exp">
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>