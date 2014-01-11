<div class = "pageview">
    <div class="row">
        <div class="span3 left-content">
            <?php echo $this->Element('logo'); ?>
        </div>
        <div class="span9 pull-right">
            <h2>Kontakt</h2>
            <hr>
            <div class="span2">
                <address>
                    <strong>Adresa:</strong>
                    <p>Chili Tours d.o.o. <br>Augusta Šenoe 8<br> 10 000 Zagreb</p>
                    <strong>Kontakt telefon:</strong>
                    <p>01 483 98 54</p>
                    <strong>E-mail:</strong>
                    <p> info@chilitours.hr</p>
                </address>
            </div>
            <iframe width="640" height="355" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.hr/maps?f=q&amp;source=s_q&amp;hl=hr&amp;geocode=&amp;q=Ulica+Augusta+%C5%A0enoe+8,+Zagreb&amp;aq=1&amp;oq=augusta+%C5%A1enoe+8+zagreb&amp;sll=44.467612,16.406476&amp;sspn=6.78988,14.27124&amp;ie=UTF8&amp;hq=&amp;hnear=Ulica+Augusta+%C5%A0enoe+8,+10000,+Zagreb&amp;t=m&amp;z=14&amp;ll=45.806331,15.9805&amp;output=embed"></iframe><br /><small><a class="pull-right" href="https://maps.google.hr/maps?f=q&amp;source=embed&amp;hl=hr&amp;geocode=&amp;q=Ulica+Augusta+%C5%A0enoe+8,+Zagreb&amp;aq=1&amp;oq=augusta+%C5%A1enoe+8+zagreb&amp;sll=44.467612,16.406476&amp;sspn=6.78988,14.27124&amp;ie=UTF8&amp;hq=&amp;hnear=Ulica+Augusta+%C5%A0enoe+8,+10000,+Zagreb&amp;t=m&amp;z=14&amp;ll=45.806331,15.9805" style="color:#0000FF;text-align:left;margin-right:30px;">Prikaz veće karte</a></small>
        </div>

    </div>
    <div class="span9 pull-right">
        <div class="container">
            <form class="well span8" method="post" action="contact">
                <div class="row">
                    <div class="span3">
                        <label>Ime</label> <input class="span3" name="ime" required="required" type="text">
                        <label>Prezime</label><input class="span3" name="prezime" required="required" type="text">
                        <label>Email Adresa</label> <input class="span3" name="email" required="required" type="email"> 
                    </div>

                    <div class="span5">
                        <label>Poruka</label> 
                        <textarea class="input-xlarge span5" id="message" name="message" required="required" type="text"
                                  rows="10">
                        </textarea>
                    </div>
                    <button class="btn btn-primary pull-right" type="submit" >Pošalji poruku</button>
                </div>
            </form>
        </div>  
    </div>
</div>
</div>



