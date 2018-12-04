<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Perbandingan Biaya Kopra 
		<?php 
    // var_dump($this->session->userdata('akses'));
		if ($this->session->userdata('akses')!=NULL){
			$kalenderCreate	=$this->session->userdata('akses')[1]->privCreate;
			$kalenderModif	=$this->session->userdata('akses')[1]->privModif;
			$adminAkses 	=$this->session->userdata('akses')[0]->privAkses;
			$adminCreate 	=$this->session->userdata('akses')[0]->privCreate;
			$adminModif 	=$this->session->userdata('akses')[0]->privModif;

		}else{
			$kalenderCreate ="N";
			$kalenderModif 	="N";
			$adminAkses 	="N";
			$adminCreate 	="N";
			$adminModif 	="N";
		}
		if($this->session->userdata('div_nama')!=NULL){
			echo "dari Divisi ".$this->session->userdata('div_nama'); 
		}
		?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />
		<script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>
		<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
		<!-- <script src="<?php echo base_url();?>assets/js/buttons.print.min.js"></script> -->
		<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-2.2.4.js"></script>
		<script>
			function startTime() {
				var today = new Date();
				var h = today.getHours();
				var m = today.getMinutes();
				var s = today.getSeconds();
				m = checkTime(m);
				s = checkTime(s);
				document.getElementById('txt').innerHTML =
				h + ":" + m + ":" + s + "   WIB";
				var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

</script>
</head>
<?php
if($page=="home" || $page=="user" || $page=="kalender"){
	include 'home.php';
}
if($page=="login"){
	include 'page-login.php';
}
?>


<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/spin.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.index.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/spinbox.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-editable.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace-editable.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>
		
		<!-- table -->
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/dataTables.fixedColumns.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
		



		<!-- ace settings handler -->
		<!-- script home -->
		<script type="text/javascript">
			var page = "<?php echo $page ;?>";
			var subpage = "<?php echo $subpage ;?>";
			if(page=="home"&&subpage=="home"){
				jQuery(function($) {
					$('.easy-pie-chart.percentage').each(function(){
						var $box = $(this).closest('.infobox');
						var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
						var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
						var size = parseInt($(this).data('size')) || 50;
						$(this).easyPieChart({
							barColor: barColor,
							trackColor: trackColor,
							scaleColor: false,
							lineCap: 'butt',
							lineWidth: parseInt(size/10),
							animate: ace.vars['old_ie'] ? false : 1000,
							size: size
						});
					})

					$('.sparkline').each(function(){
						var $box = $(this).closest('.infobox');
						var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
						$(this).sparkline('html',
						{
							tagValuesAttribute:'data-values',
							type: 'bar',
							barColor: barColor ,
							chartRangeMin:$(this).data('min') || 0
						});
					});


			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
			  { label: "social networks",  data: 38.7, color: "#68BC31"},
			  { label: "search engines",  data: 24.5, color: "#2091CF"},
			  { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
			  { label: "direct traffic",  data: 18.6, color: "#DA5430"},
			  { label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			  	$.plot(placeholder, data, {
			  		series: {
			  			pie: {
			  				show: true,
			  				tilt:0.8,
			  				highlight: {
			  					opacity: 0.25
			  				},
			  				stroke: {
			  					color: '#fff',
			  					width: 2
			  				},
			  				startAngle: 2
			  			}
			  		},
			  		legend: {
			  			show: true,
			  			position: position || "ne", 
			  			labelBoxBorderColor: null,
			  			margin:[-30,15]
			  		}
			  		,
			  		grid: {
			  			hoverable: true,
			  			clickable: true
			  		}
			  	})
			  }
			  drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);


			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
			  	if(item) {
			  		if (previousPoint != item.seriesIndex) {
			  			previousPoint = item.seriesIndex;
			  			var tip = item.series['label'] + " : " + item.series['percent']+'%';
			  			$tooltip.show().children(0).text(tip);
			  		}
			  		$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
			  	} else {
			  		$tooltip.hide();
			  		previousPoint = null;
			  	}

			  });

				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});




				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				

				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
					], {
						hoverable: true,
						shadowSize: 0,
						series: {
							lines: { show: true },
							points: { show: true }
						},
						xaxis: {
							tickLength: 0
						},
						yaxis: {
							ticks: 10,
							min: -2,
							max: 2,
							tickDecimals: 3
						},
						grid: {
							backgroundColor: { colors: [ "#fff", "#fff" ] },
							borderWidth: 1,
							borderColor:'#555'
						}
					});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').ace_scroll({
					size: 300
				});
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
					$('#tasks').on('touchstart', function(e){
						var li = $(e.target).closest('#tasks li');
						if(li.length == 0)return;
						var label = li.find('label.inline').get(0);
						if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
					});
				}

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
				}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
}
</script>
<!-- 		script home -->

