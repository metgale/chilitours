<?php $this->assign('title', 'Avionske karte - Chili Tours'); ?>
<?php $this->append('meta'); ?>
<meta name="description" content="Upiti za avionske karte preko Chili Tours turističke agencije.">
<?php $this->end(); ?>

<div class = "pageview">
    <div class="row">
        <div class="span3 left-content"> 
            <?php echo $this->Element('logo'); ?>
        </div>
        <div class="span9 pull-right">
            <h1>Pošalji upit za potencijalne letove</h1>
            <hr>
            <div class="container">
                <form class="well span8" method="post" action="aviotickets">
                    <label>Kontakt Email adresa</label> <input class="span3"  required="required" name="Email Adresa" type="email"> 
                    <label>Kontakt telefonski broj</label> <input class="span3"  required="required" name="Kontakt broj" type="text"> 
                    <label>Broj putnika</label> <input class="span3"  required="required" name="Broj putnika" type="text"> 
                    <label>Imena svih putnika (Datum rođenja putnika)</label> <textarea class="input-xlarge span3" placeholder="Marko Markić (1.1.1990.)                                  Ivo Ivić (1.1.1985.)" required="required" name="Imena putnika" rows="3"></textarea> 
                    <small>...molimo Vas da ne zaboravite unijeti datume rođenja.</small>
                    <label>Polazak iz</label> <input class="span3"  required="required" name="Polazak iz" type="text"> 
                    <label>Destinacija</label> <input class="span3"   required="required" name="Destinacija"  type="text">                     
                    <label>Datum polaska</label><input type="date" name="Datum polaska">
                    <label>Preferirano vrijeme polaska</label><select name="Preferirano vrijeme polaska">
                        <option>Svejedno</option>
                        <option>Jutro</option>
                        <option>Poslijepodne</option>
                        <option>Večer</option>
                    </select>
                    <label>Datum povratka</label><input type="date" name="Datum povratka">
                    <label>Preferirano vrijeme povratka</label><select name="Preferirano vrijeme povratka">
                        <option>Svejedno</option>
                        <option>Jutro</option>
                        <option>Poslijepodne</option>
                        <option>Večer</option>
                    </select>
                    <label>Razred putovanja</label><select name="Razred putovanja">
                        <option>Economy</option>
                        <option>Premium economy</option>
                        <option>Business</option>
                        <option>First class</option>
                    </select>
                    <label>Putno osiguranje?</label>
                    <select name="Putno osiguranje">
                        <option>Da</option>
                        <option>Ne</option>
                    </select>
                    <label>Osiguranje od otkaza putovanja?</label>
                    <select name="Osiguranje od otkaza putovanja">
                        <option>Da</option>
                        <option>Ne</option>
                    </select>
                    <label>Dodatne informacije</label> 
                    <textarea class="input-xlarge span5" id="message" name="Dodatne informacije"
                              rows="3">
                    </textarea>
                    <br>
                    <button class="btn btn-primary" type="submit" >Pošalji upit</button>
            </div>
            </form>
        </div>  
    </div>
</div>
</div>



