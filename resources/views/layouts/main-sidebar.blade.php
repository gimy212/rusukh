<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
			<a class="desktop-logo logo-light active"  href="{{route('dashboard')}}"><img src="{{URL::asset('images/logo.png')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active"  href="{{route('dashboard')}}"><img src="{{URL::asset('images/logo.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active"  href="{{route('dashboard')}}"><img src="{{URL::asset('images/logo.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active"  href="{{route('dashboard')}}"><img src="{{URL::asset('images/logo.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround"
								src="{{ URL::asset('assets/img/faces/6.jpg') }}"><span
								class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
							<span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category">Main</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('dashboard')}}">
						  <i style="color #color: #3e3f44;" class="mdi mdi-grid-large menu-icon"></i>
						  <span  class="menu-title">لوحة التحكم</span>
						</a>
					  </li>
					  <li class="nav-item">
						
					<a class="nav-link" href="https://demo.rusukh.com">
						  <i style="color #color: #3e3f44;" class="mdi mdi-grid-large menu-icon"></i>
						<span  class="menu-title"> صفحه المستخدم</span>
					</a>
					  </li>
					<li class="side-item side-item-category">General</li>
					
					
					  <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">القائمة</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li class="nav-item"> <a class="nav-link" href="{{route('menu.index')}}">قائمة المنتجات الرئيسية</a></li>
							<li class="nav-item"> <a class="nav-link" href="{{route('chiled.index')}}">قائمة المنتجات الفرعية</a></li>
							
						</ul>
					  </li>  
					  
		  
					
		  
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">الصفحةالرئيسية</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li class="nav-item"><a class="nav-link" href="{{route('slider.index')}}">الغلاف المتحرك</a></li>
							<li class="nav-item"><a class="nav-link" href="{{url('main-content')}}">محتوي الانجليزي</a></li>
							<li class="nav-item"><a class="nav-link" href="{{url('main-content-ar')}}">محتوي العربي</a></li>
						
						</ul>
					  </li>  
					 


					  <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">الاكثر مبيعا</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li class="nav-item"> <a class="nav-link" href="{{url('products')}}">عرض المنتاجات</a></li>
						</ul>
					  </li>  
					  
					  <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">المنتجات</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li class="nav-item"> <a class="nav-link" href="{{url('posts')}}">عرض المنتجات</a></li>
							
							
						</ul>
					  </li>  
					  
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">الاقسام</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li class="nav-item"> <a class="nav-link" href="{{route('cat.index')}}">عرض قسم</a></li>
								<li class="nav-item"> <a class="nav-link" href="{{route('cat.create')}}">اضافة قسم</a></li>
								
							</ul>
						</li>  
		  
						
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">وسم(tags)</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li class="nav-item"> <a class="nav-link" href="{{route('tags.index')}}">عرض الوسم </a></li>
								<li class="nav-item"> <a class="nav-link" href="{{url('/tags_create')}}">اضافة وسم</a></li>
								
							</ul>
						  </li>  
		  
					 
					  <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">التواصل</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li class="nav-item"> <a class="nav-link" href="{{route('message.getmessage') }}">الرسائل</a></li>
							
						</ul>
					  </li>  
					  
					  <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">المواعيد</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li class="nav-item"> <a class="nav-link" href="{{route('appointment.getappointment')}}">المواعيد</a></li>
							
						</ul>
					  </li>  
		  
					 
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">طلب عرض سعر</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li class="nav-item"> <a class="nav-link" href="{{route('quota.getquota')}}">الطلبات</a></li>
								
							</ul>
						  </li>  
		  
		  
					 
					  <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">اراءالعملاء</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li class="nav-item"> <a class="nav-link" href="{{url('/reviews_index')}}">عرض</a></li>
							<li class="nav-item"> <a class="nav-link" href="{{route('reviews.create')}}">اضافة</a></li>
							
						</ul>
					  </li>
					   <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">الاستبيان</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li class="nav-item"> <a class="nav-link" href="{{url('/question_index')}}">استبيان المطاعم</a></li>
							<li class="nav-item"> <a class="nav-link" href="{{url('/reviews_car')}}">استبيان الصيانه والخدمات</a></li>
							<li class="nav-item"> <a class="nav-link" href="{{url('/sizing_index')}}">استبيان  الزيوت والشحوم</a></li>
						</ul>
					  </li>
				  </ul>
			</div>
		</aside>
<!-- main-sidebar -->
