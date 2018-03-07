@extends('layouts.app')

@section('content')
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- <li class="nav-item start ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item start ">
                            <a href="index.html" class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Dashboard 1</span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="dashboard_2.html" class="nav-link ">
                                <i class="icon-bulb"></i>
                                <span class="title">Dashboard 2</span>
                                <span class="badge badge-success">1</span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="dashboard_3.html" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Dashboard 3</span>
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">UI Features</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="ui_colors.html" class="nav-link ">
                                <span class="title">Color Library</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_metronic_grid.html" class="nav-link ">
                                <span class="title">Metronic Grid System</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_general.html" class="nav-link ">
                                <span class="title">General Components</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_buttons.html" class="nav-link ">
                                <span class="title">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_buttons_spinner.html" class="nav-link ">
                                <span class="title">Spinner Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_confirmations.html" class="nav-link ">
                                <span class="title">Popover Confirmations</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_sweetalert.html" class="nav-link ">
                                <span class="title">Bootstrap Sweet Alerts</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_icons.html" class="nav-link ">
                                <span class="title">Font Icons</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_socicons.html" class="nav-link ">
                                <span class="title">Social Icons</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_typography.html" class="nav-link ">
                                <span class="title">Typography</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                                <span class="title">Tabs, Accordions & Navs</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_timeline.html" class="nav-link ">
                                <span class="title">Timeline 1</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_timeline_2.html" class="nav-link ">
                                <span class="title">Timeline 2</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_timeline_horizontal.html" class="nav-link ">
                                <span class="title">Horizontal Timeline</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_tree.html" class="nav-link ">
                                <span class="title">Tree View</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">Page Progress Bar</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="ui_page_progress_style_2.html" class="nav-link "> Big Counter </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_blockui.html" class="nav-link ">
                                <span class="title">Block UI</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_bootstrap_growl.html" class="nav-link ">
                                <span class="title">Bootstrap Growl Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_notific8.html" class="nav-link ">
                                <span class="title">Notific8 Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_toastr.html" class="nav-link ">
                                <span class="title">Toastr Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_bootbox.html" class="nav-link ">
                                <span class="title">Bootbox Dialogs</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_alerts_api.html" class="nav-link ">
                                <span class="title">Metronic Alerts API</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_session_timeout.html" class="nav-link ">
                                <span class="title">Session Timeout</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_idle_timeout.html" class="nav-link ">
                                <span class="title">User Idle Timeout</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_modals.html" class="nav-link ">
                                <span class="title">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_extended_modals.html" class="nav-link ">
                                <span class="title">Extended Modals</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_tiles.html" class="nav-link ">
                                <span class="title">Tiles</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_datepaginator.html" class="nav-link ">
                                <span class="title">Date Paginator</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_nestable.html" class="nav-link ">
                                <span class="title">Nestable List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-puzzle"></i>
                        <span class="title">Components</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="components_date_time_pickers.html" class="nav-link ">
                                <span class="title">Date & Time Pickers</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_color_pickers.html" class="nav-link ">
                                <span class="title">Color Pickers</span>
                                <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_select2.html" class="nav-link ">
                                <span class="title">Select2 Dropdowns</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                                <span class="title">Bootstrap Multiselect Dropdowns</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_bootstrap_select.html" class="nav-link ">
                                <span class="title">Bootstrap Select</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_multi_select.html" class="nav-link ">
                                <span class="title">Bootstrap Multiple Select</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                                <span class="title">Select Splitter</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_clipboard.html" class="nav-link ">
                                <span class="title">Clipboard</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_typeahead.html" class="nav-link ">
                                <span class="title">Typeahead Autocomplete</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_bootstrap_tagsinput.html" class="nav-link ">
                                <span class="title">Bootstrap Tagsinput</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_bootstrap_switch.html" class="nav-link ">
                                <span class="title">Bootstrap Switch</span>
                                <span class="badge badge-success">6</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_bootstrap_maxlength.html" class="nav-link ">
                                <span class="title">Bootstrap Maxlength</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_bootstrap_fileinput.html" class="nav-link ">
                                <span class="title">Bootstrap File Input</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_bootstrap_touchspin.html" class="nav-link ">
                                <span class="title">Bootstrap Touchspin</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_form_tools.html" class="nav-link ">
                                <span class="title">Form Widgets & Tools</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_context_menu.html" class="nav-link ">
                                <span class="title">Context Menu</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_editors.html" class="nav-link ">
                                <span class="title">Markdown & WYSIWYG Editors</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_code_editors.html" class="nav-link ">
                                <span class="title">Code Editors</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_ion_sliders.html" class="nav-link ">
                                <span class="title">Ion Range Sliders</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_noui_sliders.html" class="nav-link ">
                                <span class="title">NoUI Range Sliders</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="components_knob_dials.html" class="nav-link ">
                                <span class="title">Knob Circle Dials</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-settings"></i>
                        <span class="title">Form Stuff</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="form_controls.html" class="nav-link ">
                                <span class="title">Bootstrap Form
                                    <br>Controls</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_controls_md.html" class="nav-link ">
                                <span class="title">Material Design
                                    <br>Form Controls</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_validation.html" class="nav-link ">
                                <span class="title">Form Validation</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_validation_states_md.html" class="nav-link ">
                                <span class="title">Material Design
                                    <br>Form Validation States</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_validation_md.html" class="nav-link ">
                                <span class="title">Material Design
                                    <br>Form Validation</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_layouts.html" class="nav-link ">
                                <span class="title">Form Layouts</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_repeater.html" class="nav-link ">
                                <span class="title">Form Repeater</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_input_mask.html" class="nav-link ">
                                <span class="title">Form Input Mask</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_editable.html" class="nav-link ">
                                <span class="title">Form X-editable</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_wizard.html" class="nav-link ">
                                <span class="title">Form Wizard</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_icheck.html" class="nav-link ">
                                <span class="title">iCheck Controls</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_image_crop.html" class="nav-link ">
                                <span class="title">Image Cropping</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_fileupload.html" class="nav-link ">
                                <span class="title">Multiple File Upload</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_dropzone.html" class="nav-link ">
                                <span class="title">Dropzone File Upload</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-bulb"></i>
                        <span class="title">Elements</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="elements_steps.html" class="nav-link ">
                                <span class="title">Steps</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="elements_lists.html" class="nav-link ">
                                <span class="title">Lists</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="elements_ribbons.html" class="nav-link ">
                                <span class="title">Ribbons</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="elements_overlay.html" class="nav-link ">
                                <span class="title">Overlays</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="elements_cards.html" class="nav-link ">
                                <span class="title">User Cards</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-briefcase"></i>
                        <span class="title">Tables</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="table_static_basic.html" class="nav-link ">
                                <span class="title">Basic Tables</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="table_static_responsive.html" class="nav-link ">
                                <span class="title">Responsive Tables</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="table_bootstrap.html" class="nav-link ">
                                <span class="title">Bootstrap Tables</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">Datatables</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="?p=" class="nav-link nav-toggle">
                        <i class="icon-wallet"></i>
                        <span class="title">Portlets</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="portlet_boxed.html" class="nav-link ">
                                <span class="title">Boxed Portlets</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="portlet_light.html" class="nav-link ">
                                <span class="title">Light Portlets</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="portlet_solid.html" class="nav-link ">
                                <span class="title">Solid Portlets</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="portlet_ajax.html" class="nav-link ">
                                <span class="title">Ajax Portlets</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="portlet_draggable.html" class="nav-link ">
                                <span class="title">Draggable Portlets</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Charts</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="charts_amcharts.html" class="nav-link ">
                                <span class="title">amChart</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="charts_flotcharts.html" class="nav-link ">
                                <span class="title">Flot Charts</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="charts_flowchart.html" class="nav-link ">
                                <span class="title">Flow Charts</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="charts_google.html" class="nav-link ">
                                <span class="title">Google Charts</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="charts_echarts.html" class="nav-link ">
                                <span class="title">eCharts</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="charts_morris.html" class="nav-link ">
                                <span class="title">Morris Charts</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <span class="title">HighCharts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-pointer"></i>
                        <span class="title">Maps</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="maps_google.html" class="nav-link ">
                                <span class="title">Google Maps</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="maps_vector.html" class="nav-link ">
                                <span class="title">Vector Maps</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-layers"></i>
                        <span class="title">Page Layouts</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="layout_blank_page.html" class="nav-link ">
                                <span class="title">Blank Page</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_ajax_page.html" class="nav-link ">
                                <span class="title">Ajax Content Layout</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_language_bar.html" class="nav-link ">
                                <span class="title">Header Language Bar</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_footer_fixed.html" class="nav-link ">
                                <span class="title">Fixed Footer</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_boxed_page.html" class="nav-link ">
                                <span class="title">Boxed Page</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-feed"></i>
                        <span class="title">Sidebar Layouts</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="layout_sidebar_menu_accordion.html" class="nav-link ">
                                <span class="title">Sidebar Accordion Menu</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_sidebar_menu_compact.html" class="nav-link ">
                                <span class="title">Sidebar Compact Menu</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_sidebar_reversed.html" class="nav-link ">
                                <span class="title">Reversed Sidebar Page</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_sidebar_fixed.html" class="nav-link ">
                                <span class="title">Fixed Sidebar Layout</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_sidebar_closed.html" class="nav-link ">
                                <span class="title">Closed Sidebar Layout</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class=" icon-wrench"></i>
                        <span class="title">Custom Layouts</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="layout_disabled_menu.html" class="nav-link ">
                                <span class="title">Disabled Menu Links</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_full_height_portlet.html" class="nav-link ">
                                <span class="title">Full Height Portlet</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="layout_full_height_content.html" class="nav-link ">
                                <span class="title">Full Height Content</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-basket"></i>
                        <span class="title">eCommerce</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="ecommerce_index.html" class="nav-link ">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ecommerce_orders.html" class="nav-link ">
                                <i class="icon-basket"></i>
                                <span class="title">Orders</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ecommerce_orders_view.html" class="nav-link ">
                                <i class="icon-tag"></i>
                                <span class="title">Order View</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ecommerce_products.html" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Products</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ecommerce_products_edit.html" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Product Edit</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">Apps</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="app_todo.html" class="nav-link ">
                                <i class="icon-clock"></i>
                                <span class="title">Todo 1</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="app_todo_2.html" class="nav-link ">
                                <i class="icon-check"></i>
                                <span class="title">Todo 2</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="app_inbox.html" class="nav-link ">
                                <i class="icon-envelope"></i>
                                <span class="title">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="app_calendar.html" class="nav-link ">
                                <i class="icon-calendar"></i>
                                <span class="title">Calendar</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="app_ticket.html" class="nav-link ">
                                <i class="icon-notebook"></i>
                                <span class="title">Support</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  active open">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">User</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="page_user_profile_1.html" class="nav-link ">
                                <i class="icon-user"></i>
                                <span class="title">Profile 1</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_user_profile_1_account.html" class="nav-link ">
                                <i class="icon-user-female"></i>
                                <span class="title">Profile 1 Account</span>
                            </a>
                        </li>
                        <li class="nav-item  active open">
                            <a href="page_user_profile_1_help.html" class="nav-link ">
                                <i class="icon-user-following"></i>
                                <span class="title">Profile 1 Help</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_user_profile_2.html" class="nav-link ">
                                <i class="icon-users"></i>
                                <span class="title">Profile 2</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">Login</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                                <i class="icon-lock"></i>
                                <span class="title">Lock Screen 1</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                                <i class="icon-lock-open"></i>
                                <span class="title">Lock Screen 2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-social-dribbble"></i>
                        <span class="title">General</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="page_general_about.html" class="nav-link ">
                                <i class="icon-info"></i>
                                <span class="title">About</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_general_contact.html" class="nav-link ">
                                <i class="icon-call-end"></i>
                                <span class="title">Contact</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">Portfolio</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-magnifier"></i>
                                <span class="title">Search</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="page_general_search.html" class="nav-link "> Search 1 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_general_pricing.html" class="nav-link ">
                                <i class="icon-tag"></i>
                                <span class="title">Pricing</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_general_faq.html" class="nav-link ">
                                <i class="icon-wrench"></i>
                                <span class="title">FAQ</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_general_blog.html" class="nav-link ">
                                <i class="icon-pencil"></i>
                                <span class="title">Blog</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_general_blog_post.html" class="nav-link ">
                                <i class="icon-note"></i>
                                <span class="title">Blog Post</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_general_invoice.html" class="nav-link ">
                                <i class="icon-envelope"></i>
                                <span class="title">Invoice</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_general_invoice_2.html" class="nav-link ">
                                <i class="icon-envelope"></i>
                                <span class="title">Invoice 2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-settings"></i>
                        <span class="title">System</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="page_cookie_consent_1.html" class="nav-link ">
                                <span class="title">Cookie Consent 1</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_cookie_consent_2.html" class="nav-link ">
                                <span class="title">Cookie Consent 2</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                                <span class="title">Coming Soon</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_system_404_1.html" class="nav-link ">
                                <span class="title">404 Page 1</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_system_404_2.html" class="nav-link " target="_blank">
                                <span class="title">404 Page 2</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_system_404_3.html" class="nav-link " target="_blank">
                                <span class="title">404 Page 3</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_system_500_1.html" class="nav-link ">
                                <span class="title">500 Page 1</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="page_system_500_2.html" class="nav-link " target="_blank">
                                <span class="title">500 Page 2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-folder"></i>
                        <span class="title">Multi Level Menu</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i> Item 1
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                        <i class="icon-user"></i> Arrow Toggle
                                        <span class="arrow nav-toggle"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-power"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-paper-plane"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-star"></i> Sample Link 1</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-camera"></i> Sample Link 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-link"></i> Sample Link 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-pointer"></i> Sample Link 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                <i class="icon-globe"></i> Arrow Toggle
                                <span class="arrow nav-toggle"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-tag"></i> Sample Link 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-pencil"></i> Sample Link 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-graph"></i> Sample Link 1</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-bar-chart"></i> Item 3 </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->

            <!-- END THEME PANEL -->
            <h1 class="page-title">Approve request

            </h1>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                              @if(Storage::disk('local')->has($requests[0]->user->avatar))
                            <img src="{{Storage::url( $requests[0]->user->avatar)}}"   class="img-responsive" alt=""> </div>
                              @else
                                <img width="100%"src="{{$requests[0]->user->avatar}}" />
                              @endif

                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->



                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> {{$requests[0]->user->first_name}} {{$requests[0]->user->other_names}}</div>
                                <div class="profile-usertitle-job">  </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            @if(($requests[0]->status==1)&&($requests[0]->is_featured==1))



                            <div class="profile-userbuttons">
                              <a  href="{{ route('admin.view.requests') }}" class="btn btn-circle green btn-sm"><span class="hidden-xs">Back</span>  </a>

                              <a  href="{{ route('admin.decline.request',$requests[0]->id) }}" class="btn btn-circle red btn-sm"><span class="hidden-xs"> DECLINE </span>  </a>

                                <!-- <button type="button" class="btn btn-circle green btn-sm">Approve</button> -->
                                <!-- <button type="button" class="btn btn-circle red btn-sm">Decline</button> -->
                            </div>
                              @elseif(($requests[0]->status==1)&&($requests[0]->is_featured==0))
                              <div class="profile-userbuttons">
                                <a  href="{{ route('admin.approve.request',$requests[0]->id) }}" class="btn btn-circle green btn-sm"><span class="hidden-xs"> APPROVE</span>  </a>

                                <a  href="{{ route('admin.view.requests') }}" class="btn btn-circle green btn-sm"><span class="hidden-xs"> back </span>  </a>

                                  <!-- <button type="button" class="btn btn-circle green btn-sm">Approve</button> -->
                                  <!-- <button type="button" class="btn btn-circle red btn-sm">Decline</button> -->
                              </div>
                            @else
                            <div class="profile-userbuttons">
                              <a  href="{{ route('admin.approve.request',$requests[0]->id) }}" class="btn btn-circle green btn-sm"><span class="hidden-xs"> Approve </span>  </a>

                              <a  href="{{ route('admin.decline.request',$requests[0]->id) }}" class="btn btn-circle red btn-sm"><span class="hidden-xs"> Decline </span>  </a>
                               </div>
                        @endif
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <!-- <ul class="nav">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-home"></i> Overview </a>
                                    </li>
                                    <li>
                                        <a href="page_user_profile_1_account.html">
                                            <i class="icon-settings"></i> Account Settings </a>
                                    </li>
                                    <li class="active">
                                        <a href="page_user_profile_1_help.html">
                                            <i class="icon-info"></i> Help </a>
                                    </li>
                                </ul> -->
                            </div>
                            <!-- END MENU -->
                        </div>
                        <!-- END PORTLET MAIN -->
                        <!-- PORTLET MAIN -->
                          <!--<div class="portlet light "> -->
                            <!-- STAT -->
                          <!--  <div class="row list-separated profile-stat">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 37 </div>
                                    <div class="uppercase profile-stat-text"> Projects </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 51 </div>
                                    <div class="uppercase profile-stat-text"> Tasks </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 61 </div>
                                    <div class="uppercase profile-stat-text"> Uploads </div>
                                </div>
                            </div>-->
                            <!-- END STAT -->
                          <!--  <div>-->
                                <!-- <h4 class="profile-desc-title">About Marcus Doe</h4>
                                <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-globe"></i>
                                    <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-twitter"></i>
                                    <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-facebook"></i>
                                    <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                </div> -->
                          <!--   </div>-->
                        <!--   </div> -->
                        <!-- END PORTLET MAIN -->
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Request</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Request</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">Id scan</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Payment</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- GENERAL QUESTION TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <div id="accordion1" class="panel-group">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1"> Title: {{$requests[0]->title}} </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_1" class="panel-collapse collapse in">
                                                            <div class="panel-body">{{$requests[0]->description}} </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_2" class="panel-collapse collapse">
                                                            <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_3" class="panel-collapse collapse">
                                                            <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_4" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-danger">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_5" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_6" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_7" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!-- END GENERAL QUESTION TAB -->
                                            <!-- MEMBERSHIP TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <div id="accordion2" class="panel-group">
                                                  <div class="blog-single-img">


                                                      <img width="70%" src="{{Storage::url($requests[0]->image_path)}}" /></div>
                                                <!-- <div class="panel panel-danger">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_2" class="panel-collapse collapse">
                                                            <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_3" class="panel-collapse collapse">
                                                            <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_4" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_5" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_6" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="panel panel-default">
                                                        <!-- <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                            </h4>
                                                        </div> -->
                                                        <!-- <div id="accordion2_7" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MEMBERSHIP TAB -->
                                            <!-- TERMS OF USE TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <div id="accordion3" class="panel-group">
                                                    <div class="panel panel-danger">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1"> code: {{$requests[0]->payment}} </a>
                                                            </h4>
                                                        </div>
                                                        <!-- <div id="accordion3_1" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                                                <p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <!-- <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_2" class="panel-collapse collapse">
                                                            <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3"> 3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_3" class="panel-collapse collapse">
                                                            <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4"> 4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_4" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5"> 5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_5" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6"> 6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_6" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7"> 7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_7" class="panel-collapse collapse">
                                                            <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!-- END TERMS OF USE TAB -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
    <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
        <div class="page-quick-sidebar">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                        <span class="badge badge-success">7</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-bell"></i> Alerts </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-info"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-speech"></i> Activities </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-settings"></i> Settings </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                    <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                        <h3 class="list-heading">Staff</h3>
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">8</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Bob Nilson</h4>
                                    <div class="media-heading-sub"> Project Manager </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Nick Larson</h4>
                                    <div class="media-heading-sub"> Art Director </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-danger">3</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Deon Hubert</h4>
                                    <div class="media-heading-sub"> CTO </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Ella Wong</h4>
                                    <div class="media-heading-sub"> CEO </div>
                                </div>
                            </li>
                        </ul>
                        <h3 class="list-heading">Customers</h3>
                        <ul class="media-list list-items">
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-warning">2</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Lara Kunis</h4>
                                    <div class="media-heading-sub"> CEO, Loop Inc </div>
                                    <div class="media-heading-small"> Last seen 03:10 AM </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="label label-sm label-success">new</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Ernie Kyllonen</h4>
                                    <div class="media-heading-sub"> Project Manager,
                                        <br> SmartBizz PTL </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Lisa Stone</h4>
                                    <div class="media-heading-sub"> CTO, Keort Inc </div>
                                    <div class="media-heading-small"> Last seen 13:10 PM </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-success">7</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Deon Portalatin</h4>
                                    <div class="media-heading-sub"> CFO, HD LTD </div>
                                </div>
                            </li>
                            <li class="media">
                                <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Irina Savikova</h4>
                                    <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-status">
                                    <span class="badge badge-danger">4</span>
                                </div>
                                <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading">Maria Gomez</h4>
                                    <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                    <div class="media-heading-small"> Last seen 03:10 AM </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="page-quick-sidebar-item">
                        <div class="page-quick-sidebar-chat-user">
                            <div class="page-quick-sidebar-nav">
                                <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                    <i class="icon-arrow-left"></i>Back</a>
                            </div>
                            <div class="page-quick-sidebar-chat-user-messages">
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> When could you send me the report ? </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> Its almost done. I will be sending it shortly </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:15</span>
                                        <span class="body"> Alright. Thanks! :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:16</span>
                                        <span class="body"> You are most welcome. Sorry for the delay. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> No probs. Just take your time :) </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:40</span>
                                        <span class="body"> Alright. I just emailed it to you. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> Great! Thanks. Will check it right away. </span>
                                    </div>
                                </div>
                                <div class="post in">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Ella Wong</a>
                                        <span class="datetime">20:40</span>
                                        <span class="body"> Please let me know if you have any comment. </span>
                                    </div>
                                </div>
                                <div class="post out">
                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                        <span class="datetime">20:17</span>
                                        <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="page-quick-sidebar-chat-user-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type a message here...">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn green">
                                            <i class="icon-paper-clip"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                    <div class="page-quick-sidebar-alerts-list">
                        <h3 class="list-heading">General</h3>
                        <ul class="feeds list-items">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                    <i class="fa fa-share"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-warning"> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <h3 class="list-heading">System</h3>
                        <ul class="feeds list-items">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 4 pending tasks.
                                                <span class="label label-sm label-warning "> Take action
                                                    <i class="fa fa-share"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> Just now </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Finance Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> New order received with
                                                <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 30 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 24 mins </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-warning">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                <span class="label label-sm label-default "> Overdue </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 2 hours </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> IPO Report for year 2013 has been released. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 20 mins </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                    <div class="page-quick-sidebar-settings-list">
                        <h3 class="list-heading">General Settings</h3>
                        <ul class="list-items borderless">
                            <li> Enable Notifications
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Allow Tracking
                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Log Errors
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Auto Sumbit Issues
                                <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Enable SMS Alerts
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        </ul>
                        <h3 class="list-heading">System Settings</h3>
                        <ul class="list-items borderless">
                            <li> Security Level
                                <select class="form-control input-inline input-sm input-small">
                                    <option value="1">Normal</option>
                                    <option value="2" selected>Medium</option>
                                    <option value="e">High</option>
                                </select>
                            </li>
                            <li> Failed Email Attempts
                                <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                            <li> Secondary SMTP Port
                                <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                            <li> Notify On System Error
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            <li> Notify On SMTP Error
                                <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        </ul>
                        <div class="inner-content">
                            <button class="btn btn-success">
                                <i class="icon-settings"></i> Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
@endsection
