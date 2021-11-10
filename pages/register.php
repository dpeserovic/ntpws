<?php
$countries = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getCountries'), true);
$error = '';
if (isset($_GET['errorCode'])) {
    switch ($_GET['errorCode']) {
        case 1:
            $error = '*E-mail already in use';
            break;
        default:
            $error = '';
    }
}
?>
<form action="http://localhost/ntpws/server/action.php" method="post" class="form form-register">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" class="input input-register" required>
    <label for="surname">Surname: </label>
    <input type="text" id="surname" name="surname" class="input input-register" required>
    <label for="email">Email: </label> <span><small class="small small-error"><?php echo $error ?></small></span>
    <input type="email" id="email" name="email" class="input input-register" required>
    <label for="country">Country:</label>
    <select id="country" name="country" class="select select-register" required>
        <option value="">Select country</option>
        <?php
        for ($i = 0; $i < count($countries); $i++) {
            echo '<option value="' . $countries[$i]['country_code'] . '">' . $countries[$i]['country_name'] . '</option>';
        }
        ?>
    </select>
    <label for="city">City: </label>
    <input type="text" id="city" name="city" class="input input-register" required>
    <label for="street">Street: </label>
    <input type="text" id="street" name="street" class="input input-register" required>
    <label for="dob">Date of birth: </label>
    <input type="date" id="dob" name="dob" class="input input-register" required>
    <label for="password">Password: </label>
    <input type="password" id="password" name="password" class="input input-register" required>
    <input type="submit" name="submit" value="Register">
</form>