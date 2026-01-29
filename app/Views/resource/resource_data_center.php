<?= $this->include('header') ?>  <!-- no .php needed -->

<?php if (!isset($session)) $session = session(); ?>
<style>
    .resource-page {
    width: 90%;
    margin: 0 auto;
    padding: 20px 0;
}

.resource-page h1 {
    text-align: center;
    margin-bottom: 30px;
}

.resource-section {
    margin-bottom: 40px;
}

.resource-section h2 {
    margin-bottom: 15px;
    border-left: 4px solid orange;
    padding-left: 10px;
}

.resource-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
}

.resource-card {
    display: block;
    padding: 20px;
    background: #222;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    text-align: center;
    transition: 0.3s;
}

.resource-card:hover {
    background: orange;
    color: #000;
}
</style>
<?php if (!isset($session)) $session = session(); ?>

<div class="resource-page">

    <h1>Resource Center</h1>

    <!-- Company Resources -->
    <section class="resource-section">
        <h2>Company Resources</h2>

        <div class="resource-grid">
            <a href="#" class="resource-card">HR Policies</a>
            <a href="#" class="resource-card">Employee Handbook</a>
            <a href="#" class="resource-card">Brand Assets</a>
            <a href="#" class="resource-card">Internal Tools</a>
        </div>
    </section>

    <!-- General Resources -->
    <section class="resource-section">
        <h2>General Resources</h2>

        <div class="resource-grid">
            <a href="#" class="resource-card">IT Help Guides</a>
            <a href="#" class="resource-card">Learning Links</a>
            <a href="#" class="resource-card">Templates</a>
            <a href="#" class="resource-card">Useful Websites</a>
        </div>
    </section>

</div>
