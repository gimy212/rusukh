<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rusukh Dashboard - &reg;Rusukh&trade; </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->

  <script src="{{ asset('https://cdn.ckeditor.com/4.18.0/full/ckeditor.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
  <!-- End plugin css for this page -->

  <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/*')}}" />

  <style>


      .nav-link{

        border-radius: 0px !important;
      }

      .sidebar .nav .nav-item .nav-link i.menu-icon {
    font-size: 22px;
    line-height: 1;
    margin-right: 1rem;
    color: #88909f;
}

.sidebar .nav .nav-item .nav-link i {
    color: #88909f;
}


      .sidebar .nav .nav-item.nav-category {
    color: #44a4ea;
    border-bottom: 1px solid rgba(255, 255, 255, 0.13);
    margin: 0 30px;
    font-size: 11px;
    font-weight: 700;
    padding: 20px 0px 5px 0px;
    text-transform: uppercase;
}


      .sidebar .nav .nav-item .nav-link .menu-title {
        color: #f4f5f7;
        font-weight: 600;
        font-size: 13px !important;
    line-height: 1;
    vertical-align: middle;
      }

      .interface-count{

        padding: 30px;
    background-color: #1f3bb3;
    width: 196px;
    border-radius: 23px;
    max-height: 140px;
    margin-right: 44px;
}


.home-tab .statistics-details .statistics-title {
    font-style: normal;
    font-weight: 900;
    font-size: 15px;
    line-height: 18px;
    color: #ffffff;
    margin-bottom: 4px;
    margin: 0 auto;
    text-align: center;
}

.rate-percentage{

    color: #fff !important;
}



element.style {
}
@media (min-width: 992px){
.sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-icon {
    margin-right: 0;
    margin-left: 0;
    margin-bottom: 0;
    color: #bbbbbb;
}
}


#headresponseve{

    background: #001050;

}

@media (max-width: 985px){

    #headresponseve{

background: #f4f5f7;

}
}


  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:admin/partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div id="headresponseve" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span style="color:#fff" class="icon-menu"></span>
          </button>
        </div>

        <div>
          <a class="navbar-brand brand-logo"  href="{{route('dashboard')}}">
           <h3 style="color: #fff;    font-weight: 700;
          " >Rusukh</h3>
          </a>

        </div>
      </div>
      <div style="background: #f4f5f7;" class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 style="color:#64666a" class="welcome-text">  مرحبا بك <span style="color:#1f3bb3" class="text-black fw-bold">لوحة التحكم</span></h1>
            <h4 style="
            font-weight: 500;
            font-size: 15px;
        " class="welcome-sub-text"><a target="_blank" style="    text-decoration: none;" href="https://rusukh.com.sa">زيارة الموقع</a></h4>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">


          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ asset('admin/images/faces/face8.jpg')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ asset('admin/images/faces/face8.jpg')}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"> Admin</p>
                <p class="fw-light text-muted mb-0">admin@rusukh.com</p>
              </div>
              <a href="{{ route('message.getmessage') }}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> الرسائل</a>
              <a href="{{ route('password.request') }}" class="dropdown-item"><i style="    color: #1f3bb3;
                padding-right: 3px;" class="dropdown-item-icon mdi mdi-shield-outline"></i>
                    تغيير كلمة السر
            </a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>الدعم </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>{{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>

           <form id="logout-form" action="" method="POST" class="d-none">
               @csrf
           </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:admin/partials/_sidebar.html -->
      <nav  style="background: #001050;" class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                  <i style="color #color: #3e3f44;" class="mdi mdi-grid-large menu-icon"></i>
                  <span  class="menu-title">لوحة التحكم</span>
                </a>
              </li>



          <li  style="" class="nav-item nav-category">القائمة </li>
          <li style="" class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">القائمة الرئيسية</span>
                <i class="menu-arrow"></i>
              </a>

              <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href=""> إنشاء قائمة رئيسية </a></li>
                </ul>
              </div>

            <div  class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href=""> إنشاء قائمة فرعية </a></li>
                </ul>
              </div>
              
              <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('menu.index')}}">قائمة المنتجات الرئيسية</a></li>
                </ul>
              </div>
              
              <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('chiled.index')}}">قائمة المنتجات الفرعية</a></li>
                </ul>
              </div>
            <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="">عركل القوائم الفرعية</a></li>
                </ul>
              </div>
              
              
              <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="">عركل القوائم الرئيسية</a></li>
                </ul>
              </div>
            </li>
            
            

          <li class="nav-item nav-category">الصفحة الرئيسية</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">الصفحة الرئيسية</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{route('slider.index')}}">الغلاف المتحرك</a></li>
                </ul>
              </div>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{url('main-content')}}">محتوي الانجليزي</a></li>
                </ul>
              </div>
              
                    <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{url('main-content-ar')}}">محتوي العربي</a></li>
                </ul>
              </div>

    
       


              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{url('main-content')}}">معلومات الفوتر</a></li>
                </ul>
              </div>

          </li>


          <li class="nav-item nav-category">الاكثر مبيعا</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">الاكثر مبيعا</span>
                <i class="menu-arrow"></i>
              </a>


              <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('products')}}">عرض المنتاجات</a></li>
                </ul>
              </div>
            </li>


            <li class="nav-item nav-category">المنتجات
</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('posts')}}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">المنتجات
</span>
              </a>

              <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('posts')}}">اضافة منتج</a></li>
                  </ul>
                </div>
                <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('posts')}}">تعديل منتج</a></li>
                  </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('cat.index')}}">
                  <i class="menu-icon mdi mdi-format-list-bulleted"></i>
                  <span class="menu-title">الاقسام</span>
                </a>

                <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('cat.create')}}">اضافة قسم</a></li>
                    </ul>
                  </div>
                  <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('cat.index')}}">تعديل قسم</a></li>
                    </ul>
                  </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('tags.index')}}">
                  <i class="menu-icon mdi mdi-tag"></i>
                  <span class="menu-title">وسم(tags)</span>
                </a>

                <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('tags.create')}}">اضافة وسم</a></li>
                    </ul>
                  </div>
                  <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('tags.index')}}">تعديل الوسم </a></li>
                    </ul>
                  </div>
              </li>

            <li class="nav-item nav-category">التواصل</li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('message.getmessage') }}">
                <i class="menu-icon mdi mdi-comment-text-outline"></i>
                <span class="menu-title">الرسائل</span>
              </a>

              <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('message.getmessage') }}">الرسائل</a></li>
                  </ul>
                </div>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('appointment.getappointment')}}">
                <i class="menu-icon mdi mdi-calendar-clock"></i>
                    <span class="menu-title">المواعيد</span>
              </a>

              <div class="collapse" id="appoint">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('appointment.getappointment')}}">المواعيد</a></li>
                  </ul>
                </div>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('quota.getquota')}}">
                  <i class="menu-icon mdi mdi-account-plus"></i>
                      <span class="menu-title">طلب عرض سعر</span>
                </a>

                <div class="collapse" id="quota">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('quota.getquota')}}">الطلبات</a></li>
                    </ul>
                  </div>

              </li>


            <li class="nav-item nav-category">اراء العملاء</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('reviews')}}">
                <i class="menu-icon mdi mdi-account-circle"></i>
                <span class="menu-title">اراء العملاء</span>
              </a>

              <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('reviews.create')}}">اضافة</a></li>
                  </ul>
                </div>

            </li>
        </ul>
      </nav>


      @yield('content')




        <!-- content-wrapper ends -->
        <!-- partial:admin/partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022 Rusukh. All Rights Reserved .</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous')}}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/select2/select2.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('admin/js/template.js')}}"></script>
    <script src="{{ asset('admin/js/settings.js')}}"></script>
    <script src="{{ asset('admin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/js/file-upload.js')}}"></script>
    <script src="{{ asset('admin/js/typeahead.js')}}"></script>
    <script src="{{ asset('admin/js/select2.js')}}"></script>
    <!-- End custom js for this page-->

  </body>

  </html>

