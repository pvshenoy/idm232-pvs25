<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
<body>
    <header>
        <h1 class="logo">AROMA</h1>
        <div class="menu">
            <div class="menu_item">HOME</div>
            <div class="menu_item">PERFUMES</div>
            <div class="menu_item">NOTES</div>
            <div class="menu_item">FORUM</div>
            <div class="menu_item search-icon"><img src="dist/images/search.png" alt="search"></div>
        </div>
    </header>
    <main>
        <div class="hero_content">
            <div class="text-left">
                <h1 class="hero-text">Welcome to the world of <span style="color: #94A5D7">fragrance</span></h1>
                <div class="search_bar">
                    <input class="search" type="text" placeholder="SEARCH BY PERFUME OR NOTE">
                    <button>GO</button>
                </div>
            </div>
            <div class="hero">
                <img class="hero_img" src="dist/images/hero_img.png" alt="fragrance-hero">
            </div>
        </div>
        <h1 style="margin-right: 4rem;">Explore all fragrances</h1>
        <section class="perfume-list">
            <div class="perfume">
                <div class="perfume-img"><img src="dist/images/Group 12.png" alt="dior ADDICT"></div>
                <div class="perfume_classification">
                    <div class="perfume-name">DIOR ADDICT</div>
                    <div class="perfume-type">EAU FRAICHE</div>
                </div>
            </div>
            <div class="perfume">
                <div class="perfume-img"><img src="dist/images/Group 12.png" alt="dior ADDICT"></div>
                <div class="perfume_classification">
                    <div class="perfume-name">DIOR ADDICT</div>
                    <div class="perfume-type">EAU FRAICHE</div>
                </div>
            </div>
            <div class="perfume">
                <div class="perfume-img"><img src="dist/images/Group 12.png" alt="dior ADDICT"></div>
                <div class="perfume_classification">
                    <div class="perfume-name">DIOR ADDICT</div>
                    <div class="perfume-type">EAU FRAICHE</div>
                </div>
            </div>
            <div class="perfume">
                <div class="perfume-img"><img src="dist/images/Group 12.png" alt="dior ADDICT"></div>
                <div class="perfume_classification">
                    <div class="perfume-name">DIOR ADDICT</div>
                    <div class="perfume-type">EAU FRAICHE</div>
                </div>
            </div>
            <div class="perfume">
                <div class="perfume-img"><img src="dist/images/Group 12.png" alt="dior ADDICT"></div>
                <div class="perfume_classification">
                    <div class="perfume-name">DIOR ADDICT</div>
                    <div class="perfume-type">EAU FRAICHE</div>
                </div>
            </div>
            <div class="perfume">
                <div class="perfume-img"><img src="dist/images/Group 12.png" alt="dior ADDICT"></div>
                <div class="perfume_classification">
                    <div class="perfume-name">DIOR ADDICT</div>
                    <div class="perfume-type">EAU FRAICHE</div>
                </div>
            </div>
            <div class="perfume">
                <div class="perfume-img"><img src="dist/images/Group 12.png" alt="dior ADDICT"></div>
                <div class="perfume_classification">
                    <div class="perfume-name">DIOR ADDICT</div>
                    <div class="perfume-type">EAU FRAICHE</div>
                </div>
            </div>
            <div class="perfume">
                <div class="perfume-img"><img src="dist/images/Group 12.png" alt="dior ADDICT"></div>
                <div class="perfume_classification">
                    <div class="perfume-name">DIOR ADDICT</div>
                    <div class="perfume-type">EAU FRAICHE</div>
                </div>
            </div>
        </section>
    </main>
 <footer>
        <h4>thank you for visiting Aroma!</h4>
 </footer>
</body>
<?php include_once __DIR__ . '/_components/footer.php';
?>