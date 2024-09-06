<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">

{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="/administrator/dashboard">--}}
{{--        <i class="menu-icon mdi mdi-television"></i>--}}
{{--        <span class="menu-title">Dashboard</span>--}}
{{--      </a>--}}
{{--    </li>--}}

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Post</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="/administrator/posts">List</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route("administrator.posts.create")}}">Add New</a>
          </li>
        </ul>
      </div>
    </li>




  </ul>
</nav>
