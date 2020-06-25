<?php $q = "install" ?>
<?php require 'header.php'; ?>

<div class="row mb-5 pb-5">
	<div class="col-lg-6 offset-lg-3">
		<center>
			<span class="display-4">Installation</span>
			<hr class="bg-info">
		</center>
		<div class="content h4">
			<small>
				Installation of <span class="h5 text-success">Turbo Manager</span> is Easy. <br> <span class="h5">Follow the steps :-</span>
				<br><br>
				<ol>
					<li>
						First, copy the project folder to where you like to install it
					</li>
					<br>
					<li>
						Now, Open <pre class="text-danger">/App/Config.php</pre>
					</li>
					<br>
					<li>
						You have to set some variables!
						<ul type="disc">
							<li>
								<span class="h5 text-info">$base_url - </span> This is the Url to the root directory of Turbo SQL manager. <br>For example,<br>
								<div class="container">
									- If this software is used as plugin to a project named 'Program', and you are using xampp as host, then the url would be
									<pre class="text-danger">http://localhost/Program/(directory name of this software)/</pre>This should be the $base_url
								</div>
							</li>
							<br>
							<li>
								<span class="h5 text-info">$DATABASE - </span>
								This variable is an array. Fill all details and change <pre class="text-danger">$database['status'] = TRUE</pre>
							</li>
							<br>
							<li>
								<span>No need to change <span class="text-danger">$landing_controller</span></span>
							</li>
						</ul>
					</li>
					<br>
					<li>
						Done! Now enjoy by opening the url of root dir of this software!
					</li>
				</ol>
			</small>
			<hr class="bg-info">
		</div>
		<br>
		<div class="content h4">
			Ok... Now let's understand this software!!
			<br>
			<span class="h5"><a href="<?=base_url('Manual/guide')?>">Guide</a></span>
		</div>
		<hr class="bg-info">
		<br>
		<div class="h4">
			<small>
				Well!
				<br>
				<span class="h5 text-danger">Remember</span>, this software does not have any kind of securities, don't host it to your official website!
				<br>
				This software is still to be used only in local machine or say localhost. It's easy to use and feel free to feedback on <span class="text-danger">GITHUB Repo!</span>
			</small>
		</div>
		<br><br>
		<hr class="bg-info">
		<hr class="bg-info">
		<center>
			<div class="">
				<span class="h2">
					<small>
						Developed with <small><i class="text-danger fa fa-heart"></i></small> By Hrishikesh Vaze
					</small>
				</span>
			</div>
		</center>
	</div>
</div>

<?php require 'footer.php'; ?>