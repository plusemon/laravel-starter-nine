 <aside class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <h4 class="logo-text text-uppercase">{{ env('APP_NAME') }}</h4>
         </div>
         <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
         </div>
     </div>

     <!--navigation-->
     <ul class="metismenu" id="menu">
         @foreach (Menu::all() as $menu)
             @if (isset($menu['label']))
                 <li class="menu-label">{{ $menu['label'] }}</li>
             @else
                 <li>
                     <a href="{!! $menu['url'] ?? 'javascript:;' !!}" class="{!! isset($menu['subs']) ? 'has-arrow' : '' !!}">
                         <div class="parent-icon">{!! $menu['icon'] ?? '<i class="bx bx-circle"></i>' !!}</div>
                         <div class="menu-title">{!! $menu['title'] ?? 'Menu Item ' !!}</div>
                     </a>
                     @if (isset($menu['subs']))
                         <ul>
                             @foreach ($menu['subs'] as $sub)
                                 <li>
                                     <a class="{!! isset($sub['subs']) ? 'has-arrow' : '' !!}" href="{!! $sub['url'] ?? 'javascript:;' !!}">{!! $sub['icon'] ?? '<i class="bx bx-circle"></i>' !!}
                                         {{ $sub['title'] }}</a>
                                     @if (isset($sub['subs']))
                                         <ul>
                                             @foreach ($sub['subs'] as $sub2)
                                                 <li>
                                                     <a class="{!! isset($sub2['subs']) ? 'has-arrow' : '' !!}"
                                                        href="{{ $sub2['url'] }}">{!! $sub2['icon'] ?? '<i class="bx bx-circle"></i>' !!}</i>{{ $sub2['title'] }}</a>
                                                     @if (isset($sub2['subs']))
                                                         <ul>
                                                             @foreach ($sub2['subs'] as $sub3)
                                                                 <li> <a href="{{ $sub3['url'] }}">{!! $sub3['icon'] ?? '<i class="bx bx-circle"></i>' !!}</i>{{ $sub3['title'] }}
                                                                         {{ $sub3['title'] }}</a>
                                                                 </li>
                                                             @endforeach
                                                         </ul>
                                                     @endif
                                                 </li>
                                             @endforeach
                                         </ul>
                                     @endif
                                 </li>
                             @endforeach
                         </ul>
                     @endif
                 </li>
             @endif

         @endforeach
         {{-- <li class="menu-label">Others</li>
         <li>
             <a class="has-arrow" href="javascript:;">
                 <div class="parent-icon"><i class="bi bi-music-note-list"></i>
                 </div>
                 <div class="menu-title">Menu Levels</div>
             </a>
             <ul>
                 <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>
                     <ul>
                         <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level Two</a>
                             <ul>
                                 <li> <a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
             </ul>
         </li> --}}
     </ul>
     <!--end navigation-->
 </aside>
