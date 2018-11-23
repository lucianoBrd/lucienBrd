<nav class="<?=$page!='accueil'?'subpage-nav':''?>">
    <div class="row">
        <div class="container">
            <div class="logo">
                <img src="<?=PATH_IMG?>logo.png" alt="logo">
            </div>
            <div class="responsive"><i data-icon="m" class="icon"></i></div>
            <ul class="nav-menu">
                <li><a href="<?=$page!='accueil'?'../#home':'#home'?>" class="smoothScroll">Accueil</a></li>
                <li><a href="<?=$page!='accueil'?'../#about':'#about'?>" class="smoothScroll">A propos</a></li>
                <li><a href="<?=$page!='accueil'?'../#portfolio':'#portfolio'?>" class="smoothScroll">Portfolio</a></li>
                <li><a href="<?=$page!='accueil'?'../#contact':'#contact'?>" class="smoothScroll">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
