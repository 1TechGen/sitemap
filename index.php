<?php 
$pageTitle = "Sitemap Tools - Home";
include 'common-header.php';
?>

<section class="hero-section bg-light py-5 mb-5">
    <div class="container text-center">
        <h1 class="display-4">Sitemap Tools</h1>
        <p class="lead">Free online tools for webmasters and SEO professionals</p>
    </div>
</section>

<div class="row">
    <div class="col-md-8">
        <h2 class="mb-4">Our Tools</h2>
        
        <div class="row">
            <!-- Sitemap Generator Card -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-sitemap fa-3x mb-3 text-primary"></i>
                        <h4 class="card-title">Sitemap Generator</h4>
                        <p class="card-text">Create XML sitemaps for your website easily.</p>
                        <a href="/tools/sitemap-generator.php" class="btn btn-primary">Use Tool</a>
                    </div>
                </div>
            </div>
            
            <!-- Sitemap Validator Card -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-check-circle fa-3x mb-3 text-success"></i>
                        <h4 class="card-title">Sitemap Validator</h4>
                        <p class="card-text">Validate your XML sitemap for errors.</p>
                        <a href="/tools/sitemap-validator.php" class="btn btn-success">Use Tool</a>
                    </div>
                </div>
            </div>
            
            <!-- SEO Optimizer Card -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-search-dollar fa-3x mb-3 text-info"></i>
                        <h4 class="card-title">SEO Optimizer</h4>
                        <p class="card-text">Optimize your content for better search rankings.</p>
                        <a href="/tools/seo-optimize.php" class="btn btn-info">Use Tool</a>
                    </div>
                </div>
            </div>
            
            <!-- More tools can be added here -->
        </div>
    </div>
    
    <div class="col-md-4">
        <?php include 'ads.php'; ?>
        
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                Latest Updates
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">New: Improved sitemap generator</li>
                    <li class="list-group-item">Fixed: Validation issues</li>
                    <li class="list-group-item">Coming soon: More SEO tools</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'common-footer.php'; ?>
