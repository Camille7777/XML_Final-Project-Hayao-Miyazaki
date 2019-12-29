<?php
if (isset($_POST['insert']))
{
	$xml = new DOMDocument("1.0");
	$xmluser = new DOMDocument("1.0");
	
	if (isset($_POST['c_subject']))   // if ANY of the options was checked
		echo $_POST['c_subject'];    // echo the choice
	else
	{
		echo "nothing was selected.";
		die;
	}
	
    $cname = $_POST['c_name'];
    $cdate = $_POST['c_date'];
	$csubject = $_POST['c_subject'];
	$ccomment = $_POST['comment'];

	//check whether this is a new user to add the comment
	if(!file_exists('xml/' . $cname . '.xml')){
        $NewFileName = 'XML/' . $cname . '.xml';
		$NewFileHandle = fopen($NewFileName,'w');
		$txt = '<?xml version="1.0" encoding="UTF-8"?><root></root>';
		fwrite($NewFileHandle,$txt);
		fclose($NewFileHandle);
    }

	$xmluser->load('XML/' . $cname . '.xml');
	
	$u_rootTag = $xmluser->getElementsByTagName("root")->item(0);
	
	$u_infoTag = $xmluser->createElement("info");
	$u_subjectTag = $xmluser->createElement("subject", $csubject);
	$u_dateTag = $xmluser->createElement("date", $cdate);
	$u_commentTag = $xmluser->createElement("comment", $ccomment);
		
	$u_infoTag->appendChild($u_subjectTag);
	$u_infoTag->appendChild($u_dateTag);
	$u_infoTag->appendChild($u_commentTag);
		
	$u_rootTag->appendChild($u_infoTag);
	
    $xmluser->save('XML/' . $cname . '.xml');

	//check which subject users are commented
	if($csubject == "Princess Mononoke")
	{
	    $xml->load('XML/PageComment/PMcomment.xml');
	}
	else if($csubject == "Spirit Away")
	{
		$xml->load('XML/PageComment/SAcomment.xml');
	}

	$rootTag = $xml->getElementsByTagName("root")->item(0);
	
	$infoTag = $xml->createElement("info");
	$nameTag = $xml->createElement("name", $cname);
	$dateTag = $xml->createElement("date", $cdate);
	$commentTag = $xml->createElement("comment", $ccomment);
		
	$infoTag->appendChild($nameTag);
	$infoTag->appendChild($dateTag);
	$infoTag->appendChild($commentTag);
		
	$rootTag->appendChild($infoTag);
	
	if($csubject == "Princess Mononoke")
	{
	    $xml->save('XML/PageComment/PMcomment.xml');
	}
	else if($csubject == "Spirit Away")
	{
		$xml->save('XML/PageComment/SAcomment.xml');
	}

	
}
?>

<html>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/PrincessMononoke/PrincessMononoke.css">

	<style>
		.bg-A5DEE4 {
			/*background-color: rgba(252, 159, 77, 0.5);*/
			background-color: #707C74;

		}

		.body-bg-color {
			/*background-color: #ECA579;*/
			/*background-color: rgba(251, 150, 110);*/
			background-color: #eca579;
		}

		.btn-color {
			color: #212529;
			background-color: #cf675f;
			border-color: #cf675f;
		}

		.btn-color:hover {
			color: #212529;
			background-color: #B5495B;
			border-color: #B5495B;
		}
	</style>
	
	<body>
		<div class="row justify-content-center">
			<div class="col-lg-8 shadow myshadow rounded  bg-A5DEE4">
				<h4 class="text3"><label>Write your own comments</label></h6>
				<div class="row">
					<div class="col-1 text-left"></div>
					<div class="col-5 text-left">
						<form method = "POST" action = "InsertComment.php">
							<h5 class="text3">Name</h5><br>
							<h5 class="text3">Comment</h5><br>
							<h5 class="text3">Date</h5><br>
							<h5 class="text3">Subject</h5>
						</form>
					</div>
					<div class="col-6 text-left">
						<form method = "POST" action = "InsertComment.php">
							<input type = "text" name = "c_name"><br><br>
							<input name="comment" id="comment"><br><br>
							<input type = "text" name = "c_date"><br><br>
							<h5 class="text4">
								<input type = "radio" name="c_subject" value="Princess Mononoke">&nbsp Princess Mononoke<br>
								<input type = "radio" name="c_subject" value="Spirit Away">&nbsp Spirit Away
							</h5><br>
						</form>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<center><button type = "submit" name="insert" value = "add" class="btn btn-info" width="100%">Submit</button><center>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
