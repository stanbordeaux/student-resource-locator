<?php load::view('templates/header');?>
		<!-- container -->
		<div class="container_24">
			<!-- header -->
			<div id="header">
				<!-- logo -->
				<div id="logo" class="grid_12">
					<a href=""><img src="<?php url::base();?>css/resources/images/logo1.png" alt="Student Admin" title="ICT Student Admin" /></a>
				</div>
				<!-- end logo -->
				<!-- dashboard -->
				<div id="dashboard" class="grid_12">
					
				</div>
				<!-- end dashboard -->
			</div>
			<!-- end header -->
			<!-- quick buttons / links -->
            <div id="navcontainer" class="grid_24">
    			<?php load::view('templates/top_nav');?>
            </div>                
			<!-- end quick -->
			<!-- content -->
			<div id="content" class="grid_24">
				<div id="content-inner">
					<!-- left -->
					<div id="left" class="grid_6">
						<!-- menu -->
						<ul id="menu">
							<li>
								<h6><a href="#students"><span>Students</span><span class="icon-minus"></span></a></h6>
								<ul id="menu_examples">
									<li class="button" onclick="TINY.ajax.call('<?php echo url::page('main/page');?>', 'right')">Add Students</li>
									<li><a href="table.html">View Students</a></li>
									<li><a href="content.html">Content Boxes</a></li>
									<li class="last"><a href="typography.html">Typography</a></li>
								</ul>
							</li>
							<li>
								<h6><a href="#manage"><span>Manage</span><span class="icon-minus"></span></a></h6>
								<ul id="menu_articles">
									<li><a href="">New Article</a></li>
									<li><a href="">Browse Articles</a></li>
									<li class="last"><a href="">Browse Drafts</a></li>
								</ul>
							</li>
							<li>
								<h6><a href="#users"><span>Users</span><span class="icon-minus"></span></a></h6>
								<ul id="menu_users">
									<li><a href="">New User</a></li>
									<li class="last"><a href="">Browse Users</a></li>
								</ul>
							</li>
							<li>
								<h6><a href="#downloads"><span>Downloads</span><span class="icon-minus"></span></a></h6>
								<ul id="menu_downloads">
									<li><a href="">New Download</a></li>
									<li class="last"><a href="">Browse Downloads</a></li>
								</ul>
							</li>
							<li>
								<h6><a href="#events"><span>Events</span><span class="icon-minus"></span></a></h6>
								<ul id="menu_events">
									<li><a href="">New Event</a></li>
									<li class="last"><a href="">Browse Events</a></li>
								</ul>
							</li>
							<li>
								<h6><a href="#settings"><span>Settings</span><span class="icon-minus"></span></a></h6>
								<ul id="menu_settings">
									<li class="last"><a href="">Manage Settings</a></li>
								</ul>
							</li>
						</ul>
						<!-- end menu -->
					</div>
					<!-- end left -->
					<!-- right -->
					<div id="right"  class="grid_18">
                   
						<h2>Dashboard</h2>
						<div class="hr"></div>
						<p>Falcon Admin is a user friendly and semantically correct administration panel which uses the jquery javascript framework but still degrades well and functions with javascript disabled.</p>
						<p>Some of the following features are 100% valid xhtml and css, based on the 960 grid system, accordion navigation menu, ability to use tabs and content boxes for content organization and based the accessible forms</p>
						<div class="hr"></div>
						<div class="boxes">
							<div class="box box-left">
								<h5>Statistics</h5>
								<div class="box-content box-content-alt">
									<ul class="statistics">
										<li>
											<span>Articles</span>
											<span class="highlight">104</span>
										</li>
										<li>
											<span>Saved Drafts</span>
											<span class="highlight">11</span>
										</li>
										<li>
											<span>Comments</span>
											<span class="highlight">598</span>
										</li>
										<li>
											<span>New Comments Today</span>
											<span class="highlight">34</span>
										</li>
										<li>
											<span>Users</span>
											<span class="highlight">126</span>
										</li>
										<li class="last">
											<span>New Users Today</span>
											<span class="highlight">14</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="box box-right">
								<h5>Recent Drafts</h5>
								<div class="box-content box-content-alt">
									<ul class="drafts">
										<li>
											<a href="">Intel, Nokia Open MeeGo To Developers</a>
											<span>March 3rd, 2010</span>
										</li>
										<li>
											<a href="">March Auto Sales: Kia</a>
											<span>March 3rd, 2010</span>
										</li>
										<li>
											<a href="">Amid Signs of Spring, Hints of Green</a>
											<span>March 11th, 2010</span>
										</li>
										<li>
											<a href="">AT&amp;T Prepares Network For Battle</a>
											<span>March 15th, 2010</span>
										</li>
										<li class="last">
											<a href="">People's choice from Mars</a>
											<span>March 16th, 2010</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- messages -->
						<div id="messages">
							<div class="message message-error">
								<div class="image">
									<img src="resources/images/icons/error.png" alt="Error" height="32" />
								</div>
								<div class="text">
									<h6>Error Message</h6>
									<span>This is the error message.</span>
								</div>
							</div>
							<div class="message message-warning">
								<div class="image">
									<img src="resources/images/icons/warning.png" alt="Warning" height="32" />
								</div>
								<div class="text">
									<h6>Warning Message</h6>
									<span>This is the warning message.</span>
								</div>
							</div>
							<div class="message message-notice">
								<div class="image">
									<img src="resources/images/icons/notice.png" alt="Notice" height="32" />
								</div>
								<div class="text">
									<h6>Notice Message</h6>
									<span>This is the notice message.</span>
								</div>
							</div>
							<div class="message message-success">
								<div class="image">
									<img src="resources/images/icons/success.png" alt="Success" height="32" />
								</div>
								<div class="text">
									<h6>Success Message</h6>
									<span>This is the success message.</span>
								</div>
							</div>
						</div>
						<!-- end messages -->
						<!-- statistics -->
						<div id="statistics">
							<div class="tabs tabs-table">
								<h5>Traffic Statistics</h5>
								<ul>
									<li><a href="#statistics_views">Visits</a></li>
									<li><a href="#statistics_pageviews">Pageviews</a></li>
								</ul>
							</div>
							<div class="table table-statistics">
								<div id="statistics_views">
									<table class="chart">
										<thead>
											<tr>
												<th>Date</th>
												<th>Visits</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="title">Monday, March 1, 2010</td>
												<td class="value">17154</td>
											</tr>
											<tr class="alt">
												<td class="title">Tuesday, March 2, 2010</td>
												<td class="value">18062</td>
											</tr>
											<tr>
												<td class="title">Wednesday, March 3, 2010</td>
												<td class="value">17803</td>
											</tr>
											<tr class="alt">
												<td class="title">Thursday, March 4, 2010</td>
												<td class="value">18897</td>
											</tr>
											<tr>
												<td class="title">Friday, March 5, 2010</td>
												<td class="value">49985</td>
											</tr>
											<tr class="alt">
												<td class="title">Saturday, March 6, 2010</td>
												<td class="value">22809</td>
											</tr>
											<tr>
												<td class="title">Sunday, March 7, 2010</td>
												<td class="value">78072</td>
											</tr>
											<tr class="alt">
												<td class="title">Monday, March 8, 2010</td>
												<td class="value">88267</td>
											</tr>
											<tr>
												<td class="title">Tuesday, March 9, 2010</td>
												<td class="value">57735</td>
											</tr>
											<tr class="alt">
												<td class="title">Wednesday, March 10, 2010</td>
												<td class="value">17649</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="statistics_pageviews">
									<table class="chart">
										<thead>
											<tr>
												<th>Date</th>
												<th>Pageviews</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="title">Monday, March 1, 2010</td>
												<td class="value">226712</td>
											</tr>
											<tr class="alt">
												<td class="title">Tuesday, March 2, 2010</td>
												<td class="value">235375</td>
											</tr>
											<tr>
												<td class="title">Wednesday, March 3, 2010</td>
												<td class="value">231387</td>
											</tr>
											<tr class="alt">
												<td class="title">Thursday, March 4, 2010</td>
												<td class="value">242001</td>
											</tr>
											<tr>
												<td class="title">Friday, March 5, 2010</td>
												<td class="value">471395</td>
											</tr>
											<tr class="alt">
												<td class="title">Saturday, March 6, 2010</td>
												<td class="value">627950</td>
											</tr>
											<tr>
												<td class="title">Sunday, March 7, 2010</td>
												<td class="value">596203</td>
											</tr>
											<tr class="alt">
												<td class="title">Monday, March 8, 2010</td>
												<td class="value">257407</td>
											</tr>
											<tr>
												<td class="title">Tuesday, March 9, 2010</td>
												<td class="value">1035775</td>
											</tr>
											<tr class="alt">
												<td class="title">Wednesday, March 10, 2010</td>
												<td class="value">232322</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end statistics -->
						</div>
					</div>
					<!-- end right -->
				</div>
			</div>
			<!-- end content -->
			<!-- footer -->
			<div id="footer" class="grid_24">
				<div class="icon"></div>
			</div>
			<!-- end footer -->
			<div class="clear"></div>
		</div>
		<!-- end container --><script type="text/javascript" src="<?php echo url::base();?>js/tinyajax.js"></script>
	</body>
</html>