<div id="content">
    <div class="wrap">
        <div id="main">
            <?php
                foreach(group_by_country($dojo_data) as $country => $dojos){
                    echo "<br /><legend style='margin-bottom:5px;'>".$country."</legend>";
                    foreach($dojos as $dojo) {
                        echo "&bull; <a href='/dojo/".$dojo->id."'>".$dojo->name."</a><br />";
                    }
					echo "&bull; <a href='/dojo/".$dojo->id."'>".$dojo->name."</a><br />";
                }
            ?>
        </div>
        <div id="sidebar">
            <?php if(!isset($username)): ?>
                <div class="widget">
                    <br />
                    <legend>Register a Dojo</legend>
                    <p>To register a Dojo you first need an account. Sign up here:</p>
                    <a href="/auth/register"><input type="button" class="btn-primary" style="padding: 5px 105px;" value="Register"></a>
                </div>
            <?php elseif(!isset($user_data->dojo)): ?>
                <div class="widget">
                    <br />
                    <legend>Register a Dojo</legend>
                    <p>Want to create a Dojo? Start here:</p>
                    <a href="/dojo/create"><input type="button" class="btn-primary" style="padding: 5px 105px;" value="Create"></a>
                </div>
            <?php endif; ?>
            <div class="widget">
                <br />
                <legend>Dojos</legend>
                <p>The Dojos listed here are all verified by the CoderDojo team. <a href="http://kata.coderdojo.com/index.php?title=Unverified_Dojo_Listing" target="_blank">Learn more...</a> </p>
            </div>
        </div>
    </div><!--.wrap-->
</div><!--#content-->
