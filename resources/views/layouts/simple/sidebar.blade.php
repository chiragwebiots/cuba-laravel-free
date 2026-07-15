<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('assets/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('admin.default_dashboard') }}"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><label
                            class="badge badge-light-primary">13</label><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span class="lan-3">Dashboard </span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="{{ route('admin.default_dashboard') }}">Default</a></li>
                            <!-- <li><a class="lan-5" href="#">Ecommerce</a></li>
                            <li><a href="#">Online course</a></li>
                            <li><a href="#">Crypto</a></li>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">NFT</a></li>
                            <li> <a href="#">School management</a></li>
                            <li> <a href="#">POS</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="#">CRM</a>
                            </li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="#">Analytics</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="#">HR</a>
                            </li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="#">Projects</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="#">Logistics</a></li> -->
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg><span class="lan">Laravel Example</span></a>
                        <ul class="sidebar-submenu">
                            @can('role.index')
                                <li><a href="{{ route('admin.role.index') }}">Role Management</a></li>
                            @endcan
                            @can('user.index')
                                <li><a  href="{{ route('admin.user.index') }}">User Management</a></li>
                            @endcan
                            @can('blog.index')
                                <li><a href="{{ route('admin.blog.index') }}">Blog Management</a></li>
                            @endcan
                            @can('category.index')
                                <li><a href="{{ route('admin.category.index') }}">Category Management</a></li>
                            @endcan
                            @can('tag.index')
                                <li><a href="{{ route('admin.tag.index') }}">Tag Management</a></li>
                            @endcan
                            @can('page.index')
                                <li><a href="{{ route('admin.page.index') }}">Page Management</a></li>
                            @endcan
                        </ul>
                    </li>
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg><span class="lan-6">Widgets</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">General</a></li>
                            <li><a href="#">Chart</a></li>
                        </ul>
                    </li> -->
                     <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                            </svg><span class="lan-7">Page layout</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.box_layout') }}">Boxed</a></li>
                            <li><a href="{{ route('admin.rtl_layout') }}">RTL</a></li>
                            <li><a href="{{ route('admin.dark_layout') }}">Dark Layout</a></li>
                        
                            <!-- <li><a href="#">Footer Light</a></li>
                            <li><a href="#">Footer Dark</a></li> -->
                            <!-- <li><a href="#">Footer Fixed</a></li> -->
                        </ul>
                    </li> 
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-8">Applications</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Projects </span></a>
                        <ul class="sidebar-submenu">
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.details_project') }}">Project Details</a></li>
                            <li><a href="{{ route('admin.list_project') }}">Project List</a></li>
                            <li><a href="{{ route('admin.create_project') }}">Create new</a></li>
                        </ul>
                    </li>
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href=""><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file') }}"></use>
                            </svg><span>File manager</span></a></li>  -->

                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.kanban') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                            </svg><span>kanban Board</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ecommerce') }}"></use>
                            </svg><span>Ecommerce</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Products<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.add_products') }}">Add Product</a></li>
                                    <li><a href="{{ route('admin.products_grid') }}">Products Grid</a></li>
                                    <li><a href="{{ route('admin.list_products') }}">Products List</a></li>
                                    <li><a href="{{ route('admin.products_details') }}">Product Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('admin.category_page') }}">Category</a></li>
                            <li><label class="badge badge-light-success">New</label><a class="submenu-title"
                                    href="javascript:void(0)">Seller<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="#">Seller List</a></li>
                                    <li><a href="#">Seller Details</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Orders<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="#">Order History</a></li>
                                    <li><label class="badge badge-light-success">New</label><a
                                            href="#">Order Details</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Invoices<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="#">Invoice-1</a></li>
                                    <li><a href="#">Invoice-2</a></li>
                                    <li><a href="#">Invoice-3</a></li>
                                    <li><a href="#">Invoice-4</a></li>
                                    <li><a href="#">Invoice-5</a></li>
                                    <li><a href="#">Invoice-6</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="#">Manage Review</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="#">Settings</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.mail_box') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-email') }}"></use>
                            </svg><span>Mail Box</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-chat') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-chat') }}"></use>
                            </svg><span>Chat</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Private Chat</a></li>
                            <li><a href="#">Group Chat</a></li>
                        </ul>
                    </li> -->
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                            </svg><span>Users</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.user_profile') }}">User Profile</a></li>
                            <li><a href="{{ route('admin.add_user') }}">Add User</a></li>
                            <li><label class="badge badge-light-success">New</label><a href="{{ route('admin.user_list') }}">User
                                    List</a></li>
                            <li><a href="{{ route('admin.user_cards') }}">User Cards</a></li>
                            <li><label class="badge badge-light-success">New</label><a
                                    href="{{ route('admin.role_permission') }}">Roles & Permission</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><label class="badge badge-light-success">New</label><i
                            class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-reports') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-reports') }}"></use>
                            </svg><span>Reports</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Sales</a></li>
                            <li><a href="#">Sales Return</a></li>
                            <li><a href="#">Customer Order</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.bookmark') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bookmark') }}"> </use>
                            </svg><span>Bookmarks</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.contacts') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-contact') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-contact') }}"> </use>
                            </svg><span>Contacts</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.task') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-task') }}"> </use>
                            </svg><span>Tasks</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.calendar_basic') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calender') }}"></use>
                            </svg><span>Calendar</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.social_app') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-social') }}"> </use>
                            </svg><span>Social App</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.to_do') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-to-do') }}"> </use>
                            </svg><span>To-Do</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.search') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-search') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-search') }}"> </use>
                            </svg><span>Search Result</span></a></li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Forms & Table</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-form') }}"> </use>
                            </svg><span>Forms</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Form Controls<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.form_validation') }}">Form Validation</a></li>
                                    <li><a href="{{ route('admin.base_input') }}">Base Inputs</a></li>
                                    <li><a href="{{ route('admin.radio_checkbox_control') }}">Checkbox & Radio</a></li>
                                    <li><a href="{{ route('admin.input_group') }}">Input Groups</a></li>
                                    <li><a href="{{ route('admin.input_mask') }}">Input Mask</a></li>
                                    <li><a href="{{ route('admin.megaoptions') }}">Mega Options</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Form Widgets<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.datepicker') }}">Datepicker</a></li>
                                    <li><a href="{{ route('admin.touchspin') }}">Touchspin</a></li>
                                    <li><a href="{{ route('admin.select2') }}">Select2</a></li>
                                    <li><a href="{{ route('admin.switch') }}">Switch</a></li>
                                    <li><a href="{{ route('admin.typeahead') }}">Typeahead</a></li>
                                    <li><a href="{{ route('admin.clipboard') }}">Clipboard</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Form layout<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.form_wizard') }}">Form Wizard 1</a></li>
                                    <li><a href="{{ route('admin.form_wizard_two') }}">Form Wizard 2</a></li>
                                    <li><a href="{{ route('admin.two_factor') }}">Two Factor</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                            </svg><span>Tables</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.bootstrap_basic_table') }}">Basic Tables</a></li>
                                    <li><a href="{{ route('admin.table_components') }}">Table components</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Data Tables<span class="sub-arrow"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.datatable_basic_init') }}">Basic Init</a></li>
                                    
                                </ul>
                            </li>
             
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Components</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                            </svg><span>Ui Kits</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.typography') }}">Typography</a></li>
                            <li><a href="{{ route('admin.avatars') }}">Avatars</a></li>
                            <!-- <li><label class="badge badge-light-success">New</label><a href="">Divider</a>
                            </li> -->
                            <li><a href="{{ route('admin.helper_classes') }}">helper classes</a></li>
                            <li><a href="{{ route('admin.grid') }}">Grid</a></li>
                            <li><a href="{{ route('admin.tags_pills') }}">Tags & pills</a></li>
                            <li><a href="{{ route('admin.progress') }}">Progress</a></li>
                            <li><a href="{{ route('admin.modal') }}">Modal</a></li>
                            <li><a href="{{ route('admin.alert') }}">Alert</a></li>
                            <li><a href="{{ route('admin.popover') }}">Popover</a></li>
                            <li><a href="{{ route('admin.tooltip') }}">Tooltip</a></li>
                            <li><a href="{{ route('admin.dropdown') }}">Dropdown</a></li>
                            <li><a href="{{ route('admin.according') }}">Accordion</a></li>
                            <li><a href="{{ route('admin.tabs') }}">Tabs</a></li>
                            <li><a href="{{ route('admin.list') }}">Lists</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bonus-kit') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bonus-kit') }}"></use>
                            </svg><span>Bonus Ui</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.pagination') }}">Pagination</a></li>
                            <li><a href="{{ route('admin.breadcrumb') }}">Breadcrumb</a></li>
                            <li><a href="{{ route('admin.basic_card') }}">Basic Card</a></li>
                            <li><a href="{{ route('admin.creative_card') }}">Creative Card</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-animation') }}"></use>
                            </svg><span>Animations</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.animate') }}">Animate</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-icons') }}"></use>
                            </svg><span>Icons</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.flag_icon') }}">Flag icon</a></li>
                            <li><a href="{{ route('admin.font_awesome') }}">Fontawesome Icon</a></li>
                            <li><a href="{{ route('admin.ico_icon') }}">Ico Icon</a></li>
                            <li><a href="{{ route('admin.themify_icon') }}">Themify Icon</a></li>
                            <li><a href="{{ route('admin.feather_icon') }}">Feather icon</a></li>
                            <li><a href="{{ route('admin.whether_icon') }}">Weather Icon</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.buttons') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-button') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-button') }}"></use>
                            </svg><span>Button</span></a></li>
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                            </svg><span>Charts</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Apex Chart</a></li>
                            <li><a href="#">Google Chart</a></li>
                            <li><a href="#">Sparkline chart</a></li>
                            <li><a href="#">Flot Chart</a></li>
                            <li><a href="#">Knob Chart</a></li>
                            <li><a href="#">Morris Chart</a></li>
                            <li><a href="#">Chatjs Chart</a></li>
                            <li><a href="#">Chartist Chart</a></li>
                            <li><a href="#">Peity Chart</a></li>
                        </ul>
                    </li> -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Pages</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.sample_page') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sample-page') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-sample-page') }}"></use>
                            </svg><span>Sample page</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="#"><svg
                                class="stroke-icon">
                                <use href="#"></use>
                            </svg><svg class="fill-icon">
                                <use href="#"></use>
                            </svg><span>Internationalization</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="#"></use>
                            </svg><svg class="fill-icon">
                                <use href="#"></use>
                            </svg><span>Error Pages</span></a>
                        <ul class="sidebar-submenu">
                            <!-- <li><a href="#">Error 403</a></li> -->
                            <li><a href="{{ route('admin.error_404') }}">Error 404</a></li>
                            <!-- <li><a href="#">Error 500</a></li> -->
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-authenticate') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-authenticate') }}"></use>
                            </svg><span>Authentication</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('login') }}" target="_blank">Login Simple</a></li>
                            <li><a href="{{ route('admin.forget_password') }}">Forgot Password</a></li>
                            <li><a href="{{ route('admin.reset_password') }}">Reset Password</a></li>
                            <li><a href="{{ route('admin.maintenance') }}">Maintenance</a></li>
                        </ul>
                    </li>
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                             class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-coming-soon') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-coming-soon') }}"></use>
                            </svg><span>Coming Soon</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Coming Simple</a></li>
                            <li><a href="#">Coming with Bg video</a></li>
                            <li><a href="#">Coming with Bg Image</a></li>
                        </ul>
                    </li>  -->
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email-temp') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-email-temp') }}"></use>
                            </svg><span>Email templates</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Basic Email</a></li>
                            <li><a href="#">Basic With Header</a></li>
                            <li><a href="#">Ecomerce Template</a></li>
                            <li><a href="#">Email Template 2</a></li>
                            <li><a href="#">Ecommerce Email</a></li>
                            <li><a href="#">Order Success</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="sidebar-list"><label class="badge badge-light-success">New</label><i
                            class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('admin.manage_api') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-api') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-api') }}"></use>
                            </svg><span>Manage API</span></a></li>
                    <li class="sidebar-list"><label class="badge badge-light-success">New</label><i
                            class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('admin.site_map') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sitemap') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-sitemap') }}"></use>
                            </svg><span>Site Map</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.pricing') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-price') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-price') }}"></use>
                            </svg><span>Pricing </span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.faq') }}"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-faq') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-faq') }}"></use>
                            </svg><span>FAQ</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.subscribed_user') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-subscribe') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-subscribe') }}"></use>
                            </svg><span>Subscribed User</span></a></li> -->
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Miscellaneous</h6>
                        </div>
                    </li>
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-gallery') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-gallery') }}"></use>
                            </svg><span>Gallery</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Gallery Grid</a></li>
                            <li><a href="#">Gallery Grid Desc</a></li>
                            <li><a href="#">Masonry Gallery</a></li>
                            <li><a href="#">Masonry with Desc</a></li>
                            <li><a href="#">Hover Effects</a></li>
                            <li>
                            <label class="badge badge-light-success">New</label><a href="{{ route('admin.gallery_placeholder') }}">Gallery Placeholder</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-blog') }}"></use>
                            </svg><span>Blog</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Blog Details</a></li>
                            <li><a href="#">Add Blog</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-job-search') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                            </svg><span>Jobs</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.job_cards_view') }}">Cards view</a></li>
                            <li><a href="{{ route('admin.job_list_view') }}">List View</a></li>
                            <li><a href="{{ route('admin.job_details') }}">Job Details</a></li>
                            <li><a href="{{ route('admin.job_candidates') }}">Candidates</a></li>
                            <li><a href="{{ route('admin.job_companies') }}">Companies</a></li>
                            <li><a href="{{ route('admin.job_apply') }}">Apply</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-learning') }}"></use>
                            </svg><span>Courses</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Course List</a></li>
                            <li><a href="#">Course Details</a></li>
                        </ul>
                    </li> -->
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-maps') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-maps') }}"></use>
                            </svg><span>Maps</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Maps JS</a></li>
                            <li><a href="#">Vector Maps</a></li>
                        </ul>
                    </li>
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title" href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-editors') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-editors') }}"></use>
                            </svg><span>Editors</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Quill Editor</a></li>
                            <li><a href="#">CK Editor</a></li>
                            <li><a href="#">ACE Code Editor </a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.knowledgebase') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-knowledgebase') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-knowledgebase') }}"></use>
                            </svg><span>Knowledgebase</span></a></li>
                    <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('admin.support_ticket') }}"><svg
                                class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-support-tickets') }}"></use>
                            </svg><svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-support-tickets') }}"></use>
                            </svg><span>Support Ticket</span></a></li> -->
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
