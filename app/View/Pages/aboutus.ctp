<?php
$this->set('title_for_layout', 'O nama | Chilitours.hr');
echo $this->Html->meta(
        'description',
        'Chili Tours - O nama - turistička agencija u Zagrebu. Vrhunski doživljaj, iskustvo za pamćenje i najbolji programi putovanja.'
);
?>
<div class = "pageview">
    <div class="row">
        <div class="span3 left-content">
            <?php echo $this->Element('logo'); ?>
        </div>
        <div class="span9 pull-right content">
            <?php echo $this->Html->Image('imagesforpages/1.png', array('class' => 'imageforpage'));?>
        </div>
    </div>
    <div class="row"></div>
    <div class="span3 left-content">
            
        </div>
        <div class="span9 pull-right content">
            <h2>O nama</h2>	
            <hr>
            <p>
                Chili tours d.o.o. je turistička agencija u Zagrebu čija je osnovna svrha nuditi vrhunski doživljaj i iskustvo za pamćenje kroz najbolji program putovanja.
            </p>
            <p>Naša misija je začiniti svako putovanje vrhunskom kvalitetom, zabavom, kreativnošću i brojnim iznenađenjima koja nijednog klijenta neće ostaviti 
                ravnodušnim. Naša politika otvorenih vrata omogućava svim sadašnjim i budućim klijentima, suradnicima, prijateljima, susjedima i ostalim 
                zainteresiranim osobama informiranje i savjetovanje o putovanjima, ili jednostavno razgovor s našim zaposlenicima uz šalicu kave ili čaja u 
                našoj <a href="/pages/chilioaza"> Chili oazi</a>.
            </p> 
            <p>
                Javno se obvezujemo poštivati i štititi običaje i vrijednosti svih kultura i nacija s kojima se susrećemo na našim putovanjima te čuvati i promovirati prirodne ljepote, kulturnu baštinu i tradiciju Lijepe naše. 
            </p>
        </div>
</div>
