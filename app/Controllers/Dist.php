<?php
namespace App\Controllers;

class Dist extends BaseController {

	public function index() {
		$data = array(
			'title' => "Ecommerce Dashboard"
		);
		return view('dist/index', $data);
	}

	public function index_0() {
		$data = array(
			'title' => "General Dashboard"
		);
		return view('dist/index-0', $data);
	}

	public function layout_default() {
		$data = array(
			'title' => "Layout &rsaquo; Default"
		);
		return view('dist/layout-default', $data);
	}

	public function layout_transparent() {
		$data = array(
			'title' => "Layout &rsaquo; Transparent Sidebar"
		);
		return view('dist/layout-transparent', $data);
	}

	public function layout_top_navigation() {
		$data = array(
			'title' => "Layout &rsaquo; Top Navigation"
		);
		return view('dist/layout-top-navigation', $data);
	}

	public function blank() {
		$data = array(
			'title' => "Blank Page"
		);
		return view('dist/blank', $data);
	}

	public function bootstrap_alert() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Alert"
		);
		return view('dist/bootstrap-alert', $data);
	}

	public function bootstrap_badge() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Badge"
		);
		return view('dist/bootstrap-badge', $data);
	}

	public function bootstrap_breadcrumb() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Breadcrumb"
		);
		return view('dist/bootstrap-breadcrumb', $data);
	}

	public function bootstrap_buttons() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Buttons"
		);
		return view('dist/bootstrap-buttons', $data);
	}

	public function bootstrap_card() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Card"
		);
		return view('dist/bootstrap-card', $data);
	}

	public function bootstrap_carousel() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Carousel"
		);
		return view('dist/bootstrap-carousel', $data);
	}

	public function bootstrap_collapse() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Collapse"
		);
		return view('dist/bootstrap-collapse', $data);
	}

	public function bootstrap_dropdown() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Dropdown"
		);
		return view('dist/bootstrap-dropdown', $data);
	}

	public function bootstrap_form() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Form"
		);
		return view('dist/bootstrap-form', $data);
	}

	public function bootstrap_list_group() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; List Group"
		);
		return view('dist/bootstrap-list-group', $data);
	}

	public function bootstrap_media_object() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Media Object"
		);
		return view('dist/bootstrap-media-object', $data);
	}

	public function bootstrap_modal() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Modal"
		);
		return view('dist/bootstrap-modal', $data);
	}

	public function bootstrap_nav() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Nav"
		);
		return view('dist/bootstrap-nav', $data);
	}

	public function bootstrap_navbar() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Navbar"
		);
		return view('dist/bootstrap-navbar', $data);
	}

	public function bootstrap_pagination() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Pagination"
		);
		return view('dist/bootstrap-pagination', $data);
	}

	public function bootstrap_popover() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Popover"
		);
		return view('dist/bootstrap-popover', $data);
	}

	public function bootstrap_progress() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Progress"
		);
		return view('dist/bootstrap-progress', $data);
	}

	public function bootstrap_table() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Table"
		);
		return view('dist/bootstrap-table', $data);
	}

	public function bootstrap_tooltip() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Tooltip"
		);
		return view('dist/bootstrap-tooltip', $data);
	}

	public function bootstrap_typography() {
		$data = array(
			'title' => "Bootstrap Components &rsaquo; Typography"
		);
		return view('dist/bootstrap-typography', $data);
	}

	public function components_article() {
		$data = array(
			'title' => "Components &rsaquo; Article"
		);
		return view('dist/components-article', $data);
	}

	public function components_avatar() {
		$data = array(
			'title' => "Components &rsaquo; Avatar"
		);
		return view('dist/components-avatar', $data);
	}

	public function components_chat_box() {
		$data = array(
			'title' => "Components &rsaquo; Chat Box"
		);
		return view('dist/components-chat-box', $data);
	}

	public function components_empty_state() {
		$data = array(
			'title' => "Components &rsaquo; Empty State"
		);
		return view('dist/components-empty-state', $data);
	}

	public function components_gallery() {
		$data = array(
			'title' => "Components &rsaquo; Gallery"
		);
		return view('dist/components-gallery', $data);
	}

	public function components_hero() {
		$data = array(
			'title' => "Components &rsaquo; Hero"
		);
		return view('dist/components-hero', $data);
	}

	public function components_multiple_upload() {
		$data = array(
			'title' => "Components &rsaquo; Multiple Upload"
		);
		return view('dist/components-multiple-upload', $data);
	}

	public function components_pricing() {
		$data = array(
			'title' => "Components &rsaquo; Pricing"
		);
		return view('dist/components-pricing', $data);
	}

	public function components_statistic() {
		$data = array(
			'title' => "Components &rsaquo; Statistic"
		);
		return view('dist/components-statistic', $data);
	}

	public function components_tab() {
		$data = array(
			'title' => "Components &rsaquo; Tab"
		);
		return view('dist/components-tab', $data);
	}

	public function components_table() {
		$data = array(
			'title' => "Components &rsaquo; Table"
		);
		return view('dist/components-table', $data);
	}

	public function components_user() {
		$data = array(
			'title' => "Components &rsaquo; User"
		);
		return view('dist/components-user', $data);
	}

	public function components_wizard() {
		$data = array(
			'title' => "Components &rsaquo; Wizard"
		);
		return view('dist/components-wizard', $data);
	}

	public function forms_advanced_form() {
		$data = array(
			'title' => "Forms &rsaquo; Advanced Forms"
		);
		return view('dist/forms-advanced-form', $data);
	}

	public function forms_editor() {
		$data = array(
			'title' => "Forms &rsaquo; Editor"
		);
		return view('dist/forms-editor', $data);
	}

	public function forms_validation() {
		$data = array(
			'title' => "Forms &rsaquo; Validation"
		);
		return view('dist/forms-validation', $data);
	}

	public function gmaps_advanced_route() {
		$data = array(
			'title' => "Google Maps &rsaquo; Advanced Route"
		);
		return view('dist/gmaps-advanced-route', $data);
	}

	public function gmaps_draggable_marker() {
		$data = array(
			'title' => "Google Maps &rsaquo; Draggable Marker"
		);
		return view('dist/gmaps-draggable-marker', $data);
	}

	public function gmaps_geocoding() {
		$data = array(
			'title' => "Google Maps &rsaquo; Geocoding"
		);
		return view('dist/gmaps-geocoding', $data);
	}

	public function gmaps_geolocation() {
		$data = array(
			'title' => "Google Maps &rsaquo; Geolocation"
		);
		return view('dist/gmaps-geolocation', $data);
	}

	public function gmaps_marker() {
		$data = array(
			'title' => "Google Maps &rsaquo; Marker"
		);
		return view('dist/gmaps-marker', $data);
	}

	public function gmaps_multiple_marker() {
		$data = array(
			'title' => "Google Maps &rsaquo; Multiple Marker"
		);
		return view('dist/gmaps-multiple-marker', $data);
	}

	public function gmaps_route() {
		$data = array(
			'title' => "Google Maps &rsaquo; Route"
		);
		return view('dist/gmaps-route', $data);
	}

	public function gmaps_simple() {
		$data = array(
			'title' => "Google Maps &rsaquo; Simple"
		);
		return view('dist/gmaps-simple', $data);
	}

	public function modules_calendar() {
		$data = array(
			'title' => "Modules &rsaquo; Calendar"
		);
		return view('dist/modules-calendar', $data);
	}

	public function modules_chartjs() {
		$data = array(
			'title' => "Modules &rsaquo; ChartJS"
		);
		return view('dist/modules-chartjs', $data);
	}

	public function modules_datatables() {
		$data = array(
			'title' => "Modules &rsaquo; Datatables"
		);
		return view('dist/modules-datatables', $data);
	}

	public function modules_flag() {
		$data = array(
			'title' => "Modules &rsaquo; Flag"
		);
		return view('dist/modules-flag', $data);
	}

	public function modules_font_awesome() {
		$data = array(
			'title' => "Modules &rsaquo; Font Awesome"
		);
		return view('dist/modules-font-awesome', $data);
	}

	public function modules_ion_icons() {
		$data = array(
			'title' => "Modules &rsaquo; Ion Icons"
		);
		return view('dist/modules-ion-icons', $data);
	}

	public function modules_owl_carousel() {
		$data = array(
			'title' => "Modules &rsaquo; Owl Carousel"
		);
		return view('dist/modules-owl-carousel', $data);
	}

	public function modules_sparkline() {
		$data = array(
			'title' => "Modules &rsaquo; Sparkline"
		);
		return view('dist/modules-sparkline', $data);
	}

	public function modules_sweet_alert() {
		$data = array(
			'title' => "Modules &rsaquo; Sweet Alert"
		);
		return view('dist/modules-sweet-alert', $data);
	}

	public function modules_toastr() {
		$data = array(
			'title' => "Modules &rsaquo; Toastr"
		);
		return view('dist/modules-toastr', $data);
	}

	public function modules_vector_map() {
		$data = array(
			'title' => "Modules &rsaquo; Vector Map"
		);
		return view('dist/modules-vector-map', $data);
	}

	public function modules_weather_icon() {
		$data = array(
			'title' => "Modules &rsaquo; Weather Icon"
		);
		return view('dist/modules-weather-icon', $data);
	}

	public function auth_forgot_password() {
		$data = array(
			'title' => "Forgot Password"
		);
		return view('dist/auth-forgot-password', $data);
	}

	public function auth_login() {
		$data = array(
			'title' => "Login"
		);
		return view('dist/auth-login', $data);
	}

	public function auth_register() {
		$data = array(
			'title' => "Register"
		);
		return view('dist/auth-register', $data);
	}

	public function auth_reset_password() {
		$data = array(
			'title' => "Reset Password"
		);
		return view('dist/auth-reset-password', $data);
	}

	public function errors_503() {
		$data = array(
			'title' => "503"
		);
		return view('dist/errors-503', $data);
	}

	public function errors_403() {
		$data = array(
			'title' => "403"
		);
		return view('dist/errors-403', $data);
	}

	public function errors_404() {
		$data = array(
			'title' => "404"
		);
		return view('dist/errors-404', $data);
	}

	public function errors_500() {
		$data = array(
			'title' => "500"
		);
		return view('dist/errors-500', $data);
	}

	public function features_activities() {
		$data = array(
			'title' => "Activities"
		);
		return view('dist/features-activities', $data);
	}

	public function features_post_create() {
		$data = array(
			'title' => "Post Create"
		);
		return view('dist/features-post-create', $data);
	}

	public function features_posts() {
		$data = array(
			'title' => "Posts"
		);
		return view('dist/features-posts', $data);
	}

	public function features_profile() {
		$data = array(
			'title' => "Profile"
		);
		return view('dist/features-profile', $data);
	}

	public function features_settings() {
		$data = array(
			'title' => "Settings"
		);
		return view('dist/features-settings', $data);
	}

	public function features_setting_detail() {
		$data = array(
			'title' => "Setting Detail"
		);
		return view('dist/features-setting-detail', $data);
	}

	public function features_tickets() {
		$data = array(
			'title' => "Tickets"
		);
		return view('dist/features-tickets', $data);
	}

	public function utilities_contact() {
		$data = array(
			'title' => "Contact"
		);
		return view('dist/utilities-contact', $data);
	}

	public function utilities_invoice() {
		$data = array(
			'title' => "Invoice"
		);
		return view('dist/utilities-invoice', $data);
	}

	public function utilities_subscribe() {
		$data = array(
			'title' => "Subscribe"
		);
		return view('dist/utilities-subscribe', $data);
	}

	public function credits() {
		$data = array(
			'title' => "Credits"
		);
		return view('dist/credits', $data);
	}
}
