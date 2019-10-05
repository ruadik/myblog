<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{$userAvatar}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$userName}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="{{route('admin.home')}}">
                    <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
                </a>
            </li>
            <li><a href="{{route('posts.index')}}"><i class="fa fa-sticky-note-o"></i> <span>Посты</span></a></li>
            <li><a href="{{route('categories.index')}}"><i class="fa fa-list-ul"></i> <span>Категории</span></a></li>
            <li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i> <span>Теги</span></a></li>
            <li>
                <a href="{{route('comments.index')}}">
                    <i class="fa fa-commenting"></i> <span>Комментарии</span>
                    <span class="pull-right-container">
                        <small class="label pull-left bg-green">{{$countComments}}</small>
                        <small class="label pull-right bg-red">{{$countDisComments}}</small>
                    </span>
                </a>
            </li>
            <li><a href={{route('users.index')}}><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
            <li>
                <a href="{{route('subscriptions.index')}}">
                    <i class="fa fa-user-plus"></i> <span>Подписчики</span>
                    <span class="pull-right-container">
                        <small class="label pull-left bg-green">{{$countSubs}}</small>
                        <small class="label pull-right bg-red">{{$countDisSubs}}</small>
                    </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
