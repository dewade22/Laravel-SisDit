<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('adminasset/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li id="home_menu">
                        <a href="{{url('/')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li id="master_Data">
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">storage</i>
                            <span>Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li id="kreditur">
                                <a href="{{route('Krediturs.index')}}">Kreditur</a>
                            </li>
                            <li id="jaminan">
                                <a href="{{route('Jaminan.index')}}">Jaminan</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">Basic</a>
                                    </li>
                                    <li>
                                        <a href="#">Colored</a>
                                    </li>
                                    <li>
                                        <a href="#">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="#">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="#">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="#">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="#">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Alerts</a>
                            </li>
                            <li>
                                <a href="#">Animations</a>
                            </li>
                            <li>
                                <a href="#">Badges</a>
                            </li>

                            <li>
                                <a href="#">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="#">Buttons</a>
                            </li>
                            <li>
                                <a href="#">Collapse</a>
                            </li>
                            <li>
                                <a href="#">Colors</a>
                            </li>
                            <li>
                                <a href="#">Dialogs</a>
                            </li>
                            <li>
                                <a href="#">Icons</a>
                            </li>
                            <li>
                                <a href="#">Labels</a>
                            </li>
                            <li>
                                <a href="#">List Group</a>
                            </li>
                            <li>
                                <a href="#">Media Object</a>
                            </li>
                            <li>
                                <a href="#">Modals</a>
                            </li>
                            <li>
                                <a href="#">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Pagination</a>
                            </li>
                            <li>
                                <a href="#">Preloaders</a>
                            </li>
                            <li>
                                <a href="#">Progress Bars</a>
                            </li>
                            <li>
                                <a href="#">Range Sliders</a>
                            </li>
                            <li>
                                <a href="#">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="#">Tabs</a>
                            </li>
                            <li>
                                <a href="#">Thumbnails</a>
                            </li>
                            <li>
                                <a href="#">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="#">Waves</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="#">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="#">Form Examples</a>
                            </li>
                            <li>
                                <a href="#">Form Validation</a>
                            </li>
                            <li>
                                <a href="#">Form Wizard</a>
                            </li>
                            <li>
                                <a href="#">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Normal Tables</a>
                            </li>
                            <li>
                                <a href="#">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="#">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Image Gallery</a>
                            </li>
                            <li>
                                <a href="#">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Morris</a>
                            </li>
                            <li>
                                <a href="#">Flot</a>
                            </li>
                            <li>
                                <a href="#">ChartJS</a>
                            </li>
                            <li>
                                <a href="#">Sparkline</a>
                            </li>
                            <li>
                                <a href="#">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Profile</a>
                            </li>
                            <li>
                                <a href="#">Sign In</a>
                            </li>
                            <li>
                                <a href="#">Sign Up</a>
                            </li>
                            <li>
                                <a href="#">Forgot Password</a>
                            </li>
                            <li>
                                <a href="#">Blank Page</a>
                            </li>
                            <li>
                                <a href="#">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="#">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Google Map</a>
                            </li>
                            <li>
                                <a href="#">YandexMap</a>
                            </li>
                            <li>
                                <a href="#">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="#">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="#">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
