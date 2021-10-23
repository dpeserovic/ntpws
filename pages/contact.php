<?php $countries = array('Afghanistan', 'Bolivia', 'Croatia', 'Egypt', 'Finland') ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7890741539636!2d15.966758816056517!3d45.795453279106205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b5d094979%3A0xda8bfa8459b67560!2sUl.+Vrbik+VIII%2C+10000%2C+Zagreb!5e0!3m2!1shr!2shr!4v1509296660756" frameborder="0" class="iframe iframe-contact" allowfullscreen></iframe>
<div class="container container-contact">
    <form action="" method="POST" class="form form-contact">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" class="input input-contact" required>
        <label for="surname">Surname: </label>
        <input type="text" id="surname" name="surname" class="input input-contact" required>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" class="input input-contact" required>
        <label for="country">Country</label>
        <select id="country" name="country" class="select select-contact">
            <option value="">Select country</option>
            <?php
            for ($i = 0; $i < count($countries); $i++) {
                echo '<option value="' . $countires[$i] . '">' . $countries[$i] . '</option>';
            }
            ?>
        </select>
        <label for="description">Description</label>
        <textarea id="description" class="textarea textarea-contact" name="description" rows="5" cols="50"></textarea>
        <input type="submit" value="Submit">
    </form>
</div>