<section>
	<div class="row z-depth-2 teal darken-1">
		<div class="col s12"><h4 class="center-align white-text">File Upload</h4></div>
	</div><!--row-->
	<div class="row">
		<div class="container">
			<div class="col s6">
				  <form action="#">
						<div class="file-field input-field">
						  <div class="btn">
							<span>Browse</span>
							<input type="file" id="files" multiple>
						  </div>
						  <div class="file-path-wrapper" style="opacity:0;">
							<input class="file-path validate" type="text" placeholder="Upload one or more files">
						  </div>
						</div>				
				  </form>		
			</div>
			<div class="col s6 right-align"> 
				<label class="input-field" style="margin-right:10px;">
					<input id="selectForAll" type="checkbox" class="filled-in" />
					<span>Select All</span>
				</label>		
				<a class="waves-effect waves-light btn input-field uploadMultipleFiles" ><i class="material-icons right">cloud_upload</i>Start</a>
				<a class="waves-effect waves-light btn input-field deleteMultipleFiles" ><i class="material-icons right">delete</i>Delete</a>
			</div>
		</div><!--container-->
		<div class="container">
			<div class="col s12">		 
				<table class="responsive-table">
					<tbody id="uploadFilelist">

					</tbody>
				</table>	  
			</div>
		</div><!--container-->
	</div><!--row-->
</section>