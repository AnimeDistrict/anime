
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anime 
                            </a>
                            <div class="dropdown-menu dropdown-primary  " aria-labelledby="navbarDropdownMenuLink" >
                                <a class="dropdown-item" href="anime-series">Series</a>
                                <a class="dropdown-item" href="anime-movies">Movies</a>
                                <a class="dropdown-item" href="anime-genre">Genre</a>
                                <a class="dropdown-item" href="anime-random">Random</a>
                                <a class="dropdown-item" href="anime-news">News</a>

                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="modal" data-target="#modalLRForm">Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="anime-forum">Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" name="typeahead" placeholder="Search" aria-label="Search" >
                    </form>
                </div>
            </div>
        </nav>

    <!--/.Navbar-->

                                               
    
    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
    
                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">
    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                    </ul>
    
                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
    
                            <!--Body-->
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form22" class="form-control">
                                    <label for="form22">Your email</label>
                                </div>
    
                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form23" class="form-control">
                                    <label for="form23">Your password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer display-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
    
                        </div>
                        <!--/.Panel 7-->
    
                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panel8" role="tabpanel">
    
                            <!--Body-->
                            <div class="modal-body">
                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form24" class="form-control">
                                    <label for="form24">Your email</label>
                                </div>
    
                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form25" class="form-control">
                                    <label for="form25">Your password</label>
                                </div>
    
                                <div class="md-form form-sm">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form26" class="form-control">
                                    <label for="form26">Repeat password</label>
                                </div>
    
                                <div class="text-center form-sm mt-2">
                                    <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                                </div>
    
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>
    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Login / Register Form-->
    