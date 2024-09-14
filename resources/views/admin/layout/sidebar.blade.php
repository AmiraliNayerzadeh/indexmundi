<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">منو</li>

                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">داشبورد</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">کاربران</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('admin.users.index')}}">
                                <span data-key="t-calendar">همه کاربران</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.users.create')}}">
                                <span data-key="t-calendar">ایجاد کاربر جدید</span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">دسته بندی ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('admin.categories.index')}}">
                                <span data-key="t-calendar">همه دسته بندی ها</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.categories.create')}}">
                                <span data-key="t-calendar">ایجاد دسته بندی جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">آیتم ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('admin.items.index')}}">
                                <span data-key="t-calendar">همه آیتم ها</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.items.create')}}">
                                <span data-key="t-calendar">ایجاد آیتم جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
