<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Darbs</title>
    <link rel="icon" type="image/x-icon" href="../dashboard/img/Logot.ico" />

    <!-- Custom fonts for this template-->
    <link href="../dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../dashboard/css/sb-admin-2.css" rel="stylesheet">

    <!--DataTable css-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                <div class="logo"><img src="../dashboard/img/Logo.png"/></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider" style="background-color: white;">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{url('usuarios')}}" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Usuarios</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{url('obras')}}" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Obras</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{url('actividades')}}" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Actividades</span>
                </a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Erick Roa</span>
                                <img class="img-profile rounded-circle"
                                    src="../dashboard/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h2 style="margin-left:3%;">Registrar Usuario</h2>
                    <div style="width:70%; padding:2%; margin:2% auto 3% auto; border:1px solid gray; border-radius:6px; background-color:white;">
                        <form action="{{url('usuarios')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    Nombre:
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" value="{{old('nombre')}}">
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('nombre')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <br>
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" value="{{old('apellido')}}">
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('apellido')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    Documento:
                                    <select class="form-control" id="tipodoc" name="tipodoc" style="color:grey;">
                                        <option value="">-- Tipo Documento --</option>
                                        <option value="CC" {{ old('tipodoc') == "CC" ? 'selected' : '' }}>CC</option>
                                        <option value="CE" {{ old('tipodoc') == "CE" ? 'selected' : '' }}>CE</option>
                                    </select>
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('tipodoc')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <input type="number" class="form-control" id="numdoc" name="numdoc" placeholder="Numero documento" value="{{old('numdoc')}}">
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('numdoc')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-2">
                                    <br>
                                    <select class="form-control" id="genero" name="genero" style="color:grey;">
                                        <option value="">-- Genero --</option>
                                        <option value="Masculino" {{ old('genero') == "Masculino" ? 'selected' : '' }}>Masculino</option>
                                        <option value="Femenino" {{ old('genero') == "Femenino" ? 'selected' : '' }}>Femenino</option>
                                        <option value="Otro" {{ old('genero') == "Otro" ? 'selected' : '' }}>Otro</option>
                                    </select>
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('genero')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-3">
                                    <br>
                                    <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="fechanac" name="fechanac" placeholder="Fecha Nacimiento" value="{{old('fechanac')}}">
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('fechanac')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    Datos basicos:
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="{{old('correo')}}">
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('correo')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <input type="number" class="form-control" id="celular" name="celular" placeholder="Celular" value="{{old('celular')}}">
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('celular')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="{{old('direccion')}}">
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('direccion')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    Usuario:
                                    <select class="form-control" id="cargo" name="cargo" style="color:grey;">
                                        <option value="">-- Cargo --</option>
                                        <option value="Gerente" {{ old('cargo') == "Gerente" ? 'selected' : '' }}>Gerente</option>
                                        <option value="Coordinador" {{ old('cargo') == "Coordinador" ? 'selected' : '' }}>Coordinador</option>
                                        <option value="Ingeniero" {{ old('cargo') == "Ingeniero" ? 'selected' : '' }}>Ingeniero</option>
                                    </select>
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('cargo')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <input type="password" class="form-control password" id="contrasena" name="contrasena" placeholder="Contraseña" value="{{old('contrasena')}}">
                                    <span class="fa fa-fw fa-eye password-icon show-password" style="float:right; margin:-25px 10px 0 0;"></span>
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('contrasena')}}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <select class="form-control" id="estado" name="estado" style="color:grey;">
                                        <option value="">-- Estado --</option>
                                        <option value="Activo" {{ old('estado') == "Activo" ? 'selected' : '' }}>Activo</option>
                                        <option value="Inactivo" {{ old('estado') == "Inactivo" ? 'selected' : '' }}>Inactivo</option>
                                    </select>
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('estado')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-7">
                                    Foto:
                                    <input type="file" class="form-control" id="foto" name="foto">
                                    @if(count($errors)>0)
                                    <p style="padding:2px; color:red;">{{$errors->first('foto')}}</p>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Erick Roa 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../dashboard/js/demo/chart-area-demo.js"></script>
    <script src="../dashboard/js/demo/chart-pie-demo.js"></script>

    <!--  Mostrar contraseña -->
    <script>
        window.addEventListener("load", function() {

            // icono para mostrar contraseña
            showPassword = document.querySelector('.show-password');
            showPassword.addEventListener('click', () => {

                // elementos input de tipo clave
                password = document.querySelector('.password');

                if ( password.type === "text" ) {
                    password.type = "password"
                    showPassword.classList.remove('fa-eye-slash');
                } else {
                    password.type = "text"
                    showPassword.classList.toggle("fa-eye-slash");
                }

            })

        });
    </script>

</body>
