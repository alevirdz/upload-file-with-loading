<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
<h1>Subir archivos con loading</h1>

<div class="container">
    <div class="row">
        <div class="col">
        <form action="" id="subirArchivos">
            <div class="form btn-file" id="btn-file">
                <input type="file" name="archivo" require>
            </div>
            <div class="barra" style="width:25%;">
                <div class="barra-azul" id="barra-estado">
                    <span></span>
                </div>
            </div>

            <div class="acciones">
                <input type="submit" class="btn" value="Enviar">
                <input type="button" class="cancelar" id="cancelar" value="Cancelar">
            </div>
        </form>
        </div>
    </div>
</div>

</body>
</html>
<script src="main.js"></script>

<style>
    .btn-file {
  position: relative;
  display: inline-block;
}

.btn-file::before {
  background-color: #5678EF;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 3px;
  content: 'Seleccionar'; /* testo por defecto */
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

.btn-file input[type="file"] {
  opacity: 0;
  width: 304px;
  height: 32px;
  display: inline-block;
}

#btn-file::before {
  content: 'Subir archivo';
}
</style>