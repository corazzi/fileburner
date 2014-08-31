<?=View::make('layout/header')->render()?>
	<div id="container">
		<div id="centered">
			
			<section id="intro" class="row">
				<div class="small-12 medium-8 large-8 small-centered columns text-center">
					<h2>Share your files... once.</h2>
					<p>
						Upload a file and generate a single-use download link to securely share it. 
					</p>
					<p>
						Once the download is started, it can't be downloaded again.
					</p>
				</div>
			</section>

			<section id="upload" class="row">
				<div class="small-12 medium-8 -large-8 small-centered columns text-center">
					<form action="<?=url('upload')?>" method="post" enctype="multipart/form-data">
						<input type="file" name="file" id="file">
						<button id="uploadBtn" class="button large expand radius">Upload a file (max size 2GB)</button>
					</form>
				</div>
			</section>

			<section id="total" class="row">
				<div class="small-12 small-centered columns text-center">
					<span class="totalCount"><?=$data['totalBurned']?></span> files burned
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
