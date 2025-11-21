<?php get_header(); ?>

<style>
/* Hero z gradientem */
.hero {
    background: linear-gradient(135deg, #0a58ca, #6c63ff);
    padding: 120px 20px;
    text-align: center;
    color: #fff;
}

.hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
    line-height: 1.2;
}

.hero p {
    font-size: 20px;
    margin-bottom: 30px;
}

.btn-primary {
    background-color: #ffc107;
    color: #0a58ca;
    padding: 12px 28px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
}

.btn-primary:hover {
    background-color: #e0a800;
    color: #fff;
}

/* Sekcje pod hero */
.section {
    max-width: 1100px;
    margin: 60px auto;
    padding: 0 20px;
}

.features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.feature-card {
    border: 1px solid #eee;
    border-radius: 10px;
    box-shadow: 0 6px 18px rgba(0,0,0,.05);
    padding: 20px;
    background: #fff;
    transition: transform 0.3s, box-shadow 0.3s;
}

.feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(0,0,0,.1);
}

.feature-card h3 {
    margin-top: 0;
    margin-bottom: 10px;
}

.feature-card p {
    margin: 0;
    color: #555;
}

.footer {
    text-align: center;
    margin: 50px 0 20px 0;
    color: #666;
    font-size: 14px;
}
</style>

<div class="hero">
    <h1>Witaj w Jezierscy Agencja Nieruchomości</h1>
    <p>Znajdź swoje wymarzone mieszkanie, dom lub apartament w najlepszych lokalizacjach.</p>
    <a href="<?php echo site_url('/nieruchomosci'); ?>" class="btn-primary">Przeglądaj nieruchomości</a>
</div>

<div class="section features">
    <div class="feature-card">
        <h3>Profesjonalna obsługa</h3>
        <p>Pomagamy w każdym etapie zakupu lub wynajmu nieruchomości.</p>
    </div>
    <div class="feature-card">
        <h3>Aktualne oferty</h3>
        <p>Codziennie dodajemy nowe mieszkania i domy w najlepszych lokalizacjach.</p>
    </div>
    <div class="feature-card">
        <h3>Bezpieczne transakcje</h3>
        <p>Gwarantujemy bezpieczeństwo i przejrzystość wszystkich umów.</p>
    </div>
</div>

<div class="footer">
    <p>© 2025 Jezierscy Agencja Nieruchomości</p>
</div>

<?php get_footer(); ?>

