document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector('.scroll-sidebar'); // Use the correct selector for your sidebar

    // Restore scroll position
    if (sidebar) {
        const scrollPosition = localStorage.getItem('sidebar-scroll-position');
        if (scrollPosition) {
            sidebar.scrollTop = scrollPosition;
        }

        // Save scroll position on link click
        const links = sidebar.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', function () {
                localStorage.setItem('sidebar-scroll-position', sidebar.scrollTop);
            });
        });
    }
});

// Admin panel testimonial update
function displaySelectedImage(event) {
    var fileInput = event.target;
    var files = fileInput.files;
    if (files && files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var selectedImage = document.getElementById('existing-image');
            selectedImage.src = e.target.result;
        };
        reader.readAsDataURL(files[0]);
    }
}