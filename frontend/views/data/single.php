@extends('index/layout')



@section('content')
	<div class="blog">
		<div class="container">
			<div class="blog-top">
				<div class="col-md-9 blog-left">
					<div class="blog-main">
						<a class="bg">DUIS AUTE IRURE DOLOR IN REPREHENDERIT IN VOLUPTATE VELIT ESSE</a>
						<p>Post by <a href="#">Admin</a> on saturday, March 02, 2015  <a href="#">5 comments</a></p>
					</div>								
					<div class="blog-main-one">
						<div class="blog-one blog-sng">
							<img src="images/blog-2.jpg" alt="" />
							<p class="sngl">Nunc quis turpis sed tortor viverra dictum. Etiam in cursus libero, ut cursus turpis. Nulla quis nulla pellentesque, commodo lorem sed, ultrices leo. Duis magna mauris, cursus vitae lacus ut, consequat malesuada magna. Duis bibendum pellentesque nisi eget volutpat.
							   Nunc rhoncus ultrices lectus.Aliquam eu dui quis orci ultrices eleifend ut non massa. Duis commodo, ante in vulputate iaculis, libero ex fringilla dolor, id laoreet augue lorem in velit. Aenean vitae risus tempor, suscipit turpis elementum, lacinia justo. Aenean tortor orci, tristique sed libero vel, vulputate elementum lectus.
							   Aliquam dapibus nisi et gravida accumsan. Nam aliquam blandit dapibus. Aliquam bibendum vestibulum neque, eu dapibus nunc congue vitae. Praesent mollis dolor eget elementum auctor.</p>
						</div>	
						<div class="comments cmt">
								<ul>
									<li><span class="bookmark"> </span><a href="#">Uncategorized</a></li>
									<li><span class="clndr"> </span><p>march 13,2014</p></li>
									<li><span class="cmnt"> </span><a href="#">comments</a></li>
								</ul>
						</div>	
					</div>	
					<div class="comment-list">
							<h5>Written by <a href="#">admin</a></h5>
							<div class="cmt-list">
								<div class="cmt-left">
									<img src="images/avatar.png" alt="" />
								</div>
								<div class="cmt-right">
									<p>View all posts by: <a href="#">admin</a></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="related">
							<h3>RELATED POSTS</h3>
							<div class="related-bottom">
								<div class="col-md-3 related-left">
									<img src="images/r-1.jpg" alt="" />
									<h4>Cum sociis sere</h4>
								</div>
								<div class="col-md-3 related-left">
									<img src="images/r-2.jpg" alt="" />
									<h4>Vestibulum est ex</h4>
								</div>
								<div class="col-md-3 related-left">
									<img src="images/r-3.jpg" alt="" />
									<h4>Ut tincidunt</h4>
								</div>
								<div class="col-md-3 related-left">
									<img src="images/r-4.jpg" alt="" />
									<h4> Aliquam eu quam</h4>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="content">
					 		<h3>LEAVE A COMMENT</h3>
					 		<div class="contact-form">
								<form>
									<input type="text" placeholder="Name" required/>
									<input type="text" placeholder="Email" required/>
									<input type="text" placeholder="Phone" required/>
									<textarea placeholder="Message"></textarea>
									<input type="submit" value="SEND"/>
				   				</form>
				   			</div>	
						</div>
				</div>
				<div class="col-md-3 blog-right">
					<div class="categories">
						<h3>CATEGORIES</h3>
						<ul>
							<li><a href="#">Aenean tortor orci</a></li>
							<li><a href="#">Duis bibendum pellentesquev</a></li>
							<li><a href="#">Quisque pharetra semper</a></li>
							<li><a href="#">Cras condimentum risus</a></li>
							<li><a href="#"> Quisque id erat sapien</a></li>
						</ul>
					</div>
					<div class="categories">
						<h3>RECENT POSTS</h3>
						<ul>
							<li><a href="#">Fusce id volutpat est</a></li>
							<li><a href="#">Phasellus condimentum odio</a></li>
							<li><a href="#">Donec interdum eros elit</a></li>
							<li><a href="#">Cras condimentum risus</a></li>
							<li><a href="#">Proin sodales diam ac </a></li>
						</ul>
					</div>
					<div class="categories">
						<h3>ARCHIVES</h3>
						<ul>
							<li><a href="#">March 3014</a></li>
							<li><a href="#">May 2014</a></li>
							<li><a href="#">August 2014</a></li>
							<li><a href="#">October 2014</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--blog-->
	<!--read-->
	@stop	