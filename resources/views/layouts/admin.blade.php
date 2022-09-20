<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wemoney - Dashboard</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
</head>
<body>
    <!-- navbar -->
    <div class = "dashboard-pg text-grey-blue">
        <nav class = "navigation-bar d-flex align-items-center">
            <div class = "container">
                <div class = "row align-items-center">
                    <div class = "navigation-bar-left col-6 d-flex align-items-center">
                        <button type = "button" class = "navbar-open-btn text-grey-blue me-3">
                            <i class = "fas fa-bars"></i>
                        </button>
                        <div class = "navbar-logo">
                            <img src = "assets/images/logo.png" alt = "site logo">
                        </div>
                    </div>

                    <div class = "navigation-bar-right col-6 d-flex align-items-center justify-content-end">
                        <a href = "#" class = "profile-btn bg-blue text-white btn-circle me-3">
                            <i class = "fas fa-user"></i>
                        </a>
                        <button type = "button" class = "notification-btn text-grey-blue">
                            <i class = "fa-regular fa-bell"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <div class = "navigation-overlay position-fixed"></div>

        <div class = "navigation-sidebar bg-light-grey">
            <div class = "navbar-sb-head d-flex justify-content-between align-items-center px-4">
                <img src = "assets/images/logo.png">
                <button class = "navbar-close-btn text-grey-blue">
                    <i class = 'fas fa-arrow-left'></i>
                </button>
            </div>

            <div class = "navbar-sb-list p-4">
                <div class = "navbar-sb-item mb-5">
                    <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">Products</h5>
                    <ul class = "navbar-sb-links p-0 list-unstyled">
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fa-solid fa-gauge"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fa-solid fa-spinner"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Spin</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "navbar-sb-item mb-5">
                    <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">Account</h5>
                    <ul class = "navbar-sb-links p-0 list-unstyled">
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fa-solid fa-clock-rotate-left"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">payment</span>
                                </div>
                            </a>
                        </li>
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fa-regular fa-circle-user"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">profile</span>
                                </div>
                            </a>
                        </li>

                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fas fa-network-wired"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">referrals</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "navbar-sb-item mb-5">
                    <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">misc pages</h5>
                    <ul class = "navbar-sb-links p-0 list-unstyled">
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fas fa-lock"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">logout</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- navbar -->
        <!-- content -->
        <div class = "dashboard-main">
            @yield('content')
        </div>
        
    </div>





    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script >
        
$(document).ready(function(){
    $('.navbar-open-btn').click(function(){
        $('.navigation-sidebar').addClass('show-navigation-sidebar');
        $('.navigation-overlay').css('display', 'block');
    })

    $('.navbar-close-btn').click(function(){
        $('.navigation-sidebar').removeClass('show-navigation-sidebar');
        $('.navigation-overlay').css('display', 'none');
    })

    $(window).click(function(e){
        if($(e.target).hasClass('navigation-overlay')){
            $('.navigation-sidebar').removeClass('show-navigation-sidebar');
            $('.navigation-overlay').css('display', 'none');
        }
    })
})
    </script>

</body>
</html>