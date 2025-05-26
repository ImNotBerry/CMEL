<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Colegio Manuel Espionsa Lopez</title>
  <!--Bootstrap-->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!--Estilos-->
  <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

</head>
<body>

<!--Encabezado donde esta el login-->
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img class="me-2" src="{{ asset('images/logo.png') }}" with="60" height="60"> <!--Iconoo del Colegio-->
        </a>
      </div>

      <div class="col-md-3 text-end"> <!--Boton de Login-->
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
      </div>
  </header>

  <!--Carousel de Imagenes-->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/CMELI1.jpg') }}" class="d-block w-100" alt="imagen1"> <!--La imagen va aqui-->
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/CMELI2.jpg') }}" class="d-block w-100" alt="imagen2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/CMELI3.jpg') }}" class="d-block w-100" alt="imagen3">
      </div>
    </div>
  </div>

  /<!--Apartado del director, donde esta la imagen, descripcion y titulo (nombre)-->
  <div class="container px-4 py-5">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary-emphasis">Director</strong> <!--Titulo-->
        <h3 class="mb-0">Carlos Ardiles Irarazaba</h3> <!--Nombre-->
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"></div>
        <p class="card-text mb-auto">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
          Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
          persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un
          libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos,
          quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian
          pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p><!--Descripcion-->
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
          aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
          <title>Imagen</title>
          <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text><!--Imagen provisional para idea-->
        </svg>
      </div>
    </div>
  </div>

  <!--Las ultimas noticias | Listo-->
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">¡Ultimas noticias del colegio!</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <!--esto es usasdo para dar un espacio entre palabra y palabra-->
          <svg class="bi" width="1em" height="1em" aria-hidden="true">
            <use xlink:href="#collection"></use>
          </svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Sin clases este jueves 3 de abril</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and
        probably just keep going until we run out of words.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em" aria-hidden="true">
            <use xlink:href="#people-circle"></use>
          </svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Se termina la semana de examenes de integracion</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and
            probably just keep going until we run out of words.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em" aria-hidden="true">
            <use xlink:href="#toggles2"></use>
          </svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Comienza semana de vacunacion</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and
          probably just keep going until we run out of words.</p>
      </div>
    </div>
  </div>
  </div>

  <!--Galeria de 6 imagenes-->
  <div class="container px-4 py-5">
  <h2 class="pb-2 border-bottom">Galeria de Fotos</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
              dy=".3em">Thumbnail</text>
          </svg>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
              dy=".3em">Thumbnail</text>
          </svg>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
              dy=".3em">Thumbnail</text>
          </svg>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
              dy=".3em">Thumbnail</text>
          </svg>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
              dy=".3em">Thumbnail</text>
          </svg>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
              dy=".3em">Thumbnail</text>
          </svg>
        </div>
      </div>
    </div>

    <!--Historia y eventos del mes-->
  <div class="container px-4 py-5">
    <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Historia Colegio</h3>
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"></div>
          <p class="card-text mb-auto">La escuela Manuel Florencio Espinosa López, ubicada en la Población Limarí de Ovalle fue fundada el 1 o
            de Octubre de 1964, cumpliendo en el mes de octubre 61 años, al servicio de la educación de niños y niñas de
            la población Limarí y sus alrededores.
            La actual matrícula de la escuela es de 504 estudiantes y funciona con un total de 18 cursos en Jornada
            Escolar Completa, incluyendo a alumnos con necesidades educativas especiales a través del programa de
            integración y posee para todos los estudiantes diversas academias de libre disposición como academias de
            deporte, guitarra, Instrumental, de baile, espectáculos artísticos y escuela modelo del IND entre otros.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Eventos del Mes</h3>
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"></div>
          <p class="mb-auto">•Evento</p>
          <p class="mb-auto">•Evento</p>
          <p class="mb-auto">•Evento</p>
          <p class="mb-auto">•Evento</p>
          <p class="mb-auto">•Evento</p>
        </div>
      </div>
    </div>
  </div>

  <!--footer-->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
          <svg class="bi" width="30" height="24" aria-hidden="true">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Lury's Company</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
          <a class="text-body-secondary" href="https://www.facebook.com/escmanuel.espinosalopez" aria-label="Facebook"> <!--Icono y Link de Facebook del colegio-->
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            <use xlink:href="#facebook"></use>
          </svg>
          </a>
        </li>
      </ul>
    </footer>
  </div>
</body>
</html>