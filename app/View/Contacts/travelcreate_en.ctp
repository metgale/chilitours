<?php $this->assign('title', 'Create your trip to Croatia - Chili Tours'); ?>
<?php $this->append('meta'); ?>
<meta name="description" content="Here at Chili Tours we pursue our customers to display their creativity and create trip to a place they want to see in Croatia.">
<?php $this->end(); ?>

<div class = "pageview">
    <div class="row">
        <div class="span3 left-content"> 
            <?php echo $this->Element('logo'); ?>
        </div>
        <div class="span9 pull-right">
            <h1>Create your trip</h1>
            <hr>
            <div class="container">
                <form class="well span8" method="post" action="travelcreate">
                    <label>First and last name</label> <input class="span3" required="required" name="Ime i Prezime" type="text"> 
                    <label>Where are you from?</label> <input class="span3"  required="required" name="Country origin" type="text"> 
                    <label>Email Address</label> <input class="span3"  required="required" name="Email Adresa" type="email"> 
                    <input id="hide" name="email" type="email">
                    <label>Phone Number</label> <input class="span3"  required="required" name="Kontakt Telefon" type="text"> 
                    <label>Destination</label> <input class="span3"   required="required" name="Destinacija"  type="text"> 
                    <label>Adults</label> <input class="span3" name="Broj Osoba"  type="text"> 
                    <label>Kids (below 12)</label> <input class="span3" name="Broj Osoba"  type="text">
                    <label>Budget</label> <input class="span3" name="budžet" placeholder="Eg. Below 300 EUR" type="text"> 
                    <label>Date of departure</label>
                    <input type="date" name="Datum polaska">
                    <label>Date of arrival</label>
                    <input type="date" name="Datum povratka">
                    <label>Additional Info</label> 
                    <textarea class="input-xlarge span5" id="message" name="message"
                              rows="3">
                    </textarea>
                    <label>Transportation by:</label> <select name="Vrsta Prijevoza">
                        <option>Bus</option>
                        <option>Plane</option>
                        <option>Self Arranged</option>
                    </select>
                    <label>Accomodation</label> <select name="Vrsta Smještaja">
                        <option>Apartmant</option>
                        <option>Room</option>
                        <option>Hotel</option>
                        <option>Hostel</option>
                        <option>Vacation House</option>
                        <option>Camp</option>
                    </select><br>
                    <br>
                    <button class="btn btn-primary" type="submit" >Create your travel</button>
                </form>
            </div>
        </div>  
    </div>
</div>
</div>



