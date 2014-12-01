 <!-- DEBUT HEADER -->
 <header>
  <menu>
    <nav>
      <ul class="navigation">
        <li>Personnage</li>
        <li>Bestiaire</li>
        <li>Arène</li>
      </ul>
    </nav>
    <div class="clear"></div>
  </menu>
</header>
<!-- FIN HEADER -->

<!-- DEBUT CONTENT1 -->
<div id="content1">
  <div class="wrap_left">
    <h2><?php echo $this->data['name'] ?></h2>
    <img scr="#"/>
  </div>
  <div class="wrap_right">
    <div  id="info_perso">
      <h2>Caractéristiques perso</h2>
      <ul>
        <li><span class="span_left">Point de vie</span><span class="span_right"><?php echo $this->data['life'] ?></span></li>
        <li><span class="span_left">Mana</span><span class="span_right"><?php echo $this->data['name'] ?></span></li>
        <li><span class="span_left">Défense</span><span class="span_right"><?php echo $this->data['defense'] ?></span></li>
        <li><span class="span_left">Vitesse</span><span class="span_right"><?php echo $this->data['speed'] ?></span></li>
      </ul>
    </div>

    <div id="skills">
      <h2>Compétences</h2>
      <ul>
        <li><span class="span_left">Attaque rapide</span><span class="span_right"><?php echo $this->data['speed_attack'] ?></span></li>
        <li><span class="span_left">Attaque lente</span><span class="span_right"><?php echo $this->data['low_attack'] ?></span></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>

  <div id="inventaire">
    <h2>Inventaire (<?php echo $this->data['number_inventory'] ?>/20)</h2>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
  </div>
</div>
<!-- FIN CONTENT1 -->

<!-- DEBUT CONTENT2 -->
<div id="content2">
  <div class="wrap_left">
    <h2><?php echo $this->data['name'] ?></h2>
    <img scr="#"/>
  </div>
  <div class="wrap_right">
    <div  id="info_perso">
      <h2>Caractéristiques bete</h2>
      <ul>
        <li><span class="span_left">Point de vie</span><span class="span_right"><?php echo $this->data['life'] ?></span></li>
        <li><span class="span_left">Mana</span><span class="span_right"><?php echo $this->data['name'] ?></span></li>
        <li><span class="span_left">Défense</span><span class="span_right"><?php echo $this->data['defense'] ?></span></li>
        <li><span class="span_left">Vitesse</span><span class="span_right"><?php echo $this->data['speed'] ?></span></li>
      </ul>
    </div>

    <div id="skills">
      <h2>Compétences</h2>
      <ul>
        <li><span class="span_left">Attaque rapide</span><span class="span_right"><?php echo $this->data['speed_attack'] ?></span></li>
        <li><span class="span_left">Attaque lente</span><span class="span_right"><?php echo $this->data['low_attack'] ?></span></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>

  <div id="inventaire">
    <h2>liste (<?php echo $this->data['number_inventory'] ?>/20)</h2>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
  </div>
</div>
<!-- FIN CONTENT2 -->

<!-- DEBUT CONTENT3 -->
<div id="content3">
  <div class="wrap_left">
    <h2><?php echo $this->data['name'] ?></h2>
    <img scr="#"/>
  </div>
  <div class="wrap_right">
    <div  id="info_perso">
      <h2>Caractéristiques ARENE</h2>
      <ul>
        <li><span class="span_left">Point de vie</span><span class="span_right"><?php echo $this->data['life'] ?></span></li>
        <li><span class="span_left">Mana</span><span class="span_right"><?php echo $this->data['name'] ?></span></li>
        <li><span class="span_left">Défense</span><span class="span_right"><?php echo $this->data['defense'] ?></span></li>
        <li><span class="span_left">Vitesse</span><span class="span_right"><?php echo $this->data['speed'] ?></span></li>
      </ul>
    </div>

    <div id="skills">
      <h2>Compétences</h2>
      <ul>
        <li><span class="span_left">Attaque rapide</span><span class="span_right"><?php echo $this->data['speed_attack'] ?></span></li>
        <li><span class="span_left">Attaque lente</span><span class="span_right"><?php echo $this->data['low_attack'] ?></span></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>

  <div id="inventaire">
    <h2>Inventaire (<?php echo $this->data['number_inventory'] ?>/20)</h2>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
  </div>
</div>
<!-- FIN CONTENT3 -->

<!-- DEBUT CONTENT1 -->
<div id="content4">
  <div class="wrap_left">
    <h2><?php echo $this->data['name'] ?></h2>
    <img scr="#"/>
  </div>
  <div class="wrap_right">
    <div  id="info_perso">
      <h2>Caractéristiques perso</h2>
      <ul>
        <li><span class="span_left">Point de vie</span><span class="span_right"><?php echo $this->data['life'] ?></span></li>
        <li><span class="span_left">Mana</span><span class="span_right"><?php echo $this->data['name'] ?></span></li>
        <li><span class="span_left">Défense</span><span class="span_right"><?php echo $this->data['defense'] ?></span></li>
        <li><span class="span_left">Vitesse</span><span class="span_right"><?php echo $this->data['speed'] ?></span></li>
      </ul>
    </div>

    <div id="skills">
      <h2>Compétences</h2>
      <ul>
        <li><span class="span_left">Attaque rapide</span><span class="span_right"><?php echo $this->data['speed_attack'] ?></span></li>
        <li><span class="span_left">Attaque lente</span><span class="span_right"><?php echo $this->data['low_attack'] ?></span></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>

  <div id="inventaire">
    <h2>Inventaire (<?php echo $this->data['number_inventory'] ?>/20)</h2>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
    <div class="box_item"><?php echo $this->data['inventory'] ?></div>
  </div>
</div>
<!-- FIN CONTENT1 -->

<!-- DEBUT FOOTER -->
<footer>
  <p>© Copyright RPHPG, Y-nov 2014</p>
</footer>
<!-- FIN FOOTER -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  /* -- SCRIPT PAGES-- */
  $('#content2, #content3, #content4').hide();
  $('.navigation li').click(function(){
   var nb = $(this).index()+1;
   $('#content1, #content2, #content3, #content4').hide();
   $('#content'+nb).slideDown(1000);
 });
});
</script>