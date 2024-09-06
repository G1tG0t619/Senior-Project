<!DOCTYPE html>
<html>
    <body>
        <div id="drop-off" class="w3-container menu w3-padding-48 w3-card">
            <h5 class="w3-center"><span class="w3-tag w3-wide">Pick-Up</span></h5>
            <br>
            <form action = "/action_page.php" target="_blank">
              <p><b>Drop-Off Location</b></p>
              <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Address" required name = "address"></p>
              <p><b>Card Information</b></p>
              <p><input class="w3-input w3-padding-12 w3-border" type="number" placeholder="Card #" required name = "card" value="000000"></p>
              <p><b>Item Quality Proof (Upload)</b></p>
              <form action="/action_page.php">
                <input type="file" id="myFile" name="filename">
                <input type="submit">
              </form>
              <br>
              <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
            </form>
        </div>
    </body>
</html>