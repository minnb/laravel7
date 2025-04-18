<?php
    function getRootCSS($name)
    {
        $route_name = \Str::upper(\Request::route()->getName());
        if(\Str::contains($route_name, \Str::upper($name))){
            echo "active open";
        }
        else
        {
            echo "";
        }
    }

    function getActiveCSS($name)
    {
        $route_name = \Str::upper(\Request::route()->getName());
        if(\Str::upper($name) == $route_name || \Str::contains($route_name, \Str::upper($name))){
            echo "active";
        }
        else
        {
            echo "";
        }
    }

    function getActiveRoot($name)
    {
        $route_name = \Str::upper(\Request::route()->getName());
        if(\Str::upper($name) == $route_name){
            echo "active";
        }
        else
        {
            echo "";
        }
    }
?>
<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try { ace.settings.loadState('sidebar'); } catch (e) { console.log(e); }
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="{{ getActiveRoot('dashboard') }}">
            <a href="{{ url('dashboard') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="{{ getRootCSS('dashboard.post') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Posts </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.post') }}">
                    <a href="{{ route('get.dashboard.post.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Lists
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.post.tag') }}">
                    <a href="{{ route('get.dashboard.post.tag') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tags
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="{{ getRootCSS('dashboard.product') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil"></i>
                <span class="menu-text"> Tours </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.product.list') }}{{ getActiveCSS('get.dashboard.product.create') }}{{ getActiveCSS('get.dashboard.product.edit') }}">
                    <a href="{{ route('get.dashboard.product.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Lists
                    </a>
                    <b class="arrow"></b>
                </li>
  <!--
                <li class="{{ getActiveCSS('dashboard.product.price') }}">
                    <a href="{{ route('get.dashboard.product.price.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Sales Price
                    </a>
                    <b class="arrow"></b>
                </li>
                 <li class="{{ getActiveCSS('dashboard.product.schedule') }}">
                    <a href="{{ route('get.dashboard.product.schedule.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Schedule
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.product.prdatt') }}">
                    <a href="{{ route('get.dashboard.product.prdatt.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Product Attributes
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.product.att') }}">
                    <a href="{{ route('get.dashboard.product.att.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Attributes
                    </a>

                    <b class="arrow"></b>
                </li>
            -->
            </ul>
        </li>

        <li class="{{ getRootCSS('dashboard.page') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> Pages </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.pageSingle') }}">
                    <a href="{{ route('get.dashboard.pageSingle.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.page.home') }}">
                    <a href="{{ route('get.dashboard.page.home') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Home Page
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.page.banner') }}">
                    <a href="{{ route('get.dashboard.page.banner') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Banner
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <li class="{{ getRootCSS('dashboard.teams') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user-plus"></i>
                <span class="menu-text"> Teams </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.teams') }}">
                    <a href="{{ route('get.dashboard.teams.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Lists
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>        
        <li class="{{ getRootCSS('dashboard.customer') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-comment"></i>
                <span class="menu-text"> Customer </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.customer') }}">
                    <a href="{{ route('get.dashboard.customer.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Lists
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="{{ getRootCSS('dashboard.video') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-film"></i>
                <span class="menu-text"> Media </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.video.list') }}">
                    <a href="{{ route('get.dashboard.video.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Videos
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.gallery.list') }}">
                    <a href="{{ route('get.dashboard.gallery.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Gallery
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.social.list') }}">
                    <a href="{{ route('get.dashboard.social.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Social Network
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        @if(App\Models\User::checkUserRole(Auth::user()->email) == 'administrator')
        <li class="{{ getRootCSS('dashboard.cate') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Categories </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.cate.list') }}">
                    <a href="{{ route('get.dashboard.cate.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Categories
                    </a>
                    <b class="arrow"></b>
                </li>

            </ul>
        </li>


        <li class="{{ getRootCSS('dashboard.user') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Users </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.user.list') }}">
                    <a href="{{ route('get.dashboard.user.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Lists
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.user.roles') }}">
                    <a href="{{ route('get.dashboard.user.roles') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Roles
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        @endif
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-cogs"></i>
                <span class="menu-text"> Setting </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Comppany
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Slide
                    </a>
                    <b class="arrow"></b>
                </li>

            </ul>
        </li>
        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-calendar"></i>
                <span class="menu-text">
                    Calendar
                    <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                        <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                    </span>
                </span>
            </a>
            <b class="arrow"></b>
        </li>

    </ul><!-- /.nav-list -->
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>