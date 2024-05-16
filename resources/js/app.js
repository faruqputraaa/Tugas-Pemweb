document.addEventListener('DOMContentLoaded', function() {
    var navbar2 = document.getElementById('navbar2');
    var dropdownButton = document.getElementById('dropdownButton');
    var dropdownMenu = document.getElementById('dropdownMenu');
    var grid = document.getElementById('product-grid');
    var loadMoreBtn = document.getElementById('load-more');
    var rowsToShow = 5;
    var lastIndex = rowsToShow - 1;

    // Scroll event for navbar background color change
    window.addEventListener('scroll', function() {
        navbar2.classList.toggle('bg-white', window.scrollY > 0);
    });

    // Dropdown toggle for mobile view
    if (dropdownButton && dropdownMenu) {
        dropdownButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        });
    }

    // Function to hide rows beyond lastIndex
    function hideRows() {
        var rows = grid.children;
        for (var row of rows) {
            row.style.display = 'none';
        }
        for (var i = 0; i <= lastIndex; i++) {
            if (rows[i]) {
                rows[i].style.display = 'grid';
            }
        }
    }

    // Show more rows when "Load More" button is clicked
    loadMoreBtn.addEventListener('click', function() {
        lastIndex += rowsToShow;
        hideRows();
        if (lastIndex >= grid.children.length) {
            loadMoreBtn.textContent = 'Tampilkan Lebih Sedikit';
        } else {
            loadMoreBtn.textContent = 'Tampilkan Lainnya';
        }
    });

    // Hide all rows initially except for the first rowsToShow
    hideRows();
    
    function showImage(imageSrc) {
        // Hide all images
        var images = document.querySelectorAll('.item img');
        images.forEach(function(img) {
            img.classList.add('hidden');
        });

        // Show the clicked image
        var clickedImage = document.querySelector('.item img[src="' + imageSrc + '"]');
        clickedImage.classList.remove('hidden');
    }

});

function changeImage(index) {
    const images = document.querySelectorAll('.item img');
    images.forEach((image, i) => {
        if (i === index) {
            image.style.display = 'block';
        } else {
            image.style.display = 'none';
        }
    });
}

