
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Pannel || Kumar Studio</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/adminStyle.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<style>


    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
    }

    .bg-theme{
    background-color: #263238!important;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }

    .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
    }

    /* ---------------------------------------------------
        SIDEBAR STYLE
    ----------------------------------------------------- */

    .wrapper {
        display: flex;
        width: 100%;
    }

    #sidebar {
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        z-index: 999;
        background: #263238;
        color:#eceff1;
        transition: all 0.3s;
    }

    #sidebar.active {
        margin-left: -250px;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #37474f;
    }

    #sidebar ul.components {
        padding: 20px 0;
        
    }



    #sidebar ul li a {
        padding: 10px;
        font-size: 1rem;
        font-weight: 200;
        display: block;
        width: calc(100% - 20px);
        margin-left: auto;
        margin-right: auto;
        border-radius: 8px;
        margin-top: 10px;
    }

    #sidebar ul li a:hover {
        color: #babdbe;
        background: rgba(197, 197, 197, 0.39);
        border-radius: 8px;
        width: calc(100% - 30px);
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: rgb(236, 235, 235);
        background: #37474f;
    }

    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 50px !important;
        width: 80%!important;
        background-color: #37474f!important;
        border-radius: 10px!important;
        margin-left: 15%!important;
        background: #6d7fcc;
    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    a.download {
        background: #fff;
        color: #7386D5;
    }

    a.article,
    a.article:hover {
        background: #6d7fcc !important;
        color: #fff !important;
    }

    /* ---------------------------------------------------
        CONTENT STYLE
    ----------------------------------------------------- */

    #content {
        width: calc(100% - 250px);
        min-height: 100vh;
        transition: all 0.3s;
        position: absolute;
        top: 0;
        right: 0;
    }

    #content.active {
        width: 100%;
    }

    /* ---------------------------------------------------
        MEDIAQUERIES
    ----------------------------------------------------- */

    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
        }
        #sidebar.active {
            margin-left: 0;
        }
        #content {
            width: 100%;
        }
        #content.active {
            width: calc(100% - 250px);
        }
        #sidebarCollapse span {
            display: none;
        }
    }
</style>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">E.M.S</h3>
            </div>
            <ul class="list-unstyled components p-0">
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt me-3" aria-hidden="true"></i> Dashboard</a>
                </li>   
                <li class="">
                    <a href="#employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users me-3"></i> Employee</a>
                    <ul class="collapse list-unstyled" id="employee">
                        <li>
                            <a href="{{ route('manage.employee') }}"><i class="fa fa-square me-1"></i> Manage</a>
                        </li>
                        <li>
                            <a href="{{ route('add.employee') }}"><i class="fa fa-plus-square me-1"></i> Add Employee</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="{{ route('profile.show') }}"><i class="fa fa-user me-3"></i> Profile</a>
                </li>
                
                
                <li>
                    <a href="{{ route('profile.show') }}"><i class="fa fa-cogs me-3"></i> Setting</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-phone me-3"></i> Contact</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        {{-- <input type="submit"><i class="fa text-danger fa-power-off me-3"></i> Logout</input> --}}
                        <a href="javascript:void(0)" class="login-button"><i class="fa text-danger fa-power-off me-3"></i> Logout</a>

                    </form>
                    
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-theme p-2">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn text-white shadow-none">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex">
                            <span class="rounded-circle bg-danger text-white rounded-circle" style="height: 35px; width:35px;"><img src="{{ asset('admin_profile/'.Auth::user()->profile_photo_path) }}" alt="" class="img-fluid rounded-circle h-100 w-100"></span>
                            <span class="text-center text-white mt-2 ms-2">{{ Auth::user()->name }}</span>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

        $(document).ready(function(){
            $(document).on("click",".login-button",function(){
                var form = $(this).closest("form");
                //console.log(form);
                form.submit();
            });
            });
    </script>
</body>

</html>