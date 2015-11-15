<?php
$strmessage="";

if (basename($_FILES["flUpload"]["name"])!="")
{
    $uploadsize= intval($_POST["hidUploadSize"]);

    $filetype = pathinfo($_FILES["flUpload"]["name"],PATHINFO_EXTENSION);
    $filetype=strtolower($filetype);

    if ($_FILES["flUpload"]["size"] > $uploadsize)
    {
        $strmessage = "Error was encountered while uploading file. File cannot exceed " . ($uploadsize/1000) . "kb";
    }
    else
    {
        $filecode=strtotime("now").rand();

        if (move_uploaded_file($_FILES["flUpload"]["tmp_name"], "uploads/" . $filecode . "." . $filetype))
        {
            $strmessage = "File successfully uploaded.";
        }
        else
        {
            $strmessage = "Error was encountered while uploading file.";
        }
    }
}
else
{
    $strmessage="No file selected.";
}
?>

<script>
    parent.document.getElementById("pnlMessage").innerHTML="<?php echo $strmessage;?>";
</script>


