<?php $this->assign('title', 'Kreiraj svoje putovanje - Chili Tours'); ?>
<?php $this->append('meta'); ?>
<meta name="description" content="Kreirajte vlastito putovanje. Destinacija i datum polaska po Vašem izboru. Chili tours turistička agencija omogućava Vam kreiranje avanture po svom ukusu.">
<?php $this->end(); ?>

<div class = "pageview">
    <div class="row">
        <div class="span3 left-content"> 
            <?php echo $this->Element('logo'); ?>
        </div>
        <div class="span9 pull-right">
            <h1>Kreiraj Putovanje</h1>
            <hr>
            <div class="container">
                <form class="well span8" method="post" action="travelcreate">
                    <label>Ime i prezime</label> <input class="span3" required="required" name="Ime i Prezime" type="text"> 
                    <label>Email Adresa</label> <input class="span3"  required="required" name="Email Adresa" type="email"> 
                    <label>Destinacija</label> <input class="span3"   required="required" name="Destinacija"  type="text"> 
                    <label>Broj odraslih osoba</label> <input class="span3" name="Broj Osoba"  type="text"> 
                    <label>Broj djece (do 12 godina)</label> <input class="span3" name="Broj Osoba"  type="text">
                    <label>Budžet</label> <input class="span3" name="budžet" placeholder="Npr. Do 1000 KN" type="text"> 
                    <label>Datum polaska</label>
                    <input type="date" name="Datum polaska">
                    <label>Datum povratka</label>
                    <input type="date" name="Datum povratka">
                    <label>Dodatne informacije</label> 
                    <textarea class="input-xlarge span5" id="message" name="message"
                              rows="3">
                    </textarea>
                    <label>Vrsta prijevoza</label> <select name="Vrsta Prijevoza">
                        <option>Autobus</option>
                        <option>Avion</option>
                        <option>Vlastiti prijevoz</option>
                    </select>
                    <label>Vrsta smještaja</label> <select name="Vrsta Smještaja">
                        <option>Apartman</option>
                        <option>Soba</option>
                        <option>Hotel</option>
                        <option>Hostel</option>
                        <option>Kuća za odmor</option>
                        <option>Kamp</option>
                    </select><br>
                    <br>
                    <button class="btn btn-primary" type="submit" >Kreiraj putovanje</button>
            </div>
            </form>
        </div>  
    </div>
</div>
</div>



