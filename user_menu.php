<style>
#line {
    border: 0px;
    background-image: url('image/black.png');
    background-repeat: repeat-x;
    height: 40px;
}

.choice a {
    font-size: 20px;
    text-decoration: none;
    color: white;
    margin-left: 65px;
    position: relative;
    top: 8px;
    display: inline-block; 
}

</style>

<body>
    <img src="image/KuanTan Hotels2.png" style="height: 50px;" />
    <br /><br />
    <div id="line">
        <div class="choice">
            <?php
            echo "<a href='home.php'>HOME</a>";
            echo "<a href='room list.php'>ROOM</a>";
            echo "<a href='aboutus.php'>ABOUT</a>";
            echo "<a href='contact.php'>CONTACT</a>";
            echo "<a href='rating&comment.php'>RATING & COMMENT</a>";
            echo "<a href='shopping cart.php'>CART</a>";
            echo "<a href='index.php' onclick='return userconfirmation();'><img src='image/logout.png' style='width: 20px; height: 20px;'>LOG OUT</a>";   
            ?>
        </div>
    </div>
    <br/><br/>
</body>
<script>
function userconfirmation()
{
	answer = confirm("Do you want to log out?");
	return answer;
}
</script>
