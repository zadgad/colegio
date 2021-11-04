<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema Educativa Daniel Salamanca </title>

    <!-- Bootstrap -->
    <link href="{{ asset('gentelella') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('gentelella') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gentelella') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    @stack('links')
    <!-- Custom Theme Style -->
    <link href="{{ asset('gentelella') }}/build/css/custom.min.css" rel="stylesheet">

</head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('layouts.page_templates.authh')


        <!-- /page content -->

        <!-- footer content -->

    </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('gentelella') }}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="{{ asset('gentelella') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('gentelella') }}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ asset('gentelella') }}/vendors/nprogress/nprogress.js"></script>
    @stack('scripts')
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('gentelella') }}/build/js/custom.min.js"></script>
    <script>
        //    console.log(user);
                $(document).ready(function(){
                    const user_rol = {!! json_encode(session()->get('rol')->first()) !!};
                    //(ocultarMostrar)();
                    if(user_rol=="SuperUs"){
                        $("#depst0").show("slow");
                        $("#depst1").show("slow");
                        $("#depst2").show("slow");
                        $("#depst3").show("slow");
                        $("#depst4").show("slow");
                        $("#depst5").show("slow");
                        $("#depst6").show("slow");
                        $("#depst7").show("slow");
                        $("#depst8").show("slow");
                        $("#depst9").show("slow");
                        $("#depst10").show("slow");
                        $("#depst11").show("slow");
                        $("#depst12").show("slow");
                        $("#depst13").show("slow");
                        $("#depst14").show("slow");

                    }
                    if(user_rol=="Admin"){
                        $("#depst0").show("slow");
                        $("#depst1").show("slow");
                        $("#depst2").show("slow");
                        $("#depst3").show("slow");
                        $("#depst4").show("slow");
                        $("#depst6").show("slow");
                        $("#depst7").show("slow");
                        $("#depst8").show("slow");
                        $("#depst9").show("slow");
                        $("#depst10").show("slow");
                        $("#depst11").show("slow");
                        $("#depst12").show("slow");
                        $("#depst13").show("slow");
                        $("#depst14").show("slow");
                    }
                    if(user_rol=="Secretaria"){
                        $("#depst3").show("slow");
                        $("#depst4").show("slow");
                        $("#depst5").show("slow");
                        $("#depst6").show("slow");
                        $("#depst7").show("slow");
                        $("#depst8").show("slow");
                        $("#depst9").show("slow");
                        $("#depst10").show("slow");
                        $("#depst11").show("slow");
                        $("#depst12").show("slow");
                        $("#depst13").show("slow");
                    }
                    if(user_rol=="Tutor"){
                        $("#depst16").show("slow");

                        }
                    if(user_rol=="Estudiante"){
                        $("#depst15").show("slow");
                    }
                });


       </script>
</body>

</html>