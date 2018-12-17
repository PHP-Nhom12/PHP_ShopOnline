<?

include_once 'include/header.php';

if(isset($_GET['q']))
{

	$where = "tensanpham LIKE '%" . $_GET['q'] . "%'";
	
	$result = $db->tim_kiem('SANPHAM', $where);

}
else {
	echo 'query not found!';
}
?>

<div class="page-wrapper-row full-height">
	<div class="page-wrapper-middle">
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
				<!-- BEGIN CONTENT BODY -->
				<!-- BEGIN PAGE HEAD-->
				<div class="page-head">
					<div class="container">
						<!-- BEGIN PAGE TITLE -->
						<div class="page-title">
							<h1>Search Results
								<small>search results</small>
							</h1>
						</div>
						<!-- END PAGE TITLE -->
						<!-- BEGIN PAGE TOOLBAR -->
						<div class="page-toolbar">
							<!-- BEGIN THEME PANEL -->
							<div class="btn-group btn-theme-panel">
								<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
									<i class="icon-settings"></i>
								</a>
								<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<h3>THEME COLORS</h3>
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<ul class="theme-colors">
														<li class="theme-color theme-color-default" data-theme="default">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Default</span>
														</li>
														<li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Blue Hoki</span>
														</li>
														<li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Blue Steel</span>
														</li>
														<li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Orange</span>
														</li>
														<li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Yellow Crusta</span>
														</li>
													</ul>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<ul class="theme-colors">
														<li class="theme-color theme-color-green-haze" data-theme="green-haze">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Green Haze</span>
														</li>
														<li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Red Sunglo</span>
														</li>
														<li class="theme-color theme-color-red-intense" data-theme="red-intense">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Red Intense</span>
														</li>
														<li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Purple Plum</span>
														</li>
														<li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
															<span class="theme-color-view"></span>
															<span class="theme-color-name">Purple Studio</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12 seperator">
											<h3>LAYOUT</h3>
											<ul class="theme-settings">
												<li> Layout
													<select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
														<option value="boxed" selected="selected">Boxed</option>
														<option value="fluid">Fluid</option>
													</select>
												</li>
												<li> Top Menu Style
													<select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body"
														data-placement="left">
														<option value="dark" selected="selected">Dark</option>
														<option value="light">Light</option>
													</select>
												</li>
												<li> Top Menu Mode
													<select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body"
														data-placement="left">
														<option value="fixed">Fixed</option>
														<option value="not-fixed" selected="selected">Not Fixed</option>
													</select>
												</li>
												<li> Mega Menu Style
													<select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body"
														data-placement="left">
														<option value="dark" selected="selected">Dark</option>
														<option value="light">Light</option>
													</select>
												</li>
												<li> Mega Menu Mode
													<select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body"
														data-placement="left">
														<option value="fixed" selected="selected">Fixed</option>
														<option value="not-fixed">Not Fixed</option>
													</select>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- END THEME PANEL -->
						</div>
						<!-- END PAGE TOOLBAR -->
					</div>
				</div>
				<!-- END PAGE HEAD-->
				<!-- BEGIN PAGE CONTENT BODY -->
				<div class="page-content">
					<div class="container">
						<!-- BEGIN PAGE BREADCRUMBS -->
						<ul class="page-breadcrumb breadcrumb">
							<li>
								<a href="index.html">Home</a>
								<i class="fa fa-circle"></i>
							</li>
							<li>
								<a href="#">Pages</a>
								<i class="fa fa-circle"></i>
							</li>
							<li>
								<a href="#">General</a>
								<i class="fa fa-circle"></i>
							</li>
							<li>
								<span>Search</span>
							</li>
						</ul>
						<!-- END PAGE BREADCRUMBS -->
						<!-- BEGIN PAGE CONTENT INNER -->
						<div class="page-content-inner">
							<div class="search-page search-content-1">
								<div class="search-bar ">
									<div class="row">
										<div class="col-md-7">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search for...">
												<span class="input-group-btn">
													<button class="btn blue uppercase bold" type="button">Search</button>
												</span>
											</div>
										</div>
										<div class="col-md-5">
											<p class="search-desc clearfix"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque. </p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-7">
										<div class="search-container ">
											<ul>
											<?
												foreach ($result as $product) {
											?>
												<li class="search-item clearfix">
													<a href="product.php?pid=<?=$product['pid']?>">
														<img src="../assets/images/<?=$product['pid']?>.jpg" />
													</a>
													<div class="search-content">
														<h2 class="search-title">
															<a href="product.php?pid=<?=$product['pid']?>"><?=$product['tensanpham']?></a>
														</h2>
														<p class="search-desc"> <?=number_format($product['dongia'])?>đ </p>
													</div>
												</li>
											<?
												}
											?>
											</ul>
											<!-- <div class="search-pagination">
												<ul class="pagination">
													<li class="page-active">
														<a href="javascriptt:;"> 1 </a>
													</li>
													<li>
														<a href="javascriptt:;"> 2 </a>
													</li>
													<li>
														<a href="javascriptt:;"> 3 </a>
													</li>
													<li>
														<a href="javascriptt:;"> 4 </a>
													</li>
												</ul>
											</div> -->
										</div>
									</div>
									<div class="col-md-5">
										<!-- BEGIN PORTLET-->
										<div class="portlet light ">
											<div class="portlet-title">
												<div class="caption">
													<i class="icon-edit font-dark"></i>
													<span class="caption-subject font-dark bold uppercase">Notes</span>
												</div>
												<div class="actions">
													<a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">
														<i class="icon-cloud-upload"></i>
													</a>
													<a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">
														<i class="icon-wrench"></i>
													</a>
													<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascriptt:;"> </a>
													<a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">
														<i class="icon-trash"></i>
													</a>
												</div>
											</div>
											<div class="portlet-body">
												<div class="note note-success">
													<h4 class="block">Success! Some Header Goes Here</h4>
													<p> Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
												</div>
												<div class="note note-info">
													<h4 class="block">Info! Some Header Goes Here</h4>
													<p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
												</div>
												<div class="note note-danger">
													<h4 class="block">Danger! Some Header Goes Here</h4>
													<p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet.\ Cras mattis consectetur purus sit amet fermentum. </p>
												</div>
												<div class="note note-warning">
													<h4 class="block">Warning! Some Header Goes Here</h4>
													<p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet. Cras mattis consectetur purus sit amet fermentum. </p>
												</div>
											</div>
										</div>
										<!-- END PORTLET-->
									</div>
								</div>
							</div>
						</div>
						<!-- END PAGE CONTENT INNER -->
					</div>
				</div>
				<!-- END PAGE CONTENT BODY -->
				<!-- END CONTENT BODY -->
			</div>
			<!-- END CONTENT -->
			<?

			include_once("include/index/quick-sidebar.php");

			?>
		</div>
			<!-- END CONTAINER -->
	</div>
</div>

<?

include 'include/footer.php';

?>