<?php 
$pageTitle = "Sitemap Generator";
include '../common-header.php';
?>

<h1><i class="fas fa-sitemap"></i> Sitemap Generator</h1>
<p class="lead">Generate XML sitemaps for your website</p>

<hr>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                Generate Your Sitemap
            </div>
            <div class="card-body">
                <form id="sitemapForm">
                    <div class="mb-3">
                        <label for="websiteUrl" class="form-label">Website URL</label>
                        <input type="url" class="form-control" id="websiteUrl" placeholder="https://example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="changeFreq" class="form-label">Change Frequency</label>
                        <select class="form-select" id="changeFreq">
                            <option value="daily">Daily</option>
                            <option value="weekly" selected>Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="never">Never</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="priority" class="form-label">Default Priority</label>
                        <input type="range" class="form-range" min="0" max="1" step="0.1" id="priority" value="0.5">
                        <div class="text-center" id="priorityValue">0.5</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate Sitemap</button>
                </form>
                
                <div id="results" class="mt-4 d-none">
                    <h4>Your Sitemap XML</h4>
                    <pre class="bg-light p-3"><code id="xmlOutput"></code></pre>
                    <button id="downloadBtn" class="btn btn-success">Download Sitemap.xml</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <?php include '../ads.php'; ?>
        
        <div class="card mb-4">
            <div class="card-header">
                About Sitemaps
            </div>
            <div class="card-body">
                <p>XML sitemaps help search engines discover and index your website's pages.</p>
                <p>Submit your sitemap to Google Search Console for better indexing.</p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Update priority value display
    const prioritySlider = document.getElementById('priority');
    const priorityValue = document.getElementById('priorityValue');
    
    prioritySlider.addEventListener('input', function() {
        priorityValue.textContent = this.value;
    });
    
    // Form submission
    const sitemapForm = document.getElementById('sitemapForm');
    const resultsDiv = document.getElementById('results');
    const xmlOutput = document.getElementById('xmlOutput');
    
    sitemapForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const url = document.getElementById('websiteUrl').value;
        const changeFreq = document.getElementById('changeFreq').value;
        const priority = document.getElementById('priority').value;
        
        // Generate sample XML (in a real app, you'd crawl the site)
        const sampleXml = `<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>${url}</loc>
        <lastmod>${new Date().toISOString().split('T')[0]}</lastmod>
        <changefreq>${changeFreq}</changefreq>
        <priority>${priority}</priority>
    </url>
    <url>
        <loc>${url}/about</loc>
        <lastmod>${new Date().toISOString().split('T')[0]}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
</urlset>`;
        
        xmlOutput.textContent = sampleXml;
        resultsDiv.classList.remove('d-none');
    });
    
    // Download button
    document.getElementById('downloadBtn').addEventListener('click', function() {
        const blob = new Blob([xmlOutput.textContent], { type: 'application/xml' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'sitemap.xml';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    });
});
</script>

<?php include '../common-footer.php'; ?>
