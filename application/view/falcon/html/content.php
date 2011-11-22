<?php load::view('templates/header');?>
		<!-- container -->
		<div class="container_24">
			<!-- header -->
			<div id="header">
				<!-- logo -->
				<div id="logo" class="grid_12">
					<a href=""><img src="<?php url::base();?>css/resources/images/logo1.png" alt="Student Admin" title="Student Admin" /></a>
				</div>
				<!-- end logo -->
				<!-- dashboard -->
				<div id="dashboard" class="grid_12">
					<div class="menu">
						<ul>
							<li><a href="">John Smith</a> |</li>
							<li><a href="">Account</a> |</li>
							<li><a href="">Messages (0)</a> |</li>
							<li><a href="">Logout</a></li>
						</ul>
					</div>
				</div>
				<!-- end dashboard -->
			</div>
			<!-- end header -->
			<!-- quick buttons / links -->
			<div id="quick" class="grid_24">
				<ul>
					<li><a href="<?php url::page('main');?>" class="home"></a></li>
					<li><a href="table.html" class="articles"></a></li>
					<li><a href="table.html" class="users"></a></li>
					<li><a href="table.html" class="downloads"></a></li>
					<li><a href="table.html" class="events"></a></li>
					<li><a href="table.html" class="links"></a></li>
					<li><a href="table.html" class="settings"></a></li>
				</ul>
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
								<h6><a href="#examples"><span>Examples</span><span class="icon-minus"></span></a></h6>
								<ul id="menu_examples">
									<li><a href="form.html">Forms</a></li>
									<li><a href="table.html">Tables</a></li>
									<li><a href="content.html">Content Boxes</a></li>
									<li class="last"><a href="typography.html">Typography</a></li>
								</ul>
							</li>
							<li>
								<h6><a href="#articles"><span>Articles</span><span class="icon-minus"></span></a></h6>
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
						<!-- content boxes -->
						<div id="boxes">
							<div class="box">
								<!-- content box with tabs -->
								<div id="box_tabs_example">
									<div class="box-tabs">
										<h5>Content Box</h5>
										<ul>
											<li><a href="#box-typography">Typography</a></li>
											<li><a href="#box-tables">Tables</a></li>
											<li><a href="#box-forms">Forms</a></li>
										</ul>
									</div>
									<div class="box-content">
										<div id="box-typography">
											<!-- typography -->
											<!-- paragraphs -->
											<p><img src="resources/images/screenshot.jpg" width="135" alt="Screenshot" class="right" />Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p><img src="resources/images/screenshot.jpg" width="135" alt="Screenshot" class="left" />Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<!-- end paragraphs -->
											<div class="hr"></div>
											<!-- lists -->
											<div class="lists">
												<div class="list list-first">
													<h5>Definition List</h5>
													<dl>
														<dt>Definition #1</dt>
														<dd>This is a division.</dd>
														<dt>Definition #2</dt>
														<dd>This is a division.</dd>
													</dl>
												</div>
												<div class="list">
													<h5>List (Roman)</h5>
													<ol class="upper-roman">
														<li>List Item 1</li>
														<li>List Item 2</li>
														<li>List Item 3</li>
													</ol>
												</div>
												<div class="list">
													<h5>List (Square)</h5>
													<ul class="square">
														<li>List Item 1</li>
														<li>List Item 2</li>
														<li>List Item 3</li>
													</ul>
												</div>
												<div class="list list-last">
													<h5>List (Disc)</h5>
													<ul class="disc">
														<li>List Item 1</li>
														<li>List Item 2</li>
														<li>List Item 3</li>
													</ul>
												</div>
											</div>
											<!-- end lists -->
											<!-- end typography -->
										</div>
										<div id="box-tables">
											<!-- table -->
											<div class="table">
												<form action="" method="post">
													<table cellspacing="0">
														<thead>
															<tr>
																<th class="left">Title</th>
																<th>Author</th>
																<th>Published</th>
																<th></th>
																<th class="selected"><input type="checkbox" class="box-check-group" /></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="title">Article 1</td>
																<td class="author">John Smith</td>
																<td class="date">May 17th at 11:19 AM</td>
																<td class="edit"><a href="">Edit</a></td>
																<td class="selected"><input type="checkbox" name="Selected" class="box-check-item" /></td>
															</tr>
															<tr class="alt">
																<td class="title">Article 2</td>
																<td class="author">John Smith</td>
																<td class="date">May 17th at 9:00 AM</td>
																<td class="edit"><a href="">Edit</a></td>
																<td class="selected"><input type="checkbox" name="Selected" class="box-check-item" /></td>
															</tr>
															<tr>
																<td class="title">Article 3</td>
																<td class="author">John Smith</td>
																<td class="date">May 17th at 8:04 AM</td>
																<td class="edit"><a href="">Edit</a></td>
																<td class="selected"><input type="checkbox" name="Selected" class="box-check-item" /></td>
															</tr>
															<tr class="alt">
																<td class="title">Article 4</td>
																<td class="author">John Smith</td>
																<td class="date">May 16th at 2:45 PM</td>
																<td class="edit"><a href="">Edit</a></td>
																<td class="selected"><input type="checkbox" name="Selected" class="box-check-item" /></td>
															</tr>
															<tr>
																<td class="title">Article 5</td>
																<td class="author">John Smith</td>
																<td class="date">May 16th at 1:02 PM</td>
																<td class="edit"><a href="">Edit</a></td>
																<td class="selected"><input type="checkbox" name="Selected" class="box-check-item" /></td>
															</tr>
														</tbody>
													</table>
													<!-- table action -->
													<div class="action">
														<select name="action">
															<option value="" class="locked">Set status to Deleted</option>
															<option value="" class="unlocked">Set status to Published</option>
															<option value="" class="folder-open">Move to Folder</option>
														</select>
														<div class="button">
															<input type="submit" name="submit" value="Apply to Selected" class="box-check-submit" />
														</div>
													</div>
													<!-- end table action -->
													<!-- pagination -->
													<div class="pagination">
														<div class="results">
															<span>showing results 1-10 of 207</span>
														</div>
														<ul class="pager">
															<li class="disabled">&laquo; prev</li>
															<li class="current">1</li>
															<li><a href="">2</a></li>
															<li><a href="">3</a></li>
															<li><a href="">4</a></li>
															<li><a href="">5</a></li>
															<li class="separator">...</li>
															<li><a href="">20</a></li>
															<li><a href="">21</a></li>
															<li><a href="">next &raquo;</a></li>
														</ul>
													</div>
													<!-- end pagination -->
												</form>
											</div>
											<!-- end table -->
										</div>
										<div id="box-forms">
											<!-- forms -->
											<div id="forms">
												<form action="" method="post">
													<div class="form">
														<div class="fields">
															<div class="field">
																<div class="label">
																	<label for="textbox">Title:</label>
																</div>
																<div class="input">
																	<input type="text" id="textbox" name="textbox" size="50" />
																</div>
															</div>
															<div class="field">
																<div class="label">
																	<label for="textbox_2">Tags:</label>
																</div>
																<div class="input">
																	<input type="text" id="textbox_2" name="textbox.2" size="30" class="error" />
																	<span class="error">This is a required field.</span>
																</div>
															</div>
															<div class="field">
																<div class="label">
																	<label for="textbox_3">Sources:</label>
																</div>
																<div class="input">
																	<input type="text" id="textbox_3" name="textbox.3" size="30" class="success" />
																</div>
															</div>
															<div class="field">
																<div class="label">
																	<label for="textbox">Published:</label>
																</div>
																<div class="input">
																	<input type="text" id="published" name="published" size="30" />
																</div>
															</div>
															<div class="field">
																<div class="label label-select">
																	<label for="category">Category:</label>
																</div>
																<div class="select">
																	<select id="category" name="category">
																		<option value="1">Business</option>
																		<option value="2">Sci/Tech</option>
																		<option value="3">Entertainment</option>
																	</select>
																</div>
															</div>
															<div class="field">
																<div class="label label-checkbox">
																	<label>Categories:</label>
																</div>
																<div class="checkboxes">
																	<div class="checkbox">
																		<input type="checkbox" id="checkbox_1" name="checkbox_1" />
																		<label for="checkbox_1">Business</label>
																	</div>
																	<div class="checkbox">
																		<input type="checkbox" id="checkbox_2" name="checkbox_2" />
																		<label for="checkbox_3">Sci/Tech</label>
																	</div>
																	<div class="checkbox">
																		<input type="checkbox" id="checkbox_3" name="checkbox_2" />
																		<label for="checkbox_2">Entertainment</label>
																	</div>
																</div>
															</div>
															<div class="field">
																<div class="label label-radio">
																	<label>Permissions:</label>
																</div>
																<div class="radios">
																	<div class="radio">
																		<input type="radio" id="radio_1" name="radioex" />
																		<label for="radio_1">Subscribers</label>
																	</div>
																	<div class="radio">
																		<input type="radio" id="radio_2" name="radioex" />
																		<label for="radio_3">Administrators</label>
																	</div>
																	<div class="radio">
																		<input type="radio" id="radio_3" name="radioex" />
																		<label for="radio_2">Everyone</label>
																	</div>
																</div>
															</div>
															<div class="field">
																<div class="label">
																	<label for="image">Image:</label>
																</div>
																<div class="input">
																	<input type="file" id="image" name="image" size="40" />
																</div>
															</div>
															<div class="field">
																<div class="label label-textarea">
																	<label for="article">Article:</label>
																</div>
																<div class="textarea">
																	<textarea id="article" name="article" cols="50" rows="15"></textarea>
																</div>
															</div>
															<div class="buttons">
																<input type="submit" name="submit" value="Submit" />
																<input type="reset" name="reset" value="Reset" />
															</div>
														</div>
													</div>
												</form>
											</div>
											<!-- end forms -->
										</div>
									</div>
								</div>
								<!-- end content box with tabs -->
							</div>
							<!-- content boxex (left, right) -->
							<div class="boxes">
								<div class="box box-left">
									<h5>Content Box Left</h5>
									<div class="box-content">
										<!-- headings -->
										<h1>Heading 1</h1>
										<h2>Heading 2</h2>
										<h3>Heading 3</h3>
										<h4>Heading 4</h4>
										<h5>Heading 5</h5>
										<h6>Heading 6</h6>
										<!-- end headings -->
									</div>
								</div>
								<div class="box box-right">
									<h5>Content Box Right</h5>
								</div>
							</div>
							<!-- end content boxex (left, right) -->
						</div>
						<!-- end content boxes -->
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
		<!-- end container -->
	</body>
</html>