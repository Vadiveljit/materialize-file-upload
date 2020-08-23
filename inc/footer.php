<footer>

</footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js'></script>
    <script src='./js/anival_file_upload.js'></script>
<script>
$(document).ready(function(){
    $("#files").anivalFileUpload({ 
        selectOption: "multiple", 
        fileType: ['.jpg','.png'], 
        fileMaxSize: 1, 
        beforeUploadFileListing:'#uploadFilelist', 
        uploadUrl:"inc/upload.php" 
    });   
});
</script>

