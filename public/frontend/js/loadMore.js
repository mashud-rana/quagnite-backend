const triggerLoadMoreEvent = (elementId, elementDataContainer) => {
    // Load more functionlity
    document.getElementById(elementId).addEventListener('click', (event) => {
        const nextPageUrl = event.target.getAttribute('data-next-page');

        fetch(nextPageUrl)
            .then(response => {
                return response.text();
            })
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');

                const loadDataContainer = document.querySelector('#'+elementDataContainer);
                loadDataContainer.innerHTML += doc.querySelector('#'+elementDataContainer).innerHTML;

                const newloadMoreBtn = doc.querySelector('#'+elementId);
                const existingBtn = document.getElementById(elementId);
                if (newloadMoreBtn) {
                    existingBtn.setAttribute('data-next-page', newloadMoreBtn.getAttribute(
                        'data-next-page'));
                } else {
                    existingBtn.parentNode.removeChild(existingBtn);
                }

                if($('.addToCart').length > 0) {
                    //Cart Event
                    addToCartEvent();
                }
                if($('.addToSubscribe').length > 0) {
                    //Cart subscribe
                    addToSubscribeEvent();
                }
            });
    });
}

