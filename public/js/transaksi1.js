document.addEventListener('DOMContentLoaded', function() {
    let isDragging = false;
    let startX, scrollLeft;

    const jadwalBioskop = document.querySelector('.jadwalBioskop');

    jadwalBioskop.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.pageX - jadwalBioskop.offsetLeft;
        scrollLeft = jadwalBioskop.scrollLeft;
    });

    jadwalBioskop.addEventListener('mouseleave', () => {
        isDragging = false;
    });

    jadwalBioskop.addEventListener('mouseup', () => {
        isDragging = false;
    });

    jadwalBioskop.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const x = e.pageX - jadwalBioskop.offsetLeft;
        const walk = (x - startX) * 1; // Nilai ini dapat diubah sesuai kecepatan scroll
        jadwalBioskop.scrollLeft = scrollLeft - walk;
    });
});
