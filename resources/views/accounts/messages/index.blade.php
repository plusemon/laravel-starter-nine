@extends('accounts.layouts.main', $meta)

@php
$meta['title'] = 'Manage Subscribers';
$user = Auth::user();
@endphp


@section('main')
    <main class="page-content">
        <div class="chat-wrapper">
            <div class="chat-sidebar">
                <div class="chat-sidebar-header">
                    <div class="d-flex align-items-center">
                        <div class="chat-user-online">
                            <img src="https://via.placeholder.com/110X110" width="45" height="45" class="rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <p class="mb-0">{{ $user->name }}</p>
                        </div>
                        <div class="dropdown">
                            <div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i
                                   class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-end"> <a class="dropdown-item" href="javascript:;">Settings</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Help &amp;
                                    Feedback</a>
                                <a class="dropdown-item" href="javascript:;">Keyboard Shortcuts</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Sign Out</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                    <div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i
                               class="bx bx-search"></i></span>
                        <input type="text" class="form-control" placeholder="People, groups, &amp; messages"> <span
                              class="input-group-text bg-transparent"><i class="bx bx-dialpad"></i></span>
                    </div>

                </div>
                <div class="chat-sidebar-content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Chats">
                            <div class="p-3">
                                <div class="dropdown"> <a href="#"
                                       class="text-uppercase text-secondary dropdown-toggle dropdown-toggle-nocaret"
                                       data-bs-toggle="dropdown">Recent Chats <i class="bx bxs-chevron-down"></i></a>
                                    <div class="dropdown-menu"> <a class="dropdown-item" href="#">Recent Chats</a>
                                        <a class="dropdown-item" href="#">Hidden Chats</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Sort by Time</a>
                                        <a class="dropdown-item" href="#">Sort by Unread</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Show Favorites</a>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-list ps ps--active-y">
                                <div class="list-group list-group-flush">

                                    <a href="javascript:;" class="list-group-item active">
                                        <div class="d-flex">
                                            <div class="chat-user-online">
                                                <img src="https://via.placeholder.com/110X110" width="42" height="42"
                                                     class="rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="mb-0 chat-title">Harvey Specter</h6>
                                                <p class="mb-0 chat-msg">Wrong. You take the gun....</p>
                                            </div>
                                            <div class="chat-time">4:32 PM</div>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <div class="d-flex">
                                            <div class="chat-user-online">
                                                <img src="https://via.placeholder.com/110X110" width="42" height="42"
                                                     class="rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="mb-0 chat-title">Louis Litt</h6>
                                                <p class="mb-0 chat-msg">You just got LITT up, Mike.</p>
                                            </div>
                                            <div class="chat-time">9:51 AM</div>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <div class="d-flex">
                                            <div class="chat-user-online">
                                                <img src="https://via.placeholder.com/110X110" width="42" height="42"
                                                     class="rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="mb-0 chat-title">Rachel Zane</h6>
                                                <p class="mb-0 chat-msg">I was thinking that we could...</p>
                                            </div>
                                            <div class="chat-time">Wed</div>
                                        </div>
                                    </a>

                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 300px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 167px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-header d-flex align-items-center">
                <div class="chat-toggle-btn"><i class="bx bx-menu-alt-left"></i>
                </div>
                <div>
                    <h4 class="mb-1 font-weight-bold">Harvey Inspector</h4>
                    <div class="list-inline d-sm-flex mb-0 d-none"> <a href="javascript:;"
                           class="list-inline-item d-flex align-items-center text-secondary"><small
                                   class="bx bxs-circle me-1 chart-online"></small>Active Now</a>

                    </div>
                </div>
                <div class="chat-top-header-menu ms-auto"> <a href="javascript:;"><i class="bx bx-video"></i></a>
                    <a href="javascript:;"><i class="bx bx-phone"></i></a>
                    <a href="javascript:;"><i class="bx bx-user-plus"></i></a>
                </div>
            </div>
            <div class="chat-content ps ps--active-y">
                <div class="chat-content-leftside">
                    <div class="d-flex">
                        <img src="https://via.placeholder.com/110X110" width="48" height="48" class="rounded-circle" alt="">
                        <div class="flex-grow-1 ms-2">
                            <p class="mb-0 chat-time">Harvey, 2:35 PM</p>
                            <p class="chat-left-msg">Hi, harvey where are you now a days?</p>
                        </div>
                    </div>
                </div>
                <div class="chat-content-rightside">
                    <div class="d-flex ms-auto">
                        <div class="flex-grow-1 me-2">
                            <p class="mb-0 chat-time text-end">you, 2:37 PM</p>
                            <p class="chat-right-msg">I am in USA</p>
                        </div>
                    </div>
                </div>
              
                <div class="chat-content-leftside">
                    <div class="d-flex">
                        <img src="https://via.placeholder.com/110X110" width="48" height="48" class="rounded-circle" alt="">
                        <div class="flex-grow-1 ms-2">
                            <p class="mb-0 chat-time">Harvey, 3:12 PM</p>
                            <p class="chat-left-msg">ohhk, great, which admin template you have purchased?</p>
                        </div>
                    </div>
                </div>

                <div class="chat-content-rightside">
                    <div class="d-flex">
                        <div class="flex-grow-1 me-2">
                            <p class="mb-0 chat-time text-end">you, 3:35 PM</p>
                            <p class="chat-right-msg">thanks Harvey</p>
                        </div>
                    </div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 520px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 235px;"></div>
                </div>
            </div>
            <div class="chat-footer d-flex align-items-center">
                <div class="flex-grow-1 pe-2">
                    <div class="input-group">
                        <textarea class="form-control" placeholder="Type a message"></textarea>
                        <button class="btn btn-sm btn-primary">Send</button>
                    </div>
                </div>
            </div>
            <!--start chat overlay-->
            <div class="overlay chat-toggle-btn-mobile"></div>
            <!--end chat overlay-->
        </div>
    </main>
@endsection

@push('js')
    <script>
        $(function() {
            "use strict";
            new PerfectScrollbar('.chat-list');
            new PerfectScrollbar('.chat-content');
        });
    </script>
@endpush
