<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $title; ?> &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/fontawesome/css/all.min.css'); ?>">

  <!-- CSS Libraries -->
<?php
	$uri = current_url(true);
	if ($uri->getTotalSegments() > 3 ) {
		$segment = $uri->getSegment(4);
	} else {
		$segment = '';
	}
if ($segment == "") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jqvmap/dist/jqvmap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/summernote/summernote-bs4.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css'); ?>">
<?php
}elseif ($segment == "index_0") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jqvmap/dist/jqvmap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/weather-icon/css/weather-icons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/weather-icon/css/weather-icons-wind.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/summernote/summernote-bs4.css'); ?>">
<?php
}elseif ($segment == "bootstrap_card") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/chocolat/dist/css/chocolat.css'); ?>">
<?php
}elseif ($segment == "bootstrap_modal") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/prism/prism.css'); ?>">
<?php
}elseif ($segment == "components_gallery") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/chocolat/dist/css/chocolat.css'); ?>">
<?php
}elseif ($segment == "components_multiple_upload") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/dropzonejs/dropzone.css'); ?>">
<?php
}elseif ($segment == "components_statistic") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jqvmap/dist/jqvmap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/flag-icon-css/css/flag-icon.min.css'); ?>">
<?php
}elseif ($segment == "components_user") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-social/bootstrap-social.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css'); ?>">
<?php
}elseif ($segment == "forms_advanced_form") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-daterangepicker/daterangepicker.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jquery-selectric/selectric.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'); ?>">
<?php
}elseif ($segment == "forms_editor") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/summernote/summernote-bs4.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/codemirror/lib/codemirror.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/codemirror/theme/duotone-dark.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jquery-selectric/selectric.css'); ?>">
<?php
}elseif ($segment == "modules_calendar") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/fullcalendar/fullcalendar.min.css'); ?>">
<?php
}elseif ($segment == "modules_datatables") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/datatables.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'); ?>">
<?php
}elseif ($segment == "modules_ion_icons") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/ionicons/css/ionicons.min.css'); ?>">
<?php
}elseif ($segment == "modules_owl_carousel") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css'); ?>">
<?php
}elseif ($segment == "modules_toastr") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/izitoast/css/iziToast.min.css'); ?>">
<?php
}elseif ($segment == "modules_vector_map") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/izitoast/css/iziToast.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jqvmap/dist/jqvmap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/flag-icon-css/css/flag-icon.min.css'); ?>">
<?php
}elseif ($segment == "modules_weather_icon") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/weather-icon/css/weather-icons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/weather-icon/css/weather-icons-wind.min.css'); ?>">
<?php
}elseif ($segment == "auth_login") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-social/bootstrap-social.css'); ?>">
<?php
}elseif ($segment == "auth_register") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jquery-selectric/selectric.css'); ?>">
<?php
}elseif ($segment == "features_post_create") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/summernote/summernote-bs4.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jquery-selectric/selectric.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'); ?>">
<?php
}elseif ($segment == "features_posts") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/jquery-selectric/selectric.css'); ?>">
<?php
}elseif ($segment == "features_profile") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap-social/bootstrap-social.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/summernote/summernote-bs4.css'); ?>">
<?php
}elseif ($segment == "features_setting_detail") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/codemirror/lib/codemirror.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/codemirror/theme/duotone-dark.css'); ?>">
<?php
}elseif ($segment == "features_tickets") { ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/summernote/summernote-bs4.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/modules/chocolat/dist/css/chocolat.css'); ?>">
<?php
} ?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css'); ?>">
<!-- Start GA -->
<!-- <xscript async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<xscript>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script> -->
<!-- /END GA -->
</head>

<?php
if ($segment == "layout_transparent") {
  echo view('dist/_partials/layout-2');
  echo view('dist/_partials/sidebar-2');
}elseif ($segment == "layout_top_navigation") {
  echo view('dist/_partials/layout-3');
  echo view('dist/_partials/navbar');
}elseif ($segment != "auth_login" && $segment != "auth_forgot_password"&& $segment != "auth_register" && $segment != "auth_reset_password" && $segment != "errors_503" && $segment != "errors_403" && $segment != "errors_404" && $segment != "errors_500" && $segment != "utilities_contact" && $segment != "utilities_subscribe") {
  echo view('dist/_partials/layout');
  echo view('dist/_partials/sidebar');
}
?>
