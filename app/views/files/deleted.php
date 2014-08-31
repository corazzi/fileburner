<?=View::make('layout/header')->render()?>
	<div id="container">
		<div id="centered">
			
			<section class="row">
				<div class="small-12 small-centered columns text-center">
					<h3>This link has already been accessed, or may never have even existed!</h3>

					<a id="downloadLink" class="button expand radius danger" disabled>
						Download Unavailable
					</a>

					<p>
						The file has been deleted.
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
