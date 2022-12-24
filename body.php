<div class="container px-3 px-md-0">
    <div class="box col-md-6 col-lg-5 col-xxl-4">
        <section class="p-5 mx-auto">
            <h2 class="mb-3">Write a message</h2>
            <form action="" method="POST">
                <!-- name input -->
                <div class="form-floating form-line my-2">
                    <input type="text" class="form-control" id="floatingName" placeholder="Sweet Name" />
                    <label for="floatingName"><i class="fa-solid fa-user"></i> Sweet Name</label>

                    <!-- error msg -->
                    <!-- <span class="text-danger fw-semibold">hellow mother fucker</span> -->
                </div>

                <!-- email input -->
                <div class="form-line form-floating">
                    <input type="email" name="" id="floatingEmail" class="form-control" placeholder="Email" />
                    <label for="floatingEmail"><i class="fa-solid fa-at"></i> Email</label>

                    <!-- <span class="text-danger fw-semibold">hellow mother fucker</span> -->
                </div>

                <!-- your mobile number input -->
                <div class="form-line form-floating my-2">
                    <input type="number" name="" id="floatingMobile" class="form-control"
                        placeholder="+880_ _ _ _ _ _ _ _ _ _" />
                    <label for="floatingMobile"><i class="fa-solid fa-phone"></i> Number</label>

                    <!-- <span class="text-danger fw-semibold">hellow mother fucker</span> -->
                </div>

                <!-- your message input -->
                <div class="form-line form-floating textarea">
                    <textarea name="description" cols="30" rows="5" id="floatingMessage" class="form-control"
                        placeholder="Message"></textarea>
                    <label for="floatingMessage"><i class="fa-solid fa-message"></i> Message</label>

                    <!-- error msg -->
                    <!-- <span class="text-danger fw-semibold">hellow mother fucker</span> -->
                </div>

                <div class="button">
                    <input class="btn col-12" type="submit" value="Send Message" />
                </div>
            </form>
        </section>
    </div>
</div>