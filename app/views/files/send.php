<?=View::make('layout/header')->render()?>
	<div id="container">
		<div id="centered">
			
			<section class="row">
				<div class="small-12 small-centered columns text-center">
					<h3>Your share link is ready.</h3>
					<p>
						Give the recipient the following link, but
						<strong>do not click on it yourself</strong>
						or they will not be able to access the file.
					</p>

					<p id="shareLink"><?=url("files/dl/$file->id")?></p>

					<p>
						The file will be deleted in 7 days if not downloaded before then.
					</p>
				</div>
			</section>

		</div>
	</div>


	<footer class="row">
		<div class="small-12 small-centered columns text-center">
			<hr>
			<p><i class="fa fa-github-alt"></i> Fork me on <a href="https://github.com/sachiano/fileburner" target="_blank">GitHub</a></p>
			<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="<?=url('assets/js/app.js')?>"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.3.3/js/foundation.min.js"></script>
		</div>
	</footer>

</body>
</html>
