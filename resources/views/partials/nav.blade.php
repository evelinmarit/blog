<ul>
    <li><a href="{{route('home')}}">Home</a></li>
    <li><a href="{{route('page1')}}">Page1</a></li>
    <li><a href="{{route('page2')}}">Page2</a></li>
</ul>
<div class="navbar bg-base-100">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('page1')}}">Page1</a></li>
            <li><a href="{{route('page2')}}">Page2</a></li>
        </ul>
      </div>
      <a class="text-xl btn btn-ghost">{{config('app.name')}}</a>
    </div>
    <div class="hidden navbar-center lg:flex">
      <ul class="px-1 menu menu-horizontal">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('page1')}}">Page1</a></li>
        <li><a href="{{route('page2')}}">Page2</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a class="btn">Button</a>
    </div>
  </div>
