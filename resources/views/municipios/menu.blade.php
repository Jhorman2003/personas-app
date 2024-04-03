<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tabla de Multiplicar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="p-5 mb-4 text-bg-dark container-fluid">
      <div class="container">
        <h1 class="display-5 fw-bold">TRABAJO NUMERO 2</h1>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-header">
          <span class="btn btn-primary btn-lg">Listado de municipio  departamento  pais</span>
        </div>
        <div class="card-body">
          <a class="btn btn-warning" href="{{ route('municipios.index') }}" role="button"
            >MUNICIPIO</a
          >
          <a class="btn btn-warning" href="{{ route('departamentos.index') }}" role="button"
            >DEPARTAMENTO</a
          >
          <a class="btn btn-warning" href="{{ route('paises.index') }}" role="button"
          >PAIS</a
        >
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
