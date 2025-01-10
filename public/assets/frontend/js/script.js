// Function to show loading with optional message
function showLoading(message = 'Loading...') {
    const overlay = document.getElementById('loadingOverlay');
    const textElement = overlay.querySelector('.loading-text');
    textElement.textContent = message;
    overlay.classList.add('active');
}

// Function to hide loading
function hideLoading() {
    document.getElementById('loadingOverlay').classList.remove('active');
}

// Add this to your existing window load event
window.addEventListener('load', function() {
    hideLoading();
});

// Show loading when page starts loading
document.addEventListener('DOMContentLoaded', function() {
    showLoading();
});

// Add these to your AJAX calls or any async operations
document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
        hideLoading();
    }
});

// Optional: Add for navigation (if using Laravel)
window.addEventListener('beforeunload', function() {
    showLoading();
});