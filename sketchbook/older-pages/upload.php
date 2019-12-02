<?php
   if(isset($_SESSION['success'])){
      echo "<div class = 'alert alert-success'>".$_SESSION['success']."</div>";
   }
?>
<?php
    if(isset($_FILES['file'])){
		$file_name = $_FILES['file']['name'];   
		$temp_file_location = $_FILES['file']['tmp_name']; 

		require 'vendor/autoload.php';

		$s3 = new Aws\S3\S3Client([
			'region'  => 'us-east-1',
			'version' => 'latest',
			'credentials' => [
				'key'    => "AKIAI3QF64MGBVHO2YIQ",
                'secret' => "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",
                'ACL'    => 'public-read'
			]
		]);		
    try{
        $result = $s3->putObject([
			'Bucket' => 'scketchbook',
			'Key'    => $file_name,
			'SourceFile' => $temp_file_location			
		]);
        echo $result['ObjectURL'] . PHP_EOL;
    }catch(S3Exception $e){
        echo $e->getMessage() . PHP_EOL;
    }
		
	$_SESSION['success'] = "photo posted successfully";
	header("Location: index.php");
	}
?>