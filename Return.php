<!DOCTYPE html>
<html>
    <body>
        <div class="w3-container" id="return">
            <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">MAKE A RETURN</span></h5>
            
            <div class="w3-row w3-center w3-card w3-padding">
                <a href="javascript:void(0)" onclick="openMenu(event, 'store-Info');" id="myLink">
                <div class="w3-col s6 tablink">Store Info</div>
                </a>
                <a href="javascript:void(0)" onclick="openMenu(event, 'drop-off');" id="myLink">
                <div class="w3-col s6 tablink">Drop-Off</div>
                </a>
                <a href="javascript:void(0)" onclick="openMenu(event, 'pick-up');">
                <div class="w3-col s6 tablink">Pick-Up</div>
                </a>
            </div>
            <br>
            <div id= "store-Info" class="w3-container menu w3-padding-48 w3-card">
                <h5 class="w3-center"><span class="w3-tag w3-wide">Store Info</span></h5>
                <br>
                <form action = "/action_page.php" target="_blank">
                <p><b>Store Name</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Store Name" required name = "name"></p>
                <p><b>Address</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Address" required name = "address"></p>
                <p><b>ID Number</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="number" placeholder="ID #" required name = "id" value="000000"></p>
                <br>
                <p><button class="w3-button w3-black" type="submit">ENTER</button></p>
                </form>
            </div>
        
            <div id="pick-up" class="w3-container menu w3-padding-48 w3-card">
                <h5 class="w3-center"><span class="w3-tag w3-wide">Drop-Off</span></h5>
                <br>
                <form action = "/action_page.php" target="_blank">
                <p><b>Address</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="text" placeholder="Address" required name = "address"></p>
                <p><b>Date and Time</b></p>
                <p><input class="w3-input w3-padding-12 w3-border" type="datetime-local" placeholder="Date and Time" required name = "date" value="2024-01-01T20:00"></p>
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
            <br>
            <img src="https://www.w3schools.com/w3images/coffeehouse2.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
            </div>
        </div>
    </body>
</html>