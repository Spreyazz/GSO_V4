<div class="Verslun-Myndir2-2 textiPlayfair">
    <form action="FormLogin2.php" method="GET">
    <?php
    $fulltnafn = $_GET['fulltnafn'];
    $simanumer = $_GET['numer'];
    $email = $_GET['email'];
    ?>
            <label>Eigandi: $fulltnafn</label>


            <label>Sími eiganda: $simanumer</label>

            <label>Netfang Eiganda: $email</label>
            
            <label>byrta mynd<input type="radio" name="$radio_kyn" value="byrta"></label>
            
            <label>Fela mynd<input type="radio" name="$radio_kyn" value="fela"><br></label>


            <label>Stærðir eru í metrum lengd * hæð</label>
            <select>
                <option>1x0,5</option>
                <option>2x1</option>
                <option>3x1,5</option>
                <option>4x2</option>
                <option>5x2,5</option>
                <option>6x3</option>
            </select>
            <label>
                Comments
                <textarea name="comments"></textarea>
            </label>

        </div>
