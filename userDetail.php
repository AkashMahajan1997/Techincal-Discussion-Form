<?php 
require("header.php");
$a=$_SESSION["user"];

$sql="select * from user where username ='$a';";

$db=mysqli_connect("localhost","id3010239_doubt","Javedrani@123");
mysqli_select_db($db,"id3010239_doubt");
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
    extract($row);
    $_SESSION["user"] = $username;
$_SESSION["fullName"] = $fullname;
$_SESSION["email"] = $e_mail;
$_SESSION["date"] = $dob;
$_SESSION["Address"] = $address;
$_SESSION["state"] = $state;
$_SESSION["country"] = $country;
    
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="well details">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">
                        <h2 style="text-decoration:underline;"><?php echo $_SESSION["user"]; ?></h2></h2>
                        <p><strong>Full Name : </strong> <?php echo $_SESSION["fullName"]; ?></p>
                        <p><strong>Email : </strong><?php echo $_SESSION["email"]; ?> </p>
                        <p><strong>Date Of Birth : </strong> <?php echo $_SESSION["date"]; ?></p>
                        <p><strong>Address : </strong> <?php echo $_SESSION["Address"]; ?></p>
                        <p><strong>State : </strong><?php echo $_SESSION["state"]; ?> </p>
                        <p><strong>Country : </strong> <?php echo $_SESSION["country"]; ?></p>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-1 text-center">                        
                </div>                
            </div>
        </div>
    </div>
</div>

<style>
body {
    font-family: "Segoe UI", 'sans-serif';
}

.avg {
    font-size:77px; 
    padding-top: 20px;
    color:#5CB85C;
}

.details {
    min-height: 355px;
    display: inline-block;
}

.rating {
    padding-left:40px;
}

.skillLine {    
    display:inline-block;
    width:100%;
    padding: 3px 4px;    
}

.skills {
    text-decoration:underline;
}

div.skill {
    background: #F58723;
    border-radius: 3px;
    color: white;
    font-weight: bold;
    padding: 3px 4px;    
    width:70px;
}
</style>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
jQuery(function ($) {
    $('#rate1').shieldRating({
        max: 7,
        step: 0.1,
        value: 6.3,
        markPreset: false
    });
    $('#rate2').shieldRating({
        max: 7,
        step: 0.1,
        value: 6,
        markPreset: false
    });
    $('#rate3').shieldRating({
        max: 7,
        step: 0.1,
        value: 3,
        markPreset: false
    });
    $('#rate4').shieldRating({
        max: 7,
        step: 0.1,
        value: 5,
        markPreset: false
    });
    $('#rate5').shieldRating({
        max: 7,
        step: 0.1,
        value: 5.7,
        markPreset: false
    });
});
</script>
<?php 
require("footer.php");
?>