<!-- script login -->
<script type="text/javascript">
	jQuery(function($) {
		$(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			});

		var error_msg= '<?php echo $this->session->flashdata('error_msg') ?>';
				// console.log(error_msg);

				if(error_msg!=""){
					$(document).ready(function(){
						$.gritter.add({
							title: error_msg,
						// text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						time:'3000',
						class_name: 'gritter-error gritter-info gritter-center'
					});
						return false;
					});
				}

			});

	

			//you don't need this, just used for changing background
			jQuery(function($) {
				$('#btn-login-dark').on('click', function(e) {
					$('body').attr('class', 'login-layout');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'blue');

					e.preventDefault();
				});
				$('#btn-login-light').on('click', function(e) {
					$('body').attr('class', 'login-layout light-login');
					$('#id-text2').attr('class', 'grey');
					$('#id-company-text').attr('class', 'blue');

					e.preventDefault();
				});
				$('#btn-login-blur').on('click', function(e) {
					$('body').attr('class', 'login-layout blur-login');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'light-blue');

					e.preventDefault();
				});

				



			});
		</script> <!-- script login -->

		<!-- script profile -->
		<script type="text/javascript">
			var page = "<?php echo $page ;?>";
			var subpage = "<?php echo $subpage ;?>";
			// console.log(page);
			// console.log(subpage);
			if(page=="user"&&subpage=="profile"){
				jQuery(function($) {

				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
				$.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
				'<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
				
				//editables 
				
				//text editable
				$('#username')
				.editable({
					type: 'text',
					name: 'username'		
				});


				
				//select2 editable
				var countries = [];
				$.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
					countries.push({id: k, text: v});
				});

				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "NL";
				$('#country').editable({
					type: 'select2',
					value : 'NL',
					//onblur:'ignore',
					source: countries,
					select2: {
						'width': 140
					},		
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
						
						//the destroy method is causing errors in x-editable v1.4.6+
						//it worked fine in v1.4.5
						/**			
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/
						
						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							//onblur:'ignore',
							source: new_source,
							select2: {
								'width': 140
							}
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance
						
					}
				});

				$('#city').editable({
					type: 'select2',
					value : 'Amsterdam',
					//onblur:'ignore',
					source: cities[currentValue],
					select2: {
						'width': 140
					}
				});


				
				//custom date editable
				$('#signup').editable({
					type: 'adate',
					date: {
						//datepicker plugin options
						format: 'yyyy/mm/dd',
						viewformat: 'yyyy/mm/dd',
						weekStart: 1

						//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
						//,format: 'yyyy-mm-dd',
						//viewformat: 'yyyy-mm-dd'
					}
				})

				$('#age').editable({
					type: 'spinner',
					name : 'age',
					spinner : {
						min : 16,
						max : 99,
						step: 1,
						on_sides: true
						//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
					}
				});
				

				$('#login').editable({
					type: 'slider',
					name : 'login',
					
					slider : {
						min : 1,
						max: 50,
						width: 100
						//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});

				$('#about').editable({
					mode: 'inline',
					type: 'wysiwyg',
					name : 'about',

					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em

					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}

					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						//onblur: 'ignore',  //don't reset or hide editable onblur?!
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							maxSize: 110000,//~100Kb

							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(error_type == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(error_type == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
						url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//for a working upload example you can replace the contents of this function with 
							//examples/profile-avatar-update.js

							var deferred = new $.Deferred

							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}


							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});

								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							} , parseInt(Math.random() * 800 + 800))

							return deferred.promise();
							
							// ***END OF UPDATE AVATAR HERE*** //
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
				/**
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
				*/

				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal = 
					'<div class="modal fade">\
					<div class="modal-dialog">\
					<div class="modal-content">\
					<div class="modal-header">\
					<button type="button" class="close" data-dismiss="modal">&times;</button>\
					<h4 class="blue">Change Avatar</h4>\
					</div>\
					\
					<form class="no-margin">\
					<div class="modal-body">\
					<div class="space-4"></div>\
					<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
					</div>\
					\
					<div class="modal-footer center">\
					<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
					<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
					</div>\
					</form>\
					</div>\
					</div>\
					</div>';
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});

					var working = false;

					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'ace-icon fa fa-picture-o',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						allowExt: ['jpg', 'jpeg', 'png', 'gif'],
						allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
					});

					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;
						
						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();
							
							modal.modal("hide");

							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;

							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));

						return false;
					});

				});

				

				//////////////////////////////
				$('#profile-feed-1').ace_scroll({
					height: '250px',
					mouseWheelLock: true,
					alwaysVisible : true
				});

				$('a[ data-original-title]').tooltip();

				$('.easy-pie-chart.percentage').each(function(){
					var barColor = $(this).data('color') || '#555';
					var trackColor = '#E2E2E2';
					var size = parseInt($(this).data('size')) || 72;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate:false,
						size: size
					}).css('color', barColor);
				});

				///////////////////////////////////////////

				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');

					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $this.offset();
					var w2 = $this.width();

					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});


				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');

				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);


				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
				
				
				
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});
			});
}
</script>
<!-- script profile -->

<script type="text/javascript">
	var page = "<?php echo $page ;?>";
	var subpage = "<?php echo $subpage ;?>";
	if(page=="kalender"){
		if(subpage=="milistByDivisi"){
			jQuery(function($) {
				var myTable = $('#tablemilist').DataTable( {
					"ajax": {
						"url": "<?php echo base_url()?>kalender/getMilistByDivisi",
						"dataSrc": ""
					},
					"columns": [
					{ "data": "milistId" },
					{ "data": "namaPerson" },
					{ "data": "alamat" },
					{ "data": "krmjumlah" }
					]
				});

				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					{
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: true
					}       
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
			})
		}
	}
</script>
</body>
</html>
