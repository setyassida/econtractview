<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="fileupload" action="php/index.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="span16 fileupload-buttonbar">
            <div class="progressbar fileupload-progressbar"><div style="width:0%;"></div></div>
            <span class="btn success fileinput-button">
                <span>Add files...</span>
                <input type="file" name="files[]" multiple>
            </span>
            <!-- Extra file input start /-->
            <span class="btn fileinput-button">
                <span>Other...</span>
                <input type="file" name="files2[]" multiple>
            </span>
            <!--/ Extra file input stop -->
            <button type="submit" class="btn primary start">Start upload</button>
            <button type="reset" class="btn info cancel">Cancel upload</button>
            <button type="button" class="btn danger delete">Delete selected</button>
            <input type="checkbox" class="toggle">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="span16">
            <table class="zebra-striped"><tbody class="files"></tbody></table>
        </div>
    </div>
</form>
</body>
</html>