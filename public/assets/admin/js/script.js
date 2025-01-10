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
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

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
