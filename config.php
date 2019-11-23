<?php
function getRestUrl(){
    echo 'http://localhost:8080/api/v1/';
}
?>
<script type="text/javascript">
var restUrl = "<?php echo getRestUrl(); ?>";
</script>
<?php	
function getIncludeContents($included_file_path){
	ob_start();		
	include($included_file_path);
	$contents = ob_get_contents();
	ob_end_clean();
	echo $contents;
}
// include custom jQuery
//function shapeSpace_include_custom_jquery() {
//	wp_deregister_script('jquery');
//	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
//}
//add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
?>