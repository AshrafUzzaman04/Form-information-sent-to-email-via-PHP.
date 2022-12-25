<?php

include_once("./classes/sendMessage.php");

if(isset($messageSend)){
    ?>
<script>
setTimeout(() => {
    location.href = "./";
}, 3000);
</script>
<?php
}
?>

<?php 
if($messageSend ?? null){
?>

<div class=container>
    <div class="hahahaha col-md-6 col-lg-5 col-xxl-4">
        <div class="success mx-auto">
            <img src="images/Ok-amico.png" alt="" class="img-fluid">
            <h4 class="text-center"><span class="text-success">Message Send Successfully! </span>Thank you so much for
                your response.</h4>
        </div>

    </div>
</div>

<?php
}else{
    ?>

<div class="container px-3 px-md-0">
    <div class="box col-md-6 col-lg-5 col-xxl-4">
        <section class="px-4 py-5  p-md-5 mx-auto">
            <h2 class="mb-4">Write a message</h2>
            <form action="" method="POST">
                <!-- name input -->
                <div class="form-floating form-line my-2">
                    <input type="text" class="form-control" name="text" id="floatingName" placeholder="Sweet Name"
                        value="<?= $text ?? null ?>" />
                    <label for="floatingName"><i class="fa-solid fa-user"></i> Sweet Name</label>
                </div>

                <!-- error msg -->
                <span class="span"><?= $errorName ?? null ?></span>

                <!-- email input -->
                <div class="form-line form-floating">
                    <input type="text" name="email" id="floatingEmail" class="form-control" placeholder="Email"
                        value="<?= $email ?? null ?>" />
                    <label for="floatingEmail"><i class="fa-solid fa-at"></i> Email</label>
                </div>

                <!-- error msg -->
                <span class="span"><?= $errorEmail ?? null ?></span>

                <!-- your mobile number input -->
                <div class="form-line form-floating my-2">
                    <input type="number" name="number" id="floatingMobile" class="form-control"
                        placeholder="+880_ _ _ _ _ _ _ _ _ _" value="<?= $number ?? null ?>" />
                    <label for="floatingMobile"><i class="fa-solid fa-phone"></i> Number</label>
                </div>

                <!-- error msg -->
                <span class="span"><?= $errorNumber ?? null ?></span>

                <!-- your message input -->
                <div class="form-line form-floating textarea">
                    <textarea name="description" cols="30" rows="5" id="floatingMessage" class="form-control"
                        placeholder="Message"><?= $description ?? null ?></textarea>
                    <label for="floatingMessage"><i class="fa-solid fa-message"></i> Message</label>
                </div>

                <!-- error msg -->
                <span class="span"><?= $errorDesciption ?? null ?></span>

                <div class="button">
                    <input class="btn col-12" type="submit" name="send123" value="Send Message" />
                </div>
            </form>
        </section>
    </div>
</div>

<?php
};
?>