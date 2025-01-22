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

function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePassword');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

// Add loading state to login button
document.querySelector('form').addEventListener('submit', function(e) {
    if (this.checkValidity()) {
        const btn = document.getElementById('loginBtn');
        btn.classList.add('btn-loading');
    }
});

// Add custom validation
(function () {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})()

// Sidebar toggle functionality
document.getElementById('sidebarToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('active');
});

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    
    if (window.innerWidth <= 768) {
        if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
            sidebar.classList.remove('active');
        }
    }
});

// Logout confirmation
function confirmLogout() {
    Swal.fire({
        title: 'Konfirmasi Logout',
        text: "Apakah Anda yakin ingin keluar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Logout',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    initContentTrendChart();
    initContentDistributionChart();
});

function initContentTrendChart() {
    const ctx = document.getElementById('contentTrendChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'News Articles',
                    data: monthlyNewsData,
                    borderColor: '#4e73df',
                    backgroundColor: 'rgba(78, 115, 223, 0.05)',
                    tension: 0.3,
                    fill: true
                },
                {
                    label: 'Gallery Items',
                    data: monthlyGalleryData,
                    borderColor: '#1cc88a',
                    backgroundColor: 'rgba(28, 200, 138, 0.05)',
                    tension: 0.3,
                    fill: true
                }
            ]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
}

function initContentDistributionChart() {
    const ctx = document.getElementById('contentDistributionChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['News Articles', 'Gallery Items'],
            datasets: [{
                data: [newsCount, galleryCount],
                backgroundColor: ['#4e73df', '#1cc88a'],
                hoverBackgroundColor: ['#2e59d9', '#17a673'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
}
