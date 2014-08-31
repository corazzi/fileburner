<?=View::make('layout/header')->render()?>
	<div id="container">
		<div id="centered">
			
			<section class="row">
				<div class="small-12 small-centered columns text-center">
					<h3>This link was shared with you, and only you.</h3>
					<p>
						Click the button below to download it, but beware!
						<br>
						<strong class="warning">
							Once you have started downloading it, the file
							will be unavailable a second time.
						</strong>
					</p>
					<p>
						Make sure your internet connection is stable, because you only
						get one shot.
					</p>

					<a id="downloadLink" class="button expand radius" href="<?=url("files/process/$file->id")?>">
						Download <strong><?=$file->filename?></strong> (<?=$file->filesize?>)
					</a>

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
