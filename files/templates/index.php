<div class="controls">
	<div class="actions">
		<form id="file_upload_form" action="ajax/upload.php" method="post" enctype="multipart/form-data" target="file_upload_target">
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $_["uploadMaxFilesize"] ?>" id="max_upload">
			<input type="hidden" class="max_human_file_size" value="(max <?php echo $_["uploadMaxHumanFilesize"]; ?>)">
			<input type="hidden" name="dir" value="<?php echo $_["dir"] ?>" id="dir">
			<div id='file_upload_wrapper'>
				<input class="prettybutton" id='file_upload_filename' value="Upload (max <?php echo $_["uploadMaxHumanFilesize"];?>)"/>
				<input class="prettybutton" type="file" id="file_upload_start" name='file'/>
			</div>&nbsp;
			<input class="prettybutton" type="button" id="file_upload_submit" name="file_upload_submit" value="OK" />
			<iframe id="file_upload_target" name="file_upload_target" src=""></iframe>
		</form>
		<form id="file_newfolder_form">
			<input type="text" class="prettybutton" name="file_newfolder_name" id="file_newfolder_name" value="New Folder" />&nbsp;
			<input class="prettybutton" type="button" id="file_newfolder_submit" name="file_newfolder_submit" value="OK" />
		</form>
		<a href="" title="" class="download">Download</a>
		<a href="" title="" class="share">Share</a>
		<a href="" title="" class="delete">Delete</a>
	</div>
	<div id="file_action_panel">
	</div>
</div>

<p class="nav">
	<?php echo($_['breadcrumb']); ?>
</p>

<table cellspacing="0">
	<thead>
		<tr>
			<th><input type="checkbox" id="select_all" /></th>
			<th>Name</th>
			<th>Size</th>
			<th>Modified</th>
			<th></th>
		</tr>
	</thead>
	<tbody id="fileList">
		<?php echo($_['fileList']); ?>
	</tbody>
</table>

<div id="file_menu">
	<ul>
		<li><a href="" title="" id="download_single_file">Download</a></li>
		<li><a href="" title="">Share</a></li>
		<li><a href="" title="" id="delete_single_file">Delete</a></li>
	</ul>
</div>
