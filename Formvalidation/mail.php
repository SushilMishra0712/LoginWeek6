<?php

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $message=$_POST['message'];

    $errorEmpty=false;
    $errorEmail=false;

    if(empty($name) || empty($email) || empty($message))
    {
        echo "<span class='form-error'>Fill in all fields!</span>";
        $errorEmpty=true;
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "<span class='form-error'>Write a valid email address!</span>";
    }
    else{
        echo "<span class='form-success'>Success!!</span>";
    }
}
?>

<script>
    $("#mail-name,#mail-email,#mail-message,#mail-gender").removeClass("input-error");

    var errorEmpty="<?php echo $errorEmpty;?>";
    var errorEmail="<?php echo $errorEmail;?>";

    if(errorEmpty==true)
    {
        $("#mail-name,#mail-email,#mail-message").addClass("input-error");
    }
    if(errorEmail==true)
    {
        $("#mail-email").addClass("input-error";)
    }
    if(errorEmpty==false && errorMail==false)
    {
        $("#mail-name,#mail-email,#mail-message").val("");
    }
</script>