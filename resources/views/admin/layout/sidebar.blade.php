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
        <span class="menu-title">اعضاء الحملة</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="/administrator/users">القائمة</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route("administrator.users.create")}}">اضافة</a>
          </li>
        </ul>
      </div>
    </li>


      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#basic-ui3" aria-expanded="" aria-controls="basic-ui3">
              <i class="menu-icon mdi mdi-dna"></i>
              <span class="menu-title">اللجان الانتخابية</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse " id="basic-ui3">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item ">
                      <a class="nav-link" href="{{route("administrator.electiongroups.list")}}">القائمة</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="{{route("administrator.electiongroups.create")}}">اضافة</a>
                  </li>
              </ul>
          </div>
      </li>


      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#basic-ui4" aria-expanded="" aria-controls="basic-ui4">
              <i class="menu-icon mdi mdi-dna"></i>
              <span class="menu-title">اعضاء اللجنة</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse " id="basic-ui4">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item ">
                      <a class="nav-link" href="{{route('administrator.electiongroupusers.list')}}">القائمة</a>
                  </li>
{{--                  <li class="nav-item ">--}}
{{--                      <a class="nav-link" href="{{route('administrator.electiongroupusers.create')}}">اضافة</a>--}}
{{--                  </li>--}}
              </ul>
          </div>
      </li>


      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#basic-ui5" aria-expanded="" aria-controls="basic-ui5">
              <i class="menu-icon mdi mdi-dna"></i>
              <span class="menu-title">العوائل</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse " id="basic-ui5">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item ">
                      <a class="nav-link" href="{{route('administrator.electiongroupuserfamily.list')}}">القائمة</a>
                  </li>
{{--                  <li class="nav-item ">--}}
{{--                      <a class="nav-link" href="{{route('administrator.electiongroupuserfamily.create')}}">اضافة</a>--}}
{{--                  </li>--}}
              </ul>
          </div>
      </li>


{{--      <li class="nav-item">--}}
{{--          <a class="nav-link" data-toggle="collapse" href="#basic-ui2" aria-expanded="" aria-controls="basic-ui2">--}}
{{--              <i class="menu-icon mdi mdi-dna"></i>--}}
{{--              <span class="menu-title">Voters</span>--}}
{{--              <i class="menu-arrow"></i>--}}
{{--          </a>--}}
{{--          <div class="collapse " id="basic-ui2">--}}
{{--              <ul class="nav flex-column sub-menu">--}}
{{--                  <li class="nav-item ">--}}
{{--                      <a class="nav-link" href="/administrator/voters">List</a>--}}
{{--                  </li>--}}

{{--              </ul>--}}
{{--          </div>--}}
{{--      </li>--}}


  </ul>
</nav>
