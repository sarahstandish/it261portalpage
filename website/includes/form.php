<h2>Flickr Search</h2>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <p class="explanation">Enter your search parameters and see up to 10 Flickr photos meeting those paramters and receive an email with their URLs.</p>
    <label>First Name</label>
                <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo (htmlspecialchars($_POST['first_name'])) ?>">
                <span class="error"><?php echo $first_name_err?></span>
            <label>Last Name</label>
                <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo (htmlspecialchars($_POST['last_name'])) ?>">
                <span class="error"><?php echo $last_name_err?></span>
            <label>Phone number</label>
                <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo (htmlspecialchars($_POST['phone'])) ?>">
                <span class="error"><?php echo $phone_err?></span>
            <label>Email</label>
                <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo (htmlspecialchars($_POST['email'])) ?>">
                <span class="error"><?php echo $email_err?></span>
        <label>Search term</label>
            <input type="text" name="search_term" value="<?php if (isset($_POST['search_term'])) { echo htmlspecialchars($_POST['search_term']); } ?>">
            <p class="explanation">Term to search on Flickr</p>
            <span class="error"><?php echo $search_term_err ?></span>
        <label>City</label>
            <input type="text" name="location" value="<?php if (isset($_POST['location'])) { echo htmlspecialchars($_POST['location']); } ?>">
            <p class="explanation">Will return photos geotagged to within roughly 30km of the city center.</p>
            <span class="error"><?php echo $location_error; ?></span>
        <label>Licenses</label>
            <ul>
                <li><input type='checkbox' name="licenses[]" value="0" <?php echo defaultUnchecked(0) ?>>  All Rights Reserved  </li>
                <li><input type='checkbox'  name="licenses[]" value="1" <?php echo defaultUnchecked(1) ?>>  Attribution-NonCommercial-ShareAlike License  <a href="https://creativecommons.org/licenses/by-nc-sa/2.0/" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="2" <?php echo defaultUnchecked(2) ?>>  Attribution-NonCommercial License  <a href="https://creativecommons.org/licenses/by-nc/2.0/" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="3" <?php echo defaultUnchecked(3) ?>>  Attribution-NonCommercial-NoDerivs License  <a href="https://creativecommons.org/licenses/by-nc-nd/2.0/" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="4" <?php echo defaultUnchecked(4) ?>>  Attribution License  <a href="https://creativecommons.org/licenses/by/2.0/" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="5" <?php echo defaultUnchecked(5) ?>>  Attribution-ShareAlike License  <a href="https://creativecommons.org/licenses/by-sa/2.0/" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="6" <?php echo defaultUnchecked(0) ?>>  Attribution-NoDerivs License  <a href="https://creativecommons.org/licenses/by-nd/2.0/" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="7" <?php echo defaultUnchecked(7) ?>>  No known copyright restrictions  <a href="https://www.flickr.com/commons/usage/" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="8" <?php echo defaultUnchecked(8) ?>>  United States Government Work  <a href="http://www.usa.gov/copyright.shtml" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="9" <?php echo defaultUnchecked(9) ?>>  Public Domain Dedication (CC0)  <a href="https://creativecommons.org/publicdomain/zero/1.0/" target="_blank">Learn more</a></li>
                <li><input type='checkbox' name="licenses[]" value="10" <?php echo defaultUnchecked(10) ?>>  Public Domain Mark  <a href="https://creativecommons.org/publicdomain/mark/1.0/" target="_blank">Learn more</a></li>
            </ul>
        <span class="error"><?php echo $license_error; ?></span>
        <label>Minimum DPI</label>
            <select name="dpi">
                <option value="NULL">Select one</option>
                <option value="72" <?php if (isset($_POST['dpi']) && $_POST['dpi'] == '72') echo "selected='selected'" ?>>72</option>
                <option value="180" <?php if (isset($_POST['dpi']) && $_POST['dpi'] == '180') echo "selected='selected'" ?>>180</option>
                <option value="240" <?php if (isset($_POST['dpi']) && $_POST['dpi'] == '240') echo "selected='selected'" ?>>240</option>
            </select>
            <span class="error"><?php echo $dpi_err ?></span>
        <label>Privacy policy</label>
            <ul>
                <li><input type="radio" name="agree" value="agree" <?php if (isset($_POST['agree'])) echo "checked='checked'" ?>>Agree</li>
            </ul>
            <span class="error"><?php echo $agree_err?></span>
        <button type="submit">Submit</button>
        <p class="reset"><a href="">Reset</a></p>
    </form>