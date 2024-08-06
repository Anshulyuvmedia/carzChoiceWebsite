{{-- @php
$user = json_decode($data);
@endphp --}}
<div class="row">
   <!-- Middle Content Area -->
   <div class="col-md-12 col-xs-12 col-sm-12">
      <section class="search-result-item rounded-top-4">
            <a class="image-link p-3" href="#">
               <img class="image center-block rounded-4" alt="user-profile"
                  src="{{ asset('assets/backend-assets/images/' . $user->dp) }}">
            </a>
            <div class="search-result-item-body">
               <div class="row">
                  <div class="col-md-5 col-sm-12 col-xs-12">
                        <h4 class="search-result-item-heading">
                           <a href="#">{{ $user->fullname }}</a>
                        </h4>
                        <p class="info">
                           <span><a href="#"><i class="fa fa-email "></i>{{ $user->email }}</a></span>
                           <span>
                              <a href="javascript:void(0)">
                                    <i class="fa fa-phone"></i>{{ $user->contactno }}
                              </a>
                           </span>
                        </p>
                        {{-- <p class="description">You last logged in at: 14-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)</p> --}}
                        {{-- <span class="label label-warning">Paid Package</span> --}}
                        <span class="label label-success">{{ $user->usertype }}</span>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="row ad-history  d-flex justify-content-end">
                           <div class="col-md-4 col-sm-4 col-xs-12">
                              <div class="user-stats rounded-4">
                                    <h2>{{ $addpostcount }}</h2>
                                    <small>Total Ads</small>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 col-xs-12">
                              <div class="user-stats rounded-4">
                                    <h2>413</h2>
                                    <small>Favourites Ads</small>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </section>
      <div class="dashboard-menu-container rounded-bottom-4">
            <ul>
               <li class="{{ Request::routeIs('userprofile') ? 'active' : '' }}">
                  <a href="/userprofile">
                        <div class="menu-name"> Profile </div>
                  </a>
               </li>
               {{-- <li>
                  <a href="/userarchive">
                        <div class="menu-name">Archives</div>
                  </a>
               </li> --}}
               <li class="{{ Request::routeIs('useractiveads') ? 'active' : '' }}">
                  <a href="/useractiveads">
                        <div class="menu-name">My Listings</div>
                  </a>
               </li>
               {{-- <li>
                  <a href="/userfavourites">
                        <div class="menu-name">Favourites Ads</div>
                  </a>
               </li> --}}
               {{-- <li>
                  <a href="/usermessages">
                        <div class="menu-name">Messages</div>
                  </a>
               </li> --}}
               {{-- <li>
                  <a href="/userdeactive">
                        <div class="menu-name">Close Account</div>
                  </a>
               </li> --}}
               <li>
                  <a href="{{ route('logoutuserfront') }}">
                        <div class="menu-name">Logout</div>
                  </a>
               </li>
            </ul>
      </div>
   </div>
   <!-- Middle Content Area  End -->
</div>
