const addLoadMoreBtnEvent = () => {
    // Load more functionlity
    document.getElementById('BtnLoadMore').addEventListener('click', (event) => {
        const nextPageUrl = event.target.getAttribute('data-next-page');

        fetch(nextPageUrl)
            .then(response => {
                return response.text();
            })
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');

                const loadDataContainer = document.querySelector('#loadDataContainer');
                loadDataContainer.innerHTML += doc.querySelector('#loadDataContainer').innerHTML;

                const newloadMoreBtn = doc.querySelector('#BtnLoadMore');
                const existingBtn = document.getElementById('BtnLoadMore');
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
            });
    });
}

addLoadMoreBtnEvent();
