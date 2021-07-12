const $leftBlocks = document.querySelectorAll('.find-dealer__item--left a'),
    $mapLinks = document.querySelectorAll('.find-dealer__map-desktop a');


$leftBlocks.forEach(el => {
    el.addEventListener('mousenter', (e) => {
        let self = e.currentTarget;
        let selfClass = self.getAttribute('href');
        let color = self.dataset.color;
        let currentElement = document.querySelector(`.find-dealer__map-desktop a[href="${selfClass}"]`);
        let currentPath = document.querySelectorAll('path');
        if (currentPath) currentPath.forEach(el => style.cssText = `fill: ${color}; stroke-width: 2px;`);
        self.classList.add('active');
    });

    el.addEventListener('mouseleave', (e) => {
        let self = e.currentTarget;
        let selfClass = self.getAttribute('href');
        let currentElement = document.querySelector(`.find-dealer__map-desktop a[href="${selfClass}"]`);
        let currentPath = document.querySelectorAll('path');
        if (currentPath) currentPath.forEach(el => style.cssText = ``);
        self.classList.remove('active');
    });

});
